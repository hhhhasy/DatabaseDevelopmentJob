<?php
/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 *                   阿斯雅 2210737
 *                   罗瑞     2210529
 *                   2024/12/10
 * AI 新闻中心首页视图
 *
 * 该文件展示了 AI 新闻中心的首页布局，包括了一个欢迎区域 (Hero Section)，以及一个新闻列表部分。 
 * 新闻列表部分使用 Yii 框架的 `ListView` 或 `foreach` 方式动态展示新闻内容。
 * 
 * 主要功能：
 * 1. 显示首页欢迎信息及图片 (Hero Section)。
 * 2. 展示新闻列表，包括新闻标题和链接。
 * 
 * 设计特点：
 * - 使用 Flexbox 和 Grid 布局来实现响应式设计，适配不同屏幕尺寸。
 * - 新闻项目以卡片式布局呈现，具有动态交互效果（如悬浮效果）。
 * 
 * 依赖：
 * 1. Yii2 框架，用于数据传输和 URL 路由。
 * 2. Google 字体 'Noto Sans SC' 用于页面文字样式。
 *
 */
use yii\helpers\Html;
use yii\widgets\ListView;
?>


<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI 新闻中心</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Noto Sans SC', 'PingFang SC', sans-serif;
            background: #f9f9fc;
        }
       /* Hero Section */
    .hero-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #f8f9fa; /* 可替换为更适合的颜色 */
        padding: 50px 10%;
        height: 400px; /* 调整高度 */
    }

    /* 左侧文字内容 */
    .hero-content {
        max-width: 100%;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: bold;
        color: #2C384A; /* 深色标题 */
        margin-bottom: 20px;
    }

    .hero-description {
        font-size: 1.2rem;
        color: #6c757d; /* 浅灰色说明 */
        margin-bottom: 20px;
    }

    .hero-button {
        background-color: #ff6f00; /* 橙色按钮 */
        color: white;
        font-size: 1rem;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .hero-button:hover {
        background-color: #e65c00; /* 深橙色 */
    }

    /* 右侧图片 */
    .hero-image img {
        max-width: 400px; /* 图片最大宽度 */
        height: auto;
    }
    .ainews-index {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 1200px;
        }
       .ainews-index h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 40px;
        }
        /* 对新闻网格布局进行调整，实现左右对称分布 */
       .news-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 两列等宽布局，实现对称 */
            gap: 20px;
        }
       .news-item {
            display: flex;
            align-items: center;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }
       .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
       .news-image {
            flex: 1;
            height: 200px;
            overflow: hidden;
        }
       .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
       .news-content {
            flex: 1;
            padding: 20px;
        }
       .news-content h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }
       .news-content p {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        /* 调整新闻链接的字体大小 */
       .news-content a {
            font-size: 16px; /* 增大字体大小，可根据实际需求调整数值 */
            display: block; /* 让链接独占一行，便于布局对称效果更好呈现 */
        }
       .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            text-transform: uppercase;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.2s;
        }
       .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section">
    <div class="hero-content">
        <h1>欢迎来到 AI 新闻中心</h1>
        <p>获取最新的人工智能动态、技术解析和行业趋势。</p>
    </div>
    <div class="hero-image">
        <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/home.jpg" alt="工具图标">
    </div>
    </div>
    <!-- 新闻列表 Section -->
    <div class="p-10 flex flex-col">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-surface-800 news-grid">
            <?php foreach ($dataProvider->getModels() as $model): ?>
                <div>
                    <a href="<?= \yii\helpers\Url::to(['view', 'id' => $model->id]) ?>" class="line-clamp-1 mt-4 hover:text-brand-500">
                    <?= $model->id ?>.<?= Html::encode($model->title) ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

