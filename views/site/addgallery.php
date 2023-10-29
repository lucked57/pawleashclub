<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>
   <style>
       body{
           margin-top: 100px;
       }
</style>
    <div class="container">
        <h1 class="mt-5 pt-5 text-center">Добавить изображения</h1>
        

        <?php if( Yii::$app->session->hasFlash('success') ):?>
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <?php echo Yii::$app->session->getFlash('success'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php endif;?>
    
    
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

         <div class="form-group">
          <label for="select_albom">Выбрать альбом</label>
          <select class="form-control" id="select_albom">
            <?php foreach ($alboms_arr as $al_arr):?>
              <option value="<?=$al_arr['id']?>"><?=$al_arr['albom_ru']?></option>
            <?php    endforeach;?>
          </select>
        </div>
        <?= $form->field($model, 'id_albom')->input('text') ?>
    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <button class="btn btn-warning">Submit</button>

<?php ActiveForm::end() ?>
        
        
    </div>
