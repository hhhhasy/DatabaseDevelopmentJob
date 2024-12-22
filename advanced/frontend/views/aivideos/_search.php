<?php
/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 * 2024/12/15
 * AI视频
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aivideossearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aivideos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Video_ID') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'Instructor') ?>

    <?= $form->field($model, 'Platform') ?>

    <?= $form->field($model, 'Duration') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'Video_Link') ?>

    <?php // echo $form->field($model, 'image_urls') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
