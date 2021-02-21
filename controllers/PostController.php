<?php


namespace app\controllers;

use app\models\Category;
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

//        $cats = Category::find()->all();
//        $cats = Category::find()->orderBy(['title' => SORT_ASC])->all();
//        $cats = Category::find()->asArray()->all();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->all();
//        $cats = Category::find()->asArray()->where(['like', 'title', 'pp' ])->all();
//        $cats = Category::find()->asArray()->where(['<=', 'id', 695 ])->all();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->limit(1)->one();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->count();
//        $cats = Category::findOne(['parent' => 691]);
//        $cats = Category::findAll(['parent' => 691]);
//        $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
//        $cats = Category::findBySql($query)->all();
//        $query = "SELECT * FROM categories WHERE title LIKE :search";
//        $cats = Category::findBySql($query, [':search' => '%pp%'])->all();
//        $cats = Category::findOne(694);
//        $cats = Category::find()->all(); //ленивая загрузка
//        $cats = Category::find()->with('products')->where(['id' => 694])->all(); // жадная загрузка

//        $this->layout = 'basic'; //шаблон отдеьной страницы

        return $this->render('show', ['cats' => $cats]);
    }

}