<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aivideos */

$this->title = 'Create Aivideos';
$this->params['breadcrumbs'][] = ['label' => 'Aivideos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aivideos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
