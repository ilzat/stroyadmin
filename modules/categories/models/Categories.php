<?php
namespace app\modules\categories\models;

use Yii;
use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{
    public static function tableName()
    {
        return Yii::$app->db->tablePrefix.'categories';
    }
}