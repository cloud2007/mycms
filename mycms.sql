-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2014 年 01 月 21 日 09:42
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mycms`
--

-- --------------------------------------------------------

--
-- 表的结构 `bak`
--

CREATE TABLE IF NOT EXISTS `bak` (
  `menuId` int(5) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `lmId` int(5) NOT NULL COMMENT '栏目ID',
  `lmName` char(20) NOT NULL COMMENT '菜单标题',
  `menuName` char(10) NOT NULL COMMENT '项目标题',
  `orderNo` int(2) DEFAULT NULL COMMENT '排序ID',
  `doLink` varchar(100) NOT NULL COMMENT '功能链接',
  `adminLink` varchar(100) DEFAULT NULL COMMENT '管理链接',
  `powerWord` varchar(10) DEFAULT NULL COMMENT '权限',
  `dataBase` char(10) DEFAULT NULL COMMENT '数据库',
  `Tuse` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否可用',
  `set_nr` text COMMENT '选中',
  `cateId` varchar(10) DEFAULT '所属类别' COMMENT '所属类别',
  `title` varchar(10) DEFAULT '标题名称' COMMENT '标题名称',
  `title1` varchar(10) NOT NULL DEFAULT 'title1',
  `title2` varchar(10) NOT NULL DEFAULT 'title2',
  `title3` varchar(10) NOT NULL DEFAULT 'title3',
  `title4` varchar(10) NOT NULL DEFAULT 'title4',
  `title5` varchar(10) NOT NULL DEFAULT 'title5',
  `title6` varchar(10) NOT NULL DEFAULT 'title6',
  `title7` varchar(10) NOT NULL DEFAULT 'title7',
  `title8` varchar(10) NOT NULL DEFAULT 'title8',
  `title9` varchar(10) NOT NULL DEFAULT 'title9',
  `title10` varchar(10) NOT NULL DEFAULT 'title10',
  `name1` varchar(10) NOT NULL DEFAULT 'name1',
  `name2` varchar(10) NOT NULL DEFAULT 'name2',
  `name3` varchar(10) NOT NULL DEFAULT 'name3',
  `name4` varchar(10) NOT NULL DEFAULT 'name4',
  `name5` varchar(10) NOT NULL DEFAULT 'name5',
  `content` varchar(10) NOT NULL DEFAULT '内容',
  `content1` varchar(10) NOT NULL DEFAULT 'content1',
  `content2` varchar(10) NOT NULL DEFAULT 'content2',
  `content3` varchar(10) NOT NULL DEFAULT 'content3',
  `content4` varchar(10) NOT NULL DEFAULT 'content4',
  `content5` varchar(10) NOT NULL DEFAULT 'content5',
  `smallpic` varchar(50) NOT NULL DEFAULT '上传小图',
  `bigpic` varchar(50) NOT NULL DEFAULT '上传大图',
  `upload1` varchar(50) NOT NULL DEFAULT 'upload1',
  `upload2` varchar(50) NOT NULL DEFAULT 'upload2',
  `upload3` varchar(50) NOT NULL DEFAULT 'upload3',
  `upload4` varchar(50) NOT NULL DEFAULT 'upload4',
  `upload5` varchar(50) NOT NULL DEFAULT 'upload5',
  `multiPic1` text,
  `multiPic2` text,
  `is_tj` tinyint(1) NOT NULL DEFAULT '0',
  `is_gd` tinyint(1) NOT NULL DEFAULT '0',
  `is_ab` tinyint(1) NOT NULL DEFAULT '0',
  `is_cd` tinyint(1) NOT NULL DEFAULT '0',
  `is_ef` tinyint(1) NOT NULL DEFAULT '0',
  `is_gh` tinyint(1) NOT NULL DEFAULT '0',
  `is_jk` tinyint(1) NOT NULL DEFAULT '0',
  `is_mn` tinyint(1) NOT NULL DEFAULT '0',
  `hits` int(5) DEFAULT '0',
  `btype_name` varchar(20) DEFAULT NULL,
  `btype_smallpic` varchar(20) DEFAULT NULL,
  `btype_bigpic` varchar(20) DEFAULT NULL,
  `bremark` varchar(20) DEFAULT NULL,
  `btype_content1` varchar(20) DEFAULT NULL,
  `btype_content2` varchar(20) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `hfpic` varchar(20) DEFAULT NULL,
  `mail` varchar(20) DEFAULT NULL,
  `youbian` varchar(20) DEFAULT NULL,
  `title1_` varchar(20) DEFAULT NULL,
  `title2_` varchar(20) DEFAULT NULL,
  `title3_` varchar(20) DEFAULT NULL,
  `title4_` varchar(20) DEFAULT NULL,
  `title5_` varchar(20) DEFAULT NULL,
  `title6_` varchar(20) DEFAULT NULL,
  `title7_` varchar(20) DEFAULT NULL,
  `title8_` varchar(20) DEFAULT NULL,
  `title9_` varchar(20) DEFAULT NULL,
  `title10_` varchar(20) DEFAULT NULL,
  `creattime` int(10) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`menuId`),
  FULLTEXT KEY `series` (`menuName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='MENU菜单表' AUTO_INCREMENT=164 ;

--
-- 导出表中的数据 `bak`
--

INSERT INTO `bak` (`menuId`, `lmId`, `lmName`, `menuName`, `orderNo`, `doLink`, `adminLink`, `powerWord`, `dataBase`, `Tuse`, `set_nr`, `cateId`, `title`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `name1`, `name2`, `name3`, `name4`, `name5`, `content`, `content1`, `content2`, `content3`, `content4`, `content5`, `smallpic`, `bigpic`, `upload1`, `upload2`, `upload3`, `upload4`, `upload5`, `multiPic1`, `multiPic2`, `is_tj`, `is_gd`, `is_ab`, `is_cd`, `is_ef`, `is_gh`, `is_jk`, `is_mn`, `hits`, `btype_name`, `btype_smallpic`, `btype_bigpic`, `bremark`, `btype_content1`, `btype_content2`, `uname`, `tel`, `fax`, `hfpic`, `mail`, `youbian`, `title1_`, `title2_`, `title3_`, `title4_`, `title5_`, `title6_`, `title7_`, `title8_`, `title9_`, `title10_`, `creattime`) VALUES
(1, 1000, '--------', '--------', 0, '------请勿随便修改下列内容------', '', 'menu', '', 0, '|link_cs1|link_cs2|addtime', '所属类别', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'upload1', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1291024134),
(2, 1000, '数据库管理', '恢复数据库', 1000, 'datamanage/datarestore.php', '', 'datamanage', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'uploadfile', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 1000, '数据库管理', '备份数据库', 1000, 'datamanage/databackup.php', '', 'datamanage', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'upload1', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2010),
(4, 1000, '数据库管理', '系统初始化', 1000, 'datamanage/datareset.php', '', 'ALL', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'upload1', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2010),
(5, 1000, '系统信息管理', '添加菜单功能', 1000, 'other/addmenu.php?op=add', 'other/menu.php', 'menu', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'uploadfile', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 1000, '系统信息管理', '权限字管理', 1000, 'grant/grantword.php', '', 'grantword', 'grant', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'uploadfile', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 1000, '系统信息管理', '用户权限管理', 1000, 'grant/grant.php', '', 'usergrant', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'uploadfile', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(8, 1000, '系统信息管理', '系统信息查看', 1000, 'welcome.php', '', 'info', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'uploadfile', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(9, 1000, '系统信息管理', '用户管理', 1000, 'other/edituser.php', '', 'user', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'uploadfile', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(10, 1000, '系统信息管理', '用户名和密码', 1000, 'other/changepassword.php', '', 'change', '', 0, '', '所属类别', '标题名称', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9', 'title10', 'name1', 'name2', 'name3', 'name4', 'name5', 'content', 'content1', 'content2', 'content3', 'content4', 'content5', '上传小图', '上传大图', 'uploadfile', 'upload2', 'upload3', 'upload4', 'upload5', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(132, 1, '全局参数管理', '管理', 1, 'news/news.php?data=news&lm_id=1', '', 'add', 'news', 0, '|link_cs1|link_cs2|title|content|smallpic|bigpic|title1|title2|title3|content1|content2|content3|content4|name1|name2|addtime', '所属类别', '全局参数', 'Title', 'Keywords', 'Descriptio', '', '', '', '', '', '', '', '广告一链接', '广告二链接', '', '', '', '首页关于我们', '关于我们', '首页联系我们', '联系我们', '案例中心介绍', '', '广告图片一', '广告图片二', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '茴香豆儿1', '15982259902', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1330059083),
(157, 2, '全局参数管理', '幻灯图片', 2, 'news/addnews.php?data=news&lm_id=2', 'news/news.php?data=news&lm_id=2', 'add', 'news', 0, '|link_cs1|link_cs2|title|smallpic|title1|name4|addtime', '所属类别', '图片说明', '排序ID', '', '', '', '', '', '', '', '', '', '', '', '', '链接地址(带http', '', '', '', '', '', '', '', '上传图片734*22', '', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1329970027),
(158, 2, '全局参数管理', '幻灯xml更新', 2, 'news/update_flash_xml.php?data=news&lm_id=2', '', 'add', 'news', 0, '|link_cs1|link_cs2|addtime', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1329968959),
(159, 3, '文章管理', '文章类别', 3, 'news/manage_btype.php?data=btype&lm_id=3', '', 'add', 'btype', 0, '|link_cs1|link_cs2|addtime|btype_name', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '类别名称', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1329976942),
(160, 3, '文章管理', '添加文章', 3, 'news/addnews.php?data=news&lm_id=3', 'news/news.php?data=news&lm_id=3', 'add', 'news', 0, '|link_cs1|link_cs2|title|content|btype_id|title2|name1|addtime|hit', '所属类别', '文章标题', '', '关键词(,)', '', '', '', '', '', '', '', '', 'Descriptio', '', '', '', '', '文章内容', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '茴香豆儿1', '15982259902', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1330071195),
(161, 4, '案例中心', '添加', 4, 'news/addnews.php?data=news&lm_id=4', 'news/news.php?data=news&lm_id=4', 'add', 'news', 0, '|link_cs1|link_cs2|title|content|smallpic|bigpic|title1|addtime', '', '案例名称', '连接地址', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '详细介绍', '', '', '', '', '', '图片270*152', '大图', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '茴香豆儿1', '15982259902', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1330074730),
(162, 3, '全局参数管理', '更新搜索热词', 3, 'news/update_news_keywords.php?data=news&lm_id=3', '', 'add', 'news', 0, '|link_cs1|link_cs2|addtime', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1329989549),
(163, 5, '友情链接', '添加', 5, 'news/addnews.php?data=news&lm_id=5', 'news/news.php?data=news&lm_id=5', 'add', 'news', 0, '|link_cs1|link_cs2|title|name4|addtime|is_tj', '', '链接标题', '', '', '', '', '', '', '', '', '', '', '', '', '', '链接地址(带http', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '茴香豆儿1', '15982259902', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1331022878);

-- --------------------------------------------------------

--
-- 表的结构 `btype`
--

CREATE TABLE IF NOT EXISTS `btype` (
  `btype_id` int(255) NOT NULL AUTO_INCREMENT,
  `lm_id` int(50) DEFAULT NULL,
  `parent_id` int(255) NOT NULL DEFAULT '0',
  `btype_name` char(50) NOT NULL DEFAULT '未命名',
  `b_order` int(255) NOT NULL DEFAULT '0',
  `bremark` varchar(500) NOT NULL DEFAULT '备注',
  `btype_content1` text NOT NULL,
  `btype_content2` text NOT NULL,
  `btype_smallpic` char(255) NOT NULL,
  `btype_bigpic` char(255) NOT NULL,
  `addtime` int(255) NOT NULL,
  PRIMARY KEY (`btype_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='类别表' AUTO_INCREMENT=20 ;

--
-- 导出表中的数据 `btype`
--

INSERT INTO `btype` (`btype_id`, `lm_id`, `parent_id`, `btype_name`, `b_order`, `bremark`, `btype_content1`, `btype_content2`, `btype_smallpic`, `btype_bigpic`, `addtime`) VALUES
(18, 3, 0, '建站技术/行业动态', 0, '', '', '', '', '', 1330070521),
(19, 3, 0, '网站建设基本知识', 0, '', '', '', '', '', 1362645030);

-- --------------------------------------------------------

--
-- 表的结构 `freedback`
--

CREATE TABLE IF NOT EXISTS `freedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lm_id` int(11) NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `news_id` varchar(20) NOT NULL DEFAULT '0' COMMENT '所属文章ID',
  `hf_id` int(11) NOT NULL DEFAULT '0',
  `is_hf` varchar(5) NOT NULL DEFAULT 'False',
  `title` text,
  `content` text,
  `hf_content` text,
  `uname` varchar(20) DEFAULT NULL,
  `tel` text,
  `fax` text,
  `hfpic` text,
  `email` text,
  `youbian` text,
  `addtime` int(11) DEFAULT NULL,
  `hftime` int(11) DEFAULT NULL,
  `info` text COMMENT '订单修改信息',
  `huiyuan_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `freedback`
--


-- --------------------------------------------------------

--
-- 表的结构 `huiyuan`
--

CREATE TABLE IF NOT EXISTS `huiyuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `addr` text,
  `mail` varchar(50) DEFAULT NULL,
  `uname` varchar(10) DEFAULT NULL,
  `youbian` int(6) DEFAULT NULL,
  `is_used` varchar(5) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `lm_id` int(5) DEFAULT NULL,
  `beizhu` text,
  `changetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `huiyuan`
--


-- --------------------------------------------------------

--
-- 表的结构 `tcit_menu`
--

CREATE TABLE IF NOT EXISTS `tcit_menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `lmID` int(5) NOT NULL COMMENT '栏目ID',
  `lmName` char(20) NOT NULL COMMENT '菜单标题',
  `menuName` char(10) NOT NULL COMMENT '项目标题',
  `orderNo` int(2) DEFAULT NULL COMMENT '排序ID',
  `doLink` varchar(100) NOT NULL COMMENT '功能链接',
  `adminLink` varchar(100) DEFAULT NULL COMMENT '管理链接',
  `grantWord` varchar(10) DEFAULT NULL COMMENT '权限',
  `dataBase` char(10) DEFAULT NULL COMMENT '数据库',
  `usable` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否可用',
  `tcitFields` text,
  `category` varchar(10) DEFAULT '所属类别' COMMENT '所属类别',
  `title` varchar(10) DEFAULT '标题名称' COMMENT '标题名称',
  `title1` varchar(10) DEFAULT 'title1',
  `title2` varchar(10) DEFAULT 'title2',
  `title3` varchar(10) DEFAULT 'title3',
  `title4` varchar(10) DEFAULT 'title4',
  `title5` varchar(10) DEFAULT 'title5',
  `title6` varchar(10) DEFAULT 'title6',
  `title7` varchar(10) DEFAULT 'title7',
  `title8` varchar(10) DEFAULT 'title8',
  `title9` varchar(10) DEFAULT 'title9',
  `title10` varchar(10) DEFAULT 'title10',
  `name1` varchar(10) DEFAULT 'name1',
  `name2` varchar(10) DEFAULT 'name2',
  `name3` varchar(10) DEFAULT 'name3',
  `name4` varchar(10) DEFAULT 'name4',
  `name5` varchar(10) DEFAULT 'name5',
  `content` varchar(10) DEFAULT '内容',
  `content1` varchar(10) DEFAULT 'content1',
  `content2` varchar(10) DEFAULT 'content2',
  `content3` varchar(10) DEFAULT 'content3',
  `content4` varchar(10) DEFAULT 'content4',
  `content5` varchar(10) DEFAULT 'content5',
  `smallpic` varchar(10) DEFAULT '上传小图',
  `bigpic` varchar(10) DEFAULT '上传大图',
  `upload1` varchar(10) DEFAULT 'upload1',
  `upload2` varchar(10) DEFAULT 'upload2',
  `upload3` varchar(10) DEFAULT 'upload3',
  `upload4` varchar(10) DEFAULT 'upload4',
  `upload5` varchar(10) DEFAULT 'upload5',
  `multiPic` varchar(10) DEFAULT NULL,
  `is_tj` varchar(10) DEFAULT NULL,
  `is_gd` varchar(10) DEFAULT NULL,
  `is_ab` varchar(10) DEFAULT NULL,
  `is_cd` varchar(10) DEFAULT NULL,
  `is_ef` varchar(10) DEFAULT NULL,
  `is_gh` varchar(10) DEFAULT NULL,
  `is_jk` varchar(10) DEFAULT NULL,
  `is_mn` varchar(10) DEFAULT NULL,
  `hits` varchar(10) DEFAULT '0',
  `categoryTitle` varchar(10) DEFAULT NULL,
  `categoryTitle1` varchar(10) DEFAULT NULL,
  `categoryTitle2` varchar(10) DEFAULT NULL,
  `categorySmallPic` varchar(10) DEFAULT NULL,
  `categoryBigPic` varchar(10) DEFAULT NULL,
  `categoryBremark` varchar(10) DEFAULT NULL,
  `categoryName1` varchar(10) DEFAULT NULL,
  `categoryName2` varchar(10) DEFAULT NULL,
  `categoryContent1` varchar(10) DEFAULT NULL,
  `categoryContent2` varchar(10) DEFAULT NULL,
  `uname` varchar(10) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `fax` varchar(10) DEFAULT NULL,
  `pic` varchar(10) DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `youbian` varchar(10) DEFAULT NULL,
  `addr` varchar(10) DEFAULT NULL,
  `title1_` varchar(255) DEFAULT NULL,
  `title2_` varchar(255) DEFAULT NULL,
  `title3_` varchar(255) DEFAULT NULL,
  `title4_` varchar(255) DEFAULT NULL,
  `title5_` varchar(255) DEFAULT NULL,
  `title6_` varchar(255) DEFAULT NULL,
  `title7_` varchar(255) DEFAULT NULL,
  `title8_` varchar(255) DEFAULT NULL,
  `title9_` varchar(255) DEFAULT NULL,
  `title10_` varchar(255) DEFAULT NULL,
  `creatTime` varchar(10) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='MENU菜单表' AUTO_INCREMENT=12 ;

--
-- 导出表中的数据 `tcit_menu`
--

INSERT INTO `tcit_menu` (`id`, `lmID`, `lmName`, `menuName`, `orderNo`, `doLink`, `adminLink`, `grantWord`, `dataBase`, `usable`, `tcitFields`, `category`, `title`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `name1`, `name2`, `name3`, `name4`, `name5`, `content`, `content1`, `content2`, `content3`, `content4`, `content5`, `smallpic`, `bigpic`, `upload1`, `upload2`, `upload3`, `upload4`, `upload5`, `multiPic`, `is_tj`, `is_gd`, `is_ab`, `is_cd`, `is_ef`, `is_gh`, `is_jk`, `is_mn`, `hits`, `categoryTitle`, `categoryTitle1`, `categoryTitle2`, `categorySmallPic`, `categoryBigPic`, `categoryBremark`, `categoryName1`, `categoryName2`, `categoryContent1`, `categoryContent2`, `uname`, `phone`, `tel`, `fax`, `pic`, `email`, `youbian`, `addr`, `title1_`, `title2_`, `title3_`, `title4_`, `title5_`, `title6_`, `title7_`, `title8_`, `title9_`, `title10_`, `creatTime`) VALUES
(1, 1000, '--------', '--------', 0, '------非管理员请勿修改下列内容------', NULL, 'menu', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(2, 1000, '数据库管理', '恢复数据库', 1000, 'datamanage/datarestore.php', NULL, 'datamanage', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(3, 1000, '数据库管理', '备份数据库', 1000, 'datamanage/databackup.php', NULL, 'datamanage', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(4, 1000, '数据库管理', '系统初始化', 1000, 'datamanage/datareset.php', NULL, 'ALL', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(5, 1000, '系统信息管理', '添加菜单', 1000, 'Core/addMenu', 'Core', 'Core', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(6, 1000, '系统信息管理', '权限字管理', 1000, 'grant/grantword.php', NULL, 'grantword', 'grant', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(7, 1000, '系统信息管理', '用户权限管理', 1000, 'grant/grant.php', NULL, 'usergrant', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(8, 1000, '系统信息管理', '系统信息查看', 1000, 'welcome.php', NULL, 'info', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(9, 1000, '系统信息管理', '用户管理', 1000, 'other/edituser.php', NULL, 'user', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(10, 1000, '系统信息管理', '用户名和密码', 1000, 'other/changepassword.php', NULL, 'change', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(11, 1, '全局参数管理', '添加参数', 1, 'News/Add', 'News', 'add', 'news', 1, 'title|content|category|smallpic|bigpic|is_tj|title1|title2|title3|title4|title4_select|title5|title5_check|content1|content2|content3|content4|content5|name1|name2|name3|name5|upload1|upload2|upload3|upload4|upload5|multiPic|is_ab|is_cd|is_ef|is_mn|hits|creatTime', 'category', '标题名称', 'Title', 'Keywords', 'Descriptio', 'select测试', 'checked测试', '', '', '', '', '', 'name1', 'name2', 'name3', '', 'name5', 'content', '内容1', '内容2', '内容3', '内容4', '内容5', 'smallpic', 'bigpic', 'upload1', 'upload2', 'upload3', 'upload4', 'upload5', 'multiPic', 'is_tj', 'is_gd', 'is_ab', 'is_cd', 'is_ef', 'is_gh', 'is_jk', 'is_mn', 'hits', '类别名称', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '中国|美国|英国|日本|韩国', '中国|美国|英国|日本|韩国', '', '', '', '', '', 'creatTime');

-- --------------------------------------------------------

--
-- 表的结构 `tcit_news`
--

CREATE TABLE IF NOT EXISTS `tcit_news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `lmID` int(2) NOT NULL,
  `categoryID` int(2) DEFAULT NULL,
  `categorysID` int(2) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `title1` varchar(100) DEFAULT NULL,
  `title2` varchar(100) DEFAULT NULL,
  `title3` varchar(100) DEFAULT NULL,
  `title4` varchar(100) DEFAULT NULL,
  `title5` varchar(100) DEFAULT NULL,
  `title6` varchar(100) DEFAULT NULL,
  `title7` varchar(100) DEFAULT NULL,
  `title8` varchar(100) DEFAULT NULL,
  `title9` varchar(100) DEFAULT NULL,
  `title10` varchar(100) DEFAULT NULL,
  `name1` text,
  `name2` text,
  `name3` text,
  `name4` text,
  `name5` text,
  `content` text,
  `content1` text,
  `content2` text,
  `content3` text,
  `content4` text,
  `content5` text,
  `smallpic` varchar(50) DEFAULT NULL,
  `bigpic` varchar(50) DEFAULT NULL,
  `upload1` varchar(50) DEFAULT NULL,
  `upload2` varchar(50) DEFAULT NULL,
  `upload3` varchar(50) DEFAULT NULL,
  `upload4` varchar(50) DEFAULT NULL,
  `upload5` varchar(50) DEFAULT NULL,
  `multiPic` text,
  `is_tj` tinyint(1) DEFAULT NULL,
  `is_gd` tinyint(1) DEFAULT NULL,
  `is_ab` tinyint(1) DEFAULT NULL,
  `is_cd` tinyint(1) DEFAULT NULL,
  `is_ef` tinyint(1) DEFAULT NULL,
  `is_gh` tinyint(1) DEFAULT NULL,
  `is_jk` tinyint(1) DEFAULT NULL,
  `is_mn` tinyint(1) DEFAULT NULL,
  `hits` int(5) NOT NULL DEFAULT '0',
  `city` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `likeNews` int(5) DEFAULT NULL,
  `creatTime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `tcit_news`
--

INSERT INTO `tcit_news` (`id`, `lmID`, `categoryID`, `categorysID`, `title`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `name1`, `name2`, `name3`, `name4`, `name5`, `content`, `content1`, `content2`, `content3`, `content4`, `content5`, `smallpic`, `bigpic`, `upload1`, `upload2`, `upload3`, `upload4`, `upload5`, `multiPic`, `is_tj`, `is_gd`, `is_ab`, `is_cd`, `is_ef`, `is_gh`, `is_jk`, `is_mn`, `hits`, `city`, `area`, `likeNews`, `creatTime`) VALUES
(1, 11, NULL, NULL, 'title', 'Title', 'Keywords', 'Descriptio', '英国', '美国|英国', NULL, NULL, NULL, NULL, NULL, 'name1', 'name2', 'name3', NULL, 'name5', NULL, '内容1', '内容2', '内容3', '内容4', '内容5', NULL, NULL, '/201401/20140121_143056_8073.jpg', '/201401/20140121_095008_2427.jpg', '/201401/20140121_094020_7988.jpg', '/201401/20140121_094630_9136.jpg', '/201401/20140120_110636_8136.jpg', '|/mutli/201401/20140121_143104_9001.jpg||0\n|/mutli/201401/20140121_143105_9835.jpg||0\n|/mutli/201401/20140121_143106_7803.jpg||0', 1, NULL, 0, 0, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 11, NULL, NULL, 'title', 'Title', 'Keywords', 'Descriptio', '英国', '中国|美国|英国|韩国', NULL, NULL, NULL, NULL, NULL, '111', '2', '3', '4', '5', NULL, '1212', '1212', '1212', '1212', '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/Uploads/a/201401/20140121_091018_4537.jpg|||0', 0, NULL, 0, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tcit_user`
--

CREATE TABLE IF NOT EXISTS `tcit_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
  `userID` varchar(50) NOT NULL COMMENT '用户名',
  `passWord` varchar(50) NOT NULL COMMENT '密码',
  `grantWord` text NOT NULL COMMENT '权限',
  `creatTime` int(10) NOT NULL COMMENT '时间',
  `loginTime` int(10) DEFAULT NULL COMMENT '时间戳',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `tcit_user`
--

INSERT INTO `tcit_user` (`id`, `userID`, `passWord`, `grantWord`, `creatTime`, `loginTime`) VALUES
(2, 'cloud', '85b789dd35ccd43710c905d097732af1', '|ALL', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tgrant`
--

CREATE TABLE IF NOT EXISTS `tgrant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `Tuse` varchar(5) NOT NULL DEFAULT 'true',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `tgrant`
--

INSERT INTO `tgrant` (`id`, `name`, `value`, `Tuse`) VALUES
(1, 'add', '添加信息', 'True'),
(2, 'user', '用户管理', 'True'),
(3, 'grantword', '权限字管理', 'True'),
(4, 'ALL', '管理员', 'True'),
(6, 'change', '用户名和密码', 'True'),
(7, 'usergrant', '用户权限管理', 'True'),
(8, 'info', '网站信息查看', 'True');
