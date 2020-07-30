<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Комментарии';
?>
<?php foreach ($comments as $comment): ?>
<div class="comment">
  <div class="comment-title">
    <h4><?=$comment['username']?></h4>
    <span class="date-time"><?=date('H:i', strtotime($comment['time_comment']))?></span>
    <span class="date-time"><?=date('d.m.Y', strtotime($comment['date_comment']))?></span>
  </div>
  <div class="comment-text">
    <p class="text-break"><?=$comment['text_comment']?></p>
  </div>
</div>
<?php endforeach; ?>
<hr class="line">
<?php $form = ActiveForm::begin(['options' => ['id' => 'commentForm']])?>

<div class="elem">
  <h2 class="">Оставить комментарий</h2>
  <?= $form->field($model, 'username')->input('username')?>
  <?= $form->field($model, 'text_comment')->textArea(['rows' => 8])?>
  <div class="elem-footer">
    <?= Html::submitButton('Отправить', ['class' => 'btn'])?>
  </div>
</div>


<?php ActiveForm::end()?>
