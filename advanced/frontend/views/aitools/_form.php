<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aitools-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tool_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tool_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Official_Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
