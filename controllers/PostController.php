<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public function actionTest() {

        $names = ['rere' => 'Ivan', 'rprp' => 'Semen', 'ututu' => 'Petr', 'uiuiu' => 'Mihail',];

//        $this->debug(Yii::$app);
//        $this->debug($names);

        return $this->render('test', [
            'names' => $names,
        ]);
    }
}