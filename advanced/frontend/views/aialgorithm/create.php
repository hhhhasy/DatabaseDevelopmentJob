<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aialgorithm */

$this->title = 'Create Aialgorithm';
$this->params['breadcrumbs'][] = ['label' => 'Aialgorithms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aialgorithm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
