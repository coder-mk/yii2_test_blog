<?php

use yii\helpers\Html;
use common\models\CommentForm;

/* @var $this yii\web\View */
/* @var $article \common\models\Article */
?>

<h1><?=$article->title?></h1>
<div>
	<?=$article->content?>
</div>

<div class="comments-box">
	<h3>Комментарии</h3>
	<?php if(!empty($acomments)):?>
	<ul class="comments-list">
		<?php foreach($acomments as $comment):?>
		<li>
			<span class="name"><?= $comment->user->username ?></span>
			<p class="comment"><?= $comment->text ?></p>
		</li>
		<?php endforeach;?>
	</ul>
	<?php endif;?>

	<?php if(!Yii::$app->user->isGuest){?>
	<?php $form = \yii\widgets\ActiveForm::begin([
		'action'=>['article/comment', 'id'=>$article->id, 'link'=>$article->link],
		'options'=>['class'=>'comment-form', 'role'=>'form']]) ?>
		<?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Текст комментария'])->label('Ваш комментарий') ?>
		<input type="submit" class="btn btn-primary" value="Добавить комментарий">
	<?php \yii\widgets\ActiveForm::end(); ?>
	<?php } ?>
</div>