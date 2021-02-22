<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Productses */

$this->title = 'Create Productses';
$this->params['breadcrumbs'][] = ['label' => 'Productses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
