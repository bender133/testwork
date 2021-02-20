<?php


namespace app\controllers;

use Yii;
use app\models\TestForm;
class PostController extends AppController
{

    public $layout = 'basic'; // слой для контроллера

    public function beforeAction($action) {
//        debug($action);
        if($action->id == 'index') {
            $this->enableCsrfValidation =  false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex() {
        if(Yii::$app->request->isAjax) {

           debug( Yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();
        return $this->render('index', [
            'model' => $model
        ]);
    }
    public function actionShow() {
        $this->view->title = "ИЗ контроллера, Show";
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы']);

//        $this->layout = 'basic'; //шаблон отдеьной страницы

        return $this->render('show');
    }

}