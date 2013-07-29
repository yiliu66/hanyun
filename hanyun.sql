-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2013 at 08:08 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hanyun`
--
CREATE DATABASE IF NOT EXISTS `hanyun` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hanyun`;

-- --------------------------------------------------------

--
-- Table structure for table `oms_articles`
--

DROP TABLE IF EXISTS `oms_articles`;
CREATE TABLE IF NOT EXISTS `oms_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `introtext` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `oms_articles`
--

INSERT INTO `oms_articles` (`id`, `title`, `introtext`, `category`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(18, '云时代：Linux在企业IT中发展迅猛', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 云计算的出现让成本再次成为焦点。由于其运行在商用硬件上，Linux为公司提供了扩展计算资源的廉价方式。他们可以购买白盒Linux系统，只需几千美元左右，而不是去花费上万上百万美元去购买专有系统。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;几年前，公司不得不购买昂贵产品，因为没其他替换选择。&ldquo;传统上，Linux扩展性不高，也无法提供如专有解决方案那样高的处理能力，&rdquo;Lyman表示。可扩展性通常是个问题，但硬件厂商已经能够处理。例如，英特尔最新的Xeon芯片能提供与专有解决方案相同的处理能力。</p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;但随着公司发现Linux的更多用处，他们面临新的挑战。首先是发现并拥有Linux技术。&ldquo;这对Linux程序员要求很高，&rdquo;Lealta Media的Shingate说，&ldquo;通常需要花费我们好几个月去消化并理解。&rdquo;企业通常需要开出高价格收获技术人才，并且让他们不跳槽也蛮费劲。</p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 同样，虽然Linux在新兴市场表现抢眼，但在企业中还是落后于微软的Windows。稳定性和惯性是公司不想将现有应用迁移到另一个平台的原因。如大型系统ERP得一直运转，公司不想对其作出任何重大改变。</p>\r\n<p class="STYLE8">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 用户易用性是Windows成功的另一原因。&ldquo;微软在交付方案方面的工作做得很好，很多终端用户都很喜欢，&rdquo;TW Telecom的Samuel表示。他们使用Windows支持大量的日常业务运营应用，如桌面生产系统和ERP。 Linux乘着云浪前进快速，在新应用市场获得增长。Linux在持续发威，缓慢进入Windows领地，稳定入侵Unix应用，显著发展在云中。</p>\r\n<p>&nbsp;</p>', '业界新闻', '2013-07-23 14:44:33', 'admin', '2013-07-25 17:33:07', 'wzkf'),
(19, '汉云科技二期工程节能型数据中心正在建设中', '<p style="text-align: center"><img alt="" src="/hanyun/img/datacube.jpg" /></p>\r\n<p style="text-align: center">&nbsp;</p>\r\n<p style="text-align: center">汉云科技二期datacube（建设中）敬请期待！</p>', '公司公告', '2013-07-23 14:47:38', 'admin', '2013-07-25 09:45:07', 'wzkf'),
(20, '云存储时代，企业如何选择网盘', '<p style="text-align: center"><span style="font-size: smaller"><img alt="" align="textTop" style="width: 232px; height: 178px" src="/hanyun/img/134F644G-0.png" /></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style="text-align: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;　　<strong>个人网盘VS企业网盘</strong></p>\r\n<p class="STYLE8">　　现在是各种网盘混战的年代。各互联网及科技公司介入这块领域也比较早，经过一段时间的发展，个人网盘产品功能已经比较完善，对个人来说使用起来比较得心应手，但是针对企业来说，选择个人网盘就会有很多不便之处，难以实现协同办公以及企业管理的目标。</p>\r\n<p class="STYLE8">　　<strong>首先，从目标人群看</strong>:</p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;个人网盘针对个人用户，其核心需求是&ldquo;存储+分享&rdquo;辅以娱乐功能，而企业网盘功能的开发都是以企业为核心，解决数据存储和管理问题。比如搜狐企业网盘向企业用户提供了文件存储和分发汇总、文件分享、协作共享、企业管理、安全保密等功能，为企业打造一体化的云办公平台，这是个人网盘无法相比的。</p>\r\n<p class="STYLE8">　　<strong>其次，从商业模式看</strong>:</p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 企业网盘通过向企业用户收取服务费用的盈利模式保证服务稳定性；而个人网盘，以免费为基础，吸引广大用户，但盈利模式的不确定将使其服务面临巨大不确定性，比如容量有限，很难满足企业的需求；广告等干扰因素多；限制条件多（如每月流量限制、存储文件大小限制、外链单文件大小限制、速度限制）等，随时可能因为盈利问题而造成服务中断，并且用户一旦数据丢失，几乎不可能被找回。</p>\r\n<p class="STYLE8">　　<strong>再次，从产品功能看</strong>:</p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在文件管理上，个人网盘是为个人用户提供日常文件存储服务的，个人用户所存储的文件主要集中在个人的文档、照片、视频和应用程序上，因而造成个人网盘产品的文件预览支持格式较为单一，不支持断点续传，更重要的是web端上传文件的大小限制比较严格，会给很多用户造成使用不便。但企业网盘在文件管理上功能更强大，比如搜狐企业网盘，对于常用办公格式的文件都能实现预览，并考虑到企业上传文件的大小和时间问题，无论是web端还是windows端都是上传文件大小无限制，并支持断线续传，这可以完全满足企业文件管理需求。</p>\r\n<p class="STYLE8">　　总的来说，企业想要实现高效、协同的办公，企业网盘相比个人网盘更胜一筹。</p>\r\n<p class="STYLE8">　　<strong>企业网盘该如何选择</strong></p>\r\n<p class="STYLE8">　　当前市场上的主要企业网盘品种分为品牌公司的企业网盘和企业邮箱中的企业网盘。</p>\r\n<p class="STYLE8">　　不同规模的企业对网盘的要求有所不同。一般小企业由于规模较小，对企业网盘的各项功能的专业性要求不高，只需要日常的简单办公等，在这些方面的功能上各大企业网盘产品大致相同，只是在细节上稍有差别。中大型企业层级多、员工多、文件多，需要企业网盘能为其提供便捷员工和文件管理、高效办公、灵活扩容的网盘服务。</p>\r\n<p class="STYLE8">　　如今已是数字办公时代，管理庞大的数据已成为企业运作中的一项重要任务。如何提高协同办公的效率已经成为各大公司必须要面对的问题，因此选择能提供一体化办公的云存储平台就十分重要。未来凭借对用户和产品的专注，搜狐企业网盘将不断提升用户体验和技术水平，为企业打造更加完美的云办公服务，以最稳定、最安全的服务为企业发展注入动力。</p>', '业界新闻', '2013-07-23 14:49:00', 'admin', '2013-07-25 17:33:38', 'wzkf'),
(15, '汉云节能型数据中心二期投入建设。', '<p><span class="STYLE8" style="color: rgb(63, 63, 63); margin: 0px; padding: 0px; border: 0px; font-family: 宋体; line-height: 18px;">汉云节能型数据中心二期投入建设</span><span style="color: rgb(63, 63, 63); font-family: Arial; line-height: 18px;">。</span></p>', '公司公告', '2013-07-23 09:04:53', 'admin', '2013-07-23 09:04:53', ''),
(16, '汉云科技销售网站正式上线', '<p>汉云科技销售网站正式改版上线</p>\r\n<p>网址：<a href="http://www.yun365.net">www.yun365.net</a></p>', '公司公告', '2013-07-23 09:58:28', 'admin', '2013-07-25 09:44:49', 'wzkf'),
(17, '大数据的威力已经无所不在', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 对于普通人来说，大数据似乎相距甚远，我们对它还是一个陌生的状态，但它的威力已无所不在：信用卡公司追踪客户信息，能迅速发现资金异动，并向持卡人发出警示;能源公司利用气象数据分析，可以轻松选定安装风轮机的理想地点;瑞典首都斯德哥尔摩使用运算程序管理交通，令市区拥堵时间缩短一半&hellip;&hellip;等等，这些都与大数据有着千丝万缕的关系。</p>\r\n<p class="STYLE8"><b>&nbsp;&nbsp;商业提供&ldquo;精准预测&rdquo; </b></p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在不少公司、实验室和政府机构，&ldquo;数据&rdquo;被捧为21世纪新型&ldquo;石油&rdquo;。一些统计学家、物理学家和所谓的数据科学家从中获利丰厚，他们服务于大数据应用程序开发公司，&ldquo;蓝色彼岸&rdquo;便是其中之一。&ldquo;大数据正在重塑整个经济，我们只是处于起步阶段。&rdquo;魏斯说。</p>\r\n<p class="STYLE8"><b>&nbsp;&nbsp;医疗个性化治癌疗法 </b></p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 普拉特纳是全球最大的企业管理和系统化商务解决方案供应商&ldquo;思爱普&rdquo;(SAP)创始人，也是HPI赞助人。他介绍说，HPI的汉娜数据库技术始于一个名叫&ldquo;SanssouciDB&rdquo;项目，由8个大学生创立，曾获得创新大奖，如今已成为&ldquo;内存储处理&rdquo;的代名词。</p>\r\n<p class="STYLE8"><b>&nbsp;&nbsp;警惕个人数据被无休止滥用</b></p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在现代社会，一个更加迫切的问题是：人们是否真的愿意接受一个&ldquo;数字驱动经济&rdquo;的世界?一个一切都计算好的世界里，创意、灵感和惊喜在哪里?对此，互联网哲学家莫罗佐夫警告即将发生&ldquo;数据暴政&rdquo;。他提出，&ldquo;大数据&rdquo;应用程序应当接受独立审计人定期审查，以防权力滥用。</p>\r\n<p class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;</p>', '业界新闻', '2013-07-23 12:54:47', 'admin', '2013-07-25 17:35:32', 'wzkf'),
(21, '大数据如何帮助我们减少碳排放量', '<p><strong>智能能源网格</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在不久的将来，将有越来越多的家电设备带有传感器。这些传感器能够在能源公司、家庭智能仪表和电器之间进行双向通信。当所有的家用电器都通过传感器连接到互联网时，我们就可以根据需要，对单个设备的能耗进行监测和调整。越来越多的能源机构正在开发智能电表来记录单个家用电器设备的电能消耗情况。而这些信息将返回到能源公司，使得能源公司可以了解和预测能源需求。我们相信，随着研发工作的进一步深入，实时监控和调整能源需求将只是时间问题。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 当越来越多的设备具备了传感器之后，产品之间也将能够相互通信交流，甚至是进行跨不同网络的通信。这将帮助能源企业更好地了解和管理整个网络的能源利用率。对于未来的电动汽车来说，这是相当有用且重要的。当消费者回家后将电动汽车的充电和其他家用电器同时开启时，能源电网可能无法应付这一需求的高峰期。因此，越多的电器设备具备了传感器，就越能够与能源网络进行通信和沟通，能源公司也就能够更好的管理其网络内的能量分布。</p>\r\n<p>&nbsp;这种智能电网也将同时能够防止能量在网络中的损失并防止停电事故的发生。传感器系统可以同步的实时监测电线的状况，每秒钟都能收集多个数据流。这些信息可以更容易地检测到停电事故。当确实发生停电事故时，其可以使得能源公司的响应速度更快、更好。这种传感器还可以检测能量是如何在网络中传输的，以及在何时何地发生了能量损失。这些信息实时传递反馈给能源公司的控制中心，能够帮助他们实时的需求进行调整。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>改变消费者的行为</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 如果消费者可以根据实时数据和能源价格管理他们自己的能源消耗，将可能会改变他们的行为。一款智能电表可以基于需求预测建议消费者在稍后某个时刻能源成本降低时使用某款电器设备。这将帮助能源公司更好地管理能源需求。如果某款电器设备（例如加热器）可以基于价格范围和网络的能量需求自行决定在最佳时间开始工作，这无疑将产生更好的效果。</p>\r\n<p><strong>预测需求和价格</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大数据也将有助于优化能源交易，从而更好地预测价格波动。大数据可以基于1000个不同的数据集针对能源市场做出几乎实时的复杂分析。随着能源价格的波动，能够基于这1000个不同的数据源进行价格预测是相当有价值的。对于能源供应和需求的预测，能够帮助能源销售机构获利。通过对市场的充分了解，他们可以保护自己免受能源价格波动的影响。最后，他们将能够提供更便宜的能源，提高客户满意度。</p>\r\n<p><strong>未来的投资和维护</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 来自网络的大量传感器的数据信息可以提供关于网络质量的附加信息。它可以帮助能源企业确定未来的投资是否是必要的，或是需要进行维护。不必进行定期的网络检查，大数据工具可以用来实时的监控网络设备，只在必要时采取相关的措施。这将为能源企业节省很多不必要的调查，预防费用。同样，这些信息还将有助于了解哪些投资能够帮助能源企业获得最大的投资回报。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大数据应用在能源领域最重要的影响是，其将使得现有的能源网络变得更高效。这将帮助我们减少能源消耗量，并降低消费者的购买价格。智能能源管理可以防止电网超载运行，并防止新的和昂贵的电厂建设需求。较少的电厂能够提供更高效率的能源和更低的价格，影响我们的碳排量。所以，最终，大数据有可能变成比采用可再生能源更可持续的技术，以帮助我们减少碳排量。</p>', '业界新闻', '2013-07-25 13:54:26', 'wzkf', '2013-07-25 17:37:50', 'wzkf'),
(22, '汉云科技暑期大促！', '<p style="text-align: center"><span style="font-size: large">汉云科技暑期大促销！</span></p>\r\n<p style="text-align: center"><span style="font-size: medium"><span style="color: #ff0000"><img style="width: 703px; height: 300px" alt="" src="/hanyun/img/10359817_101211767000_2.png" /></span></span></p>\r\n<p style="text-align: center"><span style="font-size: medium"><span style="color: #ff0000">服务器最低4800元一年，还多送1个月！</span></span></p>\r\n<p style="text-align: center"><span style="font-size: medium"><span style="color: #ff0000">云主机买一赠一！送全套技术支持！</span></span></p>\r\n<p style="text-align: center"><span style="font-size: medium"><span style="color: #ff0000">低成本解决方案低至8折！</span></span></p>\r\n<p style="text-align: center"><span style="color: #0000ff"><span style="font-size: medium">还等什么！赶快行动吧！</span></span></p>\r\n<p style="text-align: center"><span style="color: #0000ff"><span style="font-size: medium">抢购热线：400-6799-709</span></span></p>', '公司公告', '2013-07-25 14:20:45', 'wzkf', '2013-07-25 14:20:45', '');

-- --------------------------------------------------------

--
-- Table structure for table `oms_counts`
--

DROP TABLE IF EXISTS `oms_counts`;
CREATE TABLE IF NOT EXISTS `oms_counts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `oms_counts`
--

INSERT INTO `oms_counts` (`id`, `name`) VALUES
(1, 10),
(2, 20),
(3, 30),
(4, 40),
(5, 50),
(6, 80),
(7, 100),
(8, 150),
(9, 200),
(10, 300),
(11, 400),
(12, 500),
(13, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `oms_disks`
--

DROP TABLE IF EXISTS `oms_disks`;
CREATE TABLE IF NOT EXISTS `oms_disks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `capacity` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `oms_disks`
--

INSERT INTO `oms_disks` (`id`, `name`) VALUES
(1, '1T'),
(2, '2T'),
(3, '1T*2'),
(4, '1T*3'),
(5, '2T*2'),
(6, '2T*3'),
(7, '100G'),
(8, '200G'),
(9, '300G'),
(10, '500G');

-- --------------------------------------------------------

--
-- Table structure for table `oms_items`
--

DROP TABLE IF EXISTS `oms_items`;
CREATE TABLE IF NOT EXISTS `oms_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(40) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `oms_items`
--

INSERT INTO `oms_items` (`id`, `name`, `created`, `created_by`, `modified`, `modified_by`, `price`) VALUES
(31, '通用型服务器', '2013-06-28 12:44:02', 'admin', '2013-07-23 08:54:05', 'admin', '4800.00'),
(37, '应用型服务器', '2013-06-28 15:46:09', 'hezudaopp', '2013-07-23 08:54:21', 'admin', '9800.00'),
(38, '超算型服务器', '2013-07-09 12:24:28', 'admin', '2013-07-23 08:54:48', 'admin', '13800.00'),
(41, '至尊型服务器', '2013-07-09 12:40:53', 'admin', '2013-07-23 08:55:09', 'admin', '15800.00'),
(42, '学习型云主机', '2013-07-10 10:46:33', 'admin', '2013-07-23 08:55:27', 'admin', '2100.00'),
(43, '基础型云主机', '2013-07-10 10:47:17', 'admin', '2013-07-23 08:55:43', 'admin', '3900.00'),
(44, '商务型云主机', '2013-07-10 10:47:40', 'admin', '2013-07-23 08:56:09', 'admin', '7800.00'),
(45, '超算型云主机', '2013-07-10 10:48:05', 'admin', '2013-07-23 08:56:23', 'admin', '15000.00'),
(46, '至尊型云主机', '2013-07-11 08:19:59', 'admin', '2013-07-23 08:56:35', 'admin', '21400.00');

-- --------------------------------------------------------

--
-- Table structure for table `oms_items_disks`
--

DROP TABLE IF EXISTS `oms_items_disks`;
CREATE TABLE IF NOT EXISTS `oms_items_disks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `disk_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `oms_items_disks`
--

INSERT INTO `oms_items_disks` (`id`, `item_id`, `disk_id`, `price`) VALUES
(1, 31, 1, '0.00'),
(2, 37, 1, '0.00'),
(3, 38, 1, '0.00'),
(4, 41, 1, '0.00'),
(5, 37, 2, '500.00'),
(6, 38, 2, '500.00'),
(7, 41, 2, '500.00'),
(8, 37, 3, '1000.00'),
(9, 38, 3, '1000.00'),
(10, 41, 3, '1000.00'),
(11, 37, 4, '2000.00'),
(12, 37, 5, '2000.00'),
(13, 41, 5, '2000.00'),
(14, 37, 6, '3500.00'),
(15, 38, 5, '2000.00'),
(16, 42, 7, '0.00'),
(17, 42, 8, '300.00'),
(18, 42, 9, '600.00'),
(19, 46, 8, '0.00'),
(20, 46, 9, '300.00'),
(21, 46, 10, '900.00'),
(22, 45, 8, '0.00'),
(23, 45, 9, '300.00'),
(24, 45, 10, '900.00'),
(25, 44, 8, '0.00'),
(26, 44, 9, '300.00'),
(27, 44, 10, '900.00'),
(28, 43, 7, '0.00'),
(29, 43, 8, '300.00'),
(30, 43, 9, '600.00');

-- --------------------------------------------------------

--
-- Table structure for table `oms_items_mems`
--

DROP TABLE IF EXISTS `oms_items_mems`;
CREATE TABLE IF NOT EXISTS `oms_items_mems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=201 ;

--
-- Dumping data for table `oms_items_mems`
--

INSERT INTO `oms_items_mems` (`id`, `item_id`, `mem_id`, `price`) VALUES
(1, 31, 1, '0.00'),
(2, 37, 1, '0.00'),
(3, 31, 2, '500.00'),
(4, 37, 2, '500.00'),
(5, 38, 2, '0.00'),
(6, 41, 2, '0.00'),
(7, 31, 3, '1500.00'),
(8, 37, 3, '1500.00'),
(9, 38, 3, '800.00'),
(10, 41, 3, '800.00'),
(19, 42, 1, '0.00'),
(12, 37, 4, '3000.00'),
(13, 38, 4, '2400.00'),
(14, 41, 4, '2400.00'),
(15, 38, 5, '4000.00'),
(16, 41, 5, '4000.00'),
(17, 38, 6, '5600.00'),
(18, 41, 6, '5600.00'),
(20, 42, 2, '400.00'),
(21, 46, 4, '0.00'),
(22, 46, 5, '6400.00'),
(23, 46, 6, '9600.00'),
(24, 45, 4, '0.00'),
(25, 45, 6, '6400.00'),
(26, 45, 8, '9600.00'),
(27, 44, 3, '0.00'),
(28, 44, 4, '4800.00'),
(29, 43, 1, '0.00'),
(30, 43, 2, '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `oms_items_processers`
--

DROP TABLE IF EXISTS `oms_items_processers`;
CREATE TABLE IF NOT EXISTS `oms_items_processers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `processer_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `oms_items_processers`
--

INSERT INTO `oms_items_processers` (`id`, `item_id`, `processer_id`, `price`) VALUES
(1, 31, 1, '0.00'),
(2, 37, 2, '0.00'),
(3, 38, 3, '0.00'),
(4, 38, 4, '3000.00'),
(5, 38, 5, '4500.00'),
(6, 41, 6, '0.00'),
(7, 41, 7, '6000.00'),
(8, 41, 8, '8500.00'),
(9, 42, 9, '0.00'),
(10, 46, 13, '0.00'),
(11, 45, 12, '0.00'),
(12, 44, 11, '0.00'),
(13, 43, 10, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `oms_mails`
--

DROP TABLE IF EXISTS `oms_mails`;
CREATE TABLE IF NOT EXISTS `oms_mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `oms_mails`
--

INSERT INTO `oms_mails` (`id`, `name`, `capacity`) VALUES
(1, 'G-云邮箱', '10G'),
(2, 'T-云邮箱', '0.1T');

-- --------------------------------------------------------

--
-- Table structure for table `oms_mails_counts`
--

DROP TABLE IF EXISTS `oms_mails_counts`;
CREATE TABLE IF NOT EXISTS `oms_mails_counts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_id` int(11) NOT NULL,
  `count_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `oms_mails_counts`
--

INSERT INTO `oms_mails_counts` (`id`, `mail_id`, `count_id`, `price`) VALUES
(1, 1, 1, '60.00'),
(2, 1, 2, '60.00'),
(3, 1, 3, '55.00'),
(4, 1, 4, '55.00'),
(5, 1, 5, '50.00'),
(6, 1, 6, '50.00'),
(7, 1, 7, '45.00'),
(8, 1, 8, '45.00'),
(9, 1, 9, '40.00'),
(10, 1, 10, '40.00'),
(11, 1, 11, '35.00'),
(12, 1, 12, '35.00'),
(13, 1, 13, '30.00'),
(14, 2, 1, '160.00'),
(15, 2, 2, '155.00'),
(16, 2, 3, '150.00'),
(17, 2, 4, '145.00'),
(18, 2, 5, '140.00'),
(19, 2, 6, '135.00'),
(20, 2, 7, '130.00'),
(21, 2, 8, '125.00'),
(22, 2, 9, '120.00'),
(23, 2, 10, '110.00'),
(24, 2, 11, '100.00'),
(25, 2, 12, '90.00'),
(26, 2, 13, '80.00');

-- --------------------------------------------------------

--
-- Table structure for table `oms_mems`
--

DROP TABLE IF EXISTS `oms_mems`;
CREATE TABLE IF NOT EXISTS `oms_mems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `capacity` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=301 ;

--
-- Dumping data for table `oms_mems`
--

INSERT INTO `oms_mems` (`id`, `name`) VALUES
(2, '4G'),
(3, '8G'),
(4, '16G'),
(6, '32G'),
(7, '48G'),
(8, '64G'),
(1, '2G'),
(5, '24G');

-- --------------------------------------------------------

--
-- Table structure for table `oms_orders`
--

DROP TABLE IF EXISTS `oms_orders`;
CREATE TABLE IF NOT EXISTS `oms_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(50) NOT NULL,
  `user_company` varchar(100) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_tel` varchar(20) NOT NULL,
  `user_qq` varchar(12) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `item_name` varchar(40) NOT NULL,
  `processer_name` varchar(40) DEFAULT NULL,
  `mem_name` varchar(40) DEFAULT NULL,
  `disk_name` varchar(40) DEFAULT NULL,
  `created` datetime NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `checked_by` varchar(40) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_number` (`order_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `oms_orders`
--

INSERT INTO `oms_orders` (`id`, `order_number`, `user_company`, `user_name`, `user_email`, `user_tel`, `user_qq`, `remark`, `item_name`, `processer_name`, `mem_name`, `disk_name`, `created`, `checked`, `checked_by`, `deleted`, `price`) VALUES
(57, '137454506275596600', 'NJU', '何足道', 'hezudaopp@qq.com', '18604040443', '909827303', '需要備註嗎？', '应用型服务器', 'E3-1230', '16G', '2T*2', '2013-07-23 10:04:22', 1, 'wzkf', 0, '13300.00'),
(58, '137456955369817800', '22', '阿斯顿撒旦', '22@qq.com', '15861325700', '5764646546', '2222', '汉云云主机', '1Core/4Core/8Core 任选', '2G/8G/16G 任选', '100G/200G 任选', '2013-07-23 16:52:33', 0, 'wzkf', 0, NULL),
(59, '137507390708100400', '测试', '测试', 'hezudaopp@qq.com', '13857372634', '23432293', '', '汉云云主机', '1Core/4Core/8Core 任选', '2G/8G/16G 任选', '100G/200G 任选', '2013-07-29 06:58:27', 0, '', 0, '4800.00');

-- --------------------------------------------------------

--
-- Table structure for table `oms_processers`
--

DROP TABLE IF EXISTS `oms_processers`;
CREATE TABLE IF NOT EXISTS `oms_processers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `oms_processers`
--

INSERT INTO `oms_processers` (`id`, `name`) VALUES
(1, 'I3-2100'),
(2, 'E3-1230'),
(3, 'E5-2620'),
(4, 'E5-2640'),
(5, 'E5-2650'),
(6, 'E5-2620*2'),
(7, 'E5-2640*2'),
(8, 'E5-2650*2'),
(9, '1core'),
(10, '2core'),
(11, '4core'),
(12, '8core'),
(13, '16core');

-- --------------------------------------------------------

--
-- Table structure for table `oms_users`
--

DROP TABLE IF EXISTS `oms_users`;
CREATE TABLE IF NOT EXISTS `oms_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `oms_users`
--

INSERT INTO `oms_users` (`id`, `username`, `password`, `created`, `email`, `tel`) VALUES
(4, 'wzkf', '98eb4472787f5d88165a929b5b5947a1c15996b2', '2013-07-24 09:18:58', 'wzkf@han-yun.net', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
