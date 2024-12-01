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

 Date: 01/12/2024 12:31:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
INSERT INTO `ai_applications` VALUES (5, '智能客服', '基于自然语言处理（NLP）的聊天机器人系统，能够理解用户提问并提供实时答复。', '自然语言处理', '服务业', '客户服务、24小时在线客服、企业咨询等', 'http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/app/chat.jpg');
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
