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

            $content->header('header');
            $content->description('description');

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
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
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
            $form->select('category_id', 'Category')->options($categories);
            $stores = Store::all()->pluck('title', 'id');
            $form->select('store_id', 'Store')->options($stores);
            $form->number('inStock', 'Available Quantity');
            $form->image('photo', 'Cover');
            $form->hasMany('photos', function (Form\NestedForm $nestedForm){
                $nestedForm->image('photo');
            });
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
