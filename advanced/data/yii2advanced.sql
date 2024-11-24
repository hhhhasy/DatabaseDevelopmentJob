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

 Date: 24/11/2024 17:52:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ai_applications
-- ----------------------------
DROP TABLE IF EXISTS `ai_applications`;
CREATE TABLE `ai_applications`  (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `industry` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `use_cases` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`application_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_applications
-- ----------------------------
INSERT INTO `ai_applications` VALUES (1, '疾病诊断', '基于AI技术的疾病诊断系统，能够通过医学影像、临床数据等辅助医生做出准确诊断。', '计算机视觉', '医疗', '早期癌症检测、心脏病诊断、皮肤病检测等');
INSERT INTO `ai_applications` VALUES (2, '自动化交易', '利用AI算法进行证券、外汇等市场的自动化交易。算法能够实时分析市场数据并执行买卖操作。', '机器学习', '金融', '股票市场预测、外汇交易、风险管理等');
INSERT INTO `ai_applications` VALUES (3, '语音识别', '语音识别技术通过分析语音信号，将其转换为文字，可以用于多种人机交互场景。', '语音识别', '消费电子', '语音助手、智能家居控制、车载语音识别等');
INSERT INTO `ai_applications` VALUES (4, '自动驾驶', '自动驾驶技术使得汽车能够自主感知环境、规划路径并进行驾驶，减少人工干预。', '深度学习', '汽车', '自动驾驶、无人车、智能交通系统等');
INSERT INTO `ai_applications` VALUES (5, '智能客服', '基于自然语言处理（NLP）的聊天机器人系统，能够理解用户提问并提供实时答复。', '自然语言处理', '服务业', '客户服务、24小时在线客服、企业咨询等');
INSERT INTO `ai_applications` VALUES (6, '图像识别', '通过深度学习和计算机视觉，系统能够自动识别图像中的物体和场景。', '计算机视觉', '零售', '产品识别、库存管理、安防监控等');
INSERT INTO `ai_applications` VALUES (7, '推荐系统', '基于用户行为数据，AI推荐系统能够提供个性化的产品、服务或内容推荐。', '机器学习', '电商、媒体', '个性化广告推送、商品推荐、电影推荐等');
INSERT INTO `ai_applications` VALUES (8, '风险评估', 'AI模型分析借贷人的财务状况、信用历史等数据，为金融机构提供风险评估。', '机器学习', '金融', '贷款审批、信用评分、保险风险评估等');
INSERT INTO `ai_applications` VALUES (9, '智能翻译', '通过自然语言处理技术，实时将一种语言转换为另一种语言。', '自然语言处理', '跨境电商', '实时语音翻译、文档翻译、多语言客户支持等');
INSERT INTO `ai_applications` VALUES (10, '智能制造', 'AI技术在制造业中用于优化生产流程，提升生产效率和减少生产成本。', '机器学习', '制造业', '质量检测、预测性维护、生产调度等');

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
  PRIMARY KEY (`Video_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_learning_videos
-- ----------------------------
INSERT INTO `ai_learning_videos` VALUES (1, '深度学习入门 - TensorFlow与Keras', 'Andrew Ng', 'Coursera', '4小时', '本课程由Andrew Ng教授主讲，深入介绍了TensorFlow和Keras在深度学习中的应用，适合初学者。', 'https://www.bilibili.com/video/BV1gE411R7jd/?spm_id_from=333.337.search-card.all.click');
INSERT INTO `ai_learning_videos` VALUES (2, 'PyTorch从入门到精通', 'Yann LeCun', 'YouTube', '5小时', '由PyTorch的创建者Yann LeCun主讲，详细讲解了PyTorch的基本概念和实际应用，适合具有基础知识的学习者。', 'https://www.bilibili.com/video/BV1TN411k7hT/?spm_id_from=333.337.search-card.all.click');
INSERT INTO `ai_learning_videos` VALUES (3, '使用GPT-3进行自然语言处理', 'OpenAI Team', 'Udemy', '3小时', '介绍如何利用OpenAI GPT-3进行文本生成和自然语言处理，涵盖API的使用和最佳实践。', 'https://www.bilibili.com/video/BV1Xp4y1Y7pQ/?spm_id_from=333.337.search-card.all.click');
INSERT INTO `ai_learning_videos` VALUES (4, '机器学习基础 - 从零开始学ML', 'Chris Olah', 'YouTube', '6小时', '本视频教程介绍了机器学习的基础概念，适合没有编程经验的初学者，涵盖了线性回归、决策树、SVM等基础算法。', 'https://www.bilibili.com/video/BV1tK4y1D7ms/?spm_id_from=333.337.search-card.all.click');
INSERT INTO `ai_learning_videos` VALUES (5, '深度神经网络与卷积神经网络', 'Fei-Fei Li', 'Stanford Online', '7小时', 'Stanford大学的Fei-Fei Li教授主讲的深度神经网络与卷积神经网络课程，涵盖了计算机视觉和图像处理应用。', 'https://www.bilibili.com/video/BV1VV411478E/?spm_id_from=333.337.search-card.all.click');

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
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ai_tools
-- ----------------------------
INSERT INTO `ai_tools` VALUES (1, 'TensorFlow', '机器学习框架 (ML)', '一个由Google开发的开源机器学习框架，广泛应用于深度学习和神经网络训练。', 'https://www.tensorflow.org', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/TensorFlow.jpg');
INSERT INTO `ai_tools` VALUES (2, 'PyTorch', '机器学习框架 (ML)', '由Facebook开发的深度学习框架，提供灵活性和动态计算图，常用于学术研究和工业应用。', 'https://pytorch.org', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/PyTorch.jpg');
INSERT INTO `ai_tools` VALUES (3, 'OpenAI GPT-3', '自然语言处理 (NLP)', '由OpenAI开发的一个大规模语言生成模型，擅长文本生成、问答、翻译等任务。', 'https://www.openai.com', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/GPT-3.jpg');
INSERT INTO `ai_tools` VALUES (4, 'Keras', '机器学习框架 (ML)', '高层神经网络API，使用TensorFlow或Theano作为后端，简化深度学习模型的构建与训练。', 'https://www.keras.io', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/Keras.jpg');
INSERT INTO `ai_tools` VALUES (5, 'Scikit-learn', '机器学习库 (ML)', '一个广泛使用的Python机器学习库，提供常见的机器学习算法实现，适用于数据挖掘和数据分析。', 'https://scikit-learn.org', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/Scikit-learn.jpg');

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
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
