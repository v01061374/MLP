<?php

namespace App\Admin\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\ShippingMethod;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class OrderController extends Controller
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
        return Admin::grid(Order::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->column('customer_id');
            $grid->column('totalPrice');
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
        return Admin::form(Order::class, function (Form $form) {

            $form->display('id', 'ID');
//            $form->display('customer_id');
            $customers = Customer::all()->pluck('lastName', 'id');
            $form->select('customer_id')->options($customers);
            $form->textarea('addressDetails', 'Address Details');
            $form->text('postalCode', 'Postal Code');
            $form->hasMany('items', function (Form\NestedForm $nestedForm) {
                $products = Product::all()->pluck('title', 'id');
                $nestedForm->select('product_id', 'Product')->options($products);
                $nestedForm->number('quantity', 'QTY');
            });
            $methods = ShippingMethod::all()->pluck('title', 'id');
            $form->select('shippingMethod_id', 'Shipping Method')->options($methods);
            $form->number('totalPrice');
            $form->radio('isPaid', 'Payment Status')->options([
                false => 'Pending',
                true => 'Paid'
            ]);
            $form->radio('isSent', 'Sending Status')->options([
                false => 'Pending',
                true => 'Sent'
            ]);
            $form->radio('isDelivered', 'Delivery Status')->options([
                false => 'Pending',
                true => 'Delivered'
            ]);
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
