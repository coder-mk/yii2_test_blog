<?php

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
?>


<div class="body-content">
    <h1>Страница со списком категорий</h1> <br><br>
    <div class="row">
        <?php foreach ($category as $cat):?>
            <?= \yii\bootstrap\Html::a($cat->title,['category/'.$cat->id],['class'=>'btn btn-success']) ?> <br><br>
        <?php endforeach;?>
    </div>

</div>

