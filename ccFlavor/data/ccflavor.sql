-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-27 10:56:03
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ccflavor`
--

-- --------------------------------------------------------

--
-- 表的结构 `cc_videolib`
--

DROP TABLE IF EXISTS `cc_videolib`;
CREATE TABLE IF NOT EXISTS `cc_videolib` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '视频id号，对应vid',
  `videoname` varchar(100) NOT NULL COMMENT '视频名称',
  `episode_total` mediumint(5) NOT NULL DEFAULT '1' COMMENT '视频集数',
  `videoinfo` varchar(600) DEFAULT NULL COMMENT '视频简介',
  `videoupdate` date DEFAULT NULL COMMENT '播出时间',
  `country` varchar(30) NOT NULL DEFAULT '未知' COMMENT '所属国家',
  `tips` varchar(30) DEFAULT NULL COMMENT '预览标语',
  `total_times` int(11) NOT NULL DEFAULT '0' COMMENT '播放总数',
  `category` varchar(8) NOT NULL COMMENT '视频类别',
  `is_end` varchar(8) NOT NULL DEFAULT '已完结' COMMENT '是否完结',
  PRIMARY KEY (`id`)
) ;

--
-- 转存表中的数据 `cc_videolib`
--

INSERT INTO `cc_videolib` (`id`, `videoname`, `episode_total`, `videoinfo`, `videoupdate`, `country`, `tips`, `total_times`, `category`, `is_end`) VALUES
(1, '刀剑神域', 25, '主角桐谷和人是使用世界首款完全潜行游戏“刀剑神域（Sword Art Online）”的玩家。曾经很幸运的参与过封闭测试，并买下正式版的和人，正准备体验游戏的第一次正式营运。但在登入后不久，和人发现“登出”指令竟然消失，而与此同时自称是SAO游戏设计者“茅场晶彦”的人说：“无法完成攻略就无法离开游戏，只有打倒位于“艾恩葛朗特”顶楼，第100层的头目－达成“完全攻略”才是离开这个世界唯一的方法。并且，在游戏内GAME OVER或是尝试脱下NERvGear，玩家会立刻被NERvGear发出的高频率微波破坏脑部而死亡。”唯有接受这个矛盾事实的人，才能够存活下去。', '2012-07-01', '日本', '亚丝娜！', 0, '番剧', '已完结'),
(2, '空之境界', 13, '整个故事围绕昏睡了两年时间才醒来的少女两仪式展开。她在昏睡期间，曾经一度接触到了死亡的边缘，并落入“直死之魔眼”的手中。由于这只眼睛的缘故，式用刀杀死了世间所有的生物。式的同年级的同学黒桐干也，既是人形师，又是魔术师的苍崎橙子。他们也被卷入到了这一事件中，有的爱收集浮游的幽灵，有的爱建筑人之死……总之，日常与非日常的时间，被时间融合，由式的刀映射出的怪异昏暗世界，由此开始。', NULL, '日本', NULL, 0, '番剧', '已完结'),
(4, '超人vs琦玉', 1, NULL, NULL, '未知', NULL, 0, '短片', '已完结'),
(5, '西鲁vs梅路艾姆', 1, NULL, NULL, '未知', NULL, 0, '短片', '已完结'),
(6, '热诚传说X', 25, '在人眼无法看见的灵性存在“天族”的围绕下，所扶养长大的人类青年──史雷。 “过去，每位人类都能看见天族”坚信著这则传说的他，怀抱梦想，希望解开古代谜团，实现能让人与天族共存的世界。 某天，有生以来初次来到人类城市的史雷，被牵连进奇妙的事件中，并因缘际会地拔出插在石头里的圣剑，而成为袚除世界各地灾厄的“导师”。 他将这份重大使命铭记於心，并让人类与天族共存的梦想变得更加炙热—— 现在，导师将带著夥伴，往大冒险的旅途踏出一步。', '2016-07-01', '日本', '热诚传说X', 0, '番剧', '已完结'),
(7, '灵能百分百', 12, '平凡的中学二年级少年影山茂夫，因其微弱的存在感与名字茂夫的谐音被周遭人称为龙套（モブ），但不起眼的他其实是强大的天生超能力者。历经每一次的成长，龙套开始认为自己的超能力是危险的存在，为了不让超能力失控，龙套无意识的压抑著情感。虽然只想平凡的度过每一天，但各种麻烦却接二连三找上他，随着被压抑的情感在内心一点点膨胀，龙套体内积累的力量似乎也正蠢蠢欲动......', '2016-07-01', '日本', '影山茂夫！', 0, '番剧', '已完结'),
(8, '你永远不知道电脑对面和你聊天的是到底谁', 1, NULL, NULL, '未知', '你永远不知道电脑对面和你聊天的是到底谁', 0, '短片', '已完结'),
(9, '战斗吧，就算牺牲生命也在所不惜', 1, NULL, NULL, '未知', '战斗吧，就算牺牲生命也在所不惜', 0, '', '已完结');

-- --------------------------------------------------------

--
-- 表的结构 `cc_videopic`
--

DROP TABLE IF EXISTS `cc_videopic`;
CREATE TABLE IF NOT EXISTS `cc_videopic` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pid` mediumint(10) NOT NULL COMMENT '对应视频id',
  `pre_pic` varchar(255) NOT NULL COMMENT '预览图',
  `poster_pic` varchar(255) NOT NULL COMMENT '介绍海报',
  PRIMARY KEY (`id`)
) ;

--
-- 转存表中的数据 `cc_videopic`
--

INSERT INTO `cc_videopic` (`id`, `pid`, `pre_pic`, `poster_pic`) VALUES
(1, 1, '/images/video/vi_f_01.jpg', '/images/video/vi_f_p_01.jpg'),
(2, 2, '/images/video/vi_f_02.jpg', '/images/video/vi_f_p_02.jpg'),
(3, 6, '/images/video/vi_f_03.jpg', '/images/video/vi_f_p_03.jpg'),
(4, 7, '/images/video/vi_f_04.jpg', '/images/video/vi_f_p_04.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `cc_videosrc`
--

DROP TABLE IF EXISTS `cc_videosrc`;
CREATE TABLE IF NOT EXISTS `cc_videosrc` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vid` mediumint(10) UNSIGNED NOT NULL COMMENT '视频id号',
  `episode_num` mediumint(8) UNSIGNED NOT NULL DEFAULT '1' COMMENT '集数',
  `episode_name` varchar(100) DEFAULT NULL COMMENT '每集的名称',
  `each_vidsrc` varchar(255) NOT NULL COMMENT '视频源',
  `play_times` mediumint(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '播放次数',
  PRIMARY KEY (`id`)
) ;

--
-- 转存表中的数据 `cc_videosrc`
--

INSERT INTO `cc_videosrc` (`id`, `vid`, `episode_num`, `episode_name`, `each_vidsrc`, `play_times`) VALUES
(1, 1, 1, '剑的世界', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1657627.html', 0),
(2, 1, 2, '封弊者', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1664753.html#vid=1664753', 0),
(3, 1, 3, '红鼻子的麋鹿', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1674220.html#vid=1674220', 0),
(4, 1, 4, '黑色剑士', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1690644.html#vid=1690644', 0),
(5, 1, 5, '圈内事件', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1699610.html#vid=1699610', 0),
(6, 1, 6, '幻影复仇者', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1708232.html#vid=1708232', 0),
(7, 1, 7, '心之温度', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1714700.html#vid=1714700', 0),
(8, 1, 8, '黑白剑舞', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1720861.html#vid=1720861', 0),
(9, 1, 9, '青眼恶魔', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1727274.html#vid=1727274', 0),
(10, 1, 10, '红色杀意', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1735604.html#vid=1735604', 0),
(11, 1, 11, '朝露的少女', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1742536.html#vid=1742536', 0),
(12, 1, 12, '结衣的心', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1749231.html#vid=1749231', 0),
(13, 1, 13, '奈落的深渊', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1757060.html#vid=1757060', 0),
(14, 1, 14, '世界的终结', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1761437.html#vid=1761437', 0),
(15, 1, 15, '归还', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1769133.html#vid=1769133', 0),
(16, 1, 16, '妖精们的国度', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1775424.html#vid=1775424', 0),
(17, 1, 17, '被囚禁的女王', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1782492.html#vid=1782492', 0),
(18, 1, 18, '前往世界树', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1789523.html#vid=1789523', 0),
(19, 1, 19, '鲁格路回廊', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1796361.html#vid=1796361', 0),
(20, 1, 20, '猛炎之将', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1802232.html#vid=1802232', 0),
(21, 1, 21, 'ALfheim的真实', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1807504.html#vid=1807504', 0),
(22, 1, 22, '终极任务', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1827417.html#vid=1827417', 0),
(23, 1, 23, '羁绊', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1842160.html#vid=1842160', 0),
(24, 1, 24, '镀金的勇者', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1848393.html#vid=1848393', 0),
(25, 1, 25, '世界的种子', 'http://mfjx.zhaogou8.com/?url=http://www.le.com/ptv/vplay/1854529.html#vid=1854529', 0),
(26, 4, 1, NULL, 'http://mfjx.zhaogou8.com/?url=http://www.bilibili.com/video/av5872541/', 0),
(27, 5, 1, NULL, 'http://mfjx.zhaogou8.com/?url=http://www.bilibili.com/video/av5178262/', 0),
(28, 2, 1, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=y0012e7jicc', 0),
(29, 2, 2, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=n00128uouxt', 0),
(30, 2, 3, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=b001266dxtb', 0),
(31, 2, 4, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=z001230n4m3', 0),
(32, 2, 5, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=x0012cg2806', 0),
(33, 2, 6, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=v0012qxxywt', 0),
(34, 2, 7, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=s0013k1uftk', 0),
(35, 2, 8, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=u0013euws8y', 0),
(36, 2, 9, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=w0013irk4hg', 0),
(37, 2, 10, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=d0013k3r7xl', 0),
(38, 2, 11, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=m00131uqi7t', 0),
(39, 2, 12, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=r0013vpg9zo', 0),
(40, 2, 13, NULL, 'http://qq.17hui.cc/qqvip.php?url=http://v.qq.com/cover/r/rfgkivnu2k0ylyb.html?vid=i0013m4f0zt', 0),
(41, 6, 1, 'Prologue 灾厄的时代', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/gU2ZFvFpUI7xb9c.html?rcc_src=B3', 0),
(42, 6, 2, '天之都', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/MyO7OA9jWpj7eeE.html?rcc_src=B3', 0),
(43, 6, 3, '何方', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/jibr5dlEJ8C6RD3c.html?rcc_src=B3', 0),
(44, 6, 4, '圣剑祭', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/ibb8mpaK2rib1QzjY.html?rcc_src=B3', 0),
(45, 6, 5, '导师的命运', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/jYlY17Cokc8ysBg.html?rcc_src=B3', 0),
(46, 6, 6, '灾厄的开端', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/Y7knpKO3ruxPzTU.html?rcc_src=B3', 0),
(47, 6, 7, '贝尔贝特·库劳', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/D6Q8u4zk3RtibicGQ.html?rcc_src=B3', 0),
(48, 6, 8, '各自的思念', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/YibbibfUoeB0WoJo4.html?rcc_src=B3', 0),
(49, 6, 9, '灵峰雷弗克', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/0S6zMBdLMnDTUbk.html?rcc_src=B3', 0),
(50, 6, 10, '瘟疫之城', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/E9gJhoHZwP5h30c.html?rcc_src=B3', 0),
(51, 6, 11, '艾丽莎·蒂芙达', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/p7csq5zUzQtu7FQ.html?rcc_src=B3', 0),
(52, 6, 12, '战争', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/tdYMiaicNZyQdq6FA.html', 0),
(53, 6, 13, '灾祸的显主', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/Bb4ko6S8peNGxCw.html?rcc_src=B3', 0),
(54, 7, 1, '自称灵能力者·灵幻新隆～与龙套～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/qpaCAGjOPnzfXcU.html?rcc_src=P5', 0),
(55, 7, 2, '青春的疑问 ～脑感电波部登场～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/qdkIh5XNtPJV0zs.html?rcc_src=B3', 0),
(56, 7, 3, '集会邀请 ～简而言之就是想受欢迎', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/RQvaWVsP9jSXFX0.html?rcc_src=B3', 0),
(57, 7, 4, '笨蛋限定活动～同类～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/obAvrG4CibzmcGoI.html?rcc_src=B3', 0),
(58, 7, 5, 'OCHIMUSHA ～超能力与我～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/M1WLCApeR4XoZs4.html?rcc_src=B3', 0),
(59, 7, 6, '不协调 ～为了目标～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/c0KiaIfNnXpzicfeU.html?rcc_src=B3', 0),
(60, 7, 7, '～得到丧失感～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/T9MRjozk3RtibicGQ.html?rcc_src=B3', 0),
(61, 7, 8, '哥哥道歉～破坏意图～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/6RnKSUsfBkSnJY0.html?rcc_src=B3', 0),
(62, 7, 9, '“爪” ～第7支部～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/oXVu7aicDuvhb2UE.html?rcc_src=B3', 0),
(63, 7, 10, '大恶的气场 ～黑幕～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/6UKfHB5SS4nsatI.html?rcc_src=B3', 0),
(64, 7, 11, '师傅 ～Leader～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/D3Nv7K7Cuiclc2kI.html?rcc_src=B3', 0),
(65, 7, 12, '龙套与灵幻 ～巨大土龙出现之篇～', 'http://mfjx.zhaogou8.com/?url=http://v.pptv.com/show/dR7EQ1EJ8C6RD3c.html?rcc_src=B3', 0),
(66, 8, 1, NULL, 'http://mfjx.zhaogou8.com/?url=http://www.bilibili.com/video/av5700746/', 0),
(67, 9, 1, NULL, 'http://mfjx.zhaogou8.com/?url=http://www.bilibili.com/video/av5639993/', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
