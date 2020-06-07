<?php

namespace App\Admin\Controllers;

use App\Episodes;
use App\Series;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EpisodesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Episodes';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Episodes());

        $grid->series_id()->display(function($id) {
          return Series::find($id)->name;
        });

        $grid->title();
        $grid->description();
        $grid->duration();
        $grid->airingtime();
        $grid->column('thumbnail')->image();
        $grid->url();



        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Episodes::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Episodes());

        $ser = Series::all();
       $series = [];
        foreach ($ser as $s){
          $series[$s->id] = $s->title;
        }



        $form->select('series_id', 'Series')->options($series);
        $form->text('title','Title');
        $form->text('description','Description');
        $form->time('duration','Duration');
        $form->datetime('airingtime','Airing Time');
        $form->image('thumbnail');
        $form->file('url');

        return $form;
    }
}



