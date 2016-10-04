<?php

namespace app\modules\categories\controllers;

use Yii;
use yii\web\Controller;
use app\modules\categories\models\CategoriesAddForm;
use app\modules\categories\models\Categories;

use yii\data\ActiveDataProvider;

class AddController extends Controller
{
    public function actionIndex()
    {
        $model = new CategoriesAddForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены

            $model->attributes = \Yii::$app->request->post('CategoriesAddForm');

            // делаем что-то полезное с $model ...
            $categories = new Categories();
            $categories->name = $model->name;
            $categories->description = $model->description;
            $categories->label = $model->label;
            $categories->parent = $model->parent;
            $categories->access = $model->access;
            $categories->tags = $model->tags;
            $categories->save();

            return $this->redirect(['/categories/list/index']);
            //return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('index', ['model' => $model]);
        }

    }
}
