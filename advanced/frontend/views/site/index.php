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
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

       /* 英雄部分样式 */
      .hero-section {
            position: relative;
            background-image: url('http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/home/AI.jpg');
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
        .feature-row {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .feature-box {
            border-radius: 8px;
            background-color: #ffffff;
            padding: 30px;
            margin: 10px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .feature-box:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .feature-box i {
            font-size: 40px;
            color: #007bff;
        }

        .feature-box h2 {
            color: #007bff;
            margin-top: 20px;
            font-size: 22px;
        }

        .feature-box p {
            color: #555;
            font-size: 16px;
            margin: 15px 0;
        }

        .feature-box a {
            display: inline-block;
            color: #007bff;
            text-decoration: none;
            border: 2px solid #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .feature-box a:hover {
            background-color: #007bff;
            color: white;
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
    <div class="hero-section" style="position: relative; background-image: url('http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/home/AI.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: flex-start; align-items: center; padding: 20px;">
        <!-- Title Text on the Left Side -->
        <div class="text-container" style="background: rgba(0, 0, 0, 0.5); padding: 30px; margin-left: 20px; border-radius: 10px; max-width: 400px;">
            <h1 style="font-size: 48px; color: #ffcc00; font-weight: bold; margin-bottom: 20px;">AI改变世界</h1>
            <p class="lead" style="font-size: 20px; color: white;">欢迎来到该平台</p>
            <a class="btn btn-lg btn-primary" href="#about-section" style="background: #ff6600; border: none; padding: 15px 40px; font-size: 18px; text-transform: uppercase; border-radius: 5px; color: white;">Learn More</a>
        </div>
    </div>

    <!-- Body Content -->
    <div id="about-section" class="body-content" style="margin-top: 40px; padding: 0 15px;">
        <h1 style="text-align: center; color: #000000;">网站功能</h1>

        <!-- Features Section -->
        <div class="feature-row">
            <!-- 第一列 -->
            <div class="feature-box">
                <i class="fa fa-laptop"></i>
                <h2>AI Applications</h2>
                <p>展示当今AI前沿应用</p>
                <p><a class="btn" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=app%2Findex">Explore AI Applications &raquo;</a></p>
            </div>
            <!-- 第二列 -->
            <div class="feature-box">
                <i class="fa fa-book"></i>
                <h2>AI Resources</h2>
                <p>提供有关AI的视频和工具</p>
                <p><a class="btn" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=aitools%2Findex">Browse Resources &raquo;</a></p>
            </div>
            <!-- 第三列 -->
            <div class="feature-box">
                <i class="fa fa-newspaper-o"></i>
                <h2>AI News</h2>
                <p>展示有关AI的最前沿新闻</p>
                <p><a class="btn" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=ainews%2Findex">Read the Latest &raquo;</a></p>
            </div>
            <!-- 第四列 -->
            <div class="feature-box">
                <i class="fa fa-comments"></i>
                <h2>AI technology</h2>
                <p>有关AI技术的博客</p>
                <p><a class="btn" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=aitechnology%2Findex">Read the Latest &raquo;</a></p>
            </div>
        </div>

        <div id="advantage-section" style="margin-top: 50px; padding: 0 15px;">
    <h1 style="text-align: center; color: #000000;">我们的网站优势</h1>
    
    <!-- 按钮部分，用于切换显示内容 -->
<div class="advantage-tabs" style="display: flex; justify-content: space-around; margin-top: 30px;">
    <button class="tab-button" onclick="showTab('tab1')">优秀框架</button>
    <button class="tab-button" onclick="showTab('tab2')">快速响应</button>
    <button class="tab-button" onclick="showTab('tab3')">专业团队</button>
    <button class="tab-button" onclick="showTab('tab4')">安全保障</button>
</div>

<!-- 内容部分，根据选中的按钮展示相应内容 -->
<div class="advantage-row" style="margin-top: 20px;">
    <div id="tab1" class="tab-content" style="display: block;">
        <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
            <i class="fa fa-check-circle" style="font-size: 24px; color: #008000;"></i>
            <h2 style="color: #00008B;">优秀框架</h2>
            <p style="color: #000000; font-size: 16px;">我们采用先进的Yii2框架，以其强大的功能和高度的灵活性，构建高效、可扩展的Web应用程序。。</p>
        </div>
    </div>
    <div id="tab2" class="tab-content" style="display: none;">
        <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
            <i class="fa fa-clock-o" style="font-size: 24px; color: #FF8C00;"></i>
            <h2 style="color: #00008B;">快速响应</h2>
            <p style="color: #000000; font-size: 16px;">优化的架构和高效的计算资源配置，使得我们的AI服务能够快速响应用户请求，节省时间成本。</p>
        </div>
    </div>
    <div id="tab3" class="tab-content" style="display: none;">
        <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
            <i class="fa fa-users" style="font-size: 24px; color: #00008B;"></i>
            <h2 style="color: #00008B;">专业团队</h2>
            <p style="color: #000000; font-size: 16px;">拥有一支专业的AI专家团队，随时为用户提供技术支持、解答疑问，保障服务的顺畅运行。</p>
        </div>
    </div>
    <div id="tab4" class="tab-content" style="display: none;">
        <div class="advantage-box" style="border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; text-align: center;">
            <i class="fa fa-lock" style="font-size: 24px; color: #8B0000;"></i>
            <h2 style="color: #00008B;">安全保障</h2>
            <p style="color: #000000; font-size: 16px;">严格的数据安全措施，从数据存储、传输到使用的全流程加密，保护用户数据隐私。</p>
        </div>
    </div>
</div>




        <!-- Creator Section -->
        <!-- Creator Section -->
        <div class="row" style="margin-top: 50px; text-align: center;">
        <h3 style="color: #f39c12;">Our Creators</h3>
              <!-- Creator Cards -->
            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/asy.jpg"
                         alt="Asy"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                    <h4 style="color: #ffcc00;">Asy</h4>
                    <p style="color: white;">Expert in AI research and innovation.</p>
                </div>
            </div>

            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/loryy.jpg"
                         alt="Loryy"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                    <h4 style="color: #ffcc00;">Loryy</h4>
                    <p style="color: white;">Creative thinker with a passion for AI applications.</p>
                </div>
            </div>

            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/wangwang.jpg"
                         alt="Wangwang"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                    <h4 style="color: #ffcc00;">Wangwang</h4>
                    <p style="color: white;">Innovator and leader in AI-driven solutions.</p>
                </div>
            </div>
        </div>
    </div>

    


    <!-- Footer Section -->
    <footer style="background-color: #1a1a1a; color: white; padding: 40px 20px;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: 0 auto;">

            <!-- Logo and Contact Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <img src="logo.png" alt="Logo" style="max-width: 120px; margin-bottom: 20px;">
                <p>2011 - 2024 AI Innovation Platform</p>
                <button style="background-color: #00aaff; border: none; color: white; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer;">Contact Us</button>
            </div>

            <!-- Navigation Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h4 style="color: #00aaff;">NAVIGATION</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="color: white; text-decoration: none;">Home</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Solutions</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Pricing</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Customers</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Why Us</a></li>
                </ul>
            </div>

            <!-- Developers Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h4 style="color: #00aaff;">DEVELOPERS</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="color: white; text-decoration: none;">Docs</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Setup</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Guides</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">API Reference</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px; text-align: center;">
                <h4 style="color: #00aaff;">FOLLOW US</h4>
                <div style="display: flex; justify-content: center; gap: 10px; margin-top: 10px;">
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
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