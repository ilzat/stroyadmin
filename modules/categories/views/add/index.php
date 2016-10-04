<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;



/* @var $this yii\web\View */
$this->title = 'Создание категории';
Yii::$app->view->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['/categories/add/index']];
Yii::$app->view->params['page_icon'] = 'fa-file-o';
Yii::$app->view->params['page_title'] = $this->title;
Yii::$app->view->params['page_subtitle'] = '';
Yii::$app->view->params['page_buttons'] = Html::submitButton('<i class="fa fa-lg fa-fw fa-save"></i> Сохранить', ['class' => 'btn btn-success btn-sm', 'form' => 'CategoriesAddForm'])
    .' '.Html::a('<i class="fa fa-lg fa-fw fa-check"></i> Сохранить & Закрыть', Url::toRoute('/categories/list/index'),['class' => 'btn btn-info btn-sm'])
    .' '.Html::a('<i class="fa fa-lg fa-fw fa-plus"></i> Сохранить & Создать', Url::toRoute('/categories/list/index'),['class' => 'btn btn-info btn-sm'])
    .' '.Html::a('<i class="fa fa-lg fa-fw fa-close"></i> Закрыть', Url::toRoute('/categories/list/index'),['class' => 'btn btn-warning btn-sm'])
;

?>


<?php $form = ActiveForm::begin([
    'id' => 'CategoriesAddForm',
]); ?>

<div class="row">
    <article class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2>Основная информация</h2>
            </header>
            <div>
                <div class="widget-body">

                    <?= $form->field($model, 'name')->label('Название') ?>

                    <?= $form->field($model, 'description')->textarea(['rows' => '9'])->label('Описание') ?>

                </div>
            </div>
        </div>
    </article>

    <article class="col-xs-4 col-sm-4 col-md-8 col-lg-4">
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2>Настройки</h2>
            </header>
            <div>
                <div class="widget-body">

                    <?= $form->field($model, 'label')->dropDownList(['category' => 'Категория', 'object' => 'Объект', 'project' => 'Проект'])->label('Метка'); ?>

                    <?= $form->field($model, 'parent')->dropDownList(['0' => 'Нет родителя', 'b' => 'Item B', 'c' => 'Item C'])->label('Категория родитель'); ?>
                    <?= $form->field($model, 'access')->dropDownList(['0' => 'Только Я', '1' => 'Все'])->label('Доступ'); ?>

                    <?= $form->field($model, 'tags')->label('Теги') ?>

                </div>
            </div>
        </div>
    </article>
</div>

<?php ActiveForm::end(); ?>

<div class="row">
    <article class="col-md-12">
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-3">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2>Файлы</h2>
            </header>
            <div>
                <div class="widget-body">
                    Здесь будут храниться файлы
                </div>
            </div>
        </div>
    </article>
</div>