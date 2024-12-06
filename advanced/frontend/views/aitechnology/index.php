<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artificial Intelligence Technologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aitechnology-index">

    <!-- Hero Section with responsive image -->
<section class="hero-section text-center text-white" style="background-image: url('path-to-your-image.jpg'); background-size: cover; background-position: center center; padding: 80px 0;">
    <div class="container">
        <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
        <p class="lead">Explore the evolving world of AI technologies and join the conversation. Learn and share knowledge with experts!</p>
        <?= Html::a('Start Exploring', ['#'], ['class' => 'btn btn-primary btn-lg shadow-lg']) ?>
    </div>
</section>

<!-- Technology Posts Section with dynamic card layout -->
<div class="container mt-5">
    <div class="row">
        <?php foreach ($dataProvider->models as $technology): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card creative-card shadow-lg h-100 border-light rounded">
                    <div class="card-body">
                        <h5 class="card-title"><?= Html::encode("What is " . $technology->tech_name . "?") ?></h5>
                        <p class="card-text"><?= Html::encode($technology->description) ?></p> <!-- Add short description -->
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= Url::to(['view', 'id' => $technology->id]) ?>" class="btn btn-light btn-lg">进入论坛</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Pagination Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $dataProvider->pagination,
                'options' => ['class' => 'pagination justify-content-center'],
            ]) ?>
        </div>
    </div>
</div>

<!-- Custom Styles with responsive improvements -->
<style>
    .hero-section {
        background-size: cover;
        background-position: center center;
        padding: 80px 0;
        color: white;
    }

    .creative-card {
        position: relative;
        background: linear-gradient(135deg, #FF7043, #FF5722); /* Orange gradient */
        border-radius: 25px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .creative-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        margin-bottom: 15px;
    }

    .card-text {
        font-size: 1rem;
        color: white;
        margin-bottom: 20px;
    }

    .btn-lg {
        padding: 12px 24px;
        font-size: 1.1rem;
        background-color: #fff;
        color: #FF5722;
        border-radius: 50px;
        border: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-lg:hover {
        background-color: #FF5722;
        color: #fff;
    }

    .card-footer {
        padding: 20px;
    }

    /* Responsive Design for small screens */
    @media (max-width: 768px) {
        .creative-card {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
        }

        .btn-lg {
            font-size: 1rem;
            padding: 10px 20px;
        }
    }
</style>

