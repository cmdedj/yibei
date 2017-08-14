-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2017 年 07 月 14 日 00:29
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `yb`
-- 
CREATE DATABASE `yb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `yb`;

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_borad`
-- 

CREATE TABLE `yb_borad` (
  `id` int(11) NOT NULL auto_increment,
  `useremail` varchar(30) collate utf8_unicode_ci default NULL,
  `userphone` varchar(16) collate utf8_unicode_ci default NULL,
  `usercontent` text collate utf8_unicode_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `yb_borad`
-- 

INSERT INTO `yb_borad` VALUES (1, 'dopafkj@kdfj', '', '');
INSERT INTO `yb_borad` VALUES (2, 'sadfs', '', '');
INSERT INTO `yb_borad` VALUES (3, 'KADHFLKA', '', 'AODJVA;KSNERFQ KLA;S');
INSERT INTO `yb_borad` VALUES (4, 'ASDFAJ', '', 'KJSDA;F AJD;FAIOJWE  ');
INSERT INTO `yb_borad` VALUES (5, 'FAD', 'DFSJLA ;K', ' KDJ;AOKJ');
INSERT INTO `yb_borad` VALUES (6, '', '', '');

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_call`
-- 

CREATE TABLE `yb_call` (
  `Id` int(11) NOT NULL,
  `Title` varchar(10) default NULL,
  `Content` text,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 导出表中的数据 `yb_call`
-- 

INSERT INTO `yb_call` VALUES (1, '忆贝call', '下载即赠送2元话费，无月租、长途费用，拨打国内任意电话每分钟低至0.08元，独有的快速拨号技术，让您使用亿贝通话变得非常方便。');
INSERT INTO `yb_call` VALUES (2, '超级话费', '使用亿贝CALL打电话，无月租、长途费用，充50送20，充100送50，国内电话每分钟低至0.08元。');
INSERT INTO `yb_call` VALUES (3, '使用方便', '独有的快速拨号技术，让您使用亿贝通话变得非常方便，与同类软件相比，无需打开软件、输入被叫人号码等繁琐操作。');
INSERT INTO `yb_call` VALUES (4, '语音清晰', '语音质量清晰、流畅和普通电话没有区别');
INSERT INTO `yb_call` VALUES (5, '服务完善', '您可以随时充值、查询余额、查询话单、查询资费信息，让您明明白白消费。');

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_help`
-- 

CREATE TABLE `yb_help` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(10) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `yb_help`
-- 

INSERT INTO `yb_help` VALUES (1, '如何使用亿贝', '先看看我们特别为您准备的入门教程吧。');
INSERT INTO `yb_help` VALUES (2, '我收到了手机短信，应', '凭手机短信中的拉手券密码就可直接到店消费！');
INSERT INTO `yb_help` VALUES (3, '拉手券可以给朋友吗？', '方法一、 在我的拉手券页面中,点“赠送”按钮,输入好友在拉手网的账号，就直接赠送给朋友了。');

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_message`
-- 

CREATE TABLE `yb_message` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(20) default NULL,
  `iphone` int(10) default NULL,
  `code` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `yb_message`
-- 

INSERT INTO `yb_message` VALUES (1, 'lll@163.com', 1305558024, NULL);

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_news`
-- 

CREATE TABLE `yb_news` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(10) NOT NULL,
  `no` int(3) default NULL,
  `Title` text,
  `url` varchar(30) default NULL,
  `content` text,
  `date` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- 导出表中的数据 `yb_news`
-- 

INSERT INTO `yb_news` VALUES (1, 'admin', 1, '习近平会见普京:共谋两国未来发展', 'index.php', '新华社莫斯科7月3日电 当地时间3日晚，刚刚抵达莫斯科的国家主席习近平，在克里姆林宫同俄罗斯总统普京举行会见。两国元首就共同关心的重大问题深入交换意见，畅叙中俄友谊，共谋两国关系未来发展。 7月初的莫斯科傍晚，微风送爽。夕阳下的克里姆林宫，熠熠生辉。 习近平表示，很高兴再次来俄罗斯进行国事访问，并同普京总统就共同关心的问题交换意见。中俄是全面战略协作伙伴，在处理重大问题时密切沟通协调十分重要。我们双方要加强合作，相互坚定支持走符合本国国情的发展道路，坚定支持对方在维护国家主权、安全、发展利益方面的政策举措。双方要在重大国际和地区问题上加大政策沟通和行动协调，共同化解风险和挑战，共同促进世界和平、稳定、繁荣。 普京对习近平访问俄罗斯表示热烈欢迎。普京表示，俄方高度重视俄中关系。我赞同俄中两国要加强相互支持，密切在重大国际和地区问题上的协作。俄中加强元首外交对发展双边关系具有重要引领和推动作用。相信习近平主席这次访问一定会为俄中全面战略协作伙伴关系注入新的活力和动力。 两国元首就朝鲜半岛局势、叙利亚问题等交换看法。双方一致认为，中俄双方要保持战略协作，劝和促谈，妥善应对朝鲜半岛形势，推动各方通过对话谈判妥善解决朝鲜半岛核问题。“萨德”问题关系地区战略平衡，中俄双方反对在韩国部署“萨德”反导系统的立场是一致的。', '2017-07-04');
INSERT INTO `yb_news` VALUES (2, 'admin', 2, '外交部：反对朝鲜违反安理会决议发射导弹', 'index.php', '据朝鲜中央电视台报道，朝鲜今天（4日）成功试射一枚“火星-14”洲际弹道导弹。\r\n对此，中国外交部发言人耿爽在今天（4日）的例行记者会上表示，中方注意到有关报道，正在跟踪形势发展。中方已经多次重申在有关问题上的立场，安理会有关决议对朝鲜利用弹道导弹技术进行发射活动有明确的规定，中方反对朝鲜违反安理会决议进行有关发射活动，敦促朝方不要再采取违反安理会决议的行动。\r\n耿爽强调，当前半岛局势复杂敏感，希望有关各方都能保持冷静克制，尽快缓解半岛紧张局势，早日把半岛问题重新纳入和平对话的正确轨道。', '2017-07-04');
INSERT INTO `yb_news` VALUES (9, 'admi n', 9, 'editertest', 'www.baidu.com', '<div style="text-align:justify;">\r\n	<em><strong>cdsfadfa sdfecadsffcasedvgadv</strong></em><em><strong></strong></em>\r\n</div>', '2017-07-11');
INSERT INTO `yb_news` VALUES (10, 'amin_mk2', 10, 'pic', 'cn.bing.com', '<img src="../uploadfile/image/20170710/20170710013929_98956.jpg" alt="" />', '2017-07-10');
INSERT INTO `yb_news` VALUES (4, 'admin', 4, '美独立日前夕 波士顿机场一的士撞向人群至少10伤', 'index.php', '【环球网综合报道】美国将于当地时间周二(7月4日)迎来独立日，波士顿洛根国际机场周一下午有一辆白色的士撞向人群，据报最少10人受伤。\r\n香港东网7月4日报道称，当时涉事的士突然撞向在机场外一间接近的士站的户外咖啡店，警方接报到场后立即封锁现场，初步认为是意外，相信司机并非蓄意撞人。驾驶涉事的士的是一名56岁男子，他在现场接受警方问话。\r\n从现场照片可见，涉事的士撞向咖啡店后，现场一片混乱，店外的座位均被撞毁。涉事的士车头撞至变形，损毁严重。当局表示，伤者已分别被送往当地3间医院接受治疗，部分人伤势严重。\r\n警方消息称，相信事件是因操作错误引致，司机误踩油门当作煞车掣，暂无迹象显示事件是有人蓄意造成。', '2017-07-04');
INSERT INTO `yb_news` VALUES (5, 'admin', 5, '人民网批"王者荣耀"释放负能量，腾讯一度暴跌5%', 'index.php', '最新：腾讯今日收盘报269.2港元，下跌11.60港元/4.13%，总市值25515亿港元。\r\n4日，腾讯控股临近午盘暴跌超4%，人民网昨日发布题为“《王者荣耀》，是娱乐大众还是‘陷害’人生”的观点文章称，作为游戏，《王者荣耀》是成功的，而面向社会，它却不断在释放负能量。既要在一定程度上满足用户的游戏需求，又要对孩子进行积极引导，研发并推出一款游戏只是起点，各个主体尽责有为则没有终点。\r\n人民网还提到，游戏出品方近日推出了健康游戏防沉迷系统的“三板斧”，在某种程度上，人们看到了防范的诚意，但“三板斧”能否“解毒”还有待时间检验。', '2017-07-04');
INSERT INTO `yb_news` VALUES (6, 'admin', 6, '央行报告：2017年要实施好稳健中性的货币政策', 'index.php', '近日，中国人民银行发布了《中国金融稳定报告（2017）》，对2016年我国金融体系的稳健性状况进行了全面评估。报告认为，2016年，我国坚持稳中求进的工作总基调，国民经济运行缓中趋稳、稳中向好，金融业改革不断深化，金融市场平稳运行，金融机构整体稳健，金融基础设施建设取得新的进展，宏观审慎政策框架不断完善，实现了“十三五”良好开局。\r\n报告指出，2016年，世界经济缓慢复苏，发达经济体面临一系列政治、经济挑战，新兴市场经济体有所企稳，但仍面临调整与转型压力。面对日趋复杂的国内外经济金融形势，我国继续实施积极的财政政策和稳健的货币政策，经济增速保持平稳，产业结构持续优化，需求结构继续改善，国际收支总体平衡，消费价格温和上涨，工业企业效益有所好转，就业形势保持稳定，银行体系流动性合理充裕，社会融资规模平稳较快增长，货币金融环境基本稳定。', '2017-07-04');
INSERT INTO `yb_news` VALUES (8, 'admin', 3, '美日安全会被叫停 或与稻田朋美拉票言论有关', 'index.php', 'ksdf;klwa;r jg;aojks eia wjkzad;lsknaf je;w', '2017-07-04');

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_question_class`
-- 

CREATE TABLE `yb_question_class` (
  `id` int(11) NOT NULL auto_increment,
  `Class_id` int(3) default NULL,
  `Title` varchar(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `yb_question_class`
-- 

INSERT INTO `yb_question_class` VALUES (1, 1, '常见问题');
INSERT INTO `yb_question_class` VALUES (2, 2, '其他问题');

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_tel`
-- 

CREATE TABLE `yb_tel` (
  `id` int(3) NOT NULL,
  `title` varchar(10) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 导出表中的数据 `yb_tel`
-- 

INSERT INTO `yb_tel` VALUES (1, '忆贝通讯录', '下载即赠送2元话费，无月租、长途费用，拨打国内任意电话每分钟低至0.08元，独有的快速拨号技术，让您使用亿贝通话变得非常方便。');
INSERT INTO `yb_tel` VALUES (2, '安全方便', '能帮您把手机中的电话号码备份到一个有密码保护的网络存储空间中，永不丢失，操作界面简洁美观，只需2到3分即可完成备份。');
INSERT INTO `yb_tel` VALUES (3, '备份提醒', '当您隔一段时间忘记备份提醒备份时，我们会自动通过短信或邮件提醒您进行备份');
INSERT INTO `yb_tel` VALUES (4, '快速恢复', '在您购买新机时能帮您把备份的电话号码迅速下载到新手机上');
INSERT INTO `yb_tel` VALUES (5, '在线浏览', '在您手机没带或者没电时，还能通过WAP和WEB网站随时随地查看您的电话号码本。');

-- --------------------------------------------------------

-- 
-- 表的结构 `yb_user`
-- 

CREATE TABLE `yb_user` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `yb_user`
-- 

INSERT INTO `yb_user` VALUES (1, 'admin', 'admin');
INSERT INTO `yb_user` VALUES (2, 'admin_mk2', '23456');
INSERT INTO `yb_user` VALUES (3, 'admin_mk3', '34567');
INSERT INTO `yb_user` VALUES (4, 'admin_mk4', '45678');
INSERT INTO `yb_user` VALUES (5, 'admin_mk5', 'admin');
