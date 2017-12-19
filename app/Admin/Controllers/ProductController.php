<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Product;

use App\Store;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use PhpParser\Node\Expr\PreDec;

class ProductController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Products');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        $productStoreId = Product::with('store')->get()->find($id)->store['id'];
        $productStoreOwnerId = Store::all()->find($productStoreId)['owner_id'];
        if(
            Admin::user()->inRoles(['administrator', 'supervisor'])
            ||
            $productStoreOwnerId == Admin::user()->id
        ){
            return Admin::content(function (Content $content) use ($id) {
                $content->header(Product::all()->find($id)['title']);
                $content->body($this->form()->edit($id));
            });
        }
        else{
            return Admin::content(function (Content $content) use ($id) {
                $content->header('You Don`t Have The Permission');
            });
        }
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Add Product');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Product::class, function (Grid $grid) {
            if (!Admin::user()->inRoles(['administrator', 'supervisor'])){
                $userId = Admin::user()->id;
                $grid->model()->where(function ($products) use ($userId){
                    $products->whereHas('store', function ($stores) use ($userId){
                       $stores->where('owner_id', $userId);
                    });
                });
            }
            $grid->id('ID')->sortable();
            $grid->column('title');


            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Product::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', 'Title');
            $form->number('price');
            $form->textarea('description');
            $form->number('offPercent');
            $categories = Category::all()->pluck('title', 'id');
            $form->select('category_id')->options($categories);

            if (Admin::user()->inRoles(['administrator', 'supervisor'])){
                $stores = Store::all()->pluck('title', 'id');
            }
            else{
                $stores= Store::all()->where('owner_id', Admin::user()->id)->pluck('title', 'id');
            }

            $form->select('store_id', 'Store')->options($stores);
            $form->number('inStock', 'Available Quantity');
            $form->image('photo', 'Cover')->removable();
            $form->hasMany('photos', function (Form\NestedForm $nestedForm){
                $nestedForm->image('photo');
            });
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
