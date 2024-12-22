<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* 
 * Team:AI很费劲
 * Coding by 罗瑞 2210529
 * 2024/12/17
 * 成员管理
 */
/* @var $this yii\web\View */
/* @var $model backend\models\teammembersrssearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teammembers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'member_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'major') ?>

    <?= $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'image_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
