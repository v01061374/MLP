<?php

namespace App\Admin\Controllers;

use App\Cart;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Product;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class CartController extends Controller
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
        return Admin::grid(Cart::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

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
        return Admin::form(Cart::class, function (Form $form) {
            if (isset($form->customer_id)) {
                $form->display('customer_id', 'Customer_id');
                $customer = Customer::all()->find($form->customer_id)->get('firstName', 'lastName');
                $form->html('Customer:' . $customer['firstName'] . ' ' . $customer['lastName']);

            } else {
                $customers = Customer::all()->pluck('lastName', 'id');
                $form->select('customer_id', 'Customer')->options($customers);
            }
            $form->hasMany('items', function (Form\NestedForm $nestedForm) {
                $products = Product::all()->pluck('title', 'id');
                $nestedForm->select('product_id', 'Product')->options($products);
                $nestedForm ->number('quantity', 'Qty');

            });
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
