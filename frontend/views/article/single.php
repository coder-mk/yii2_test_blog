<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $article \common\models\Article */
?>

<h1><?=$article->title?></h1>
<div>
	<?=$article->content?>
</div>

<div class="comments-box">
	<h3>Комментарии</h3>
	<ul class="comments-list">
		<li>
			<span class="name">Иван</span>
			<p class="comment">Отличный сайт все круто</p>
		</li>
		<li>
			<span class="name">Игнат</span>
			<p class="comment"> Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подпоясал, собрал щеке. Приставка вдали, текстов путь эта рыбными меня мир букв текстами раз свой коварный выйти! Продолжил, точках, рукопись!</p>
		</li>
		<li>
			<span class="name">Кристина</span>
			<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae facere enim necessitatibus explicabo, sapiente iure, dicta laborum iusto aspernatur beatae placeat perspiciatis? Asperiores ex magnam, officiis, fugit recusandae aspernatur veniam.</p>
		</li>
	</ul>

	<?php if(!Yii::$app->user->isGuest){?>
	<form action="#" class="comment-form">
		<div class="form-group">
		    <label for="com-text">Текст отзыва</label>
		   	<textarea class="form-control" id="com-text" rows="3" placeholder="Текст комментария"></textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Добавить комментарий">
	</form>
	<?php } ?>
</div>