<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Suggestions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suggestions-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'suggestion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('提交', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
