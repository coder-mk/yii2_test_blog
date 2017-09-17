<?php

/* @var $this yii\web\View */

?>


<div class="body-content">

    <div class="row">
        <?php foreach ($articles as $one):?>
        <div class="col-lg-4">
            <h2><?=$one->title?></h2>

            <p><?=$one->content?></p>

            <p><?= \yii\bootstrap\Html::a('подробнее',['article/'.$one->link],['class'=>'btn btn-success']) ?></p>
        </div>
        <?php endforeach;?>
    </div>

</div>

