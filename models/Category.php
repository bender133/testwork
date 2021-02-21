<?php


namespace app\models;


class Category extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function  getProducts()
    {
        return $this->hasMany(Products::class, ['parent' => 'id']);
    }
}