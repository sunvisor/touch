/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Version : 50161
 Source Host           : localhost
 Source Database       : test_db

 Target Server Version : 50161
 File Encoding         : utf-8

 Date: 03/28/2012 04:00:41 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'トーマス', 'thomas@sodo.com', 'げんきいっぱいの ちいさな タンクきかんしゃ きゃくしゃの アニーと クララベルを ひいて はしるのが だいすき。'), ('2', 'エドワード', 'edword@sodo.com', 'だれにでも しんせつな きかんしゃ きゃくしゃや かしゃからも しんらいされている。'), ('3', 'ヘンリー2世', 'henly@sodo.com', 'おおきな みどりいろの きかんしゃ。 きれいずきで じまんの ボディが よごれるのを とても いやがる。 うつくしい もりが だいすき。'), ('4', 'ゴードン', 'gordon@sodo.com', 'きゅうこうれっしゃを ひく おおきな あおい きかんしゃ。 だれよりも はやく はしることが できると、 じしんを もっている。'), ('6', 'ジェームス', 'james@sodo.com', 'きゃくしゃでも かしゃでも、 らくに ひくことが できる きかんしゃ。 サーカスの れっしゃを ひいたことも ある。'), ('7', 'パーシー', 'percy@sodo.com', 'みどりいろの ちいさな きかんしゃ。 ときどき いたずらを するけれど、 みんなと いっしょに いっしょうけんめい はたらいている。'), ('19', 'トビー', 'tobby@sodo.com', 'ボディが きで できた がっしりした ろめんきかんしゃ。 きゃくしゃの ヘンリエッタを ひいて はしる。'), ('23', 'ダック', 'duck@sodo.com', 'はしる すがたが、 よちよちと あひるのように みえるので、 ダックと よばれている。 ほんとうのなまえは モンタギュー。 だいせいぶてつどうから やってきた。'), ('24', 'ドナルド', 'donald@sodo.com', 'スコットランドから きた かもつせんようの きかんしゃ。 そっくりな ふたごの きょうだいと いつも いっしょ。'), ('25', 'ダグラス', 'douglas@sodo.com', 'ドナルドの ふたごの きょうだい。 ゆきかきの しごとが とくい。 ゆきの ひは ドナルドと いっしょに だいかつやく。'), ('26', 'オリバー', 'oliver@sodo.com', 'ダックの しせんを てつだう、 みどりいろの きかんしゃ。 だいせいぶてつどうから ブレーキしゃの トードと いっしょに やってきた。'), ('27', 'ビル', 'bill@sodo.com', 'いつも にぎやかで、 いたずらが だいすきな きいろい タンクきかんしゃ。 ベンとは ふたごの きょうだい。'), ('28', 'ベン', 'ben@sodo.com', 'ふたごの ビルと いつでも いっしょに いる。 いしきりばで はたらいたり、 ねんどを みなとに はこんだりする しごとを している。');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
