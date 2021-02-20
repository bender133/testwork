<h1>Show</h1>

<?php $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>

<?php $this->registerJs('alert("connection complete")') ?>
