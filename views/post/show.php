<?//= $this->title = 'Show' ?>


<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы Show</h1>
<?php $this->endBlock(); ?>




<h1>Show</h1>


<?//= \app\components\MyWidget::widget(['name' => 'Liza']);?>
<!--<button class="btn btn-success" id="btn">Click me...</button>-->
<?php ////$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<!--
<?php ////$this->registerJs('console.log("connection complete")') ?>
<?php ////$this->registerCss('.container{background: #ccc; }') ?>
-->
<?php
//
//$js = <<<JS
//    $('#btn').on('click', function() {
//      $.ajax({
//        url: 'index',
//        data: {test: '123'},
//        type: 'POST',
//        success: function(res) {
//          console.log(res);
//        },
//        error: function() {
//          alert('Error!');
//        }
//      });
//    });
//JS;
?>

    <?php \app\components\MyWidget::begin() ?>
        <h1>hello world!</h1>
    <?php \app\components\MyWidget::end() ?>









<?php

//$this->registerJs($js);

//debug($cats);
//echo count($cats->products);
//debug($cats);
?>