<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
/* @var $category \common\models\Category */
use \yii\widgets\ListView;
?>

<h1>Категория записей: <?=$category->title?></h1>

<?= ListView::widget ([
	'dataProvider' => $dataProvider,
	'itemView' => '_single',
]); ?>

