<?php 
use yii\helpers\Url;
?>
<?php $count = 0;?>
<?php foreach($collections as $collection): ?>


<div class="card-block">
    <?=$collection->collection;?>
    
</div>

<?php if($count%3 == 0 AND $this == $collection){?>
    <div class="card-block">
    </div>
<?php }?>
<?php 
$products = $collection->product;
foreach($products as $product):?>
    <a href="<?=Url::to(['site/card', 'id' => $product->id])?>">
        <div class="card-block">
            <?=$product->name?><br><?=$product->price?><br><?=$product->collection->collection?>
        </div>
    </a>
<?php $count++; ?>
<?php endforeach ?> 
<?php $count++; ?>
<?php endforeach ?> 
<?php echo $count ?>