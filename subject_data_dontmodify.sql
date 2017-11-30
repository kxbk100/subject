/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : subject_data

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-30 21:36:32
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
  `second` varchar(255) NOT NULL,
  `type` char(200) NOT NULL DEFAULT '0',
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admissions
-- ----------------------------
INSERT INTO `admissions` VALUES ('1', 'aaaa', 'aaaa', '<p>aaaaaaaa</p>', '2017-11-30', 'bZhaosheng', 'bJianzhang', '11', '30');
INSERT INTO `admissions` VALUES ('2', 'a\'s\'d\'f', 'a\'s\'d\'fa\'s\'d', '<p>啊手动阀手动阀</p>', '2017-11-30', 'bZhaosheng', 'bJihua', '11', '30');
INSERT INTO `admissions` VALUES ('3', 'b\'b\'b\'b\'b\'b', 'b\'b\'b\'b\'b\'b\'b\'b', '<p>b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b&#39;b</p>', '2017-11-30', 'bZhaosheng', 'bWenda', '11', '30');
INSERT INTO `admissions` VALUES ('4', 'c\'c\'c', 'c\'c\'c\'c\'c', '<p>c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c&#39;c</p>', '2017-11-30', 'bJiuye', 'bShixi', '11', '30');
INSERT INTO `admissions` VALUES ('5', 'bbbbb', 'bbbbb', '<p>asdfasdf</p>', '2017-11-30', 'sZhaosheng', 'sJianzhang', '11', '30');
INSERT INTO `admissions` VALUES ('6', 'asdfasdf', 'asdfasd', '<p>asdfasdf</p>', '2017-11-30', 'bJiuye', 'bXinxi', '11', '30');
INSERT INTO `admissions` VALUES ('7', 'asdfasd', 'asdgsdf', '<p>sdfgsdfg</p>', '2017-11-30', 'bJiuye', 'bXinxi', '11', '30');
INSERT INTO `admissions` VALUES ('8', 'xcvzx', 'zxcvzx', '<p>zxcvx</p>', '2017-11-30', 'sZhaosheng', 'sJianzhang', '11', '30');
INSERT INTO `admissions` VALUES ('9', 'hjklhj', 'hjklhjkl', '<p>hjklhjkl</p>', '2017-11-30', 'sZhaosheng', 'sJihua', '11', '30');
INSERT INTO `admissions` VALUES ('10', 'hjklh', 'fghjfgj', '<p>gdyu</p>', '2017-11-30', 'sZhaosheng', 'sWenda', '11', '30');
INSERT INTO `admissions` VALUES ('11', 'sdfs', 'sdfsdf', '<p>sdfsdf</p>', '2017-11-30', 'bJiuye', 'bShixi', '11', '30');

-- ----------------------------
-- Table structure for list_passages
-- ----------------------------
DROP TABLE IF EXISTS `list_passages`;
CREATE TABLE `list_passages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` char(20) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `first` char(255) NOT NULL,
  `second` char(255) NOT NULL,
  `istop` varchar(255) NOT NULL DEFAULT '0',
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of list_passages
-- ----------------------------
INSERT INTO `list_passages` VALUES ('1', 'tttt', 'tttt', '<p>ttttttttt</p>', '2017-11-28 19:10:35', 'academicResearch', 'research', '1', '11', '28');
INSERT INTO `list_passages` VALUES ('2', 'sss', 'sss', '<p>sssss</p>', '2017-11-28 17:02:34', 'academicResearch', 'research', '0', '12', '01');
INSERT INTO `list_passages` VALUES ('3', 'fdfsfs', 'fdsfs', '<p>fdsfs</p>', '2017-11-28 17:02:45', 'academicResearch', 'research', '0', '02', '12');
INSERT INTO `list_passages` VALUES ('4', 'yuhj', 'aaa', '<p>asdfasdf</p>', '2017-11-28 16:58:40', 'academicResearch', 'academic', '0', '02', '14');
INSERT INTO `list_passages` VALUES ('5', 'bbcv', 'aaa', '<p>asdfasdf</p>', '2017-11-28 16:59:01', 'academicResearch', 'treatise', '0', '03', '17');
INSERT INTO `list_passages` VALUES ('6', 'xcvb', 'aaa', '<p>asdfasdf</p>', '2017-11-28 16:59:16', 'academicResearch', 'property', '0', '05', '06');
INSERT INTO `list_passages` VALUES ('7', 'xcvbz', 'aaa', '<p>asdfasd</p>', '2017-11-28 16:59:35', 'studentPractice', 'studentProject', '0', '04', '05');
INSERT INTO `list_passages` VALUES ('8', 'jkl;j', 'aaa', '<p>asdfasd</p>', '2017-11-28 16:59:48', 'studentPractice', 'competition', '0', '05', '04');
INSERT INTO `list_passages` VALUES ('9', 'ioyu', 'aaa', '<p>asdfasdf</p>', '2017-11-28 17:00:00', 'studentPractice', 'studentThesis', '0', '03', '03');
INSERT INTO `list_passages` VALUES ('10', 'hfg', 'aaa', '<p>asdfasdf</p>', '2017-11-28 17:00:18', 'studentPractice', 'studentProperty', '0', '12', '02');
INSERT INTO `list_passages` VALUES ('11', 'xzczx', 'aaa', '<p>asdfasdf</p>', '2017-11-28 17:00:34', 'integratedService', 'video', '0', '07', '02');
INSERT INTO `list_passages` VALUES ('12', 'qqqqq', 'aaaaaa', '<p>sadfasdfasdf</p>', '2017-11-28 19:31:04', 'integratedService', 'video', '0', '11', '28');
INSERT INTO `list_passages` VALUES ('13', 'wwwwwwww', 'wwww', '<p>dfasdfasdf</p>', '2017-11-28 19:31:12', 'studentPractice', 'studentProject', '1', '11', '28');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '我院数字媒体技术专业从2006年成立到现在已经十年了', '冯天祥', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/>时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭时光荏苒，岁月如梭</p>', '2017-10-17 23:57:42', '/subject/Public/Uploads/titlePhoto/2017-10-17/1508255862_1226526630.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1508255862_1226526630.jpg', 'QQ截图20171017235735.jpg', '10', '17', '0', '0');
INSERT INTO `news` VALUES ('2', '3-5学雷锋日 | 用爱诠释 用心服务aaa啊啊啊啊啊', '冯天祥', '<p>3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的3.5学雷锋日，在西和食堂前的</p>', '2017-10-15 13:02:13', '/subject/Public/Uploads/titlePhoto/2017-08-12/1502505565_952950844.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1502505565_952950844.jpg', '1502505394_1272509367.jpg', '10', '15', '0', '0');
INSERT INTO `news` VALUES ('4', '3-5学雷锋日 | 用爱诠释 用心服务aaa啊啊啊啊啊', '冯天祥', '<p>3.5学雷锋日，在西和食堂前的摊位，雷锋协会不仅服务大家，为大家修电脑，更是邀请来了许多小伙伴3.5学雷锋日，在西和食堂前的摊位啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>', '2017-10-15 13:02:20', '/subject/Public/Uploads/titlePhoto/2017-08-12/1502505565_952950844.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1502505565_952950844.jpg', '1502505394_1272509367.jpg', '10', '15', '0', '0');
INSERT INTO `news` VALUES ('7', 'testtesttesttesttesttesttesttesttesttes发地方地方但是但是多但是但', '冯天祥', '<p>发达的多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多多</p>', '2017-10-15 13:02:50', '/subject/Public/Uploads/titlePhoto/default/default.png', '/subject/Public/Uploads/titlePhoto/small_images/default/default.png', '', '10', '15', '1', '0');
INSERT INTO `news` VALUES ('5', '的首发式地方', '是打发士大夫', '<p>阿斯顿发射点发射点</p>', '2017-09-22 18:46:23', '/subject/Public/Uploads/titlePhoto/2017-09-19/1505810487_952352766.jpg', '/subject/Public/Uploads/titlePhoto/small_images/1505810487_952352766.jpg', '馄饨.jpg', '09', '22', '0', '1');
INSERT INTO `news` VALUES ('6', '1212121', '21212', '<p>212121212</p>', '2017-10-06 21:37:39', '/subject/Public/Uploads/titlePhoto/default/default.png', '/subject/Public/Uploads/titlePhoto/small_images/default/default.png', '', '10', '06', '1', '1');
INSERT INTO `news` VALUES ('8', '官方郭德纲', '干的感动个', '<p>干的感动个</p>', '2017-10-17 23:58:17', '/subject/Public/Uploads/titlePhoto/default/default.png', '/subject/Public/Uploads/titlePhoto/small_images/default/default.png', '', '10', '17', '1', '0');
INSERT INTO `news` VALUES ('9', '放松放松', '佛挡杀佛是', '<p>发散的发顺丰</p>', '2017-10-17 23:59:51', '/subject/Public/Uploads/titlePhoto/default/default.png', '/subject/Public/Uploads/titlePhoto/small_images/default/default.png', '', '10', '17', '1', '0');
INSERT INTO `news` VALUES ('10', '佛挡杀佛是的', '风动旛动是', '<p>发散的反倒是</p>', '2017-10-18 00:00:33', '/subject/Public/Uploads/titlePhoto/default/default.png', '/subject/Public/Uploads/titlePhoto/small_images/default/default.png', '', '10', '18', '1', '0');

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
INSERT INTO `notice` VALUES ('7', '加泰罗尼亚议会全会暂时取消召开', '冯天祥', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: left; text-indent: 14px; white-space: normal;\">&nbsp; &nbsp;新华社马德里10月5日电　(记者冯俊伟　谢宇智)　西班牙宪法法院5日宣布，暂时取消将于9日举行的加泰罗尼亚自治区议会全体会议，以避免主张该地区独立的党派在会上根据此前进行的非法公投结果宣布该地区独立。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: justify; text-indent: 14px; white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: left; text-indent: 14px; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;西班牙宪法法院当天在其网站发布上述决定。宪法法院同时警告加泰罗尼亚自治区议会主席团，如果议会全会举行，他们将可能承担刑事责任。宪法法院这一决定源于加泰罗尼亚社会党当天提出的一项保护性上诉。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: justify; text-indent: 14px; white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: left; text-indent: 14px; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;此前，主张加泰罗尼亚自治区独立的党派曾向议会发出申请，希望自治区主席普伊格德蒙特出席9日的议会全会，以评估加泰罗尼亚独立公投的结果和影响。这意味着普伊格德蒙特极有可能在议会上宣布加泰罗尼亚独立。西班牙首相拉霍伊5日发表讲话，要求普伊格德蒙特辞职，以避免更大的错误。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: justify; text-indent: 14px; white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: left; text-indent: 14px; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;此外，鉴于加泰罗尼亚自治区紧张形势，西班牙萨瓦德尔银行5日宣布将总部从加泰罗尼亚自治区首府巴塞罗那迁往东部地中海岸边城市阿利坎特。西班牙第三大银行凯克萨银行也于5日召开董事会讨论是否将其总部转移至地中海巴利阿里群岛。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: justify; text-indent: 14px; white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style-type: none; font-family: Arial, Helvetica, sans-serif, 宋体; font-size: 14px; text-align: left; text-indent: 14px; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;加泰罗尼亚自治区议会9月6日通过独立公投法案。西班牙宪法法院裁定公投法案违宪。但加区还是于10月1日举行了独立公投。10月4日，加区议会宣布，将于10月9日召开议会全会，讨论公投结果并计划单方面宣布独立。加泰罗尼亚自治区位于西班牙东北部，人口750万，约占全国总人口的16%。它是西班牙最富有地区之一，地区生产总值占西班牙国内生产总值的20%左右。</p><p><br/></p>', '2017-10-07 10:05:10', '10', '07', '0', '0');
INSERT INTO `notice` VALUES ('8', '中信证券股份有限公司关于广州白云电器设备股份有限公司', '冯天祥', '<p style=\"text-align: left;\">根据《上市公司重大资产重组管理办法》（以下简称“《重组管理办法》”）\r\n的规定：上市公司在 12 个月内连续对同一或者相关资产进行购买、出售的，以\r\n其累计数分别计算相应数额。交易标的资产属于同一交易方所有或者控制，或者\r\n属于相同或者相近的业务范围，或者中国证监会认定的其他情形下，可以认定为\r\n同一或者相关资产。\r\n广州白云电器设备股份有限公司（以下简称“白云电器”或“上市公司”）拟以\r\n发行股份及支付现金方式收购桂林电力电容器有限责任公司（以下简称“桂林电\r\n容”）80.589%股权（以下简称“本次交易”）。中信证券股份有限公司（以下简称\r\n“中信证券”或“独立财务顾问”）作为白云电器本次交易的独立财务顾问，对白云\r\n电器本次交易前 12 个月内购买、出售资产的情况进行了核查，核查意见如下</p>', '2017-10-07 10:06:34', '10', '07', '0', '0');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121213 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of passages
-- ----------------------------
INSERT INTO `passages` VALUES ('1', '学科介绍', '0', '<p><a href=\"#5\" target=\"_self\" title=\"的萨达\">的萨达</a><br/></p><p>0<a></a><a></a></p><p>&nbsp;&nbsp;&nbsp;&nbsp;121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是</p><p><a></a>1</p><p>&nbsp;&nbsp;&nbsp;&nbsp;121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是</p><p><img class=\"anchorclass\"/>1</p><p>&nbsp;&nbsp;&nbsp;&nbsp;121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是</p><p><a></a><a></a>1<a></a><a></a></p><p>&nbsp;&nbsp;&nbsp;&nbsp;121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是121231312是啥是是</p><p><br/></p>', '2017-11-28 00:21:56', '学科介绍', '学科介绍');
INSERT INTO `passages` VALUES ('2', '建设目标', '0', '0', '2017-11-28 15:55:24', '学科介绍', '建设目标');
INSERT INTO `passages` VALUES ('3', '学术交流', '0', '0', '2017-11-28 15:57:11', '学术研究', '学术交流');
INSERT INTO `passages` VALUES ('4', '专业介绍', '0', '0', '2017-11-28 15:57:56', '本科教育', '专业介绍');
INSERT INTO `passages` VALUES ('5', '培养计划', '0', '0', '2017-11-28 15:58:24', '本科教育', '培养计划');
INSERT INTO `passages` VALUES ('6', '硕士点介绍', '0', '0', '2017-11-28 15:58:55', '硕士培养', '硕士点介绍');
INSERT INTO `passages` VALUES ('7', '培养计划', '0', '0', '2017-11-28 15:59:20', '硕士培养', '培养计划');
INSERT INTO `passages` VALUES ('8', '研究基地', '0', '0', '2017-11-28 15:59:44', '环境资源', '研究基地');
INSERT INTO `passages` VALUES ('9', '实践基地', '0', '0', '2017-11-28 16:00:06', '环境资源', '实践基地');
INSERT INTO `passages` VALUES ('10', '校企合作', '0', '0', '2017-11-28 16:00:41', '环境资源', '校企合作');

-- ----------------------------
-- Table structure for photo_passages
-- ----------------------------
DROP TABLE IF EXISTS `photo_passages`;
CREATE TABLE `photo_passages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `titlePhoto` varchar(255) NOT NULL,
  `photoName` varchar(255) NOT NULL,
  `small_path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photo_passages
-- ----------------------------
INSERT INTO `photo_passages` VALUES ('1', ' 软件工程专业2016届毕业生，阿里巴巴软件工程师', '<p>软件工程专业2016届毕业生，阿里巴巴软件工程师 软件工程专业2016届毕业生，阿里巴巴软件工程师啊啊啊</p>', '2017-08-12 23:05:28', '/subject/Public/Uploads/student/2017-08-12/1502505738_47804563.jpg', '1501080091_1626258760.jpg', '/subject/Public/Uploads/student/small_images/1502505738_47804563.jpg', 'student');
INSERT INTO `photo_passages` VALUES ('2', '数字媒体技术专业2013届毕业生', '<p>数字媒体技术专业2013届毕业生，美国犹他大学读研，现任职于微软（美国），担任软件工程师数字媒体技术专业2013读研，现任职于微软（美国），担任软件工程师</p>', '2017-08-12 10:42:33', '/subject/Public/Uploads/student/2017-08-12/1502505753_178280161.jpg', '1501080022_2037244047.jpg', '/subject/Public/Uploads/student/small_images/1502505753_178280161.jpg', 'student');
INSERT INTO `photo_passages` VALUES ('3', '电子信息工程专业2015届毕业生', '<p>电子信息工程专业2015届毕业生，上海大学读研，目前已与中兴通讯上海研发中心签订就业意向电子信息工程专业2015届毕业生中兴通讯上海研发中心签订就业意向</p>', '2017-08-12 10:42:44', '/subject/Public/Uploads/student/2017-08-12/1502505764_1170479065.jpg', '1501080055_512603903.jpg', '/subject/Public/Uploads/student/small_images/1502505764_1170479065.jpg', 'student');
INSERT INTO `photo_passages` VALUES ('4', ' 软件工程专业2016届毕业生，阿里巴巴软件工程师', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/>软件工程专业2016届毕业生，阿里巴巴软件工程师 软件工程专业2016届毕业生，阿里巴巴软件工程师</p>', '2017-08-12 10:48:34', '/subject/Public/Uploads/student/2017-08-12/1502505775_1723602713.jpg', '1501080091_1626258760.jpg', '/subject/Public/Uploads/student/small_images/1502505775_1723602713.jpg', 'student');
INSERT INTO `photo_passages` VALUES ('5', '阿里巴巴软件工程师', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/>软件工程专业2016届毕业生，阿里巴巴软件工程师 软件工程专业2016届毕业生，阿里巴巴软件工程师阿里巴巴软件工程师阿里巴巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师巴软件工程师</p>', '2017-08-12 22:15:15', '/subject/Public/Uploads/student/2017-08-12/1502542477_626645145.jpg', '1502505764_1170479065.jpg', '/subject/Public/Uploads/student/small_images/1502542477_626645145.jpg', 'student');
INSERT INTO `photo_passages` VALUES ('6', 'test', '<p>sdfsdfsdf</p>', '2017-11-28 21:39:52', '/subject/Public/Uploads/subjectTeam/2017-11-28/1511876392_664041644.png', '18.png', '/subject/Public/Uploads/subjectTeam/small_images/1511876392_664041644.png', 'subjectTeam');
INSERT INTO `photo_passages` VALUES ('7', 'sdfsdfsdf', '<p>sdfsdfsdf</p>', '2017-11-28 21:40:05', '/subject/Public/Uploads/teachTeam/2017-11-28/1511876405_44204690.png', '22.png', '/subject/Public/Uploads/teachTeam/small_images/1511876405_44204690.png', 'teachTeam');
INSERT INTO `photo_passages` VALUES ('8', 'dsfsdf', '<p>sdfsdf</p>', '2017-11-30 18:49:26', '/subject/Public/Uploads/shuodaoTeam/2017-11-30/1512038925_848956485.jpg', 'QQ截图20171129204209.jpg', '/subject/Public/Uploads/shuodaoTeam/small_images/1512038925_848956485.jpg', 'shuodaoTeam');

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
INSERT INTO `picture` VALUES ('1', '/subject/Public/Uploads/picture/2017-08-12/1502515823_461849280.jpg', '1212', 'timg.jpg');
INSERT INTO `picture` VALUES ('2', '/subject/Public/Uploads/picture/2017-08-09/1502247637_275054006.jpg', '21212', 'slide2-wide.jpg');
INSERT INTO `picture` VALUES ('3', '/subject/Public/Uploads/picture/2017-08-09/1502247671_541226965.jpg', '212121', 'slide3-wide.jpg');

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
INSERT INTO `user` VALUES ('1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '管理员');
INSERT INTO `user` VALUES ('2', '2', 'c81e728d9d4c2f636f067f89cc14862c', '爸爸');
