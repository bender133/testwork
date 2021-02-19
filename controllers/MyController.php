<?php


namespace app\controllers;


use app\controllers\AppController;

class MyController extends AppController
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