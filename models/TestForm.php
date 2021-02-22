<?php


namespace app\models;

use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
//    public $name;
//    public $email;
//    public $text;

    public function attributeLabels(){
        return [
          'name' => 'Имя',
          'emael' => '',
          'text' => 'Текст',
        ];
    }

    public function rules() {
        return [
            [['name', 'text'], 'required'],
            ['email', 'email'],
        ];
    }

    public static function tableName()
    {
        return 'posts';
    }


}