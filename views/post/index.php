<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h1>Index Post</h1>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>
<?= \yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
<?php $form = ActiveForm::end(); ?>


