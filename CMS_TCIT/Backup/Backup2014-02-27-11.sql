CREATE TABLE `tcit_category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `lmID` int(5) DEFAULT NULL,
  `parentID` int(5) DEFAULT '0',
  `orderNo` int(5) DEFAULT '0',
  `categoryTitle` varchar(50) DEFAULT '未命名',
  `categoryTitle1` varchar(50) DEFAULT NULL,
  `categoryTitle2` varchar(50) DEFAULT NULL,
  `categoryBremark` varchar(50) DEFAULT NULL,
  `categoryName1` text,
  `categoryName2` text,
  `categorySmallPic` varchar(255) DEFAULT NULL,
  `categoryBigPic` varchar(255) DEFAULT NULL,
  `categoryContent1` text,
  `categoryContent2` text,
  `multiPic` text,
  `creatTime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='类别表';
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('1','1','0','1','建站技术','','','','','','','','','','','1390555696');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('2','1','0','3','基本知识','','','','','','','','','','','1362645030');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('3','1','0','2','行业动态','','','','','','','','','','','1362645030');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('4','1','1','4','前端技术','别名一','别名二','','描述','','/201401/20140123_120102_6390.jpg','','&lt;span style=\\\"color:#666666;font-family:\\\'Courier New\\\', \\\'Microsoft Yahei\\\', 宋体;line-height:24px;background-color:#FFFFFF;\\\"&gt;内容&lt;/span&gt;','','|/mutli/201401/20140123_132854_4702.jpg||0
|/mutli/201401/20140123_132855_6326.jpg||0
|/mutli/201401/20140123_132856_5457.jpg||0','1390555716');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('5','1','1','14','后台服务','','','','','','','','','','','1390701651');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('6','1','2','6','HTML/XML','','','','','','','','','','','1390701672');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('7','1','2','8','ASP/JSP/PHP','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('8','1','2','7','AJAX/JS/JQUERY','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('9','1','3','11','艾特业界','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('10','1','3','9','新技术','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('11','1','3','10','新产品','','','','','','','','','','|/mutli/201401/20140123_135823_6009.jpg||0
|/mutli/201401/20140123_135824_1455.jpg||0','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('12','1','9','0','360VSQQ','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('13','1','1','0','系统OP','','','','','','','','','','','1390555714');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('14','1','1','13','系统开发','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('16','1','9','12','腾讯技术','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('21','1','1','5','办公系统开发','','','','','','','','','','','0');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('23','2','0','16','栏目类别一','','','','','','','','','','','1390697162');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('24','2','0','17','栏目类别二','','','','','','','','','','','1390697175');
insert into `tcit_category`(`id`,`lmID`,`parentID`,`orderNo`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categoryBremark`,`categoryName1`,`categoryName2`,`categorySmallPic`,`categoryBigPic`,`categoryContent1`,`categoryContent2`,`multiPic`,`creatTime`) values('25','2','0','18','栏目类别三','','','','','','','','','','','1390697182');
CREATE TABLE `tcit_grant` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `value` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
insert into `tcit_grant`(`id`,`name`,`value`,`status`) values('1','ALL','管理员','1');
insert into `tcit_grant`(`id`,`name`,`value`,`status`) values('2','User','用户管理','1');
insert into `tcit_grant`(`id`,`name`,`value`,`status`) values('3','Password','用户名和密码','1');
insert into `tcit_grant`(`id`,`name`,`value`,`status`) values('4','Backup','数据库管理','1');
insert into `tcit_grant`(`id`,`name`,`value`,`status`) values('5','add','添加信息','1');
CREATE TABLE `tcit_member` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `lmID` int(2) DEFAULT NULL,
  `userID` varchar(20) DEFAULT NULL,
  `realName` varchar(10) DEFAULT NULL,
  `passWord` varchar(50) DEFAULT NULL,
  `mailCode` varchar(4) DEFAULT NULL,
  `grantWord` varchar(50) DEFAULT NULL COMMENT '权限 用“|”分隔多个权限',
  `sex` int(1) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `addr` varchar(80) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `youbian` int(6) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `creatTime` int(10) DEFAULT NULL,
  `loginTime` int(10) DEFAULT NULL,
  `attributeData` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
insert into `tcit_member`(`id`,`lmID`,`userID`,`realName`,`passWord`,`mailCode`,`grantWord`,`sex`,`phone`,`tel`,`addr`,`avatar`,`email`,`youbian`,`status`,`creatTime`,`loginTime`,`attributeData`) values('6','4','cloud123','茴香豆儿','85b789dd35ccd43710c905d097732af1','2801','','','','','','','2632414575@qq.com','','1','1392609183','','');
insert into `tcit_member`(`id`,`lmID`,`userID`,`realName`,`passWord`,`mailCode`,`grantWord`,`sex`,`phone`,`tel`,`addr`,`avatar`,`email`,`youbian`,`status`,`creatTime`,`loginTime`,`attributeData`) values('5','4','cloud39','茴香豆儿','85b789dd35ccd43710c905d097732af1','','','','','','','','190296465@qq.com','','1','1392607466','','');
insert into `tcit_member`(`id`,`lmID`,`userID`,`realName`,`passWord`,`mailCode`,`grantWord`,`sex`,`phone`,`tel`,`addr`,`avatar`,`email`,`youbian`,`status`,`creatTime`,`loginTime`,`attributeData`) values('7','4','cloud0274','永恒梦魇','85b789dd35ccd43710c905d097732af1','4866','','0','15982259902','028-87426658','','','394440274@qq.com','0','1','1392623174','','');
CREATE TABLE `tcit_menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `lmID` int(5) NOT NULL COMMENT '栏目ID',
  `lmName` char(20) NOT NULL COMMENT '菜单标题',
  `menuName` char(10) NOT NULL COMMENT '项目标题',
  `orderNo` int(2) DEFAULT NULL COMMENT '排序ID',
  `doLink` varchar(100) DEFAULT NULL COMMENT '功能链接',
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
  `categoryMultiPic` varchar(10) DEFAULT NULL,
  `uname` varchar(10) DEFAULT NULL,
  `company` varchar(10) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='MENU菜单表';
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('1','1000','--------','--------','0','------非管理员请勿修改下列内容------','','','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('2','1000','数据库管理','恢复数据库','12','','','','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('3','1000','数据库管理','备份数据库','11','Core/databaseBackup','','Backup','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('4','1000','数据库管理','系统初始化','13','','','','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('5','1000','系统信息管理','添加菜单','21','Core/addMenu','Core','Core','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('6','1000','系统信息管理','权限字管理','25','Core/grantList','','Grant','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('7','1000','系统信息管理','用户权限管理','24','','','','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('8','1000','系统信息管理','系统信息查看','26','Core/system','','System','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('9','1000','系统信息管理','用户管理','23','Core/userList','','User','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('10','1000','系统信息管理','修改密码','22','Core/changePwd','','Password','','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('11','1','栏目名称','添加','1','News/add','News','add','news','1','title|content|category|smallpic|bigpic|is_tj|is_gd|title1|title2|title3|title4|title4_select|title5|title5_check|content1|content2|content3|content4|content5|name1|name2|name3|name5|upload1|upload2|upload3|upload4|upload5|multiPic|is_ab|is_cd|is_ef|hits|creatTime','所属类别','标题名称','Title','Keywords','Descriptio','select测试','checked测试','','','','','','name1','name2','name3','','name5','content','内容1','内容2','内容3','内容4','内容5','smallpic','bigpic','upload1','upload2','upload3','upload4','upload5','multiPic','推荐','固顶','幻灯','头条','特荐','is_gh','is_jk','is_mn','点击数','类别名称','','','','','','','','','','','','','','','','','','','','','','','中国|美国|英国|日本|韩国','中国|美国|英国|日本|韩国','','','','','','创建时间');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('12','1','栏目名称','类别管理','1','Category','','add','category','1','creatTime|categoryTitle|categoryTitle1|categoryTitle2|categorySmallPic|categoryName1|categoryContent1|categoryMultiPic','','标题名称','','','','','','','','','','','','','','','','详细内容','','','','','','','','','','','','','','','','','','','','','','','类别名称','别名一','别名二','小图片一','categoryBi','categoryBr','描述','哪么2','内容','con2','多图','','','','','','','','','','','','','','','','','','','','创建时间');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('13','2','栏目名称2','添加','2','News/add','News','LAM','news','1','title|content|category|smallpic|is_tj|title1|multiPic|creatTime','所属类别','标题名称','title1','title2','','','','','','','','','','','','','','详细内容','content1','','','','','smallpic','bigpic','','','','','','multiPic','is_tj','','is_ab','','','','','','','类别名称','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','添加时间');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('14','2','栏目名称2','类别管理','2','Category','','LAM','category','1','categoryTitle|noSonType','','标题名称','','','','','','','','','','','','','','','','详细内容','','','','','','','','','','','','','','','','','','','','','','','类别名称','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','创建时间');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('15','3','留言板管理','管理','3','Message','','add','message','1','title|content|creatTime|huifu|uname|phone','','标题名称','','','','','','','','','','','','','','','','详细内容','','','','','','','','','','','','','','','','','','','','','','','类别名称','','','','','','','','','','','姓名','','手机号','','','图片传一个','','','地址','','','','','','','','','','','创建时间');
insert into `tcit_menu`(`id`,`lmID`,`lmName`,`menuName`,`orderNo`,`doLink`,`adminLink`,`grantWord`,`dataBase`,`usable`,`tcitFields`,`category`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`categoryTitle`,`categoryTitle1`,`categoryTitle2`,`categorySmallPic`,`categoryBigPic`,`categoryBremark`,`categoryName1`,`categoryName2`,`categoryContent1`,`categoryContent2`,`categoryMultiPic`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title1_`,`title2_`,`title3_`,`title4_`,`title5_`,`title6_`,`title7_`,`title8_`,`title9_`,`title10_`,`creatTime`) values('16','4','会员管理','管理','4','Member','','add','member','1','title|content','','标题名称','','','','','','','','','','','','','','','','详细内容','','','','','','','','','','','','','','','','','','','','','','','类别名称','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','1392348370');
CREATE TABLE `tcit_message` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `lmID` int(2) DEFAULT '0' COMMENT '栏目ID',
  `newsID` int(5) DEFAULT '0' COMMENT '所属文章ID',
  `msgID` int(11) DEFAULT '0',
  `uname` varchar(20) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `youbian` int(6) DEFAULT NULL,
  `addr` varchar(100) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `content` text,
  `creatTime` int(10) DEFAULT NULL,
  `reContent` text,
  `reTime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
insert into `tcit_message`(`id`,`lmID`,`newsID`,`msgID`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title`,`content`,`creatTime`,`reContent`,`reTime`) values('5','3','0','0','11','','1','','','','','','','11','&lt;img src=\"/Uploads/kindEditor/201401/20140121_143839_7250.jpg\" alt=\"\" /&gt;','1391846150','','1391505830');
insert into `tcit_message`(`id`,`lmID`,`newsID`,`msgID`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title`,`content`,`creatTime`,`reContent`,`reTime`) values('6','3','0','0','姓名','','15982259902','','','','','','','标题名称','asdddddddddddd','1391850770','1212','1391850768');
insert into `tcit_message`(`id`,`lmID`,`newsID`,`msgID`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title`,`content`,`creatTime`,`reContent`,`reTime`) values('7','3','0','0','姓名','','15982259902','','','/201402/20140208_165152_2702.jpg','','','11111111111','标题名称','asdddddddddddd','1391850762','1111','1391850762');
insert into `tcit_message`(`id`,`lmID`,`newsID`,`msgID`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title`,`content`,`creatTime`,`reContent`,`reTime`) values('8','1','0','0','','','','','','','190296465@qq.com','','','','','1392364384','','1392364384');
insert into `tcit_message`(`id`,`lmID`,`newsID`,`msgID`,`uname`,`company`,`phone`,`tel`,`fax`,`pic`,`email`,`youbian`,`addr`,`title`,`content`,`creatTime`,`reContent`,`reTime`) values('9','1','0','0','','','','','','','190296465@qq.com','','','','','1392364390','','1392364390');
CREATE TABLE `tcit_news` (
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
insert into `tcit_news`(`id`,`lmID`,`categoryID`,`categorysID`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`city`,`area`,`likeNews`,`creatTime`) values('2','1','10','0','title','Title','Keywords','Descriptio','英国','中国|美国|英国|韩国','','','','','','111','2','3','4','5','系统','1212','1212','1212','1212','1212','','','','','','','','/Uploads/a/201401/20140121_091018_4537.jpg|||0','0','0','0','0','0','0','0','0','0','','','0','1392803379');
insert into `tcit_news`(`id`,`lmID`,`categoryID`,`categorysID`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`city`,`area`,`likeNews`,`creatTime`) values('11','2','23','0','1','','','','','','','','','','','','','','','','&lt;pre class=&quot;prettyprint lang-html&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;  
&amp;lt;html&amp;gt;  
&amp;lt;head&amp;gt;  
    &amp;lt;title&amp;gt;Css Hack&amp;lt;/title&amp;gt;  
    &amp;lt;style&amp;gt;  
    #test   
    {   
        width:300px;   
        height:300px;   
          
        background-color:blue;      /*firefox*/
        background-color:red\\9;      /*all ie*/
        background-color:yellow\\0;    /*ie8*/
        +background-color:pink;        /*ie7*/
        _background-color:orange;       /*ie6*/
    }  
    :root #test { background-color:purple\\9; }  /*ie9*/
    @media all and (min-width:0px){ #test {background-color:black\\0;} }  /*opera*/
    @media screen and (-webkit-min-device-pixel-ratio:0){ #test {background-color:gray;} }  /*chrome and safari*/
    &amp;lt;/style&amp;gt;  
&amp;lt;/head&amp;gt;  
&amp;lt;body&amp;gt;  
    &amp;lt;div id=&quot;test&quot;&amp;gt;test&amp;lt;/div&amp;gt;  
&amp;lt;/body&amp;gt;  
&amp;lt;/html&amp;gt;&lt;/pre&gt;','','','','','','','','','','','','','','0','0','0','0','0','0','0','0','0','','','0','1392954222');
insert into `tcit_news`(`id`,`lmID`,`categoryID`,`categorysID`,`title`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`title7`,`title8`,`title9`,`title10`,`name1`,`name2`,`name3`,`name4`,`name5`,`content`,`content1`,`content2`,`content3`,`content4`,`content5`,`smallpic`,`bigpic`,`upload1`,`upload2`,`upload3`,`upload4`,`upload5`,`multiPic`,`is_tj`,`is_gd`,`is_ab`,`is_cd`,`is_ef`,`is_gh`,`is_jk`,`is_mn`,`hits`,`city`,`area`,`likeNews`,`creatTime`) values('5','1','4','0','系统OprationSystem','Title','Keywords','Descriptio','英国','美国','','','','','','','','','','','','','','','','','','','','','','','','','0','0','1','0','0','0','0','0','111','','','0','1392803395');
CREATE TABLE `tcit_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
  `userID` varchar(50) NOT NULL COMMENT '用户名',
  `passWord` varchar(50) NOT NULL COMMENT '密码',
  `grantWord` text COMMENT '权限',
  `status` int(1) DEFAULT '0' COMMENT '状态 0禁用 1正常',
  `creatTime` int(10) DEFAULT NULL COMMENT '时间',
  `loginTime` int(10) DEFAULT NULL COMMENT '时间戳',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='用户表';
insert into `tcit_user`(`id`,`userID`,`passWord`,`grantWord`,`status`,`creatTime`,`loginTime`) values('16','cloud','85b789dd35ccd43710c905d097732af1','ALL','1','1391998314','');
insert into `tcit_user`(`id`,`userID`,`passWord`,`grantWord`,`status`,`creatTime`,`loginTime`) values('7','admin','21232f297a57a5a743894a0e4a801fc3','ALL','1','1391837264','');
