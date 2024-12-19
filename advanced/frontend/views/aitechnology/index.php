<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="container" style="display: flex; height: 100vh;">

<!-- 左侧菜单区域 -->
<div class="left" style="background-color: lightblue; padding: 20px; height: 100vh; overflow: auto;">
    <!-- 搜索框 -->
    <div class="search-box mb-4">
        <h4>搜索</h4>
        <form method="get" action="#" class="d-flex">
            <input type="text" name="query" class="form-control" placeholder="输入搜索关键词" />
            <button type="submit" class="btn btn-primary ms-2">搜索</button>
        </form>
    </div>

    <!-- 论坛分类 -->
    <div class="forum-categories">
        <h4>论坛分类</h4>
        <ul class="list-group">
            <li class="list-group-item"><a href="#">编程语言</a></li>
            <li class="list-group-item"><a href="#">前端开发</a></li>
            <li class="list-group-item"><a href="#">后端开发</a></li>
            <li class="list-group-item"><a href="#">数据库</a></li>
            <li class="list-group-item"><a href="#">人工智能</a></li>
        </ul>
    </div>
</div>

<!-- 右侧内容区域 -->
<div class="right" style="flex: 1; padding: 20px; height: 100vh; overflow-y: auto;">
    <!-- Hero Section with responsive image -->
    <section>
        <div class="container">
            <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
        </div>
    </section>

    <!-- Technology Posts Section -->
    <div class="row">
        <?php foreach ($dataProvider->models as $technology): ?>
            <div class="col-lg-12 mb-4">
                <div class="p-4 border-0 shadow-sm">
                   <!-- 点击标题跳转到相应的页面 -->
                   <h5 class="card-title">
                       <a href="<?= Url::to(['view', 'id' => $technology->id]) ?>" style="text-decoration: none; color: inherit;">
                           <?= Html::encode("What is " . $technology->tech_name . "?") ?>
                       </a>
                   </h5>

                   <p class="card-description">
                       <?= Html::encode($technology->description) ?>
                   </p>

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
</div>

<!-- Custom Styles with responsive improvements -->
<style>
.search-box {
    margin-bottom: 20px;
}

.forum-categories h4 {
    font-size: 1.5rem; /* Increase font size */
    font-weight: bold;
}

.list-group-item a {
    text-decoration: none;
    color: #333;
}

.list-group-item a:hover {
    color: #FF5722;
}

.right {
    flex: 1;
    padding: 20px;
    height: 100vh;
    overflow-y: auto;
    overflow-x: hidden; /* 禁止横向滚动条 */
}

.pagination {
    justify-content: center;
}

/* Title customization - black font with bold weight */
.card-title {
    font-family: 'Helvetica', sans-serif;
    font-weight: bold;
    font-size: 3rem;  /* Adjusted font size for title */
    color: #000;  /* Black color */
    margin-bottom: 15px;
    transition: color 0.3s ease;  /* Smooth color transition */
}

/* Title hover effect */
.card-title:hover {
    color: #FF5722; /* Title color changes to orange on hover */
}

/* Description customization - font size, color, and margin */
.card-description {
    font-size: 1.8rem;  /* Font size for the description */
    color: #333;  /* Dark gray color for content */
    margin-bottom: 20px;  /* Space between the content and next element */
}

/* Ensure there's space between articles */
.col-lg-12 {
    margin-bottom: 30px; /* Add space between articles */
}

/* Media Queries for Responsiveness */
@media (max-width: 1200px) {
    .left {
        width: 20%; /* On medium to large screens, make it 20% */
    }
}

@media (max-width: 992px) {
    .left {
        width: 25%; /* On tablet screens, make it 25% */
    }
}

@media (max-width: 768px) {
    .left {
        width: 35%; /* On smaller screens, make it 35% */
    }
}

@media (max-width: 576px) {
    .left {
        width: 100%; /* On very small screens, take full width */
        height: auto; /* Allow content to fit */
    }
    .right {
        padding-left: 0; /* For smaller screens, remove padding */
    }
}
</style>

