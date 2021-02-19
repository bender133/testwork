<?php
namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return '{{products}}';
    }

    public function getOne($id)
    {
        $product = Product::find()->where(['id' => $id])->one();
        return $product;
    }

    public function getAll()
    {
        $collections = Product::find()->indexBy('id')->all();
        return $collections;
    }

    public function getCollection()
    {
        return $this->hasOne(Collection::class, ['id' => 'index_collection']);
    }
}