/*
 Navicat Premium Data Transfer

 Source Server         : Myroom
 Source Server Type    : MySQL
 Source Server Version : 50736 (5.7.36)
 Source Host           : localhost:3306
 Source Schema         : ragnarok

 Target Server Type    : MySQL
 Target Server Version : 50736 (5.7.36)
 File Encoding         : 65001

 Date: 08/08/2023 21:27:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for reward_ranking
-- ----------------------------
DROP TABLE IF EXISTS `reward_ranking`;
CREATE TABLE `reward_ranking`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `account_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL DEFAULT '',
  `class` smallint(6) UNSIGNED NOT NULL,
  `status` smallint(6) UNSIGNED NOT NULL,
  `type` varchar(30) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL DEFAULT '',
  `points` int(11) NOT NULL DEFAULT 0,
  `bank_acc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `bank_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `real_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = tis620;

SET FOREIGN_KEY_CHECKS = 1;
