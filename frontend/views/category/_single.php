<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>

<div class="cat-item">
    <h2><?=$model->title?></h2>
    <p><?=$model->content?></p>
    <p><?= \yii\bootstrap\Html::a('подробнее',['article/'.$model->link],['class'=>'btn btn-success']) ?></p>
</div>