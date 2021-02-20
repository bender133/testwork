<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{

//    public $layout = 'basic'; // слой для контроллера

    public function actionIndex() {

        return $this->render('index');
    }
    public function actionShow() {

        $this->layout = 'basic'; //шаблон отдеьной страницы

        return $this->render('show');
    }

}