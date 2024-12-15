<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\teammembers */

$this->title = 'Update Teammembers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Teammembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->member_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teammembers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
