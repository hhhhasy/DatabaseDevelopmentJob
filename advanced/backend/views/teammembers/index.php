<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeammembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teammembers-index container-fluid mt-5">

    <h1 class="text-center text-primary"><?= Html::encode($this->title) ?></h1>

    <p class="text-center mb-4">
        <?= Html::a('Create Team Member', ['create'], ['class' => 'btn btn-lg btn-primary shadow-sm']) ?>
    </p>

    <div class="row">
        <?php foreach ($dataProvider->models as $model): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-body text-center">
                        <div class="member-avatar mb-3">
                            <?= Html::img($model->image_url, [
                                'alt' => $model->name,
                                'class' => 'team-member-image img-fluid',
                            ]) ?>
                        </div>
                        <h5 class="card-title"><?= Html::encode($model->name) ?></h5>
                        <p class="card-text"><strong>Age:</strong> <?= Html::encode($model->age) ?></p>
                        <p class="card-text"><strong>Major:</strong> <?= Html::encode($model->major) ?></p>
                        <p class="card-text"><strong>Province:</strong> <?= Html::encode($model->province) ?></p>
                        <p class="card-text"><?= Html::encode($model->description) ?></p>
                        <div class="d-flex justify-content-center">
                            <?= Html::a('View', ['view', 'id' => $model->member_id], ['class' => 'btn btn-primary btn-sm mr-2']) ?>
                            <?= Html::a('Update', ['update', 'id' => $model->member_id], ['class' => 'btn btn-warning btn-sm mr-2']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->member_id], [
                                'class' => 'btn btn-danger btn-sm',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<style>
    .team-member-image {
    border-radius: 50%;
    width: 120px;
    height: 120px;
    object-fit: cover;
    border: 4px solid #007bff;
    margin-bottom: 15px;
}

.team-member-image:hover {
    transform: scale(1.1);
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}

.card {
    border: none;
    background-color: #fff;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

.card:hover {
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
}

/* 修改字体大小和样式 */
h1.text-primary {
    font-size: 2.5rem; /* 标题字体加大 */
    font-weight: bold; /* 加粗 */
    margin-bottom: 20px;
}

.card-title {
    font-size: 1.5rem; /* 名字字体大小 */
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    color: #555;
    font-size: 1rem; /* 主要文本字体 */
    line-height: 1.5; /* 增加行间距 */
}

.card-text strong {
    color: #000; /* 关键字加深颜色 */
    font-weight: 600;
}

.btn {
    font-size: 1rem; /* 按钮内文字加大 */
    padding: 8px 16px;
}

.btn-primary, .btn-warning, .btn-danger {
    border-radius: 25px;
    font-weight: 600;
}

.row {
    margin-top: 20px;
}

</style>
