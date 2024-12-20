/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : yii2advanced

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 20/12/2024 18:24:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ai_algorithm
-- ----------------------------
DROP TABLE IF EXISTS `ai_algorithm`;
CREATE TABLE `ai_algorithm`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `example_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `animation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_algorithm
-- ----------------------------
INSERT INTO `ai_algorithm` VALUES (1, '卷积', '卷积是一种核心技术，常用于图像处理和特征提取。', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/algorithm/2.jpg', NULL);
INSERT INTO `ai_algorithm` VALUES (2, '聚类', '聚类是一种无监督学习方法，用于将数据分组。', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/algorithm/1.png', NULL);
INSERT INTO `ai_algorithm` VALUES (3, '决策树', '决策树是一种解释性强的分类和回归方法。', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/algorithm/3.png', NULL);
INSERT INTO `ai_algorithm` VALUES (4, '主成分分析', '主成分分析是一种降维技术，用于高维数据的可视化和简化。', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/algorithm/4.png', NULL);

-- ----------------------------
-- Table structure for ai_applications
-- ----------------------------
DROP TABLE IF EXISTS `ai_applications`;
CREATE TABLE `ai_applications`  (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `industry` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `use_cases` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`application_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ai_applications
-- ----------------------------
INSERT INTO `ai_applications` VALUES (1, '疾病诊断', '基于AI技术的疾病诊断系统，能够通过医学影像、临床数据等辅助医生做出准确诊断。', '计算机视觉', '医疗', '早期癌症检测、心脏病诊断、皮肤病检测等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/medicine.jpg');
INSERT INTO `ai_applications` VALUES (2, '自动化交易', '利用AI算法进行证券、外汇等市场的自动化交易。算法能够实时分析市场数据并执行买卖操作。', '机器学习', '金融', '股票市场预测、外汇交易、风险管理等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/swap.png');
INSERT INTO `ai_applications` VALUES (3, '语音识别', '语音识别技术通过分析语音信号，将其转换为文字，可以用于多种人机交互场景。', '语音识别', '消费电子', '语音助手、智能家居控制、车载语音识别等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/voice.png');
INSERT INTO `ai_applications` VALUES (4, '自动驾驶', '自动驾驶技术使得汽车能够自主感知环境、规划路径并进行驾驶，减少人工干预。', '深度学习', '汽车', '自动驾驶、无人车、智能交通系统等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/drive.jpg');
INSERT INTO `ai_applications` VALUES (6, '图像识别', '通过深度学习和计算机视觉，系统能够自动识别图像中的物体和场景。', '计算机视觉', '零售', '产品识别、库存管理、安防监控等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/CV.jpg');
INSERT INTO `ai_applications` VALUES (7, '推荐系统', '基于用户行为数据，AI推荐系统能够提供个性化的产品、服务或内容推荐。', '机器学习', '电商、媒体', '个性化广告推送、商品推荐、电影推荐等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/ML.jpg');
INSERT INTO `ai_applications` VALUES (8, '风险评估', 'AI模型分析借贷人的财务状况、信用历史等数据，为金融机构提供风险评估。', '机器学习', '金融', '贷款审批、信用评分、保险风险评估等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/finance.jpg');
INSERT INTO `ai_applications` VALUES (9, '智能翻译', '通过自然语言处理技术，实时将一种语言转换为另一种语言。', '自然语言处理', '跨境电商', '实时语音翻译、文档翻译、多语言客户支持等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/NLP.jpg');
INSERT INTO `ai_applications` VALUES (10, '智能制造', 'AI技术在制造业中用于优化生产流程，提升生产效率和减少生产成本。', '机器学习', '制造业', '质量检测、预测性维护、生产调度等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/make.jpg');

-- ----------------------------
-- Table structure for ai_learning_videos
-- ----------------------------
DROP TABLE IF EXISTS `ai_learning_videos`;
CREATE TABLE `ai_learning_videos`  (
  `Video_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Instructor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Platform` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Duration` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `Video_Link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `image_urls` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Video_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_learning_videos
-- ----------------------------
INSERT INTO `ai_learning_videos` VALUES (1, '深度学习入门 - TensorFlow与Keras', 'Andrew Ng', 'bilibili', '4小时', '本课程由Andrew Ng教授主讲，深入介绍了TensorFlow和Keras在深度学习中的应用，适合初学者。', 'https://www.bilibili.com/video/BV1gE411R7jd/?spm_id_from=333.337.search-card.all.click', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aivideos/keras.jpg');
INSERT INTO `ai_learning_videos` VALUES (2, 'PyTorch从入门到精通', 'Yann LeCun', 'bilibili', '5小时', '由PyTorch的创建者Yann LeCun主讲，详细讲解了PyTorch的基本概念和实际应用，适合具有基础知识的学习者。', 'https://www.bilibili.com/video/BV1TN411k7hT/?spm_id_from=333.337.search-card.all.click', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aivideos/Pytorch.jpg');
INSERT INTO `ai_learning_videos` VALUES (3, '使用GPT-3进行自然语言处理', 'OpenAI Team', 'bilibili', '3小时', '介绍如何利用OpenAI GPT-3进行文本生成和自然语言处理，涵盖API的使用和最佳实践。', 'https://www.bilibili.com/video/BV1Xp4y1Y7pQ/?spm_id_from=333.337.search-card.all.click', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aivideos/人工智能.jpg');
INSERT INTO `ai_learning_videos` VALUES (4, '机器学习基础 - 从零开始学ML', 'Chris Olah', 'bilibili', '6小时', '本视频教程介绍了机器学习的基础概念，适合没有编程经验的初学者，涵盖了线性回归、决策树、SVM等基础算法。', 'https://www.bilibili.com/video/BV1tK4y1D7ms/?spm_id_from=333.337.search-card.all.click', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aivideos/机器学习.jpg');
INSERT INTO `ai_learning_videos` VALUES (5, '深度神经网络与卷积神经网络', 'Fei-Fei Li', 'bilibili', '7小时', 'Stanford大学的Fei-Fei Li教授主讲的深度神经网络与卷积神经网络课程，涵盖了计算机视觉和图像处理应用。', 'https://www.bilibili.com/video/BV1VV411478E/?spm_id_from=333.337.search-card.all.click', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aivideos/卷积.jpg');
INSERT INTO `ai_learning_videos` VALUES (6, 'python从入门到精通', '黑马', 'bilibili', '4小时', '本课程由黑马程序员讲解', 'https://www.bilibili.com/video/BV1qW4y1a7fU/?spm_id_from=333.337.search-card.all.click&vd_source=a8a1d56f17a9881076dcfc2f92c8ff6b', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aivideos/Python.jpg');

-- ----------------------------
-- Table structure for ai_news
-- ----------------------------
DROP TABLE IF EXISTS `ai_news`;
CREATE TABLE `ai_news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `published_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `source` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` enum('draft','published','archived') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT 'draft',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_news
-- ----------------------------
INSERT INTO `ai_news` VALUES (12, '生成式AI为电影制作注入新活力', '随着生成式人工智能技术的快速发展，电影行业正在借助AI技术加速创作过程。生成式AI不仅能够帮助编剧构思剧本，还能生成逼真的视觉特效，甚至参与电影剪辑。业内专家表示，未来电影制作可能会实现高度自动化，但也引发了关于创意和版权归属的新讨论。', '张建', '2024-11-17 08:00:00', '影视科技报', '人工智能, 生成式AI, 电影制作', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/movie.jpg', 'published');
INSERT INTO `ai_news` VALUES (13, 'AI技术助力癌症早期筛查', '最新研究表明，AI算法可以通过分析海量的医学影像数据，在癌症早期筛查中达到甚至超越人类专家的水平。研究团队在一项临床试验中测试了一款基于深度学习的AI模型，该模型能够在乳腺癌、肺癌等高发癌症的早期筛查中显著提高诊断准确率。', '李倩', '2024-11-16 19:30:00', '医学前沿', '人工智能, 医疗, 癌症筛查', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/medical.jpg', 'published');
INSERT INTO `ai_news` VALUES (14, 'AI引领电子商务的个性化革命', '人工智能正在彻底改变电子商务行业。通过分析用户行为数据，AI能够预测消费者需求并推荐个性化商品，从而提高用户体验和销售转化率。例如，某知名电商平台近期推出了一个AI驱动的推荐系统，用户点击率增长了25%。然而，隐私问题仍然是行业需要解决的重要挑战。', '王辉', '2024-11-16 14:00:00', '商业创新周刊', '人工智能, 电子商务, 个性化推荐', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/electroshop.jpg', 'published');
INSERT INTO `ai_news` VALUES (15, 'AI在智能农业中的应用前景广阔', '智能农业正在借助AI技术实现全新突破。通过无人机监控、精准施肥、智能灌溉等手段，AI帮助农民优化生产效率并降低成本。一项最新研究显示，结合AI的农业管理系统可以将粮食产量提升15%以上，同时减少30%的化学肥料使用量，这对于可持续发展具有重要意义。', '刘洋', '2024-11-15 10:45:00', '农业科技导报', '人工智能, 农业, 智能科技', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/agriculture.jpg', 'published');
INSERT INTO `ai_news` VALUES (16, 'AI驱动的深海探测技术取得突破', '在一项旨在探索深海生态系统的国际合作项目中，科学家们利用AI技术对海底图像和数据进行实时分析。该AI系统能够自动识别深海生物并监测环境变化，其效率是传统人工方法的10倍。这一技术的广泛应用将为海洋保护提供强有力的支持，同时为能源勘探和海底矿产开发打开新局面。', '赵鹏', '2024-11-14 16:30:00', '海洋探索杂志', '人工智能, 深海探测, 环境保护', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/deepsea.jpg', 'published');
INSERT INTO `ai_news` VALUES (17, '人工智能在法律行业的应用扩大', '法律行业正在迅速拥抱人工智能，从合同审核到诉讼分析，AI工具正逐步成为律师的重要助手。最近发布的一款法律AI助手可以在几分钟内完成数百页合同的审查，并标记潜在的法律风险。这不仅提高了效率，还降低了人为错误的可能性。然而，AI的法律责任和透明性仍是未来发展的重要课题。', '陈敏', '2024-11-14 09:15:00', '法律科技论坛', '人工智能, 法律, 效率提升', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/law.jpg', 'published');
INSERT INTO `ai_news` VALUES (18, 'AI助推清洁能源革命', '人工智能正在帮助优化清洁能源的生产和使用。研究人员通过AI技术预测风能和太阳能的发电量，从而更高效地分配电网资源。一项研究指出，AI的介入可以使清洁能源的利用率提高20%，并减少能源浪费。多家能源公司已经开始部署AI系统以提升运营效率和经济效益。', '许明', '2024-11-13 18:00:00', '新能源观察', '人工智能, 清洁能源, 智能电网', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/energy.jpg', 'published');
INSERT INTO `ai_news` VALUES (19, 'AI在游戏行业的深度应用', '游戏开发商正大规模采用人工智能技术来改善玩家体验。AI不仅可以生成更加逼真的游戏角色和场景，还能根据玩家行为调整游戏难度。近期发布的一款大型多人在线游戏通过AI驱动的动态故事线吸引了数百万玩家的参与。专家认为，AI将推动游戏行业进入一个更加沉浸式和互动性的新时代。', '郭强', '2024-11-12 20:00:00', '游戏开发者杂志', '人工智能, 游戏开发, 用户体验', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Ainews/game.jpg', 'published');

-- ----------------------------
-- Table structure for ai_technology
-- ----------------------------
DROP TABLE IF EXISTS `ai_technology`;
CREATE TABLE `ai_technology`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `application_area` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_technology
-- ----------------------------
INSERT INTO `ai_technology` VALUES (8, '机器学习', '机器学习是一种通过数据和经验让计算机自主学习和改进的人工智能技术。其核心思想是利用算法从数据中挖掘规律，并在没有显式编程的情况下进行预测或决策。机器学习的应用范围广泛，涵盖了分类、回归、聚类等多个问题领域。它能够帮助计算机系统通过学习历史数据来识别模式，并且根据新的输入进行推理或预测。例如，机器学习算法可以应用于自动驾驶汽车的环境感知、语音识别系统的语音输入转换、电子商务平台的用户行为分析等。机器学习的常见算法包括决策树、支持向量机、K-近邻、神经网络等。随着数据量的增加和计算能力的提升，机器学习已经成为许多领域中的核心技术，推动了智能化决策和自动化系统的发展。', '数据分析、自动驾驶、语音识别', '2024-12-01 10:23:40');
INSERT INTO `ai_technology` VALUES (9, '自然语言处理', '自然语言处理（NLP）是计算机科学与人工智能领域的一个重要分支，旨在使计算机能够理解、解析和生成人类语言。自然语言处理不仅涉及计算机如何“读取”文本，还包括语音识别、语法分析、情感分析等技术。它的应用范围非常广泛，例如，自动翻译系统可以帮助人们克服语言障碍，聊天机器人能够进行基于文本的自然对话，情感分析工具能够识别文本中的情感倾向，这些都依赖于自然语言处理技术。NLP结合了语言学、计算机科学和统计学的方法，使得计算机能够从大量的文本数据中提取有用的信息，并进行有效的决策。近年来，随着深度学习的引入，NLP的效果和应用得到了极大的提升，尤其在语音助手、智能客服、自动翻译等领域有着广泛的应用。', '聊天机器人、翻译、情感分析', '2024-12-01 10:23:40');
INSERT INTO `ai_technology` VALUES (10, '深度学习', '深度学习是机器学习的一种方法，基于多层神经网络模型，能够从大量数据中自动学习特征，并进行更高效的表示学习。深度学习的核心理念是通过多层次的非线性变换，自动提取数据中的特征层次结构。与传统的机器学习方法不同，深度学习不需要人为手动设计特征，而是通过算法自学特征，尤其在大数据和计算能力极其丰富的背景下，表现出了超凡的性能。深度学习广泛应用于语音识别、图像识别、自然语言处理等领域。具体应用包括语音助手（如Siri和Google Assistant）、自动驾驶汽车（通过摄像头和传感器分析环境）、医疗影像分析（如自动诊断疾病）等。深度学习的快速发展得益于大数据的积累、计算能力的提升以及卷积神经网络（CNN）、循环神经网络（RNN）等先进模型的提出。', '图像识别、语音识别、自动驾驶', '2024-12-01 10:23:40');
INSERT INTO `ai_technology` VALUES (11, '计算机视觉', '计算机视觉是人工智能的一个重要研究方向，旨在让计算机通过分析图像或视频，理解和感知周围环境。计算机视觉技术让机器能够像人类一样“看”和“理解”图像信息，包括物体检测、图像分类、图像分割、目标追踪等任务。计算机视觉的工作原理通常是通过图像预处理、特征提取、模式识别等步骤，分析图像中的信息，并做出判断。应用领域非常广泛，尤其在自动驾驶、安防监控、医疗影像、工业检测等行业有着广泛的应用。例如，在自动驾驶中，计算机视觉帮助车辆识别道路、行人、交通标志等；在医疗领域，计算机视觉用于分析X光片和MRI图像，辅助医生做出诊断。近年来，随着深度学习技术的发展，计算机视觉的准确率和效率得到了大幅提升。', '面部识别、自动驾驶、医学影像', '2024-12-01 10:23:40');
INSERT INTO `ai_technology` VALUES (12, '强化学习', '强化学习是一种让智能体通过与环境的交互，学习如何在给定的情境下做出最优决策的算法。强化学习的基本原理是通过奖励和惩罚机制，引导智能体选择最佳的行动策略。与传统的监督学习和无监督学习不同，强化学习的目标不是直接通过标签来训练模型，而是让智能体在与环境互动的过程中，通过试错（exploration）来优化其行为，从而最大化长期回报。强化学习在自动驾驶、机器人控制、游戏AI等领域取得了显著成果。例如，AlphaGo通过强化学习成功战胜了世界围棋冠军，证明了该技术在复杂策略决策中的巨大潜力。在工业生产和智能决策领域，强化学习也逐渐展现出了自动优化和智能决策的优势。', '机器人控制、游戏AI、智能决策', '2024-12-01 10:23:40');
INSERT INTO `ai_technology` VALUES (13, '专家系统', '专家系统是模拟专家决策过程的人工智能系统，旨在为复杂问题提供解决方案。通过知识库和推理引擎，专家系统能够模拟专家在特定领域中的知识和经验，并在给定的条件下做出合理的决策。专家系统的工作原理通常基于一系列“如果-那么”（IF-THEN）规则，通过规则推理帮助系统给出建议或诊断结果。例如，在医疗领域，专家系统可以根据病人的症状、体征和历史病史，提供可能的诊断建议。在金融领域，专家系统可以帮助投资者做出决策。专家系统的优点是能够快速处理大量的信息，并为用户提供一致且高效的建议，尤其适用于专家资源短缺的情况下。然而，专家系统的知识获取和维护通常需要领域专家的持续参与，因此，系统的扩展和更新可能具有一定的挑战性。', '医疗诊断、金融预测、工程设计', '2024-12-01 10:23:40');

-- ----------------------------
-- Table structure for ai_tools
-- ----------------------------
DROP TABLE IF EXISTS `ai_tools`;
CREATE TABLE `ai_tools`  (
  `Tool_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tool_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Tool_Type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `Official_Link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Tool_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_tools
-- ----------------------------
INSERT INTO `ai_tools` VALUES (1, 'TensorFlow', '机器学习框架 (ML)', '一个由Google开发的开源机器学习框架，广泛应用于深度学习和神经网络训练。', 'https://www.tensorflow.org', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/TensorFlow.jpg');
INSERT INTO `ai_tools` VALUES (2, 'PyTorch', '机器学习框架 (ML)', '由Facebook开发的深度学习框架，提供灵活性和动态计算图，常用于学术研究和工业应用。', 'https://pytorch.org', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/PyTorch.jpg');
INSERT INTO `ai_tools` VALUES (3, 'OpenAI GPT-3', '自然语言处理 (NLP)', '由OpenAI开发的一个大规模语言生成模型，擅长文本生成、问答、翻译等任务。', 'https://www.openai.com', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/GPT-3.jpg');
INSERT INTO `ai_tools` VALUES (4, 'Keras', '机器学习框架 (ML)', '高层神经网络API，使用TensorFlow或Theano作为后端，简化深度学习模型的构建与训练。', 'https://www.keras.io', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/Keras.jpg');
INSERT INTO `ai_tools` VALUES (5, 'Scikit-learn', '机器学习库 (ML)', '一个广泛使用的Python机器学习库，提供常见的机器学习算法实现，适用于数据挖掘和数据分析。', 'https://scikit-learn.org', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/Scikit-learn.jpg');
INSERT INTO `ai_tools` VALUES (6, 'MXNet', '机器学习框架 (ML)', 'Apache MXNet是一个高效的开源深度学习框架，用于分布式和云环境中的灵活和高效的GPU计算。', 'https://mxnet.apache.org/', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/Apache_MXNet.jpg');
INSERT INTO `ai_tools` VALUES (7, 'OpenCV', '计算机视觉库 (CV)', 'OpenCV是一个开源的计算机视觉和机器学习软件库，提供了大量的视觉处理和计算功能。', 'https://opencv.org/', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/cv.jpg');
INSERT INTO `ai_tools` VALUES (8, 'NumPy', '科学计算库 (SC)', 'NumPy是一个开源的Python科学计算库，用于进行大规模数值和矩阵运算。', 'https://numpy.org/', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/numpy.jpg');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `author_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Anonymous' COMMENT 'Comment Author Name',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 108 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, '机器学习', '机器学习真是好！', '2024-12-01 11:00:53', 'Anonymous');
INSERT INTO `comments` VALUES (2, '机器学习', '机器学习是人工智能的一个重要分支，旨在通过数据驱动的方式让计算机自动学习模式并做出预测或决策。', '2024-12-01 12:20:18', '张伟');
INSERT INTO `comments` VALUES (3, '机器学习', '机器学习的核心是算法的训练与优化，广泛应用于图像识别、自然语言处理等领域。', '2024-12-01 12:20:18', '李娜');
INSERT INTO `comments` VALUES (4, '机器学习', '机器学习的研究不仅关注算法本身，还包括如何处理大规模数据、提高计算效率等方面的问题。', '2024-12-01 12:20:18', '王强');
INSERT INTO `comments` VALUES (5, '自然语言处理', '自然语言处理是计算机科学和人工智能领域中的一个重要方向，旨在让计算机能够理解和生成人类语言。', '2024-12-01 12:27:58', '张伟');
INSERT INTO `comments` VALUES (6, '自然语言处理', '自然语言处理包括文本分析、语义理解、情感分析等多个子领域，在搜索引擎和语音助手中应用广泛。', '2024-12-01 12:27:58', '李娜');
INSERT INTO `comments` VALUES (7, '自然语言处理', '自然语言处理的挑战之一是多义词和同义词的处理，这需要精确的语境理解。', '2024-12-01 12:27:58', '王强');
INSERT INTO `comments` VALUES (8, '自然语言处理', '随着深度学习的进展，现代自然语言处理方法逐渐从传统的规则和模型转向基于神经网络的方法。', '2024-12-01 12:27:58', '赵丽');
INSERT INTO `comments` VALUES (9, '自然语言处理', '自然语言处理技术被广泛应用于翻译、对话系统、文本生成等多个领域，提升了人机交互的效率和智能化水平。', '2024-12-01 12:27:58', '陈涛');
INSERT INTO `comments` VALUES (10, '自然语言处理', '自然语言处理不仅仅是语言的处理，更涉及到语言背后的语义、情感和上下文理解。', '2024-12-01 12:27:58', '李梅');
INSERT INTO `comments` VALUES (11, '自然语言处理', '通过预训练语言模型，现有的自然语言处理方法能处理更加复杂的任务，例如机器翻译和文本摘要。', '2024-12-01 12:27:58', '刘强');
INSERT INTO `comments` VALUES (12, '自然语言处理', '自然语言处理在信息检索、舆情分析、医疗健康等领域的应用正在快速增长。', '2024-12-01 12:27:58', '王彬');
INSERT INTO `comments` VALUES (13, '自然语言处理', '自然语言处理技术需要大量的标注数据进行训练，但数据获取的难度和成本一直是技术发展的瓶颈。', '2024-12-01 12:27:58', '张琳');
INSERT INTO `comments` VALUES (14, '自然语言处理', '自然语言处理的研究发展与计算能力密切相关，深度学习为该领域带来了巨大的突破。', '2024-12-01 12:27:58', '李佳');
INSERT INTO `comments` VALUES (15, '自然语言处理', '情感分析是自然语言处理中一个非常重要的任务，广泛应用于舆情分析、市场调研等领域。', '2024-12-01 12:27:58', '王俊');
INSERT INTO `comments` VALUES (16, '自然语言处理', '自然语言处理的一个关键挑战是如何消除歧义，使得计算机能够准确理解人类语言中的复杂含义。', '2024-12-01 12:27:58', '陈静');
INSERT INTO `comments` VALUES (17, '自然语言处理', '基于自然语言处理的对话系统正在成为智能客服、语音助手等领域的重要组成部分。', '2024-12-01 12:27:58', '刘晨');
INSERT INTO `comments` VALUES (18, '自然语言处理', '机器翻译是自然语言处理中的经典任务之一，近年来随着深度学习的进展，翻译质量有了显著提升。', '2024-12-01 12:27:58', '赵璐');
INSERT INTO `comments` VALUES (19, '自然语言处理', '自然语言处理技术结合知识图谱可以提升文本分析的精确度和上下文理解能力。', '2024-12-01 12:27:58', '张航');
INSERT INTO `comments` VALUES (20, '自然语言处理', '自然语言处理技术的发展使得计算机能够实现更加自然和智能的人机交互。', '2024-12-01 12:27:58', '李轩');
INSERT INTO `comments` VALUES (21, '自然语言处理', '自动摘要是自然语言处理中非常具有挑战性的问题，尤其是在信息量庞大的情况下。', '2024-12-01 12:27:58', '王雪');
INSERT INTO `comments` VALUES (22, '自然语言处理', '语言模型的训练是自然语言处理的核心技术之一，近年来基于Transformer的模型表现出色。', '2024-12-01 12:27:58', '孙鹏');
INSERT INTO `comments` VALUES (23, '自然语言处理', '自然语言处理中的命名实体识别是抽取关键信息、提高文本理解能力的重要技术。', '2024-12-01 12:27:58', '刘娜');
INSERT INTO `comments` VALUES (24, '自然语言处理', '自适应自然语言处理模型能够根据不同应用场景进行灵活调整，提升模型的通用性。', '2024-12-01 12:27:58', '王瑞');
INSERT INTO `comments` VALUES (25, '自然语言处理', '自然语言处理的进展离不开大数据的支撑，数据的多样性和规模决定了模型的能力。', '2024-12-01 12:27:58', '李文');
INSERT INTO `comments` VALUES (26, '自然语言处理', '情感分类是自然语言处理中的一种常见任务，通常用于社交媒体数据的分析。', '2024-12-01 12:27:58', '赵敏');
INSERT INTO `comments` VALUES (27, '自然语言处理', '自然语言处理的未来趋势是多模态的，结合语音、图像、视频等数据来全面理解人类语言。', '2024-12-01 12:27:58', '周婷');
INSERT INTO `comments` VALUES (28, '自然语言处理', '自然语言处理技术的发展为医疗健康、法律咨询等专业领域提供了智能化的解决方案。', '2024-12-01 12:27:58', '王晨');
INSERT INTO `comments` VALUES (29, '自然语言处理', '跨语言的信息检索是自然语言处理中的一大挑战，尤其是涉及不同语言的文本数据时。', '2024-12-01 12:27:58', '陈阳');
INSERT INTO `comments` VALUES (30, '自然语言处理', '自然语言生成技术不仅能够自动生成文本，还能生成与上下文高度相关的内容。', '2024-12-01 12:27:58', '刘薇');
INSERT INTO `comments` VALUES (31, '自然语言处理', '自然语言处理的研究突破性进展将推动更多智能系统的出现，提升我们的生活质量。', '2024-12-01 12:27:58', '张玲');
INSERT INTO `comments` VALUES (32, '自然语言处理', '深度学习技术使得自然语言处理的性能大幅提高，尤其是在文本分类和情感分析方面。', '2024-12-01 12:27:58', '李婷');
INSERT INTO `comments` VALUES (33, '自然语言处理', '自然语言处理中的文本生成技术逐步应用于新闻写作、广告生成等多个领域。', '2024-12-01 12:27:58', '王峰');
INSERT INTO `comments` VALUES (34, '自然语言处理', '自然语言处理技术将进一步改善机器翻译质量，让跨语言沟通变得更加便捷。', '2024-12-01 12:27:58', '周丽');
INSERT INTO `comments` VALUES (35, '自然语言处理', '语音识别技术结合自然语言处理可以为用户提供更为智能的语音助手服务。', '2024-12-01 12:27:58', '刘鑫');
INSERT INTO `comments` VALUES (36, '自然语言处理', '自然语言处理技术能够识别文本中的情感倾向，为社会舆情分析提供支持。', '2024-12-01 12:27:58', '陈晨');
INSERT INTO `comments` VALUES (37, '自然语言处理', '知识图谱和自然语言处理结合，将为智能搜索引擎提供更高效的信息索引。', '2024-12-01 12:27:58', '赵睿');
INSERT INTO `comments` VALUES (38, '自然语言处理', '现代自然语言处理系统强调上下文建模，以提高语言理解的准确性。', '2024-12-01 12:27:58', '张冰');
INSERT INTO `comments` VALUES (39, '自然语言处理', '自然语言处理的演化趋势是从单一任务转向多任务、跨任务的联合学习。', '2024-12-01 12:27:58', '李亮');
INSERT INTO `comments` VALUES (40, '自然语言处理', '文本匹配和问题回答是自然语言处理中的重要应用，广泛应用于问答系统中。', '2024-12-01 12:27:58', '王璐');
INSERT INTO `comments` VALUES (41, '自然语言处理', '自然语言处理结合深度学习技术，能够实现自动翻译和语义识别等任务。', '2024-12-01 12:27:58', '李洪');
INSERT INTO `comments` VALUES (42, '深度学习', '深度学习是一种基于人工神经网络的学习方法，通过大量的数据训练模型以进行自动特征提取。', '2024-12-01 12:30:02', '李强');
INSERT INTO `comments` VALUES (43, '深度学习', '深度学习的核心思想是通过多层的神经网络进行数据处理，能够自动学习数据中的复杂模式。', '2024-12-01 12:30:02', '王涛');
INSERT INTO `comments` VALUES (44, '深度学习', '深度学习在图像识别、语音识别等领域表现出了巨大的潜力和优势，尤其是在大数据环境下。', '2024-12-01 12:30:02', '陈敏');
INSERT INTO `comments` VALUES (45, '深度学习', '随着计算能力的提升和大数据的支持，深度学习在诸多领域逐渐取代了传统机器学习方法。', '2024-12-01 12:30:02', '周雪');
INSERT INTO `comments` VALUES (46, '深度学习', '深度学习不仅是人工智能的重要组成部分，还推动了自动驾驶、医疗影像分析等技术的快速发展。', '2024-12-01 12:30:02', '刘宇');
INSERT INTO `comments` VALUES (47, '深度学习', '深度学习的模型通常由多层神经网络组成，每一层都能学习到不同层次的数据特征。', '2024-12-01 12:30:02', '郑华');
INSERT INTO `comments` VALUES (48, '深度学习', '深度学习的突破离不开数据和计算资源，现代神经网络的规模往往非常庞大，需要强大的硬件支持。', '2024-12-01 12:30:02', '李娜');
INSERT INTO `comments` VALUES (49, '深度学习', '深度学习的训练过程需要大量的标注数据，以及高效的计算架构来加速训练速度。', '2024-12-01 12:30:02', '王健');
INSERT INTO `comments` VALUES (50, '深度学习', '深度学习已经在许多传统领域取得了显著进展，如语音识别、自然语言处理、机器翻译等。', '2024-12-01 12:30:02', '张鹏');
INSERT INTO `comments` VALUES (51, '深度学习', '深度学习的核心优势在于其强大的自动学习能力，能够从海量数据中挖掘出有价值的特征。', '2024-12-01 12:30:02', '朱琳');
INSERT INTO `comments` VALUES (52, '深度学习', '卷积神经网络（CNN）在图像处理领域的表现非常出色，已经成为计算机视觉中的重要工具。', '2024-12-01 12:30:02', '孙峰');
INSERT INTO `comments` VALUES (53, '深度学习', '深度学习的普及推动了许多新兴技术的发展，如智能语音助手、自动驾驶系统等。', '2024-12-01 12:30:02', '张丽');
INSERT INTO `comments` VALUES (54, '深度学习', '长短期记忆网络（LSTM）在序列数据处理方面具有优势，广泛应用于语音识别和文本生成任务。', '2024-12-01 12:30:02', '李俊');
INSERT INTO `comments` VALUES (55, '深度学习', '深度学习的可解释性一直是一个难题，如何让深度学习模型变得更加透明是当前的研究热点。', '2024-12-01 12:30:02', '王菲');
INSERT INTO `comments` VALUES (56, '深度学习', '生成对抗网络（GAN）通过对抗训练的方式，能够生成高质量的图像、视频等内容。', '2024-12-01 12:30:02', '赵伟');
INSERT INTO `comments` VALUES (57, '深度学习', '深度学习的训练过程通常需要大量的计算资源和时间，GPU加速使得训练速度大大提高。', '2024-12-01 12:30:02', '张婷');
INSERT INTO `comments` VALUES (58, '深度学习', '深度学习与传统机器学习相比，能够更好地应对复杂任务，尤其是在图像和语言的处理方面。', '2024-12-01 12:30:02', '周磊');
INSERT INTO `comments` VALUES (59, '深度学习', '深度学习的应用不仅仅局限于人工智能领域，还包括医学、金融、交通等多个行业。', '2024-12-01 12:30:02', '李雪');
INSERT INTO `comments` VALUES (60, '深度学习', '通过强化学习，深度学习能够实现自动决策和策略优化，在游戏、机器人等领域具有广泛应用。', '2024-12-01 12:30:02', '陈欣');
INSERT INTO `comments` VALUES (61, '深度学习', '深度学习的突破性进展依赖于大规模数据集的支持，这也促进了数据驱动型应用的发展。', '2024-12-01 12:30:02', '王娜');
INSERT INTO `comments` VALUES (62, '深度学习', '深度学习模型通常包含多个神经元层，通过梯度下降算法不断调整网络参数，以减少误差。', '2024-12-01 12:30:02', '李涛');
INSERT INTO `comments` VALUES (63, '深度学习', '深度学习的发展不仅得益于计算能力的提升，还与优化算法的进步密切相关。', '2024-12-01 12:30:02', '赵艳');
INSERT INTO `comments` VALUES (64, '深度学习', '深度学习中的卷积神经网络（CNN）是处理图像数据时最常用的网络结构之一。', '2024-12-01 12:30:02', '黄娟');
INSERT INTO `comments` VALUES (65, '深度学习', '自然语言处理任务中的深度学习应用越来越广泛，尤其是语言模型和机器翻译的进展。', '2024-12-01 12:30:02', '李宁');
INSERT INTO `comments` VALUES (66, '深度学习', '深度学习的演进伴随着激活函数、损失函数等技术的不断创新，推动了整个领域的发展。', '2024-12-01 12:30:02', '王东');
INSERT INTO `comments` VALUES (67, '深度学习', '自监督学习是深度学习中的一个新兴方向，通过无监督的方式从数据中学习出有用的特征。', '2024-12-01 12:30:02', '赵东');
INSERT INTO `comments` VALUES (68, '深度学习', '深度学习的应用场景非常广泛，涵盖了计算机视觉、语音识别、自动驾驶等多个领域。', '2024-12-01 12:30:02', '李伟');
INSERT INTO `comments` VALUES (69, '深度学习', '深度学习在医学影像分析中的应用具有巨大的潜力，能够辅助医生提高诊断准确率。', '2024-12-01 12:30:02', '张珊');
INSERT INTO `comments` VALUES (70, '深度学习', '深度学习技术正在推动人工智能的发展，使得机器能够像人类一样进行思考、理解和决策。', '2024-12-01 12:30:02', '周慧');
INSERT INTO `comments` VALUES (71, '深度学习', '深度学习和传统机器学习相比，能够在更多复杂问题中展现出更好的性能，尤其是在大数据环境下。', '2024-12-01 12:30:02', '王琳');
INSERT INTO `comments` VALUES (72, '深度学习', '深度学习为语音识别和图像分类等任务提供了新的解决方案，极大地提升了这些领域的性能。', '2024-12-01 12:30:02', '张佳');
INSERT INTO `comments` VALUES (73, '深度学习', '深度学习的未来将更多依赖于跨领域的集成，结合各类算法和数据来实现智能决策。', '2024-12-01 12:30:02', '李宇');
INSERT INTO `comments` VALUES (74, '深度学习', '深度学习的优化目标是通过不断调整模型的参数，减少预测误差，提高模型的泛化能力。', '2024-12-01 12:30:02', '王亮');
INSERT INTO `comments` VALUES (75, '深度学习', '深度学习中，损失函数的选择对模型的训练效果和收敛速度有着重要影响。', '2024-12-01 12:30:02', '赵新');
INSERT INTO `comments` VALUES (76, '计算机视觉', '计算机视觉是让计算机模拟人类视觉系统的技术，旨在使机器能够理解和处理视觉信息。', '2024-12-01 12:31:04', '李强');
INSERT INTO `comments` VALUES (77, '计算机视觉', '计算机视觉广泛应用于人脸识别、图像分类、目标检测等领域，已经成为人工智能的重要组成部分。', '2024-12-01 12:31:04', '王涛');
INSERT INTO `comments` VALUES (78, '计算机视觉', '计算机视觉的核心任务是从图像或视频中提取有意义的信息，推动了自动驾驶和安防监控等技术的应用。', '2024-12-01 12:31:04', '陈敏');
INSERT INTO `comments` VALUES (79, '计算机视觉', '计算机视觉依赖于深度学习，尤其是卷积神经网络（CNN）在图像处理方面取得了突破性进展。', '2024-12-01 12:31:04', '周雪');
INSERT INTO `comments` VALUES (80, '计算机视觉', '计算机视觉在医疗影像领域得到了广泛应用，通过深度学习模型辅助医生进行诊断。', '2024-12-01 12:31:04', '刘宇');
INSERT INTO `comments` VALUES (81, '计算机视觉', '计算机视觉不仅是人工智能的一个分支，它还在机器人、自动驾驶等多个领域产生了深远影响。', '2024-12-01 12:31:04', '郑华');
INSERT INTO `comments` VALUES (82, '计算机视觉', '计算机视觉技术已经应用到手机、安防、医疗等多个行业，极大地提高了工作效率和准确度。', '2024-12-01 12:31:04', '李娜');
INSERT INTO `comments` VALUES (83, '计算机视觉', '随着图像处理算法的不断优化，计算机视觉能够更精准地识别物体、场景和人物。', '2024-12-01 12:31:04', '王健');
INSERT INTO `comments` VALUES (84, '计算机视觉', '计算机视觉中的目标检测技术能够识别和定位图像中的特定对象，广泛应用于无人驾驶和安防监控。', '2024-12-01 12:31:04', '张鹏');
INSERT INTO `comments` VALUES (85, '计算机视觉', '深度学习特别是在卷积神经网络（CNN）领域的突破，使计算机视觉技术取得了显著进展。', '2024-12-01 12:31:04', '朱琳');
INSERT INTO `comments` VALUES (86, '计算机视觉', '计算机视觉可以实现自动化的图像分类、物体追踪、图像增强等功能，推动了许多行业的智能化发展。', '2024-12-01 12:31:04', '孙峰');
INSERT INTO `comments` VALUES (87, '计算机视觉', '计算机视觉的一个主要挑战是处理图像中的噪声和模糊，以提高图像处理的精度和鲁棒性。', '2024-12-01 12:31:04', '张丽');
INSERT INTO `comments` VALUES (88, '计算机视觉', '随着大数据的普及，计算机视觉的训练数据量得到了显著增加，进一步促进了该领域的技术进步。', '2024-12-01 12:31:04', '李俊');
INSERT INTO `comments` VALUES (89, '计算机视觉', '计算机视觉中的图像分割技术可以将图像分解为多个区域，广泛应用于医学影像分析等领域。', '2024-12-01 12:31:04', '王菲');
INSERT INTO `comments` VALUES (90, '计算机视觉', '计算机视觉技术通过不断改进的算法，使机器能够理解和生成图像，从而实现更复杂的智能应用。', '2024-12-01 12:31:04', '赵伟');
INSERT INTO `comments` VALUES (91, '计算机视觉', '深度卷积神经网络（DCNN）在计算机视觉中已经成为主流，能够处理复杂的图像识别任务。', '2024-12-01 12:31:04', '张婷');
INSERT INTO `comments` VALUES (92, '计算机视觉', '计算机视觉的发展不仅限于图像处理，还涉及到视频分析、三维重建、实时跟踪等任务。', '2024-12-01 12:31:04', '周磊');
INSERT INTO `comments` VALUES (93, '计算机视觉', '图像识别、面部识别和物体追踪等计算机视觉技术，已经在安防和零售行业得到了广泛应用。', '2024-12-01 12:31:04', '李雪');
INSERT INTO `comments` VALUES (94, '计算机视觉', '计算机视觉通过算法和模型的优化，能够实时处理高分辨率图像，为许多行业带来革命性的变革。', '2024-12-01 12:31:04', '陈欣');
INSERT INTO `comments` VALUES (95, '计算机视觉', '计算机视觉在工业检测、无人机导航、机器人感知等领域取得了巨大成功，具有广阔的应用前景。', '2024-12-01 12:31:04', '王娜');
INSERT INTO `comments` VALUES (96, '计算机视觉', '计算机视觉中的语义分割技术可以为每一个像素赋予一个标签，广泛应用于自动驾驶和医学影像分析。', '2024-12-01 12:31:04', '李涛');
INSERT INTO `comments` VALUES (97, '计算机视觉', '计算机视觉不仅限于静态图像，还能够处理视频数据，从而实现更为复杂的任务，如视频分析和动作识别。', '2024-12-01 12:31:04', '赵艳');
INSERT INTO `comments` VALUES (98, '计算机视觉', '深度学习的应用使计算机视觉能够在大规模数据处理和实时图像处理方面表现出色。', '2024-12-01 12:31:04', '黄娟');
INSERT INTO `comments` VALUES (99, '计算机视觉', '计算机视觉技术在自动驾驶中扮演着至关重要的角色，能够帮助车辆实现实时的环境感知。', '2024-12-01 12:31:04', '李宁');
INSERT INTO `comments` VALUES (100, '计算机视觉', '计算机视觉中的姿态估计技术，使得计算机能够分析和理解人体的姿势，应用于健身、游戏等领域。', '2024-12-01 12:31:04', '王东');
INSERT INTO `comments` VALUES (101, '计算机视觉', '计算机视觉通过多模态学习，结合图像和文本信息，提升了图像理解和生成的能力。', '2024-12-01 12:31:04', '赵东');
INSERT INTO `comments` VALUES (102, '计算机视觉', '计算机视觉技术的进步推动了智能安防、无人驾驶、智慧医疗等领域的快速发展。', '2024-12-01 12:31:04', '李伟');
INSERT INTO `comments` VALUES (103, '计算机视觉', '计算机视觉中的目标跟踪技术，可以在视频中对多个目标进行追踪，并实时更新目标位置。', '2024-12-01 12:31:04', '张珊');
INSERT INTO `comments` VALUES (104, '计算机视觉', '计算机视觉技术能够通过分析图像中的数据，为图像的理解和处理提供更多的语义信息。', '2024-12-01 12:31:04', '周慧');
INSERT INTO `comments` VALUES (105, '计算机视觉', '计算机视觉通过深度神经网络，能够处理更加复杂的图像数据，应用范围逐步扩大到更多的实际场景。', '2024-12-01 12:31:04', '王琳');
INSERT INTO `comments` VALUES (106, '计算机视觉', '计算机视觉技术有望通过不断的创新和进步，推动未来人工智能技术的发展。', '2024-12-01 12:31:04', '张佳');
INSERT INTO `comments` VALUES (107, '计算机视觉', '计算机视觉的未来将在机器人、自动驾驶、医疗等领域继续扩展其应用场景。', '2024-12-01 12:31:04', '李宇');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1731852839);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1731852841);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1731852841);
INSERT INTO `migration` VALUES ('m241117_142413_Ainews', 1731853544);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `publish_time` datetime(0) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, '公安部曝光AI造谣新犯罪:6人批量发布50万篇引流虚假信息', '2024-12-12 13:59:00', '据南方都市报报道，公安部网安局近日公布的一起典型案例揭示了令人担忧的网络造谣新模式。广东广州公安机关成功侦破一起利用人工智能工具大规模制造虚假信息的犯罪团伙，抓获6名犯罪嫌疑人。\n\n犯罪团伙以赚取网络平台流量收益为目的，采用精心策划的犯罪手法:招募兼职人员注册自媒体账号，利用AI工具快速改写热门文章，批量发布虚假信息。据统计，该团伙累计发布引流图文信息超过50万篇，造成严重的网络信息污染。\n\n调查发现，犯罪分子可以轻而易举地获取各类AI写作工具。这些工具功能多样，不仅能快速生成公众号文章、视频脚本、社交媒体文案，还能进行文章续写、内容改写和图片生成等操作。令人震惊的是，一些会员服务费用极其低廉，每月仅需99元，年费还能享受五折优惠。\n\n中国计算机学会专家方宇指出，犯罪分子利用AI工具生成谣言的成本已经极其低廉。随着大模型算法开源和AI技术日益成熟，犯罪分子获取和使用这些工具的门槛正在不断降低。\n\n这一案例不仅暴露了AI技术可能被滥用的严重风险，也凸显了打击网络造谣、维护网络信息秩序的紧迫性。公安机关的成功侦破，为遏制AI违法犯罪提供了有力示范。', '人工智能, 网络造谣, 虚假信息, Midjourney', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/gongan.jpg');
INSERT INTO `news` VALUES (2, '百度文库上线「专业PPT生成」AI功能：支持一键生成高质量PPT', '2024-12-12 13:53:00', '百度文库近日宣布其AI功能再次升级，推出了「专业PPT生成」功能，旨在帮助用户轻松创建专业且高质量的PPT演示文稿。这项新功能通过AI技术，能够根据用户输入的关键词或主题，一键生成内容明确、主题突出、专业术语运用得当的PPT，极大地简化了从构思到设计再到成稿的繁琐制作过程。\n\n「专业PPT生成」功能不仅具备强大的AI生成能力，还在内容深度和广度上为用户提供全方位支持。无论是年终总结、演讲汇报还是学术报告，用户只需输入相关主题，即可快速获得一份结构清晰、逻辑合理的PPT。该功能特别适合需要梳理工作脉络、展示团队工作成果和个人工作成果的职场人士，能够帮助他们清晰地展示过去一年的工作成果和未来规划。\n\n此外，「专业PPT生成」功能采用了全新的商务化PPT版式，使得PPT在视觉上更加专业、更具说服力。从封面到目录，再到内容页和结尾页，每一页都经过精心设计，结构清晰明了。AI还会根据内容需求，智能推荐适合的版式，让用户在制作PPT的过程中更加得心应手。\n\n百度文库的这一升级，不仅提高了PPT制作的效率，还提升了演示文稿的专业度，有助于用户在职场汇报中脱颖而出。用户可以登录百度文库平台，体验「专业PPT生成」功能，从而让职场汇报变得更加轻松。\n\n百度文库通过此次升级，进一步巩固了其作为一站式AI内容获取和创作平台的地位，为用户提供更加高效、便捷的创作体验。', 'AI功能升级, 专业PPT生成, 百度文库, 高质量PPT', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/baidu.jpg');
INSERT INTO `news` VALUES (3, 'AI音频新技术MMAudio：输入视频或文本可自动给视频配音效', '2024-12-12 11:55:00', '近日，来自伊利诺伊大学厄巴纳 - 香槟分校、Sony AI 及 Sony 集团公司的研究团队推出了一项名为 MMAudio 的新技术，该技术旨在通过多模态联合训练，实现高质量的视频到音频合成。\n\nMMAudio 的核心创新在于能够利用视频和文本输入生成同步的音频，从而拓展了音频生成的应用场景，支持输入视频或文本，生成符合视频内容的音效。\n\nMMAudio 的设计使其能够在各种视听和音频文本数据集上进行训练。这种多模态联合训练的方式，不仅提高了合成音频的质量，还确保了生成的音频与视频帧之间的同步。这一同步模块的引入，极大地增强了音频生成的精确度，确保了音频和视频内容的一致性。\n\n目前，MMAudio 的代码库仍在建设中，研究人员表示单个示例推理功能已经可以正常使用，而训练代码则将在后续版本中推出。为了便于用户使用，该技术已在 Ubuntu 操作系统上进行测试，并提供了相关的安装指南。用户需要准备 Python3.9及以上版本，以及适当版本的 PyTorch 和 ffmpeg，随后可以通过简单的命令安装 MMAudio。\n\nMMAudio 在生成音频时仍存在一些局限性，比如偶尔会产生不清晰的语音或背景音乐，同时对某些陌生概念的处理也不够理想。研究团队认为，增加高质量的训练数据能够帮助解决这些问题。随着研究的不断推进，MMAudio 有望在未来进一步优化其性能。', 'MMAudio, SonyAI, 音频合成, 多模态联合训练', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/ai.jpg');
INSERT INTO `news` VALUES (4, 'ChatGPT宕机是苹果的锅？OpenAI紧急抢修，目前已恢复访问', '2024-12-12 11:31:00', 'OpenAI 旗下两大王牌产品——ChatGPT 聊天助手和 Sora 视频生成器，周三突发大面积“断网”事故，全球用户一度无法访问。OpenAI 官方在 X 平台发布声明，表示已锁定问题，正全力修复。\n\n根据分析，此次 ChatGPT 宕机事件的“罪魁祸首”可能指向苹果。就在昨天，苹果公司发布了 iPhone、iPad 和 Mac 的新软件版本，其中一项重要更新便是将 ChatGPT 功能深度集成到了 Siri 中。\n\n今天，除个别国家外，全球大量苹果设备涌入系统更新，新版 Siri 的 ChatGPT 功能无疑给 OpenAI 服务器带来了巨大的负载，最终导致服务器崩溃。\n\nOpenAI 证实，其 AI 聊天机器人 ChatGPT 正经历全球范围的宕机，不仅用户无法正常访问，iOS18.2与 Siri 的集成功能也受到影响。\n\n这次宕机事件持续超过三个小时，给数百万依赖 OpenAI 服务的用户带来了不小的麻烦。回溯今年6月，ChatGPT 也曾遭遇过长达五个多小时的宕机，这让用户对 OpenAI 服务的稳定性产生了担忧。不过，值得庆幸的是，北京时间11点左右，ChatGPT 已恢复正常访问。\n\n这次事件再次凸显了 AI 服务对算力的巨大需求，以及突发流量激增可能带来的挑战。苹果与 OpenAI 的合作，本意是为了提升用户体验，不料却引发了意想不到的“副作用”。如何平衡技术创新与服务稳定性，将成为 OpenAI 以及其他 AI 公司需要认真思考的问题。此外，这也提醒我们，在享受 AI 技术便利的同时，也要对其潜在的风险保持警惕。', 'OpenAI, ChatGPT, Sora, 苹果, 宕机事件, 技术挑战', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/chat.jpg');
INSERT INTO `news` VALUES (5, '谷歌推出 AI 编码助手 “Jules”，自动修复软件漏洞并加速开发流程', '2024-12-12 10:57:00', '谷歌于周三正式推出其人工智能编码助手 “Jules”，这一新产品标志着谷歌在自动化编程任务方面的重大进展。Jules基于最新的 Gemini2.0平台开发，能够在开发者休息时自主修复软件漏洞并准备代码更改。\n\n该系统能够与 GitHub 工作流程系统直接整合，分析复杂的代码库，实施跨多个文件的修复，并在无需持续人工监督的情况下生成详细的拉取请求。\n\nJules的发布时机恰逢软件开发行业面临持续的人才短缺和技术债务的压力。市场研究公司 Gartner 预测，到2028年，AI 辅助编码将在75% 的新应用开发中发挥作用。这一趋势表明，自动化编码助手的需求日益增加。\n\n与传统的编码助手不同，朱尔斯不仅仅提供修复建议，而是作为一个自主代理在 GitHub 生态系统内运作。它可以分析代码库、制定全面的修复计划，并同时在多个文件中执行修复任务。此外，Jules与现有开发者工作流程的无缝集成使其更加实用。\n\n在新闻发布会上，谷歌实验室产品管理总监雅克琳・孔泽尔曼强调了系统的安全性特点。她表示:“开发者在整个过程中保持控制。” Jules在采取行动前会提出建议计划，用户可以实时监控其代码编写进展，并在合并任何更改之前必须获得明确批准，确保开发过程中的人类监督。\n\nJules不仅是一个编码助手，它也是谷歌更大愿景中的一部分，该愿景是打造能够自主运作的 AI 代理，同时保持人类的监督。该系统由谷歌最新的大型语言模型 Gemini2.0驱动，显著提升了代码理解和生成能力。\n\n对于许多开发者而言，Jules引发了对职业未来的重要思考。然而，初步测试表明，Jules更有可能增强而非取代人类开发者的工作。通过使用Jules及相关工具，洛伦斯・伯克利国家实验室的研究人员将某些分析任务的处理时间从一周缩短到几分钟，使他们能够专注于更复杂的挑战。\n\n在财务方面，Jules可能带来显著影响。根据麦肯锡的统计，软件开发项目常常面临成本超支的风险，大型 IT 项目的预算通常超出45%，而交付的价值比预期减少56%。通过自动化例行的漏洞修复和维护任务，Jules有望大幅降低这些成本，并加速开发周期。\n\nJules将在初期仅向一小部分受信测试者开放，预计2025年初将实现更广泛的访问。谷歌已计划将类似功能整合到其开发生态系统中，包括 Android Studio 和 Chrome DevTools。\n\n随着技术的进步，Jules将面临越来越复杂的编程挑战，并需保持代码质量和安全性。一位大型科技公司的高级开发者表示:“这一承诺不仅在于更快地修复漏洞，更在于从根本上改变我们对软件开发的看法。”', '人工智能编码助手, Jules, Gemini2.0, GitHub, 自动化编码, 软件漏洞修复, 开发流程', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/guge.jpg');
INSERT INTO `news` VALUES (6, '谷歌推出新一代 Trillium AI 芯片，性能提升四倍', '2024-12-12 10:12:00', '谷歌近日发布了其第六代人工智能加速器芯片 Trillium，声称这一突破性的技术进步将可能从根本上改变人工智能发展的经济学，并推动机器学习的边界。Trillium 芯片在谷歌新发布的 Gemini2.0AI 模型的训练过程中展现了显著的性能提升，其训练性能是前一代产品的四倍，同时能耗大幅降低。\n\n谷歌首席执行官桑达尔・皮查伊在发布会上强调，Trillium 芯片是公司 AI 战略的核心，Gemini2.0的训练和推理均完全依赖于这一芯片。谷歌已经在单一网络中连接了超过10万颗 Trillium 芯片，构建了全球最强大的 AI 超级计算机之一。\n\nTrillium 芯片的技术规格在多个维度上取得了显著进步。与其前代产品相比，Trillium 在单颗芯片的峰值计算性能上提高了4.7倍，同时高带宽内存容量和芯片间连接带宽均实现了翻倍。更重要的是，芯片的能效提升了67%，这是在数据中心面临巨大的能耗压力下，尤其重要的指标。\n\n在经济层面，Trillium 的表现也颇具影响力。谷歌表示，与前一代芯片相比，Trillium 在训练性能上的每美元投入提升了2.5倍，可能会重塑 AI 开发的经济模型。AI21Labs 作为 Trillium 的早期用户，已经报告了显著的提升。该公司的首席技术官巴拉克・伦茨表示，规模、速度和成本效益方面的进展都十分显著。\n\n谷歌在 AI 超级计算机架构中部署 Trillium，展示了其对 AI 基础设施的综合整合方法。这一系统结合了超过10万颗 Trillium 芯片和每秒13拍比特的 Jupiter 网络，能够支持单个分布式训练任务在数十万个加速器之间的扩展。\n\nTrillium 的发布将进一步加剧 AI 硬件领域的竞争，尤其是在 Nvidia 主导的市场中。尽管 Nvidia 的 GPU 仍是许多 AI 应用的行业标准，但谷歌的定制芯片方案在特定工作负载中可能具备优势。行业分析师指出，谷歌在定制芯片开发上的巨大投资，体现了其对 AI 基础设施日益重要性的战略判断。\n\n随着技术的不断进步，Trillium 不仅仅意味着性能的提升，还预示着 AI 计算将变得更加普及和经济。谷歌表示，拥有合适的硬件和软件基础设施将是推动 AI 持续进步的关键。未来，随着 AI 模型日益复杂，基础硬件的需求将不断增加，谷歌显然意图在这一领域保持领先地位。', 'Trillium, Gemini2.0, 人工智能加速器, 谷歌, AI 芯片, 机器学习, 性能提升', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/Trillium.jpg');
INSERT INTO `news` VALUES (7, 'Midjourney 推出多人协作的世界构建工具 “Patchwork” 支持100人同一画布操作', '2024-12-12 10:09:00', 'Midjourney 是一家备受欢迎的 AI 图像生成初创公司，拥有超过2100万名 Discord 用户。近日，该公司宣布将推出一款新的世界构建工具 “Patchwork”，标志着他们从图像创作扩展到更复杂的创意合作领域。\n\n“Patchwork” 在 Midjourney 的 Discord 频道通过直播展示，用户需要将他们的 Midjourney Discord 帐户连接到他们的 Google 帐户才能访问 Patchwork 的研究预览。\n\n该工具提供一个白色的无限画布，左侧有一个工具箱，用户可以使用各种按钮来添加角色、事件、派系、地点、道具等元素。用户可以通过 “保存” 功能下载 JSON 文件，包含在画布上生成的所有 Midjourney 图像的链接。\n\n要生成新世界，用户在 “create” 屏幕顶部的编辑器栏中输入文本提示，然后从一组10种不同的图像样式中选择一种或多种。\n\n然后，这会生成一个新的白板，其中包含一堆新的静止图像资产和文本框或实体（称为“碎片(scraps）”)，包括允许用户提示符合初始世界描述的新图像或设置的输入框，甚至是全新的 AI 生成的角色描述。\n\n可以添加新的角色框，然后用户可以提示创建名称和特征。同时，用户可以在角色之间建立连接，并撰写动作序列和场景描述。\n\n共享功能允许多个用户实时协作，一个世界最多可支持100名用户在同一画布上操作，不过用户越多，画布上的协作可能会越混乱。\n\n在未来的更新中，Midjourney 计划允许非用户查看这些创作板，以便更多的创意团体能够使用这一工具。Midjourney 的 V7版本也将推出，支持角色在不同图像中的一致性。此外，Kreminski 提到，Patchwork 的背后有三个大型语言模型在运作，包括一个专为 Midjourney 定制的开源模型。\n\nKreminski 表示，未来 “Patchwork” 有望发展为更加详细和互动的3D 虚拟场景，但这一目标可能还需数年时间。与此同时，Midjourney 的创始人 David Holz 在直播中透露，近期将推出多个个性化模型模式，让用户可以根据自己的偏好调整生成内容。\n\nHolz 还提到，Midjourney 将在圣诞节后推出视频模型及更新的 AI 图像生成器 V7，提升对提示的理解能力。此外，该公司还在研发三到四个新的硬件项目，计划在未来几个月内逐步公布更多相关信息。', 'Midjourney, AI图像生成, Patchwork, Discord, 合作工具, 3D虚拟场景, V7, 视频模型', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/Midjourney.jpg');
INSERT INTO `news` VALUES (8, 'Adobe 进军 AI 视频生成！Firefly 平台内容生成破 160 亿，视频创作即将迈入“付费时代”', '2024-12-12 09:59:00', 'Adobe 正大举扩张其人工智能 （AI） 版图，在 Firefly AI 平台取得巨大成功的基础上，推出全新的高端视频生成功能。据公司称，自推出以来，Firefly 平台已生成超过160亿个内容，其影响力可见一斑。\n\n在12月11日（周三）的第四季度财报电话会议上，Adobe 宣布计划于明年初推出 AI 视频生成功能，作为一项高级服务。目前，该功能正处于有限的公开测试阶段，但已成功推动 Premiere Pro 测试版用户量增长70%。\n\nAdobe 数字媒体总裁大卫·瓦德瓦尼表示:“视频生成是一项比图像生成价值更高的活动。” 公司计划利用这项技术在其 Creative Cloud 产品中创建新的定价层级，以反映 AI 驱动的视频创作的强大能力。\n\n瓦德瓦尼强调，Adobe 的 AI 实现具有三个显著特点:“首先，我们训练模型的方式具有商业安全性。其次，我们将强大的控制力融入模型中。第三，我们将这些模型集成到我们的产品中。”\n\nAdobe 公布的截至11月29日的第四季度营收为56.1亿美元，同比增长11%。2024财年，公司实现创纪录营收215.1亿美元，较上一财年的194.2亿美元增长。该公司报告当季运营现金流达创纪录的29.2亿美元，剩余履约义务 （RPO） 达创纪录的199.6亿美元，同比增长16%。\n\nPYMNTS 此前报道称，Adobe 于10月份推出了一款 AI 视频创作工具，该工具通过使用许可内容专门解决了版权问题。2024年，美国各州立法机构提出了近700项与 AI 相关的法案，其中科罗拉多州通过了全面的立法，而加利福尼亚州则采取了更为谨慎的态度，否决了一些提案。\n\nFirefly 点亮产品组合\nAdobe 的 AI 战略涵盖其整个产品组合。其 Firefly AI 模型系列现在包括图像、矢量设计和视频功能。这些工具已集成到 Adobe 的旗舰应用程序中，包括 Photoshop、Premiere Pro 和公司的网络平台 Express。\n\nAdobe 的 AI 技术在企业中的应用尤为强劲。通过 Firefly 服务，百事可乐公司允许客户个性化定制佳得乐商品，而 Tapestry 公司则利用该技术进行大规模的内容生产。Adobe 通过 Gen Studio 进一步整合这些功能，这是一种将创意工具与营销和内容管理功能相结合的新产品，旨在帮助企业扩展内容生产。\n\nAdobe 董事长兼首席执行官 Shantanu Narayen 表示:“Firefly 在 Creative Cloud、Document Cloud 和 Experience Cloud 的旗舰应用程序中的集成，正在推动客户采用率和使用率的创纪录增长。我们工具中由 Firefly 驱动的内容生成量已超过160亿次，且过去这个季度每个月都刷新了记录。”\n\n在文档生产力方面，Adobe 的 Acrobat AI 助手的使用量环比翻了一番。该工具可以帮助用户分析和处理 PDF 文档，并已显示出生产力的提升，研究表明用户完成与文档相关的任务平均速度提高了四倍。现在，该 AI 助手可在桌面、网络和移动平台以及 Edge Chrome 和 Microsoft Teams 扩展程序中使用。\n\n关注开发者教育\n除了商业应用之外，Adobe 还宣布了一项全球性计划，旨在帮助3000万下一代学习者使用 Adobe Express 培养 AI 素养、内容创作和数字营销技能。该计划涉及与教育机构、学校、非营利组织和在线学习平台合作，提供培训、认证和职业发展途径。\n\nAdobe 的 AI 货币化方法包括三个主要渠道:即将推出的视频生成功能等高级功能、通过 Firefly 提供的企业服务以及其产品套件中集成的 AI 助手。Adobe 的目标是在通过易于使用的工具扩展市场的同时，为专业用户和企业引入高级 AI 功能。\n\nNarayen 表示:“我们高度差异化的技术平台、快速的创新步伐、多元化的上市策略以及云产品的集成，为我们未来一年的发展奠定了坚实的基础。”\n\nAdobe 表示，在加速 AI 开发的同时，将继续关注商业安全和用户控制。公司的 Firefly 模型经过专门设计，可确保创意内容的商业安全，并在其应用程序中提供 Adobe 所称的“前所未有的输出质量和用户控制”。', 'Firefly, AI视频生成, Adobe, 生成式AI, 图片生成', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/Adobe.jpg');
INSERT INTO `news` VALUES (9, '苹果与博通联手研发 AI 服务器处理器，计划2026年投产', '2024-12-12 09:49:00', '据报道，苹果公司正在与芯片巨头博通合作，研发一款专门用于支持其操作系统中 AI 服务和功能的定制服务器处理器。这一项目代号为 “Baltra”，预计将在2026年进入生产阶段。\n\n目前，关于这个项目的具体细节仍然相对较少。在今年的开发者大会上，苹果软件工程高级副总裁克雷格・费德里希曾表示，苹果的智能技术将同时运行于本地设备和私人云服务器上，而这些服务器将由苹果自家的硅芯片驱动。\n\n苹果自成立以来便一直致力于设计自家的基于 Arm 架构的芯片，因此开发专用于生成 AI 的定制芯片并不令人意外。同时，博通参与该项目也在情理之中，因为两家公司已经在5G 组件领域展开了合作。\n\n博通是一家庞大的企业，除了芯片设计外，还在高速网络领域提供知识产权许可。例如，在最近的 Hot Chips 大会上，博通展示了一款光互连芯片，它能够与 GPU 等加速器配合使用，以支持更大规模的计算集群。\n\n此外，博通还展示了其3.5D 封装技术，旨在帮助芯片制造商突破硅片极限，这与英特尔的 Ponte Vecchio GPU Max 产品相似。AMD 也采用类似的技术，打造了结合八个计算芯片和四个 I/O 芯片的 MI300X 加速器，以处理内存管理和芯片间通信。\n\n博通的3.5D 极限尺寸系统封装技术（3.5D XDSiP）为客户提供了构建多芯片处理器的蓝图。类似于 AMD 的 MI300X，博通的设计在逻辑芯片上堆叠计算芯片，并将其他 I/O 功能分配到单独的芯片中。博通表示，其设计使用了面对面的方式，能够实现更高的芯片间连接速度和更短的信号路由。\n\n虽然博通的计划与苹果的 Baltra 项目时间相同，但目前尚不清楚两者是否有关联。不过，苹果的一些芯片设计，如 M2Ultra，已经采用了多芯片架构，因此可以推测可能会有某种重叠。\n\n在 Baltra 项目正式亮相之前，关于其更多的信息仍将是个谜。苹果公司在新产品发布前向来低调，而博通则通常愿意讨论其芯片技术，但对具体客户信息保持高度保密。', '苹果, 博通, Baltra, AI服务', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/pingguo.jpg');
INSERT INTO `news` VALUES (10, '苹果Apple Intelligence全新升级 与ChatGPT无缝连接', '2024-12-12 09:37:00', '12月11日，苹果公司宣布发布 iOS18.2、iPadOS18.2和 macOS Sequoia15.2，带来了全新的 Apple Intelligence（苹果智能）功能。这些功能旨在提升用户在 iPhone、iPad 和 Mac 上的使用体验，进一步拓展了用户的创作与表达能力。\n\n此次升级中，用户可以通过 “Image Playgroud” 功能轻松创作有趣的独特图像。用户可以选择主题、服饰、配件和场景，还可以利用自己的照片库生成与亲友相似的图像。\n\nImage Playgroud 支持多种风格，包括现代的3D 动画和简洁的插图风格，使得图像创作更加多样化。这一功能已集成至信息应用中，用户可以在对话中直接创建并分享图片。\n\n此外，苹果还推出了 “Genmoji” 功能，用户可以根据自己的描述生成个性化表情。这些表情不仅可以在线发送，还可以作为贴纸或反应使用，增加了日常交流的趣味性和个性化。用户可以用照片库中的图像进一步定制表情，加入不同的配饰和主题。\n\n在写作方面，苹果的 “写作工具” 得到了增强，用户现在可以通过 “描述你的变化” 选项，自定义想要进行的修改。这一新功能使得用户可以更灵活地调整文本，例如让简历更具表现力或将晚宴邀请函改写为诗歌，提升写作的趣味性和创造性。\n\n另外，iPhone16系列用户还可以利用 “视觉智能” 功能，通过 “相机控制” 快速了解周围的物体和地点。用户可以使用此功能提取和翻译文本信息，甚至查找商品的购买渠道。\n\n在聊天助手 Siri 和写作工具中，苹果也集成了 ChatGPT，用户可以通过这些工具直接访问其智能服务。这种集成使得用户在创作时可以更加高效地获得支持，无需频繁切换应用。用户可以选择是否启用 ChatGPT，确保个人信息的安全。\n\n苹果强调其在隐私保护方面的努力，所有的智能处理均在设备上完成，确保用户数据的安全性。苹果承诺，用户的数据不会被存储或共享，进一步增强了用户对苹果智能系统的信任。', '苹果, ChatGPT, Genmoji, 写作工具', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/news/pinguo.jpg');

-- ----------------------------
-- Table structure for suggestions
-- ----------------------------
DROP TABLE IF EXISTS `suggestions`;
CREATE TABLE `suggestions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suggestion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of suggestions
-- ----------------------------
INSERT INTO `suggestions` VALUES (1, '好厉害');
INSERT INTO `suggestions` VALUES (2, '123');
INSERT INTO `suggestions` VALUES (3, '1234');
INSERT INTO `suggestions` VALUES (4, '123');

-- ----------------------------
-- Table structure for team_members
-- ----------------------------
DROP TABLE IF EXISTS `team_members`;
CREATE TABLE `team_members`  (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `major` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`member_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team_members
-- ----------------------------
INSERT INTO `team_members` VALUES (1, 'asy', 20, '信息安全', '内蒙古', '阳光开朗大小孩', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/asy.jpg');
INSERT INTO `team_members` VALUES (2, 'Lorry', 20, '密码学', '安徽', '阳光开朗大男孩', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/loryy.jpg');
INSERT INTO `team_members` VALUES (3, 'Wang', 20, '密码学', '河北', '阳光开朗大男孩', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/wangwang.jpg');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'asy', 'RHPwc2nPoQMr3jCTUkLGsB42bM0uJq2-', '$2y$13$f0Spw4QLUmXsGc8qWRai1OVl2lnK.3YT8msNO0KCHww5wK4WdqIUi', NULL, 'paul_040808@qq.com', 10, 1733984269, 1733984269, 'KSxyn8jBYqF_kf0eTW26cBkbTdYxDk3B_1733984269');
INSERT INTO `user` VALUES (2, 'liu', 'KcbZ4AU1B0FyXBWW8mchr2nMyLR0KTvu', '$2y$13$eAJLSdgL7hh1NQbCThi0YOHSeaT7UMxskVoMHBLMCyrd1gasnSsSW', NULL, '1@qq.com', 10, 1734612504, 1734612504, 'pWKFqja72UWD2GWz5-f3ErjWz__PadMH_1734612504');
INSERT INTO `user` VALUES (3, '12', 'qhFheLKTsPOm9WqMuXJPHEwwbUOkb5jg', '$2y$13$oeRhGcSaFVm6J0OLirqhpOGsJd3jOC0b5KHygMiPxmWqyx9lZj0bm', NULL, '123@QQ.COM', 9, 1734612934, 1734612934, 'GUOk1oY9Vw43xJrsATRXfmUuj_r322Vr_1734612934');
INSERT INTO `user` VALUES (4, 'lorry', 'S161YarUovJfi0xJGJurzRDRWfcOm2ZT', '$2y$13$1ZWciX1bxkGc1ayuE5R3n.3P2E50juZO0M8oR/Jj9uTK/0TCSII5K', NULL, '1234@qq.com', 10, 1734613361, 1734613361, 'snQtgMcewtyrndcogLzUUG3Jsqob4cHg_1734613361');

SET FOREIGN_KEY_CHECKS = 1;
