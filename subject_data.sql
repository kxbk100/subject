/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : subject_data

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-26 03:03:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admissions
-- ----------------------------
DROP TABLE IF EXISTS `admissions`;
CREATE TABLE `admissions` (
  `id` int(11) NOT NULL,
  `title` varchar(233) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` date NOT NULL,
  `type` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admissions
-- ----------------------------
INSERT INTO `admissions` VALUES ('1', 'aaaa', 'aaaa', '<p>aaaaaaaa</p>', '2017-09-23', '0', '09', '23');
INSERT INTO `admissions` VALUES ('2', 'a\'s\'d\'f', 'a\'s\'d\'fa\'s\'d', '<p>啊手动阀手动阀</p>', '2017-09-24', '1', '09', '24');
INSERT INTO `admissions` VALUES ('3', 'b\'b\'b\'b\'b\'b', 'b\'b\'b\'b\'b\'b\'b\'b', '<p>b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b</p>', '2017-09-24', '2', '09', '24');
INSERT INTO `admissions` VALUES ('4', 'c\'c\'c', 'c\'c\'c\'c\'c', '<p>c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c</p>', '2017-09-24', '3', '09', '24');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` char(20) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `titlePhoto` varchar(255) NOT NULL,
  `small_path` varchar(255) NOT NULL,
  `photoName` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `is_default` int(255) NOT NULL DEFAULT '0',
  `istop` int(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT '是否置顶',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '我院数字媒体技术专业从2006年成立到现在已经十年了', '冯天祥', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/>时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭</p>', '2017-08-12 15:53:22', '/subject/Public/Uploads/titlePhoto/2017-08-12/1502505549_1828078032.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1502505549_1828078032.jpg', '1502505355_905680996.jpg', '08', '12', '0', '0');
INSERT INTO `news` VALUES ('2', '3-5学雷锋日 | 用爱诠释 用心服务aaa', '冯天祥', '<p>3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的</p>', '2017-08-12 15:53:32', '/subject/Public/Uploads/titlePhoto/2017-08-12/1502505565_952950844.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1502505565_952950844.jpg', '1502505394_1272509367.jpg', '08', '12', '0', '0');
INSERT INTO `news` VALUES ('4', '3-5学雷锋日 | 用爱诠释 用心服务aaa', '冯天祥', '<p>3.5学雷锋日，在西和食堂前的摊位，雷锋协会不仅服务大家，为大家修电脑，更是邀请来了许多小伙伴3.5学雷锋日，在西和食堂前的摊位啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>', '2017-08-12 15:39:25', '/subject/Public/Uploads/titlePhoto/2017-08-12/1502505565_952950844.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1502505565_952950844.jpg', '1502505394_1272509367.jpg', '08', '12', '0', '0');
INSERT INTO `news` VALUES ('3', '我院数字媒体技术专业从2006年成立到现在已经十年了', '冯天祥', '<p><strong><img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/>时光荏苒，岁月如梭，我院数字媒体技术专业从2006年成立到现在已经十年了。2016年10月22日，数字时光荏苒，岁月如梭，...</strong></p>', '2017-08-12 13:55:11', '/subject/Public/Uploads/titlePhoto/2017-08-12/1502505549_1828078032.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1502505549_1828078032.jpg', '1502505355_905680996.jpg', '08', '12', '0', '0');
INSERT INTO `news` VALUES ('5', '的首发式地方', '是打发士大夫', '<p>阿斯顿发射点发射点</p>', '2017-09-22 18:46:23', '/subject/Public/Uploads/titlePhoto/2017-09-19/1505810487_952352766.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1505810487_952352766.jpg', '馄饨.jpg', '09', '22', '0', '1');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` char(20) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `istop` int(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `type` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notice
-- ----------------------------
INSERT INTO `notice` VALUES ('1', '信息与电子工程学院各专业2017、2018年拟选考科目', '王晨韬', '<p><strong>信息与电子工程学院各专业2017、2018年拟选考<strong style=\"white-space: normal;\"><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\"><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\"><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\"><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\"><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\"><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\"><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong>科目信息与电子工程学院各专业2017、2018年拟选考科目<img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/><strong style=\"white-space: normal;\">信息与电子工程学院各专业2017、2018年拟选考<strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong>科目信息与电子工程学院各专业2017、2018年拟选考科目<img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\">信息与电子工程学院各专业2017、2018年拟选考<strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong>科目信息与电子工程学院各专业2017、2018年拟选考科目<img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\">信息与电子工程学院各专业2017、2018年拟选考<strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong>科目信息与电子工程学院各专业2017、2018年拟选考科目<img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong style=\"white-space: normal;\">信息与电子工程学院各专业2017、2018年拟选考<strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong><strong><img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong>科目信息与电子工程学院各专业2017、2018年拟选考科目<img src=\"http://img.baidu.com/hi/face/i_f17.gif\"/></strong></strong></p>', '2017-08-12 21:03:11', '08', '12', '0', '0');
INSERT INTO `notice` VALUES ('2', '浙江科技学院2017年“三位一体”综合评价招生章程', '冯天祥', '<p>浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程浙江科技学院2017年“三位一体”综合评价招生章程</p>', '2017-08-12 21:03:39', '08', '12', '1', '0');
INSERT INTO `notice` VALUES ('3', '浙江科技学院2016年三位一体招生章程', '冯天祥', '<p>浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到浙江科技学院2016年三位一体招生章程浙江科技学院2016年三位一体招生章程打到</p>', '2017-08-12 21:03:32', '08', '12', '0', '0');
INSERT INTO `notice` VALUES ('4', '信息与电子工程学院各专业2017、2018年拟选考科目', '冯天祥', '<p><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"background-color: rgb(249, 249, 249); color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center;\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"background-color: rgb(249, 249, 249); color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center;\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"background-color: rgb(249, 249, 249); color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center;\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"background-color: rgb(249, 249, 249); color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center;\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span><span style=\"color: rgb(69, 78, 89); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);\">信息与电子工程学院各专业2017、2018年拟选考科目</span></p>', '2017-08-12 21:02:29', '08', '12', '0', '1');
INSERT INTO `notice` VALUES ('5', 'aaaaaa', 'aaaaaaaa', '<p>asdfafsd</p>', '2017-09-19 17:26:57', '09', '19', '1', '1');
INSERT INTO `notice` VALUES ('6', 'sdafasd', 'asdfasd', '<p>asdfasdfasd</p>', '2017-09-23 23:13:57', '09', '23', '0', '1');

-- ----------------------------
-- Table structure for passages
-- ----------------------------
DROP TABLE IF EXISTS `passages`;
CREATE TABLE `passages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` char(20) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `first` char(255) NOT NULL,
  `second` char(255) NOT NULL,
  `third` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121213 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of passages
-- ----------------------------
INSERT INTO `passages` VALUES ('1', '一流学科', '0', '0', '2017-08-05 08:45:23', '学科介绍', '一流学科', '');
INSERT INTO `passages` VALUES ('9', '本科教育', '0', '0', '2017-08-05 08:45:23', '人才培养', '本科教育', '');
INSERT INTO `passages` VALUES ('10', '研究生教育', '0', '0', '2017-08-05 08:45:23', '人才培养', '研究生教育', '');
INSERT INTO `passages` VALUES ('11', '项目介绍', '0', '0', '2017-08-05 08:45:23', '学生成果', '项目介绍', '');
INSERT INTO `passages` VALUES ('12', '竞赛介绍', '0', '0', '2017-08-05 08:45:23', '学生成果', '竞赛介绍', '');
INSERT INTO `passages` VALUES ('13', '竞赛获奖', '0', '0', '2017-08-05 08:45:23', '学生成果', '竞赛获奖', '');
INSERT INTO `passages` VALUES ('5', '项目立项', '0', '0', '2017-08-05 08:45:23', '学术研究', '学科成果', '项目立项');
INSERT INTO `passages` VALUES ('6', '论文发表', '0', '0', '2017-08-05 08:45:23', '学术研究', '学科成果', '论文发表');
INSERT INTO `passages` VALUES ('7', '专著教材', '0', '0', '2017-08-05 08:45:23', '学术研究', '学科成果', '专著教材');
INSERT INTO `passages` VALUES ('14', '硬件条件', '0', '0', '2017-08-05 08:45:23', '资源环境', '硬件条件', '');
INSERT INTO `passages` VALUES ('15', '校企合作', '0', '0', '2017-08-05 08:45:23', '资源环境', '校企合作', '');
INSERT INTO `passages` VALUES ('16', '实习信息', '0', '0', '2017-08-05 08:45:23', '招生就业', '实习信息', '');
INSERT INTO `passages` VALUES ('17', '就业信息', '0', '0', '2017-08-05 08:45:23', '招生就业', '就业信息', '');
INSERT INTO `passages` VALUES ('8', '知识产权', '0', '0', '2017-08-05 08:45:23', '学术研究', '学科成果', '知识产权');
INSERT INTO `passages` VALUES ('3', '学科团队', '0', '0', '2017-09-17 10:41:06', '学术研究', '学科团队', '');
INSERT INTO `passages` VALUES ('2', '学科方向', '0', '0', '2017-09-17 10:39:50', '学术研究', '学科方向', '');
INSERT INTO `passages` VALUES ('4', '学科成果', '0', '0', '2017-09-17 10:41:32', '学术研究', '学科成果', '');

-- ----------------------------
-- Table structure for picture
-- ----------------------------
DROP TABLE IF EXISTS `picture`;
CREATE TABLE `picture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photoName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture
-- ----------------------------
INSERT INTO `picture` VALUES ('1', '/subject/Public/Uploads/picture/2017-08-12/1502515823_461849280.jpg', '', 'timg.jpg');
INSERT INTO `picture` VALUES ('2', '/subject/Public/Uploads/picture/2017-08-09/1502247637_275054006.jpg', '', 'slide2-wide.jpg');
INSERT INTO `picture` VALUES ('3', '/subject/Public/Uploads/picture/2017-08-09/1502247671_541226965.jpg', '', 'slide3-wide.jpg');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `titlePhoto` varchar(255) NOT NULL,
  `photoName` varchar(255) NOT NULL,
  `small_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', ' 软件工程专业2016届毕业生，阿里巴巴软件工程师', '<p>软件工程专业2016届毕业生，阿里巴巴软件工程师 软件工程专业2016届毕业生，阿里巴巴软件工程师啊啊啊</p>', '2017-08-12 23:05:28', '/subject/Public/Uploads/student/2017-08-12/1502505738_47804563.jpg', '1501080091_1626258760.jpg', '/subject/Public/Uploads/student/small_images/1502505738_47804563.jpg');
INSERT INTO `student` VALUES ('2', '数字媒体技术专业2013届毕业生', '<p>数字媒体技术专业2013届毕业生，美国犹他大学读研，现任职于微软（美国），担任软件工程师数字媒体技术专业2013读研，现任职于微软（美国），担任软件工程师</p>', '2017-08-12 10:42:33', '/subject/Public/Uploads/student/2017-08-12/1502505753_178280161.jpg', '1501080022_2037244047.jpg', '/subject/Public/Uploads/student/small_images/1502505753_178280161.jpg');
INSERT INTO `student` VALUES ('3', '电子信息工程专业2015届毕业生', '<p>电子信息工程专业2015届毕业生，上海大学读研，目前已与中兴通讯上海研发中心签订就业意向电子信息工程专业2015届毕业生中兴通讯上海研发中心签订就业意向</p>', '2017-08-12 10:42:44', '/subject/Public/Uploads/student/2017-08-12/1502505764_1170479065.jpg', '1501080055_512603903.jpg', '/subject/Public/Uploads/student/small_images/1502505764_1170479065.jpg');
INSERT INTO `student` VALUES ('4', ' 软件工程专业2016届毕业生，阿里巴巴软件工程师', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/>软件工程专业2016届毕业生，阿里巴巴软件工程师 软件工程专业2016届毕业生，阿里巴巴软件工程师</p>', '2017-08-12 10:48:34', '/subject/Public/Uploads/student/2017-08-12/1502505775_1723602713.jpg', '1501080091_1626258760.jpg', '/subject/Public/Uploads/student/small_images/1502505775_1723602713.jpg');
INSERT INTO `student` VALUES ('5', '阿里巴巴软件工程师', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/>软件工程专业2016届毕业生，阿里巴巴软件工程师 软件工程专业2016届毕业生，阿里巴巴软件工程师阿里巴巴软件工程师阿里巴巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师</p>', '2017-08-12 22:15:15', '/subject/Public/Uploads/student/2017-08-12/1502542477_626645145.jpg', '1502505764_1170479065.jpg', '/subject/Public/Uploads/student/small_images/1502542477_626645145.jpg');

-- ----------------------------
-- Table structure for time
-- ----------------------------
DROP TABLE IF EXISTS `time`;
CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of time
-- ----------------------------
INSERT INTO `time` VALUES ('1', '11', '2018', '09', '17', '<p>asdfasdf</p>', '2017-09-17');
INSERT INTO `time` VALUES ('2', '22', '2015', '09', '14', '<p>sfsdfsdfs</p>', '2017-09-14');
INSERT INTO `time` VALUES ('3', 'aaaa', '2017', '09', '06', '<p>adsfasdf</p>', '2017-09-06');
INSERT INTO `time` VALUES ('4', 'kjjkh', '2017', '09', '21', '<p>bvnvnvnbv</p>', '2017-09-21');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '1');
INSERT INTO `user` VALUES ('2', '2', 'c81e728d9d4c2f636f067f89cc14862c', '2');
