<?php

/* @var $this yii\web\View */

$this->title = 'Проекты';
Yii::$app->view->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['projects/index']];
Yii::$app->view->params['page_icon'] = 'fa-folder-o';
Yii::$app->view->params['page_title'] = $this->title;
Yii::$app->view->params['page_subtitle'] = '';

?>