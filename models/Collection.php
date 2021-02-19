<?php
namespace app\models;

use yii\db\ActiveRecord;

class Collection extends ActiveRecord
{
    public function getProduct(){
        return $this->hasMany(Product::class, ['index_collection' => 'id']);
    }
}