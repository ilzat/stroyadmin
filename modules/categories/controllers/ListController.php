<?php

namespace app\modules\categories\controllers;

use Yii;
use yii\web\Controller;
use app\modules\categories\models\Categories;

use yii\data\ActiveDataProvider;

class ListController extends Controller
{
    public function actionIndex()
    {
        $query = Categories::find();

        $categories = $query->orderBy('name')
            ->all();


        $dataProvider = new ActiveDataProvider([
            'query' => Categories::find(),
        ]);

        return $this->render('index',['categories' => $categories, 'dataProvider' => $dataProvider]);
    }
}
