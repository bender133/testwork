<?php


namespace app\models;


class Products extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

//    public function  getCategories()
//    {
//        return $this->hasOne(Category::class, ['id' => 'parent']);
//    }
}