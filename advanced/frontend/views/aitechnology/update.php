<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitechnology */

$this->title = 'Update Aitechnology: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aitechnologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aitechnology-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
