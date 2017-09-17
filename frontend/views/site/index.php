<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <div class="col-lg-9 main-cont">
                 <div class="row">
                    <?php foreach ($articles as $one):?>
                    <div class="col-lg-12">
                        <h2><?=$one->title?></h2>

                        <p><?=$one->content?></p>

                        <p><?= \yii\bootstrap\Html::a('подробнее',['article/'.$one->link],['class'=>'btn btn-success']) ?></p>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <h3 class="col-lg-12">Список категорий</h3>
                    <?php foreach ($category as $cat):?>
                    <div class="col-lg-12">
                        <p><?= \yii\bootstrap\Html::a($cat->title,['category/'.$cat->id],['class'=>'btn btn-success']) ?></p>
                    </div>
                    <?php endforeach;?>
                </div>  
            </div>
        </div>






    </div>
</div>
