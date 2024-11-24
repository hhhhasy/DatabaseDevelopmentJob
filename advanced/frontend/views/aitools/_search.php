<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitoolssearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aitools-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Tool_ID') ?>

    <?= $form->field($model, 'Tool_Name') ?>

    <?= $form->field($model, 'Tool_Type') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Official_Link') ?>

    <?php // echo $form->field($model, 'image_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
