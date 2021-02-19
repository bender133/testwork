<?php


namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex() {
        return $this->render('index', [

        ]);
    }

        public function actionBlogPost() {
        return $this->render('blog-post', [

        ]);
    }


}