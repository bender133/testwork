<?//= $this->title = 'Show' ?>


<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы Show</h1>
<?php $this->endBlock(); ?>




<h1>Show</h1>
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



//$this->registerJs($js);

debug($cats);
//echo count($cats->products);
//debug($cats);
