<?php

namespace App\Admin\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class CustomerController extends Controller
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
        if (
            Admin::user()->inRoles(['administrator', 'supervisor'])
            ||
            Customer::all()->find($id)['userId'] == Admin::user()->id
        ) {
            return Admin::content(function (Content $content) use ($id) {

                $content->header('header');
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
        return Admin::grid(Customer::class, function (Grid $grid) {
            if (Admin::user()->isRole('customer')) {
                $grid->model()->where(
                    'userId', Admin::user()->id
                );
                $grid->column('firstName', 'First Name');
                $grid->column('lastName', 'Last Name');
                $grid->column('email', 'Email');
                $grid->column('phone', 'Phone');
                $grid->disableRowSelector();
                $grid->disableExport();
                $grid->disableCreation();
                $grid->disableFilter();
                $grid->disablePagination();
                $grid->actions(function (Grid\Displayers\Actions $actions) {

                    $actions->disableDelete();

                });
            } else {
                $grid->id('ID')->sortable();
                $grid->column('full_name')->display(function () {
                    return $this->firstName . ' ' . $this->lastName;
                });
                $grid->column('email');
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
        return Admin::form(Customer::class, function (Form $form) {
            if (!Admin::user()->inRoles(['administrator', 'supervisor'])) {
                $form->tools(function (Form\Tools $tools) {
                    $tools->disableListButton();
                });
                $form->text('firstName', 'First Name');
                $form->text('lastName', 'Last Name');
                $form->text('email', 'Email');
                $form->text('phone', 'Phone Number');
            }
            else{
                $form->display('id', 'ID');
                $form->text('firstName', 'First Name');
                $form->text('lastName', 'Last Name');
                $form->text('email', 'Email');
                $form->text('phone', 'Phone Number');
                $users = Administrator::all()->pluck('name', 'id');
                $form->select('userId', 'Linked User')->options($users);
                $form->display('created_at', 'Created At');
                $form->display('updated_at', 'Updated At');
            }

        });
    }
}
