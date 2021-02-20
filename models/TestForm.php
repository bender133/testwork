<?php


namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels(){
        return [
          'name' => 'Имя',
          'emael' => '',
          'text' => 'Текст',
        ];
    }

    public function rules() {
        return [
            [['name', 'email'], 'required'],
            ['name', 'string', 'min' => 2, 'tooShort' => 'korotko'],
            ['name', 'string', 'max' => 10, 'tooLong' => 'dlinnovato'],
            ['name', 'myRule']
        ];
    }

    public function myRule($attrs) {
        if(!in_array($this->$attrs, ['hello', 'world'])) {
            $this->addError($this->$attrs, 'Wrong');
        }
    }

}