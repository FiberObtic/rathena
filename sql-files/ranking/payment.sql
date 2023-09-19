/*
 Navicat Premium Data Transfer

 Source Server         : Volca
 Source Server Type    : MySQL
 Source Server Version : 50568 (5.5.68-MariaDB)
 Source Host           : 191.101.214.191:3306
 Source Schema         : volcano_ro_rag

 Target Server Type    : MySQL
 Target Server Version : 50568 (5.5.68-MariaDB)
 File Encoding         : 65001

 Date: 19/09/2023 10:31:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for payment
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment`  (
  `scb_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `confirmId` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `transactionId` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `amount` int(4) UNSIGNED NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `added_time` datetime NOT NULL,
  PRIMARY KEY (`scb_id`) USING BTREE,
  UNIQUE INDEX `confirmId`(`confirmId`) USING BTREE,
  INDEX `scb_id`(`scb_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 106 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

SET FOREIGN_KEY_CHECKS = 1;
