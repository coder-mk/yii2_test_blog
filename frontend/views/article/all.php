<?php

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
use \yii\widgets\ListView;
?>


<div class="body-content">

    <?= ListView::widget ([
    	'dataProvider' => $dataProvider,
    	'itemView' => '_single',
    ]); ?>

</div>

