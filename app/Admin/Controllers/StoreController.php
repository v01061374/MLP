<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Store;
use App\User;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class StoreController extends Controller
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
        return Admin::grid(Store::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('title', 'Title');
            $grid->column('owner_id','Owner')->display(function ($owner_id) {
                $owner = Administrator::all()->where('id', $owner_id)->first();
                return $owner['name'] . "";
            });
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
        return Admin::form(Store::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', 'Title');
            $form->textarea('address', 'Address');
            $form->number('lat', 'Latitude');
            $form->number('lng', 'Longitude');
            $form->radio('saturday', 'saturday')->options([
                false=>'closed',
                true=>'open'
            ]);
            $form->radio('sunday', 'sunday')->options([
                false=>'closed',
                true=>'open'
            ]);;
            $form->radio('monday', 'monday')->options([
                false=>'closed',
                true=>'open'
            ]);;
            $form->radio('tuesday', 'tuesday')->options([
                false=>'closed',
                true=>'open'
            ]);;
            $form->radio('wednesday', 'wednesday')->options([
                false=>'closed',
                true=>'open'
            ]);;
            $form->radio('thursday', 'thursday')->options([
                false=>'closed',
                true=>'open'
            ]);;
            $form->radio('friday', 'friday')->options([
                false=>'closed',
                true=>'open'
            ]);;
            $form->select('openingHour', 'Opening Hour')->options(
                [
                    0 => '00',
                    1 => '01',
                    2 => '02',
                    3 => '03',
                    4 => '04',
                    5 => '05',
                    6 => '06',
                    7 => '07',
                    8 => '08',
                    9 => '09',
                    10 => '10',
                    11 => '11',
                    12 => '12',
                    13 => '13',
                    14 => '14',
                    15 => '15',
                    16 => '16',
                    17 => '17',
                    18 => '18',
                    19 => '19',
                    20 => '20',
                    21 => '21',
                    22 => '22',
                    23 => '23'

                ]
            );
            $form->select('closingHour', 'Closing Hour')->options(
                [
                    0 => '00',
                    1 => '01',
                    2 => '02',
                    3 => '03',
                    4 => '04',
                    5 => '05',
                    6 => '06',
                    7 => '07',
                    8 => '08',
                    9 => '09',
                    10 => '10',
                    11 => '11',
                    12 => '12',
                    13 => '13',
                    14 => '14',
                    15 => '15',
                    16 => '16',
                    17 => '17',
                    18 => '18',
                    19 => '19',
                    20 => '20',
                    21 => '21',
                    22 => '22',
                    23 => '23'

                ]
            );
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
//            $form->saving(function (Form $form){
//                if($form->openingHour < $form->closingHour){
//                    throw new \Exception('Opening Hour And Closing Hour Does Not Match');
//                }
//            });

            //should be changed to Sellers Or all
            $users= Administrator::all()->pluck('name', 'id');
            $form->select('owner_id','Owner')->options($users);
        });
    }
}
