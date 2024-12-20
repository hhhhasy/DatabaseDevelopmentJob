<?php
/* @var $this yii\web\View */
$this->title = 'AI Innovation Platform';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $this->title?></title>
    <!-- 引入Bootstrap CSS（根据实际情况调整版本和路径） -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- 引入Font Awesome图标库CSS（用于显示图标） -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* 设置页面的基本字体 */
        body {
        margin: 0;
        height: 100vh;
        background: linear-gradient(-45deg, #dae, #f66, #3c9, #09f, #66f);
        background-size: 200% 200%;
        animation: gradient 8s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0 12%;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0 12%;
            }
        }
 
       /* 英雄部分样式 */
      .hero-section {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 20px;
        }

        

        .text-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            margin-left: 20px;
            border-radius: 10px;
            max-width: 450px;
        }

        .text-container h1 {
            font-size: 50px;
            color: #ffcc00;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .text-container .lead {
            font-size: 20px;
            color: white;
        }

        .text-container .btn {
            background: linear-gradient(135deg, #ff6600, #ff3333);
            border: none;
            padding: 15px 50px;
            font-size: 18px;
            text-transform: uppercase;
            border-radius: 5px;
            color: white;
            transition: background 0.3s ease-in-out;
        }

        .text-container .btn:hover {
            background: linear-gradient(135deg, #ff3333, #ff6600);
        }

        /* 功能部分 */
        .feature-section {
            padding: 20px;
        }
        .feature-item {
            display: flex;
            align-items: center;
            gap: 200px; /* 视频和文字之间的距离 */
        }
        .feature-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        .feature-video {
            flex: 1;
            max-width: 50%;
            margin: 10px;
        }
        .feature-video video {
            width: 100%;
            border-radius: 10px; /* 视频四角圆滑 */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4); /* 添加阴影 */
        }
        /* 优势内容文字 */
        .feature-content h2 {
            margin-top: 20px;
            color: #ffffff;
            font-size: 3em;
        }

        .feature-content p {
            font-size: 1em;
            color: #e0e0e0;
            margin: 10px 0;
        }
        
        .feature-content p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        /* 链接按钮 */
        .feature-content a {
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .feature-content a:hover {
        background: rgba(255, 255, 255, 0.5);
        }
        /* Advantage Section */
        /* 按钮部分样式 */
        .advantage-tabs {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .tab-button {
            /* 可以添加按钮相关的更多样式，比如背景色、边框等 */
        }

        /* 内容部分整体样式 */
        .advantage-row {
            margin-top: 20px;
        }

        /* 每个tab对应的内容块样式 */
        .tab-content {

        }

        /* 优势展示盒子的样式 */
        .advantage-box {
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        /* 图标样式 */
        .fa {
            font-size: 24px;
        }

        .fa-check-circle {
            color: #008000;
        }

        .fa-clock-o {
            color: #FF8C00;
        }

        .fa-users {
            color: #00008B;
        }

        .fa-lock {
            color: #8B0000;
        }

        h2 {
            color: #00008B;
        }

        p {
            color: #000000;
            font-size: 16px;
        }

                /* 创作者板块 */
                /* 创作者部分整体样式 */
        .creator-section {
            margin-top: 50px;
            text-align: center;
        }

        /* 创作者标题样式 */
        .creator-title {
            color: #ffcc00;
        }

        /* 创作者描述文字样式 */
        .creator-description {
            color: white;
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* 创作者卡片列样式（假设基于 Bootstrap 等框架的类，可根据实际调整） */
        .creator-card {
            padding: 20px;
        }

        /* 创作者卡片内部容器样式 */
        .card-inner {
            background: #004466;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* 创作者头像图片样式 */
        .creator-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        /* 创作者姓名样式 */
        .creator-name {
            color: #ffcc00;
        }

        /* 创作者信息描述样式 */
        .creator-info {
            color: white;
        }

        /* 页脚 */
        footer {
            background-color: #1a1a1a;
            color: white;
            padding: 40px 20px;
        }

        footer .social-media a {
            color: white;
            font-size: 30px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        footer .social-media a:hover {
            color: #00aaff;
        }
    </style>
</head>

<body>

    <!-- Hero Section with Background Image -->
    <div class="hero-section" style="position: relative; height: 100vh; display: flex; justify-content: center; align-items: center; padding: 20px;">
        <!-- Background Video -->
        

        <!-- Title Text on the Left Side -->
        <!-- Centered Text -->
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 20px; text-align: center;">
            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                <h1 style="font-size: 120px; color: #ffffff; font-weight: bold; text-shadow: 3px 3px 10px rgba(255, 204, 0, 0.7), 0 0 20px rgba(255, 255, 255, 0.5); font-family: 'Orbitron', sans-serif; margin: 0;">
                    AI
                </h1>
                <h1 style="font-size: 120px; color: #ffcc00; font-weight: bold; text-shadow: 3px 3px 10px rgba(255, 204, 0, 0.7), 0 0 20px rgba(255, 255, 255, 0.5); font-family: 'Orbitron', sans-serif; margin: 0;">
                    改变世界
                </h1>
            </div>
            <a class="btn btn-lg btn-primary" href="#about-section" style="background: linear-gradient(45deg, #ff6600, #ff4500); border: none; padding: 15px 50px; font-size: 20px; text-transform: uppercase; border-radius: 8px; color: white; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3); transition: transform 0.2s, box-shadow 0.2s;">
                Learn More
            </a>
        </div>


    </div>


    <!-- Body Content -->
    <div id="about-section" class="body-content" style="margin-top: 40px; padding: 0 15px;">
        <h1 style="
            text-align: center; 
            color: #ffffff;          /* 字体颜色：白色 */
            font-size: 48px;         /* 字体大小：大号标题 */
            font-weight: bold;       /* 字体加粗 */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* 添加阴影效果，增加立体感 */
            font-family: 'Arial', sans-serif; /* 设置现代且清晰的字体 */
            margin-top: 20px;        /* 上边距，适度分离背景 */
        ">
        网站功能
        </h1>

        <div class="feature-section">
            <!-- 第一个优势项 -->
            <div class="feature-item">
                <div class="feature-video">
                    <video autoplay muted loop>
                        <source src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/AI前沿应用.mp4" type="video/mp4">
                        您的浏览器不支持视频标签。
                    </video>
                </div>
                <div class="feature-content">
                    <h2>AI Applications</h2>
                    <p>展示当今AI前沿应用</p>
                    <a href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=app%2Findex">Explore AI Applications &raquo;</a>
                </div>
            </div>
            <!-- 第二个优势项 -->
            <div class="feature-item">
                <div class="feature-video">
                    <video autoplay muted loop>
                        <source src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/AI前沿新闻.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="feature-content">
                    <h2>AI News</h2>
                    <p>提供有关AI的前沿新闻</p>
                    <a href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=abnews%2Findex">Browse Resources &raquo;</a>
                </div>
            </div>

            <!-- 第三个优势项 -->
            <div class="feature-item">
                <div class="feature-video">
                    <video autoplay muted loop>
                        <source src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/AI资源.mp4" type="video/mp4">
                        您的浏览器不支持视频标签。
                    </video>
                </div>
                <div class="feature-content">
                    <h2>AI Resources</h2>
                    <p>提供有关AI的视频和工具</p>
                    <a href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=aitools%2Findex">Browse Resources &raquo;</a>
                </div>
            </div>

            <!-- 第一个优势项 -->
            <div class="feature-item">
                <div class="feature-video">
                    <video autoplay muted loop>
                        <source src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/AI技术博客.mp4" type="video/mp4">
                        您的浏览器不支持视频标签。
                    </video>
                </div>
                <div class="feature-content">
                    <h2>Technology Blog</h2>
                    <p>关于AI技术博客</p>
                    <a href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=aitechnology%2Findex">Explore AI Applications &raquo;</a>
                </div>
            </div>
            
        </div>
    </div>



    <div id="advantage-section" style="margin-top: 50px; padding: 0 15px;">
        <h1 style="
            text-align: center; 
            color: #ffffff;          /* 字体颜色：白色 */
            font-size: 48px;         /* 字体大小：大号标题 */
            font-weight: bold;       /* 字体加粗 */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* 添加阴影效果，增加立体感 */
            font-family: 'Arial', sans-serif; /* 设置现代且清晰的字体 */
            margin-top: 20px;        /* 上边距，适度分离背景 */
        ">
        网站优势
        </h1>
            
        <div class="advantage-tabs" style="
            display: flex; 
            justify-content: space-around; 
            margin-top: 30px;
        ">
            <button class="tab-button" onclick="showTab('tab1')" style="
                background: linear-gradient(to bottom, #4A90E2, #1576C7); /* 按钮渐变色 */
                color: #ffffff;                    /* 按钮文字颜色 */
                font-size: 18px;                   /* 文字大小 */
                font-weight: bold;                 /* 字体加粗 */
                padding: 10px 20px;                /* 按钮内边距 */
                border: none;                      /* 去掉边框 */
                border-radius: 8px;                /* 圆角按钮 */
                cursor: pointer;                   /* 鼠标悬停变小手 */
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); /* 添加阴影效果 */
                transition: all 0.3s ease;         /* 平滑过渡效果 */
            " 
            onmouseover="this.style.background='#0A4F9A'" 
            onmouseout="this.style.background='linear-gradient(to bottom, #4A90E2, #1576C7)'">
                优秀框架
            </button>

            <button class="tab-button" onclick="showTab('tab2')" style="
                background: linear-gradient(to bottom, #4A90E2, #1576C7);
                color: #ffffff;
                font-size: 18px;
                font-weight: bold;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
            "
            onmouseover="this.style.background='#0A4F9A'" 
            onmouseout="this.style.background='linear-gradient(to bottom, #4A90E2, #1576C7)'">
                快速响应
            </button>

            <button class="tab-button" onclick="showTab('tab3')" style="
                background: linear-gradient(to bottom, #4A90E2, #1576C7);
                color: #ffffff;
                font-size: 18px;
                font-weight: bold;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
            "
            onmouseover="this.style.background='#0A4F9A'" 
            onmouseout="this.style.background='linear-gradient(to bottom, #4A90E2, #1576C7)'">
                专业团队
            </button>

            <button class="tab-button" onclick="showTab('tab4')" style="
                background: linear-gradient(to bottom, #4A90E2, #1576C7);
                color: #ffffff;
                font-size: 18px;
                font-weight: bold;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
            "
            onmouseover="this.style.background='#0A4F9A'" 
            onmouseout="this.style.background='linear-gradient(to bottom, #4A90E2, #1576C7)'">
                安全保障
            </button>
        </div>

        <!-- 内容部分，根据选中的按钮展示相应内容 -->
        <div class="advantage-row" style="margin-top: 20px;">
            <div id="tab1" class="tab-content" style="display: block;">
                <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
                    <i class="fa fa-check-circle" style="font-size: 32px; color: #28A745; margin-bottom: 10px;"></i>
                    <h2 style="color: #0D3876; font-size: 26px; font-weight: bold; margin: 10px 0;">优秀框架</h2>
                    <p style="color: #333333; font-size: 18px; line-height: 1.6;">
                        我们采用先进的 <b>Yii2框架</b>，以其强大的功能和高度的灵活性，构建高效、可扩展的Web应用程序。
                    </p>
                </div>
            </div>
            <div id="tab2" class="tab-content" style="display: none;">
                <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
                    <i class="fa fa-clock-o" style="font-size: 32px; color: #FF8C00; margin-bottom: 10px;"></i>
                    <h2 style="color: #0D3876; font-size: 26px; font-weight: bold; margin: 10px 0;">快速响应</h2>
                    <p style="color: #333333; font-size: 18px; line-height: 1.6;">
                        优化的架构和高效的计算资源配置，使我们的AI服务能够 <b>快速响应</b> 用户请求，节省时间成本。
                    </p>
                </div>
            </div>
            <div id="tab3" class="tab-content" style="display: none;">
                <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
                    <i class="fa fa-users" style="font-size: 32px; color: #007BFF; margin-bottom: 10px;"></i>
                    <h2 style="color: #0D3876; font-size: 26px; font-weight: bold; margin: 10px 0;">专业团队</h2>
                    <p style="color: #333333; font-size: 18px; line-height: 1.6;">
                        拥有一支专业的 <b>AI专家团队</b>，随时为用户提供技术支持、解答疑问，保障服务的顺畅运行。
                    </p>
                </div>
            </div>
            <div id="tab4" class="tab-content" style="display: none;">
                <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
                    <i class="fa fa-lock" style="font-size: 32px; color: #DC3545; margin-bottom: 10px;"></i>
                    <h2 style="color: #0D3876; font-size: 26px; font-weight: bold; margin: 10px 0;">安全保障</h2>
                    <p style="color: #333333; font-size: 18px; line-height: 1.6;">
                        严格的数据安全措施，从 <b>数据存储</b>、传输到使用的全流程加密，保护用户数据隐私。
                    </p>
                </div>
            </div>
    </div>
        </div>
    </div>




        
        <!-- Creator Section -->
        <div class="row" style="margin-top: 50px; text-align: center;">
        <h1 style="
            text-align: center; 
            color: #ffffff;          /* 字体颜色：白色 */
            font-size: 48px;         /* 字体大小：大号标题 */
            font-weight: bold;       /* 字体加粗 */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* 添加阴影效果，增加立体感 */
            font-family: 'Arial', sans-serif; /* 设置现代且清晰的字体 */
            margin-top: 20px;        /* 上边距，适度分离背景 */
        ">
        网站设计者
        </h1>
              <!-- Creator Cards -->
            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/asy.jpg"
                         alt="Asy"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                         <h4 style="color: #ffcc00; font-family: 'Verdana', sans-serif; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; transform: scale(1.1);">Asy</h4>
                </div>
            </div>

            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/loryy.jpg"
                         alt="Loryy"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                         <h4 style="color: #ffcc00; font-family: 'Verdana', sans-serif; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; transform: scale(1.1);">Loryy</h4>
                </div>
            </div>

            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/wangwang.jpg"
                         alt="Wangwang"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                         <h4 style="color: #ffcc00; font-family: 'Verdana', sans-serif; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; transform: scale(1.1);">Wang</h4>
                </div>
            </div>
        </div>
    </div>

    


    <!-- Footer Section -->
    <footer style="background: linear-gradient(135deg, #1a1a1a, #333333); color: white; padding: 40px 20px; font-family: 'Arial', sans-serif;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: 0 auto;">

            <!-- Logo and Contact Section -->
            <div style="flex: 1; min-width: 250px; margin-bottom: 20px;">
            <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/Logo.jpg" alt="Logo" style="max-width: 120px; margin-bottom: 20px;">
                <p style="font-size: 14px; opacity: 0.7;color: #ffffff; ">2024 AI创新平台</p>
                <a href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=suggestions%2Fcreate" style="background-color: #00aaff; border: none; color: white; padding: 12px 25px; font-size: 16px; border-radius: 8px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-decoration: none; display: inline-block; transition: background-color 0.3s ease-in-out;">
                提供建议
                </a>

            </div>

            <!-- Navigation Section -->
            <div style="flex: 1; min-width: 250px; margin-bottom: 20px;">
                <h4 style="color: #00aaff; font-size: 18px; font-weight: bold; margin-bottom: 15px;">导航</h4>
                <ul style="list-style: none; padding: 0; font-size: 15px;">
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">首页</a></li>
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">应用</a></li>
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">资源</a></li>
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">新闻</a></li>
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">技术</a></li>
                </ul>
            </div>

            <!-- Developers Section -->
            <div style="flex: 1; min-width: 250px; margin-bottom: 20px;">
                <h4 style="color: #00aaff; font-size: 18px; font-weight: bold; margin-bottom: 15px;">开发者</h4>
                <ul style="list-style: none; padding: 0; font-size: 15px;">
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">文档</a></li>
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">安装教程</a></li>
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">开发指南</a></li>
                    <li><a href="#" style="color: white; text-decoration: none; transition: color 0.3s ease-in-out;">API参考</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div style="flex: 1; min-width: 250px; margin-bottom: 20px; text-align: center;">
                <h4 style="color: #00aaff; font-size: 18px; font-weight: bold; margin-bottom: 15px;">关注我们</h4>
                <div style="display: flex; justify-content: center; gap: 20px; margin-top: 10px;">
                    <!-- 微信 -->
                    <a href="#" style="color: white; font-size: 30px; transition: color 0.3s ease-in-out;">
                        <!-- 这里替换为你的微信 SVG 代码 -->
                        <svg t="1734599926520" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4483" width="35" height="35">
                            <path d="M664.250054 368.541681c10.015098 0 19.892049 0.732687 29.67281 1.795902-26.647917-122.810047-159.358451-214.077703-310.826188-214.077703-169.353083 0-308.085774 114.232694-308.085774 259.274068 0 83.708494 46.165436 152.460344 123.281791 205.78483l-30.80868 91.730191 107.688651-53.455469c38.558178 7.53665 69.459978 15.308661 107.924012 15.308661 9.66308 0 19.230993-0.470721 28.752858-1.225921-6.025227-20.36584-9.521864-41.723264-9.521864-63.862493C402.328693 476.632491 517.908058 368.541681 664.250054 368.541681zM498.62897 285.87389c23.200398 0 38.557154 15.120372 38.557154 38.061874 0 22.846334-15.356756 38.156018-38.557154 38.156018-23.107277 0-46.260603-15.309684-46.260603-38.156018C452.368366 300.994262 475.522716 285.87389 498.62897 285.87389zM283.016307 362.090758c-23.107277 0-46.402843-15.309684-46.402843-38.156018 0-22.941502 23.295566-38.061874 46.402843-38.061874 23.081695 0 38.46301 15.120372 38.46301 38.061874C321.479317 346.782098 306.098002 362.090758 283.016307 362.090758zM945.448458 606.151333c0-121.888048-123.258255-221.236753-261.683954-221.236753-146.57838 0-262.015505 99.348706-262.015505 221.236753 0 122.06508 115.437126 221.200938 262.015505 221.200938 30.66644 0 61.617359-7.609305 92.423993-15.262612l84.513836 45.786813-23.178909-76.17082C899.379213 735.776599 945.448458 674.90216 945.448458 606.151333zM598.803483 567.994292c-15.332197 0-30.807656-15.096836-30.807656-30.501688 0-15.190981 15.47546-30.477129 30.807656-30.477129 23.295566 0 38.558178 15.286148 38.558178 30.477129C637.361661 552.897456 622.099049 567.994292 598.803483 567.994292zM768.25071 567.994292c-15.213493 0-30.594809-15.096836-30.594809-30.501688 0-15.190981 15.381315-30.477129 30.594809-30.477129 23.107277 0 38.558178 15.286148 38.558178 30.477129C806.808888 552.897456 791.357987 567.994292 768.25071 567.994292z" fill="#1afa29" p-id="4484"></path>
                        </svg>
                    </a>
                    <!-- 小红书 -->
                    <a href="#" style="color: white; font-size: 30px; transition: color 0.3s ease-in-out;">
                        <!-- 这里替换为你的小红书 SVG 代码 -->
                        <svg t="1734600189928" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8508" width="30" height="30"><path d="M937.4 423.9c-84 0-165.7-27.3-232.9-77.8v352.3c0 179.9-138.6 325.6-309.6 325.6S85.3 878.3 85.3 698.4c0-179.9 138.6-325.6 309.6-325.6 17.1 0 33.7 1.5 49.9 4.3v186.6c-15.5-6.1-32-9.2-48.6-9.2-76.3 0-138.2 65-138.2 145.3 0 80.2 61.9 145.3 138.2 145.3 76.2 0 138.1-65.1 138.1-145.3V0H707c0 134.5 103.7 243.5 231.6 243.5v180.3l-1.2 0.1" p-id="8509" fill="#1296db"></path></svg>
                    </a>
                    <!-- 抖音 -->
                    <a href="#" style="color: white; font-size: 30px; transition: color 0.3s ease-in-out;">
                        <!-- 这里替换为你的抖音 SVG 代码 -->
                        <svg t="1734600277812" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="12847" width="40" height="40"><path d="M726.51776 457.45152c-6.70208-0.0768-13.39392 0-20.00384-0.0768-2.37056 0-3.0464 1.05984-3.0464 3.23072 0.0768 5.10976 0.0768 10.13248 0.0768 15.232v0.01024c0.07168 4.87936 0 9.7536 0.07168 14.56128 0 3.90656 0.68096 4.66944 4.45952 4.66944 7.1424 0.0768 14.27456 0 21.41696 0.0768 2.67776 0 3.72736-1.28 3.65056-3.75808-0.08704-9.1648-0.08704-18.31936-0.15872-27.48416a6.7584 6.7584 0 0 0-6.46656-6.46144z" fill="#FF2E4D" p-id="12848"></path><path d="M849.92 51.2h-675.84c-67.8656 0-122.88 55.0144-122.88 122.88v675.84c0 67.8656 55.0144 122.88 122.88 122.88h675.84c67.8656 0 122.88-55.0144 122.88-122.88V174.08c0-67.8656-55.0144-122.88-122.88-122.88zM250.78784 505.73312c-0.73728 10.59328-1.41312 21.25312-2.60608 31.8464-2.08896 18.39104-6.24128 36.26496-14.6432 52.864-2.16064 4.12672-5.13536 7.79776-8.18176 12.45696-1.85344-3.90656-3.41504-6.97856-4.82816-10.13248a3203.59424 3203.59424 0 0 1-14.79168-33.56672c-0.52736-1.2032-0.896-2.92352-0.36864-3.97824 3.19488-6.83008 3.41504-14.12096 3.85536-21.40672 0.60416-9.15968 1.35168-18.24256 2.01728-27.39712 0.51712-7.00416 0.80896-13.9776 1.39776-20.96128 0.67584-8.10496 1.49504-16.21504 2.16064-24.24832 0.14848-1.96608 1.04448-2.56 2.82624-2.56 11.0848 0 22.07744 0 33.16224-0.07168 2.37056 0 3.0464 0.98304 2.89792 3.23072-0.96768 14.63296-1.86368 29.28128-2.89792 43.92448z m71.29088 87.32672c-0.73728 9.46176-5.13536 17.49504-12.5696 23.5008-5.43232 4.352-11.74528 6.15936-18.6624 6.08256-5.87264 0-11.66848-0.0768-17.54112 0-2.00192 0-3.27168-0.60416-4.09088-2.55488-3.41504-7.6544-6.90688-15.32416-10.32192-22.97344-0.52736-1.13152-0.67584-2.33472-1.13152-3.456-1.63328-4.12672-1.5616-4.28544 2.97472-4.36224h13.90592c5.94944 0 8.47872-2.46784 8.5504-8.56576 0.07168-4.57216 0.07168-9.14944 0.07168-13.73696V494.2336c0.14848 0.15872 0.22016 0.15872 0.29696 0.15872V408.63744c0-4.28544 0.14848-4.43392 4.38784-4.43392h29.21472c5.13536 0 5.20704 0.14848 5.20704 5.40672 0 27.1872 0 54.36416 0.0768 81.47968 0.0768 23.87456 0.29696 47.75936 0.29696 71.6288 0 10.14272 0.14848 20.26496-0.6656 30.34112z m75.58656-28.90752c-4.98688 11.56096-10.19904 22.97344-15.31904 34.4576-0.45568 1.13664-1.19296 2.25792-2.3808 4.42368v0.01024c-2.97472-4.5056-6.0928-8.18176-8.11008-12.39552-2.82624-6.13888-4.5312-12.83584-7.35744-18.9952-3.0464-6.6816-4.15744-13.88032-5.57568-20.94592-1.1776-6.02112-1.40288-12.25216-1.8432-18.3296-1.2032-15.39584-2.23744-30.78656-3.44064-46.09536a2449.95584 2449.95584 0 0 0-2.0736-25.1648c-0.14848-1.50016 0.2304-2.176 1.94048-2.176 11.52512 0 22.97344-0.14848 34.49856-0.22016 2.1504 0 3.0464 0.96768 3.11808 2.9952 0.29696 4.65408 0.51712 9.31328 0.88576 13.97248 0.29696 3.83488 0.73728 7.6544 1.04448 11.41248 0.51712 5.40672 1.04448 10.81344 1.41312 16.14336 0.51712 6.90688 0.51712 13.81888 1.4848 20.63872 1.34144 10.4448 0.29696 21.10464 3.93216 31.32928 0.89088 2.40128-0.96768 6.08768-2.21696 8.93952z m84.28032 22.016c-2.89792 6.6816-6.02112 13.21472-8.99072 19.82464-1.64352 3.74784-3.19488 7.49568-4.76672 11.25376-1.85344 4.51072-3.11808 5.40672-7.87456 5.40672h-22.2976c-7.52128 0-15.0272 0.23552-22.53312-0.0768-3.56352-0.14336-7.0656-1.27488-10.62912-2.02752-1.792-0.36864-2.16064-1.42336-1.41312-3.14368a3709.71648 3709.71648 0 0 0 13.45024-29.21472c1.04448-2.24768 1.85344-4.65408 3.0464-6.90688 0.29696-0.6144 1.41312-1.28 2.00192-1.13152 12.42112 3.15392 25.13408 2.77504 37.76512 2.63168a874.6496 874.6496 0 0 1 20.07552 0c3.19488 0.00512 3.50208 0.45568 2.16576 3.38432z m3.84-21.86752a4.48512 4.48512 0 0 1-2.74944 1.4336c-13.89568 0.0768-27.8784 0.14848-41.77408-0.0768-4.23936-0.08704-8.5504-1.05472-11.74528-4.28544-3.3536-3.3792-4.98688-7.36256-3.28192-11.93984a897.52576 897.52576 0 0 1 9.58464-24.10496c3.88096-9.15456 7.81312-18.31936 12.05248-28.2368-2.30912-0.14848-3.712-0.29696-5.04832-0.29696-4.09088-0.07168-8.18176 0.29696-12.27264-0.2304-4.45952-0.51712-8.99072-1.04448-12.48256-4.79232-3.42528-3.6864-3.94752-8.04352-2.60608-12.32384 2.1504-6.83008 4.97664-13.44 7.80288-20.04992 2.67776-6.15424 5.72416-12.16 8.47872-18.24256 2.97472-6.53824 5.86752-13.07136 8.77056-19.6096a1361.99168 1361.99168 0 0 0 7.6544-17.33632c0.73728-1.80736 1.8688-2.47808 3.87072-2.47808 10.93632 0.07168 21.92896 0 32.86528 0 3.6352 0 3.712 0.36864 2.29888 3.6864-6.31296 14.63296-12.71808 29.20448-18.95936 43.84768a11.52 11.52 0 0 0-1.19296 4.87936c0.22016 3.90656 1.04448 4.5056 5.06368 4.5056 8.17152 0.0768 16.35328 0 24.448 0 1.64864 0 3.3536 0.22016 4.98688 0.29696 2.30912 0.0768 2.60608 1.05984 1.63328 3.072a2455.21408 2455.21408 0 0 0-13.3888 29.21472c-3.03616 6.91712-5.93408 13.89568-8.9088 20.8128a1530.1632 1530.1632 0 0 1-6.1696 13.80864c-1.94048 4.20352-0.60416 6.31296 4.15232 6.38976 6.02112 0 12.04224 0.0768 18.05824 0 2.08896 0 3.13344 0.60416 2.08896 2.85184-3.6352 8.25344-7.21408 16.58368-10.84928 24.85248-0.67072 1.50016-1.408 3.072-2.3808 4.352z m134.81472 58.73664h-125.3376c-1.72032-0.22016-3.48672-0.22016-5.94432-0.22016v-0.01536c0.88064-2.61632 1.41312-4.41856 2.1504-6.0672 4.69504-10.29632 9.4464-20.5056 14.0544-30.79168 1.04448-2.33472 2.52928-2.92352 4.75648-2.92352h28.6976c4.54656 0 4.75648-0.2304 4.75648-4.74112V461.66016c0-3.97824-0.0768-4.05504-4.08064-4.05504-6.10304 0-12.26752-0.0768-18.36544 0-2.30912 0-3.27168-0.51712-3.27168-3.1488 0.14848-10.97216 0.0768-21.92896 0.0768-32.88576 0-3.90656 0.0768-3.90656 3.86048-3.90656h73.00096c4.23936 0 8.5504 0.0768 12.78976 0 2.01728 0 2.82624 0.82432 2.74944 2.85184-0.0768 11.41248-0.0768 22.82496-0.0768 34.31424 0 2.02752-0.73728 2.77504-2.82624 2.77504-6.6048-0.0768-13.14304 0.07168-19.77856 0.07168-2.29376 0-3.33824 1.05984-3.33824 3.46624 0.0768 18.39104 0.14336 36.7104 0.14336 55.11168 0 20.87424 0 41.74848 0.0768 62.6944 0 3.75808 0.36864 4.21376 4.17792 4.21376h31.4368c3.41504 0 3.87072 0.36864 3.93728 3.81952 0.08704 10.97216 0 21.92896 0.08704 32.89088-0.01024 2.8672-1.57184 3.16416-3.73248 3.16416z m198.69696-34.92864c-0.14848 16.37376-11.008 29.21472-26.38848 32.89088-4.31616 1.05472-8.78592 1.35168-13.24544 1.5104-6.83008 0.22016-13.7472 0.07168-20.58752 0.07168-4.23936 0-5.42208-0.83456-6.9888-4.66432-3.33824-7.95136-6.83008-15.90784-10.26048-23.87456l-0.66048-1.57184c-1.19296-3.072-0.81408-3.61472 2.45248-3.61472 9.43616-0.07168 18.95424 0.15872 28.3904-0.29184 5.65248-0.29696 8.03328-2.85696 8.18688-8.64256 0.22016-11.04384-0.29696-22.07744-0.14848-33.11104 0.0768-5.48864-6.84032-11.42272-11.74528-11.71968a32.8448 32.8448 0 0 0-2.74944-0.14336c-18.73408 0-37.54496 0-56.2688 0.07168-5.27872 0-5.65248 0.53248-5.65248 5.8624l0.20992 77.55776c0 4.14208-0.0768 4.21376-4.23936 4.21376h-31.22176c-4.01408 0-4.3008-0.3072-4.3008-4.28544v-39.94112c0.06144 0.14336 0.13312 0.14336 0.20992 0.14336v-40.99584c0-2.78016-1.85344-2.93888-3.78368-2.93888-10.19392 0.08704-20.44416 0.31232-30.62272 0.31232-6.92224 0-6.17984 0.8192-6.25664-6.38976-0.0768-9.90208 0-19.90144 0-29.80352 0-3.59936 0.36864-4.05504 3.94752-4.13184 10.7008-0.07168 21.33504 0 32.04096-0.07168 4.09088 0 4.31104-0.15872 4.38272-4.21376 0.0768-9.90208-0.0768-19.8144 0-29.73184 0-2.4832-1.04448-3.23072-3.41504-3.23072-6.84544 0.0768-13.76256-0.07168-20.60288 0-2.1504 0-2.89792-0.74752-2.89792-2.92352 0.09216-11.26912 0.09216-22.46144-0.06144-33.72544 0-2.70336 1.03424-3.29216 3.41504-3.29216 6.31296 0.0768 12.6464 0 18.95936 0 4.23424 0 4.45952-0.3072 4.5312-4.74112 0-2.61632 0.14848-5.24288 0-7.87456-0.07168-2.4832 1.04448-3.15904 3.34336-3.15904 9.07776 0.0768 18.22208 0.0768 27.28448 0.0768h4.97664c3.94752 0 4.0192 0 4.1728 4.05504 0.06656 2.4064-0.1536 4.87936-0.08704 7.28576 0.0768 3.3792 0.9728 4.2752 4.31616 4.36224 5.65248 0.0768 11.30496 0.0768 17.024 0.0768 14.6432 0.07168 27.3664 5.09952 37.0176 16.29184 5.35552 6.22592 8.69888 13.81888 9.216 22.14912 0.52736 8.47872 0.15872 17.03936 0.3072 25.52832 0 3.15904 0.22016 6.38976 0.36864 9.53344 0.14336 3.15904 0.896 3.97824 4.09088 3.90656a48.56832 48.56832 0 0 1 19.03104 3.15904c13.00992 5.03808 21.03296 14.18752 23.63904 28.01152a44.4416 44.4416 0 0 1 0.73728 8.33024c0.08192 17.88928 0.06656 35.78368-0.06656 53.6832zM810.14272 453.632c-5.94432 3.90656-12.1856 3.75808-19.4048 3.6864-2.23744 0-5.20192 0.07168-8.09984-0.0768-0.7424-0.07168-2.00704-0.98304-2.08896-1.5872-0.6656-8.84736-1.77152-17.792 1.35168-26.35264 2.75456-7.5776 9.58464-12.01664 17.61792-12.16a19.99872 19.99872 0 0 1 19.32288 14.336c2.30912 8.2688-1.55648 17.42336-8.69888 22.15424z" fill="#FF2E4D" p-id="12849"></path></svg>
                    </a>
                </div>
            </div>
            
        </div>

        <!-- Bottom Section -->
        <div style="text-align: center; margin-top: 40px; font-family: 'Arial', sans-serif; font-size: 16px; opacity: 0.8; color: #ccc; letter-spacing: 1px;">
            <p style="margin: 0; padding: 10px; transition: color 0.3s ease-in-out; color: #999;">&copy; 2024 AI创新平台 版权所有。</p>
        </div>

    </footer>


    <!-- Add smooth scrolling behavior -->
    <script>
        // Enable smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        function showTab(tabId) {
            var contents = document.querySelectorAll('.tab-content');
            contents.forEach(function(content) {
                content.style.display = 'none';
            });

            var selectedTab = document.getElementById(tabId);
            selectedTab.style.display = 'block';
        }
    </script>

</body>

</html>