<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitools */

$this->title = 'Create Aitools';
$this->params['breadcrumbs'][] = ['label' => 'Aitools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aitools-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
