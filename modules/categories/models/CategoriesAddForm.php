<?php

namespace app\modules\categories\models;

use Yii;
use yii\base\Model;

class CategoriesAddForm extends Model
{
    public $name;
    public $description;

    public $label;
    public $parent;
    public $access;
    public $tags;

    public function rules()
    {
        return [
            [['name', 'label', 'parent', 'access'], 'required'],

            [['name'], 'string', 'length' => [2, 84]],
            [['description'], 'string', 'length' => [0, 640]],
            [['parent', 'access', 'label'], 'string', 'length' => [1, 10]],
            [['tags'], 'string', 'length' => [0, 120]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'description' => 'Описание',
            'label' => 'Метка',
            'parent' => 'Родитель',
            'access' => 'Доступ',
            'tags' => 'Теги',
        ];
    }
}