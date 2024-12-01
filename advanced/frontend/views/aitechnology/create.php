<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitechnology */

$this->title = 'Create Aitechnology';
$this->params['breadcrumbs'][] = ['label' => 'Aitechnologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aitechnology-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
