<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>
    <div class="container">
        <h1 class="mt-5 pt-5 text-center">Добавить видео</h1>
        

        <?php if( Yii::$app->session->hasFlash('success') ):?>
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <?php echo Yii::$app->session->getFlash('success'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php endif;?>
    
    
    
    <?php if( Yii::$app->session->hasFlash('error') ):?>
    
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <?php echo Yii::$app->session->getFlash('error'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php endif;?>
        
        <?php $form = ActiveForm::begin([
                    'id' => 'addvideo',
                ]) ?>
            <?= $form->field($add_model, 'title_ru')->input('text') ?>
            <?= $form->field($add_model, 'text_ru')->textarea(['rows' => 5]) ?>
            <?= $form->field($add_model, 'title_ee')->input('text') ?>
            <?= $form->field($add_model, 'text_ee')->textarea(['rows' => 5]) ?>
            <?= $form->field($add_model, 'title_en')->input('text') ?>
            <?= $form->field($add_model, 'text_en')->textarea(['rows' => 5]) ?>
            <?= $form->field($add_model, 'video_link')->input('text') ?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-warning']) ?>
        <?php ActiveForm::end() ?>
        
        
    </div>
