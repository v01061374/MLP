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

            $content->header('Carts');

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
        if (
            Admin::user()->inRoles(['administrator', 'supervisor'])
            ||
            Customer::all()->where('userId',Admin::user()->id)->first()['id'] == Cart::all()->find($id)['customer_id']
        ) {
            return Admin::content(function (Content $content) use ($id) {

                $content->header('Edit Cart');
                $content->body($this->form()->edit($id));
            });
        } else {
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

            $content->header('Add Cart');
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
            if(!Admin::user()->inRoles(['administrator', 'supervisor'])){
                $customerId = Customer::all()->where('userId',Admin::user()->id)->first()['id'];
                $grid->model()->where('customer_id', $customerId);
                $grid->disableRowSelector();
                $grid->disableExport();
                $grid->disableCreation();
                $grid->disableFilter();
                $grid->disablePagination();
                $grid->actions(function (Grid\Displayers\Actions $actions) {
                    $actions->disableDelete();
                });
            }
            else{
                $grid->id('ID')->sortable();
//add customer info
            }
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
            if(Admin::user()->inRoles(['administrator', 'supervisor'])){
                if (isset($form->customer_id)) {
                    $form->display('customer_id', 'Customer_id');
                    $customer = Customer::all()->find($form->customer_id)->get('firstName', 'lastName');
                    $form->html('Customer:' . $customer['firstName'] . ' ' . $customer['lastName']);

                } else {
                    $customers = Customer::all()->pluck('lastName', 'id');
//                    dd($customers);
                    $form->select('customer_id', 'Customer')->options($customers);
                }
            }
            else{
                $form->tools(function (Form\Tools $tools) {
                    $tools->disableListButton();
                });
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
