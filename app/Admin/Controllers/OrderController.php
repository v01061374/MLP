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

            $content->header('Orders');
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
        if (
            Admin::user()->inRoles(['administrator', 'supervisor'])
            ||
            Customer::all()->where('userId',Admin::user()->id)->first()['id'] == Order::all()->find($id)['customer_id']
        ) {
            return Admin::content(function (Content $content) use ($id) {

                $content->header('Edit Order');
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

            $content->header('Add Order');

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
                $grid->column('customer_id');
//add customer info
            }
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
            $hasHighPrivilege = Admin::user()->inRoles(['administrator', 'supervisor']);

            if($hasHighPrivilege){
                $form->display('id', 'ID');
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
//                $form->select('shippingMethod_id', 'Shipping Method')->options($methods);
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

            }
            else{
                $form->display('addressDetails', 'Address Details');
                $form->display('postalCode', 'Postal Code');
                $order =Order::with('items')->find(request()->route()->parameter('order'));
                $itemsHtml = '';
//                dd($order);
                foreach ($order->items as $index => $item){
                    $product = Product::all()->find($item['product_id']);
                    $itemsHtml = $itemsHtml.'<span style="font-weight: bold"> #'.($index+1).': '.$product['title'].'(x'.$item['quantity'].')'.'</span>';
                    if($index != (count($order->items) - 1)){
                        $itemsHtml = $itemsHtml.'<br>';
                    }
                }
//                dd($itemsHtml);
                $form->html(
                    $itemsHtml,'Items');
                if($order['isPaid']){
                    $form->html('Paid', 'Payment Status');
                }
                else{
                    $form->html('Pending', 'Payment Status');
                }
                if($order['isSent']){
                    $form->html('Sent', 'Sending Status');
                }
                else{
                    $form->html('Not Sent', 'Sending Status');
                }
                if($order['isDelivered']){
                    $form->html('Delivered', 'Delivery Status');
                }
                else{
                    $form->html('Not Delivered', 'Delivery Status');
                }
                $form->display('created_at', 'Created At');
            }
//            $form->display('customer_id');

        });
    }
}
