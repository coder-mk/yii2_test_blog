<?php

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
use \yii\widgets\ListView;
$blog = $dataProvider->getModels();
?>


<div class="body-content">

    <!--div class="row">
        <?php foreach ($blog as $one):?>
        <div class="col-lg-4">
            <h2><?=$one->title?></h2>

            <p><?=$one->content?></p>

            <p><?= \yii\bootstrap\Html::a('подробнее',['article/'.$one->link],['class'=>'btn btn-success']) ?></p>
        </div>
        <?php endforeach;?>
    </div-->

    <?= ListView::widget ([
    	'dataProvider' => $dataProvider,
    	'itemView' => '_single',
    ]);

    ?>



</div>

