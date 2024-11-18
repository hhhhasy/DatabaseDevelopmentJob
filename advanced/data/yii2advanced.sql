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

 Date: 18/11/2024 21:16:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
