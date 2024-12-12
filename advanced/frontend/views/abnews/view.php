<?php
// 引入 Yii 框架的相关帮助类和部件类
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\abnews */

// 设置页面标题为新闻模型中的标题
$this->title = $model->title;
// 添加面包屑导航，先添加 'Abnews' 作为首页链接，再添加当前新闻标题
$this->params['breadcrumbs'][] = ['label' => 'Abnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
// 注册 Yii 框架的资源文件
\yii\web\YiiAsset::register($this);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title)?></title>
    <style>
        :root {
            --main-bg-color: #f5f5f5;
            --news-bg-color: #fff;
            --text-color: #333;
            --meta-text-color: #999;
            --link-color: #007bff;
            --box-shadow-color: rgba(0, 0, 0, 0.1);
            --button-bg-color: #6c757d;
            --button-text-color: #fff;
            --button-hover-bg-color: #5a6268;
        }

        /* 全局 body 样式设置 */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: var(--main-bg-color);
        }

       .news-page-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        /* 新闻容器样式，限定最大宽度、水平居中、设置背景、内边距和阴影效果 */
       .news-container {
            max-width: 800px;
            width: 100%;
            background: var(--news-bg-color);
            padding: 20px;
            box-shadow: 0 0 10px var(--box-shadow-color);
            border-radius: 8px;
            overflow: hidden;
        }

        /* 新闻头部样式，采用弹性布局来对齐内部元素 */
       .news-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        /* 新闻标题样式，设置字体大小、加粗、字体颜色 */
       .news-title {
            font-size: 24px;
            font-weight: bold;
            color: var(--text-color);
        }

        /* 新闻元数据（如发布时间等）样式，设置字体颜色和大小 */
       .news-meta {
            color: var(--meta-text-color);
            font-size: 14px;
        }

        /* 新闻图片样式，确保宽度自适应且高度按比例缩放 */
       .news-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 0 5px var(--box-shadow-color);
            transition: transform 0.3s ease;
        }

       .news-image:hover {
            transform: scale(1.05);
        }

        /* 新闻内容样式，设置字体大小、行高和字体颜色 */
       .news-content {
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-color);
            text-align: justify;
            margin-bottom: 20px;
        }

       .news-content p {
            margin-top: 10px;
            margin-bottom: 20px;
            text-indent: 2em;
        }

       .news-content img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 0 5px var(--box-shadow-color);
        }

       .news-content a {
            color: var(--link-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

       .news-content a:hover {
            color: var(--link-color);
            text-decoration: underline;
        }

        /* 按钮通用样式 */
       .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* 返回按钮样式 */
       .btn.btn-secondary {
            background-color: var(--button-bg-color);
            color: var(--button-text-color);
        }

       .btn.btn-secondary:hover {
            background-color: var(--button-hover-bg-color);
        }
    </style>
    <script>
        // 页面加载完成后执行的逻辑
        window.onload = function () {
            // 获取返回按钮元素
            const backButton = document.querySelector('.btn.btn-secondary');

            // 给返回按钮添加点击事件监听器
            if (backButton) {
                backButton.addEventListener('click', function (e) {
                    e.preventDefault();
                    // 获取包含新闻内容的容器元素
                    const newsContainer = document.querySelector('.news-container');
                    // 添加淡出效果
                    newsContainer.style.opacity = 0;
                    newsContainer.style.transition = 'opacity 0.3s ease';
                    // 等待淡出动画完成后，再进行页面跳转（这里只是示例，实际应用中可结合项目路由机制完善）
                    setTimeout(() => {
                        window.location.href = backButton.getAttribute('href');
                    }, 300);
                });
            }

            // 示例：添加页面滚动时，标题栏固定效果（当滚动到一定位置时）
            const newsHeader = document.querySelector('.news-header');
            const headerHeight = newsHeader.offsetHeight;
            window.addEventListener('scroll', function () {
                if (window.scrollY > headerHeight) {
                    newsHeader.style.position = 'sticky';
                    newsHeader.style.top = 0;
                    newsHeader.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
                    newsHeader.style.zIndex = 10;
                    newsHeader.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
                } else {
                    newsHeader.style.position = 'relative';
                    newsHeader.style.backgroundColor = 'transparent';
                    newsHeader.style.zIndex = 'auto';
                    newsHeader.style.boxShadow = 'none';
                }
            });
        };
    </script>
</head>
<body>
    <div class="news-page-wrapper">
        <div class="news-container">
            <div class="news-header">
                <h1 class="news-title"><?= Html::encode($this->title)?></h1>
            </div>
            <!-- 显示新闻对应的图片，对图片地址、alt 文本进行编码处理 -->
            <?php if ($model->image_url) :?>
                <img src="<?= Html::encode($model->image_url)?>" alt="<?= Html::encode($this->title)?>" class="news-image">
            <?php endif;?>
            <div class="news-content">
                <!-- 对新闻内容进行编码后显示 -->
                <?= Html::encode($model->content)?>
            </div>
            <div class="news-actions">
                <!-- 创建一个返回按钮，链接到 'index' 页面，并添加相应的按钮类名 -->
                <?= Html::a('返回', ['index'], ['class' => 'btn btn-secondary'])?>
            </div>
        </div>
    </div>
</body>
</html>