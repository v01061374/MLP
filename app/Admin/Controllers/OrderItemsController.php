<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\OrderItem;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class OrderItemsController extends Controller
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
            $content->description('Products Ordered From Your Store');
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
            $orderItem = OrderItem::with('product')->find($id);
            $content->header('Ordered product:');
            $content->description($orderItem['title']);

            $content->body($this->form($id)->edit($id));
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

        return Admin::grid(OrderItem::class, function (Grid $grid) {
            if (!Admin::user()->inRoles(['administrator', 'supervisor'])) {
//                request()->route()->parameter('orderItem');
                $userId = Admin::user()->id;
                $grid->model()->where(function ($items) use ($userId) {
                    $items->whereHas('product', function ($products) use ($userId) {
                        $products->whereHas('store', function ($stores) use ($userId) {
                            $stores->where('owner_id', $userId);
                        });
                    });
                });

            }

            $grid->id('ID')->sortable();
            $grid->product()->title('Product');
            $grid->column('quantity');
            $grid->created_at();
            $grid->actions(function (Grid\Displayers\Actions $actions) {

                $actions->disableDelete();

            });

            $grid->tools(function (Grid\Tools $tools) {
                $tools->batch(function (Grid\Tools\BatchActions $actions) {
                    $actions->disableDelete();
                });
            });
            $grid->disableCreation();
            $grid->disableExport();
            $grid->disableRowSelector();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id)
    {
        return Admin::form(OrderItem::class, function (Form $form) use ($id){
            $orderItem = OrderItem::with('product')->find($id);
            $product = $orderItem['product'];
            $inStock = $product['inStock'];
            $form->html($product['title'], 'Product');
            $form->html("$inStock",'Quantity');
            $form->html($inStock, 'In Stock');
            if($orderItem['isPaid']){
                $form->html('Paid', 'Payment Status');
            }
            else{
                $form->html('Pending', 'Payment Status');
            }
            $form->radio('isSent', 'Sending Status')->options([
                false => 'Pending',
                true => 'Sent'
            ]);
            $form->radio('isDelivered', 'Delivery Status')->options([
                false => 'Pending',
                true => 'Delivered'
            ]);
            $form->display('created_at', 'Created At');

        });
    }
}
