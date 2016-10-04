<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\DataTablesAsset;
use fedemotta\datatables\DataTables;

use yii\grid\GridView;

DataTablesAsset::register($this);


/* @var $this yii\web\View */
$this->title = 'Категории';
Yii::$app->view->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['/categories/list/index']];
Yii::$app->view->params['page_icon'] = 'fa-sitemap';
Yii::$app->view->params['page_title'] = $this->title;
Yii::$app->view->params['page_subtitle'] = '';
Yii::$app->view->params['page_buttons'] = Html::a('<i class="fa fa-lg fa-fw fa-file-o"></i> Создать категорию', Url::toRoute('/categories/add/index'),['class' => 'btn btn-info btn-sm']);
?>


<div class="row">

    <!-- NEW WIDGET START -->
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2>Список категорий</h2>
            </header>

            <!-- widget div-->
            <div>
                <div class="widget-body no-padding">

                    <?= DataTables::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'header'=>'',
                                'headerOptions' => ['width' => '40'],
                                'template' => '{update} {link}',
                                'buttons' => [
                                    'update' => function ($url,$model) {
                                        return Html::a(
                                            '<span class="glyphicon glyphicon-screenshot"></span>',
                                            $url);
                                    },
                                    'link' => function ($url,$model,$key) {
                                        return Html::a('Де', $url);
                                    },
                                ],
                            ],

                            'name:text:Название',
                            'label:text:Метка',
                            'parent:text:Кат. родитель',
                            'id:text:ID',

                            ['class' => 'yii\grid\ActionColumn'],
                            //columns
                        ],
                        'id' => 'basic',
                        /*'tableOptions' => [
                            'class' => 'table table-striped table-bordered table-hover',
                            'width' => '100%',
                            'id' => 'dt_basic',
                        ],*/


                    ]);?>

                </div>
            </div>
        </div>
    </article>
</div>