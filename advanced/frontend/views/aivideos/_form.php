<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aivideos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aivideos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Instructor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Platform')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Video_Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_urls')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
