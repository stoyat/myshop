<?php
/**
 * Created by PhpStorm.
 * User: evgeniy
 * Date: 16.03.2018
 * Time: 9:46
 */

namespace App\Http\Section;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Navigation\Badge;
use SleepingOwl\Admin\Section;
use Illuminate\Http\UploadedFile;
/**
 * Class Pages
 *
 * @property \App\Category $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Brands extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;
    /**
     * @var string
     */
    protected $title = 'Brands';
    /**
     * @var string
     */
    protected $slug;

    public $test;
    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-globe');
    }
    /**
     * @return DisplayInterface
     *
     *
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
            AdminColumn::link('title', 'Title'),
            AdminColumn::text('slug', 'Slug'),
            AdminColumn::image('img', 'Картинка')->setWidth('100px'),
            AdminColumn::text('description', 'Description'),
            AdminColumn::datetime('created_at')->setLabel('Created'),
            AdminColumn::datetime('updated_at')->setLabel('Updated'),
        ])->paginate(3);
    }
    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::form()->setElements([
            AdminFormElement::text('title', 'Title')->required(),
            AdminFormElement::text('slug', 'Slug')->required(),
            AdminFormElement::text('description', 'Description')->required(),
            AdminFormElement::image('img','img')
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'upload/brand'; // public
                })
                ->setUploadSettings([
                        'resize' => [480, 700, null, function ($constraint) {
                            $constraint->upsize();
                            $constraint->aspectRatio();
                        }]
                    ]
                )
        ]);
    }
    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    protected function getUploadFilename(\Illuminate\Http\UploadedFile $file)
    {
        return $file->getClientOriginalExtension();
    }

    public function onDelete($id)
    {

        dd($id);
        // todo: remove if unused
    }
    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}