<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitools */

$this->title = 'Update Aitools: ' . $model->Tool_ID;
$this->params['breadcrumbs'][] = ['label' => 'Aitools', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tool_ID, 'url' => ['view', 'id' => $model->Tool_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aitools-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
