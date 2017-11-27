/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50624
 Source Host           : localhost
 Source Database       : hrbwxd

 Target Server Type    : MySQL
 Target Server Version : 50624
 File Encoding         : utf-8

 Date: 07/24/2017 21:48:21 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_admin`
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_admin`
-- ----------------------------
BEGIN;
INSERT INTO `t_admin` VALUES ('1', 'admin', 'admin');
COMMIT;

-- ----------------------------
--  Table structure for `t_article`
-- ----------------------------
DROP TABLE IF EXISTS `t_article`;
CREATE TABLE `t_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clicked` int(11) DEFAULT '0',
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `fk_article_type` (`type_id`),
  CONSTRAINT `fk_article_type` FOREIGN KEY (`type_id`) REFERENCES `t_article_type` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_article`
-- ----------------------------
BEGIN;
INSERT INTO `t_article` VALUES ('1', '关于收取二Ｏ一六年度无线电台（站）频率占用费的通知', '全市各无线电设台单位：\r\n根据《中华人民共和国无线电管理条例》、《黑龙江省无线电管理条例》和《齐齐哈尔市无线电管理办法》的有关规定，现就收取二Ｏ一六年度无线电台（站）频率占用费的具体事宜通知如下：\r\n \r\n一、收费范围：\r\n凡在齐齐哈尔市所辖区内设置、使用无线电台(包括无线电对讲机)的单位和个人。\r\n \r\n二、收费依据：\r\n按照《中华人民共和国无线电管理条例》第四条中频谱资源有偿使用的原则，依据计价费 [1998]218 号、发改价格 [2003]2300 号和发改价格 [2005]2812 号文件的收费标准收取频率占用费。\r\n \r\n三、收费时限：\r\n自通知下发之日起，三十日内（截止到二Ｏ一六年四月十五日），各设台单位必须到我处办理频率占用费缴费手续。\r\n \r\n四、具体要求：\r\n1、各设台单位和个人必须严格按时间要求缴纳频率占用费。逾期不缴的，按规定增收滞纳金。逾期半年不缴的，无线电管理机构可收回所指配的频率，吊销电台执照，并不再受理该单位的其它频率使用和设台申请。\r\n　   2 、各单位要在台站变更、停用时及时出具文件报告，否则按照正常情况收费。\r\n　   3 、对非法设台、滥用频率、擅自变更台站参数的单位和个人，将依据《中华人民共和国无线电管理条例》、《无线电管理处罚规定》和《黑龙江省无线电管理条例》进行处罚。如上述行为对合法无线电台（站）造成有害干扰，情节严重者，将按照《中华人民共和国刑法》第 288 条及《中华人民共和国治安管理处罚法》第 28 条进行处理。\r\n      4 、对拒绝到我处缴纳频率占用费的单位和个人，将按照行政执法程序移交法院执行。 \r\n\r\n    五、收费单位信息：\r\n　 单位地址：齐齐哈尔市建华区党校街161号\r\n　  联系人：何齐       电话： 0452-2745266\r\n \r\n \r\n全市各无线电设台单位：\r\n根据《中华人民共和国无线电管理条例》、《黑龙江省无线电管理条例》和《齐齐哈尔市无线电管理办法》的有关规定，现就收取二Ｏ一六年度无线电台（站）频率占用费的具体事宜通知如下：\r\n \r\n一、收费范围：\r\n凡在齐齐哈尔市所辖区内设置、使用无线电台(包括无线电对讲机)的单位和个人。\r\n \r\n二、收费依据：\r\n按照《中华人民共和国无线电管理条例》第四条中频谱资源有偿使用的原则，依据计价费 [1998]218 号、发改价格 [2003]2300 号和发改价格 [2005]2812 号文件的收费标准收取频率占用费。\r\n \r\n三、收费时限：\r\n自通知下发之日起，三十日内（截止到二Ｏ一六年四月十五日），各设台单位必须到我处办理频率占用费缴费手续。\r\n \r\n四、具体要求：\r\n1、各设台单位和个人必须严格按时间要求缴纳频率占用费。逾期不缴的，按规定增收滞纳金。逾期半年不缴的，无线电管理机构可收回所指配的频率，吊销电台执照，并不再受理该单位的其它频率使用和设台申请。\r\n　   2 、各单位要在台站变更、停用时及时出具文件报告，否则按照正常情况收费。\r\n　   3 、对非法设台、滥用频率、擅自变更台站参数的单位和个人，将依据《中华人民共和国无线电管理条例》、《无线电管理处罚规定》和《黑龙江省无线电管理条例》进行处罚。如上述行为对合法无线电台（站）造成有害干扰，情节严重者，将按照《中华人民共和国刑法》第 288 条及《中华人民共和国治安管理处罚法》第 28 条进行处理。\r\n      4 、对拒绝到我处缴纳频率占用费的单位和个人，将按照行政执法程序移交法院执行。 \r\n\r\n    五、收费单位信息：\r\n　 单位地址：齐齐哈尔市建华区党校街161号\r\n　  联系人：何齐       电话： 0452-2745266\r\n \r\n \r\n全市各无线电设台单位：\r\n根据《中华人民共和国无线电管理条例》、《黑龙江省无线电管理条例》和《齐齐哈尔市无线电管理办法》的有关规定，现就收取二Ｏ一六年度无线电台（站）频率占用费的具体事宜通知如下：\r\n \r\n一、收费范围：\r\n凡在齐齐哈尔市所辖区内设置、使用无线电台(包括无线电对讲机)的单位和个人。\r\n \r\n二、收费依据：\r\n按照《中华人民共和国无线电管理条例》第四条中频谱资源有偿使用的原则，依据计价费 [1998]218 号、发改价格 [2003]2300 号和发改价格 [2005]2812 号文件的收费标准收取频率占用费。\r\n \r\n三、收费时限：\r\n自通知下发之日起，三十日内（截止到二Ｏ一六年四月十五日），各设台单位必须到我处办理频率占用费缴费手续。\r\n \r\n四、具体要求：\r\n1、各设台单位和个人必须严格按时间要求缴纳频率占用费。逾期不缴的，按规定增收滞纳金。逾期半年不缴的，无线电管理机构可收回所指配的频率，吊销电台执照，并不再受理该单位的其它频率使用和设台申请。\r\n　   2 、各单位要在台站变更、停用时及时出具文件报告，否则按照正常情况收费。\r\n　   3 、对非法设台、滥用频率、擅自变更台站参数的单位和个人，将依据《中华人民共和国无线电管理条例》、《无线电管理处罚规定》和《黑龙江省无线电管理条例》进行处罚。如上述行为对合法无线电台（站）造成有害干扰，情节严重者，将按照《中华人民共和国刑法》第 288 条及《中华人民共和国治安管理处罚法》第 28 条进行处理。\r\n      4 、对拒绝到我处缴纳频率占用费的单位和个人，将按照行政执法程序移交法院执行。 \r\n\r\n    五、收费单位信息：\r\n　 单位地址：齐齐哈尔市建华区党校街161号\r\n　  联系人：何齐       电话： 0452-2745266\r\n \r\n \r\n', '2016-11-21 15:55:01', '33', '1'), ('2', '首例伪基站犯罪判决生效', '全国首例伪基站犯罪判决生效\r\n人民邮电报1月24日消息:1月15日, 全国首例伪基站犯罪公诉案件刑事判决正式生效,两被告以\"破坏公用电信设施罪”分别被判处有期徒刑一年六个月和一年两个月,这标志着我国在依法打击伪基站方面迈出了重要一步。\r\n2013年下半年以来，公安部对伪基站犯罪实行严打高压政策，在北京、辽宁、湖北、湖南等全国12个省区市严厉打击利用伪基站实施的违法犯罪行为。在湖北省内，省公安厅、省通信管理局、通信运营商等多方联动，积极推进依法打击伪基站。截止2014年1月中旬，仅中国移动湖北公司就在全省范围内协助破获伪基站案34起，缴获相关设备38套，抓捕涉案人员64人。\r\n一个专用信号发射器、一台笔记本电脑、一部手机、一根天线。这样简单构成的基站，一个小时内就能发送5万条垃圾短信。这是记者在湖北孝感看到的一台最近缴获的伪基站设备。伪基站不仅严重干扰了居民正常通信 ，更给人民的生命财产安全造成严重威胁。据统计，仅2013年上半年，诈骗短信就给全国手机用户造成超过3000万元的经济损失。\r\n上一篇：关于非法设置伪基站的通告', '2016-11-21 15:55:39', '55', '1'), ('3', '关于非法设置伪基站的通告', '近期，齐齐哈尔市行政区域内，连续出现非法设置、使用调频广播电台（夜间传播假药广告信息）、伪基站（移动短信群发器，发送垃圾短信）和卫星电视干扰器等案件，对社会治安稳定和百姓财产安全产生严重隐患，造成国家公众通信网受到干扰。齐齐哈尔无线电管理部门已经对查获的案件依法进行了行政处罚，在此告诫违法人员，非法设置、使用无线电台的行为将按照《中华人民共和国刑法》、《中华人民共和国治安管理处罚法》、《黑龙江省无线电管理条例》对涉案人员进行严厉处罚。\r\n特此通告！', '2017-05-04 21:08:08', '67', '1'), ('4', '对已经取得无线电台执照的合法用户应注意哪些问题？', '（1）无线电台执照应妥善保管，不准转借或涂改。遗失电台执照，必须追查下落，并立即报告当地无线电管理机构；\r\n（2）无线电台执照中核定的内容不能自行变更。如需变更，应事先向当地无线电管理机构提交申请，经审查批准后，重新核发电台执照，否则视为非法设台；\r\n（3）在执照有效期内停用或撤销无线电台（站）时，设台单位和个人应主动到当地无线电管理机构停用或注销手续，交回电台执照，否则视为正常使用，仍需缴纳频率占用费；\r\n（4）无线电台执照有效期满，电台执照即行失效，应立即停止使用无线电台（站），否则视为非法设台。无线电台执照有效期满后仍需使用的，必须在期满前一个月向当地无线电管理机构办理电台执照更新手续；\r\n（5）当设台单位或个人的名称、地址、联系人、电话等发生变化时，应及时与当地无线电管理机构联系。所设台站受到有害干扰时，可向当地无线电管理机构进行投诉。', '2016-11-21 16:49:49', '7', '1'), ('27', '参加全省保护民航铁路专用频率打击非法设台（第一阶段）专项行动', '10月31日，齐齐哈尔无线电管理机构人员在处、站长带领下前往大庆市报到，与全省其他地市的无线电同事们会合，并于11月1日至8日按照省局统一指挥开展保护民航铁路专用频率打击非法设台第一阶段的专项行动。\r\n    此次专项行动按照省局要求分成三个测试组，各组人员严格按照测试日程表开展测试活动，重点对民航机场、铁路沿线等地段进行测试，同时沿途做好对“黑广播”、“伪基站”等非法电台的监听监测，消除干扰隐患，保障交通安全，维护百姓利益。齐齐哈尔无线电管理机构被分配在第二测试组，按照省局部署从11月1日开始分别前往大庆市机场、克山农场、查哈阳农场、嫩江县、五大连池市、伊春市五营区、庆安县、海伦市等地开展无线电保障测试行动。在测试期间，工作人员严格执行测试流程，充分保证测试时长，确保测试结果完整、准确，技术人员每天晚上汇总整理相关测试数据并按时上报，同时加强对当地调频广播频段的监测力度，由专人负责在夜间对调频广播频率进行监听，严查私设“黑广播”电台。通过全省无线电管理同志们的共同努力，在此次第一阶段的测试工作中对机场、铁路专用频率进行全面测试并保存频谱图及相关台站数据，对发现的干扰隐患进行了排查和有效处理，沿途测试过程中发现并成功取缔了两个黑广播电台，较为圆满地完成了第一阶段的保障测试工作任务。\r\n \r\n                                          （管理处何齐撰稿）', '2016-11-21 17:10:39', '0', '2'), ('28', '参加全省保护民航铁路专用频率打击非法设台专项活动.', null, '2016-11-21 17:11:11', '0', '2'), ('29', '2016年黑龙江省无线电应急技术演练竞赛圆满结束', null, '2016-11-21 17:11:41', '0', '2'), ('30', '全省无线电应急技术演练竞赛集结在伊春', null, '2016-11-21 17:11:58', '0', '2'), ('31', '参加全省无线电通讯应急保障（大兴安岭站）技术演练竞赛活动', null, '2016-11-30 14:16:10', '39', '2'), ('32', '全省无线电应急技术演练竞赛集结在伊春', null, '2016-11-21 17:12:50', '0', '2'), ('33', '随着移动通信业务的快速发展，蜂窝无线电通信基站（以下简称基站）数量日益增多，基站管理日趋重要。为了规范设置、使用基站的行为，提高行政效率，减少或避免各种蜂窝无线电通信网络之间，以及基站与其它无线电台（站）、辐射无线电波的非无线电设备之间的无线电干扰，', null, '2016-11-28 19:22:56', '4', '2'), ('34', '黑龙江省无线电管理条例', null, '2016-11-30 14:20:04', '3', '3'), ('35', '业余无线电台管理办法', null, '2016-11-21 17:35:45', '0', '3'), ('36', '齐齐哈尔市无线电管理办法', null, '2016-11-21 17:35:51', '0', '3'), ('37', '中华人民共和国无线电管理条例', null, '2016-11-21 17:35:56', '0', '3'), ('38', '中华人民共和国无线电管制规定', null, '2016-11-21 17:36:03', '0', '3'), ('39', '中华人民共和国行政诉讼法', null, '2016-11-21 17:36:23', '0', '3'), ('40', '中华人民共和国行政诉讼法\r\n中华人民共和国行政复议法', null, '2017-05-04 21:08:02', '4', '3'), ('41', '关于发布《业余无线电台呼号管理办法》的通知', null, '2017-05-04 21:08:04', '4', '3'), ('42', '《中华人民共和国治安管理处罚法》关于无线电管理的规定', null, '2017-05-04 21:07:58', '3', '3'), ('43', '关于蜂窝无线电通信基站设置使用管理有关问题的通知', null, '2016-11-28 19:13:12', '2', '3'), ('44', '民用无人驾驶航空器系统空中交通管理办法', null, '2016-11-21 17:54:40', '0', '4'), ('45', '《抗战胜利70周年纪念活动无线电管理规定》发布', null, '2016-11-30 14:20:16', '2', '4'), ('46', '关于3.4—3.6GHz频段无线接入系统使用频率的通知', null, '2016-11-21 17:54:59', '0', '4'), ('47', '关于开展全市无线电台站规范化管理专项活动及收取二Ｏ一三年度无线电频率占用费的通知', null, '2016-11-28 20:11:49', '1', '4'), ('48', '关于调整1-30GHz数字微波接力通信系统容量系列及射频波道配置的通知', null, '2016-11-30 14:20:14', '1', '4'), ('49', '无线电台执照管理规定', null, '2016-11-21 17:55:23', '0', '4'), ('50', '关于公众对讲机管理有关问题的通知', null, '2016-11-21 17:56:00', '0', '4'), ('51', '组织开展无线电频谱使用评估卫星地球站测试工作', null, '2016-11-21 17:56:59', '0', '5'), ('52', '党支部继续推进“两学一做”教育活动', null, '2016-11-21 17:57:08', '0', '5'), ('53', '认真组织学习省工信委党组“两学一做”教育实施方案的有关要求', null, '2016-11-21 17:57:21', '0', '5'), ('54', '省无线电管理局朱朝晖局长一行前往佳木斯市慰问看望患病职工', null, '2016-11-21 17:57:29', '0', '5'), ('55', '认真开展保障民航铁路专用频率自检自查活动', null, '2016-11-28 14:44:42', '1', '5'), ('56', '为安居物业公司安装调试通讯中继台，促进社区安全建设', null, '2016-11-21 17:57:46', '0', '5'), ('57', '全市2015年度党员发展对象培训班开班', null, '2016-11-27 20:54:37', '1', '5'), ('58', '中国无线电管理', 'http://www.srrc.org.cn', '2016-11-21 18:02:58', '0', '7'), ('59', '黑龙江省无线电管理', 'http://www.hljrm.cn', '2016-11-21 18:03:04', '0', '7'), ('60', '中国无线电运动协会', 'http://www.rachina.org.cn', '2016-11-21 18:03:10', '0', '7'), ('61', '哈尔滨市人民政府网', 'http://www.harbin.gov.cn', '2016-11-21 18:03:12', '0', '7'), ('62', '哈尔滨无线电', '齐齐哈尔无线电管理处是黑龙江省工业和信息化委员会的派出机构，在省工信委党组和地方党委、政府的领导下开展工作，围绕省和地市的经济建设和社会发展开展好无线电频率资源的管理工作，维护好空中电波秩序，扎实地为党政首脑机关、国防建设、经济建设和社会稳定服务，为各设台单位服务。主要职责是： 一、 贯彻执行国家无线电管理的方针、政策和法规。 二、 执行省无线电管理机关制定的方针、政策和规章。 三、 对齐齐哈尔市行政区域内各类无线电频率资源进行统一规划和管理。 四、 负责审批齐齐哈尔市行政区内用户申请设置的无线电台，呈报指配频率，确定台站布局，核发电台执照，并办理相关设台手续。 五、 依法管理本行政区内设置使用的无线电台，开展年检工作，收缴频率资源占用费。 六、 负责管理本行政区内的无线电监测，设备检测和空中频率纠察，维护空中电波秩序，依法查处无线电干扰和无线电违章工作。 七、 协调周边省、市友邻地区的无线电干扰事宜。 八、 完成省工信委和地方政府交办的其他工作。齐齐哈尔无线电管理处是黑龙江省工业和信息化委员会的派出机构，在省工信委党组和地方党委、政府的领导下开展工作，围绕省和地市的经济建设和社会发展开展好无线电频率资源的管理工作，维护好空中电波秩序，扎实地为党政首脑机关、国防建设、经济建设和社会稳定服务，为各设台单位服务。主要职责是： 一、 贯彻执行国家无线电管理的方针、政策和法规。 二、 执行省无线电管理机关制定的方针、政策和规章。 三、 对齐齐哈尔市行政区域内各类无线电频率资源进行统一规划和管理。 四、 负责审批齐齐哈尔市行政区内用户申请设置的无线电台，呈报指配频率，确定台站布局，核发电台执照，并办理相关设台手续。 五、 依法管理本行政区内设置使用的无线电台，开展年检工作，收缴频率资源占用费。 六、 负责管理本行政区内的无线电监测，设备检测和空中频率纠察，维护空中电波秩序，依法查处无线电干扰和无线电违章工作。 七、 协调周边省、市友邻地区的无线电干扰事宜。 八、 完成省工信委和地方政府交办的其他工作。齐齐哈尔无线电管理处是黑龙江省工业和信息化委员会的派出机构，在省工信委党组和地方党委、政府的领导下开展工作，围绕省和地市的经济建设和社会发展开展好无线电频率资源的管理工作，维护好空中电波秩序，扎实地为党政首脑机关、国防建设、经济建设和社会稳定服务，为各设台单位服务。主要职责是： 一、 贯彻执行国家无线电管理的方针、政策和法规。 二、 执行省无线电管理机关制定的方针、政策和规章。 三、 对齐齐哈尔市行政区域内各类无线电频率资源进行统一规划和管理。 四、 负责审批齐齐哈尔市行政区内用户申请设置的无线电台，呈报指配频率，确定台站布局，核发电台执照，并办理相关设台手续。 五、 依法管理本行政区内设置使用的无线电台，开展年检工作，收缴频率资源占用费。 六、 负责管理本行政区内的无线电监测，设备检测和空中频率纠察，维护空中电波秩序，依法查处无线电干扰和无线电违章工作。 七、 协调周边省、市友邻地区的无线电干扰事宜。 八、 完成省工信委和地方政府交办的其他工作。齐齐哈尔无线电管理处是黑龙江省工业和信息化委员会的派出机构，在省工信委党组和地方党委、政府的领导下开展工作，围绕省和地市的经济建设和社会发展开展好无线电频率资源的管理工作，维护好空中电波秩序，扎实地为党政首脑机关、国防建设、经济建设和社会稳定服务，为各设台单位服务。主要职责是： 一、 贯彻执行国家无线电管理的方针、政策和法规。 二、 执行省无线电管理机关制定的方针、政策和规章。 三、 对齐齐哈尔市行政区域内各类无线电频率资源进行统一规划和管理。 四、 负责审批齐齐哈尔市行政区内用户申请设置的无线电台，呈报指配频率，确定台站布局，核发电台执照，并办理相关设台手续。 五、 依法管理本行政区内设置使用的无线电台，开展年检工作，收缴频率资源占用费。 六、 负责管理本行政区内的无线电监测，设备检测和空中频率纠察，维护空中电波秩序，依法查处无线电干扰和无线电违章工作。 七、 协调周边省、市友邻地区的无线电干扰事宜。 八、 完成省工信委和地方政府交办的其他工作。', '2017-05-04 20:54:24', '36', '8');
COMMIT;

-- ----------------------------
--  Table structure for `t_article_type`
-- ----------------------------
DROP TABLE IF EXISTS `t_article_type`;
CREATE TABLE `t_article_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  `is_delete` int(1) DEFAULT '0',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_article_type`
-- ----------------------------
BEGIN;
INSERT INTO `t_article_type` VALUES ('0', '000', '0'), ('1', '公示公告', '0'), ('2', '最新动态', '0'), ('3', '政策法规', '0'), ('4', '政务公开', '0'), ('5', '专题活动', '0'), ('6', '下载中心', '0'), ('7', '友情链接', '0'), ('8', '机构简介', '0'), ('9', '联系我们', '0');
COMMIT;

-- ----------------------------
--  Table structure for `t_download`
-- ----------------------------
DROP TABLE IF EXISTS `t_download`;
CREATE TABLE `t_download` (
  `down_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_title` varchar(255) DEFAULT NULL,
  `file_src` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`down_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_download`
-- ----------------------------
BEGIN;
INSERT INTO `t_download` VALUES ('1', '11', 'downloads/1.doc', '1', '2016-11-15 15:16:25', null), ('2', '22', 'downloads/2.doc', '1', '2016-11-15 15:16:32', null), ('3', '33', 'downloads/3.doc', '2', '2016-11-09 15:16:37', null), ('4', '44', 'downloads/20161116075516_13655.doc', '2', '2016-11-13 15:16:47', null), ('10', '11', 'downloads/1.doc', '1', '2016-11-29 15:16:57', null), ('11', '22', 'downloads/2.doc', '1', '2016-11-15 15:17:04', null), ('12', '33', 'downloads/3.doc', '2', '2016-11-15 15:16:25', null), ('13', '44', 'downloads/20161116075516_13655.doc', '2', '2016-11-15 15:16:25', null), ('14', '11', 'downloads/1.doc', '1', '2016-11-15 15:16:25', null);
COMMIT;

-- ----------------------------
--  Table structure for `t_img_news`
-- ----------------------------
DROP TABLE IF EXISTS `t_img_news`;
CREATE TABLE `t_img_news` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_title` varchar(255) DEFAULT NULL,
  `img_content` text,
  `img_src` varchar(255) DEFAULT NULL,
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clicked` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_img_news`
-- ----------------------------
BEGIN;
INSERT INTO `t_img_news` VALUES ('1', '参加全省保护民航铁路专用频率打击非法设台（第二阶段）专项行动', '&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">11</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">月</span><span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">13</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日，齐齐哈尔无线电管理机构一行</span><span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">6</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">人驱车前往虎林市，参加全省保障民航铁路专用频率打击非法设台（第二阶段）的专项行动。按照省无线电管理局的工作部署，</span><span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">15</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日与黑河无线电管理机构在虎林预选址机场开展电磁环境测试工作。为充分保证测试数据准确性，技术人员身着棉衣、棉鞋，在雪地里搭建帐篷，并生着炭火盆在指定的野外测试地点开展测试工作。参加测试人员不畏严寒，充分保证测试时长，确保测试工作不出现纰漏。同时每天晚间由省站技术人员组织召开总结会，对测试情况进行总结分析，并结合具体问题对测试流程进行不断完善，对下一阶段的测试工作进行部署。</span>', 'uploads/20161127030248_83182.jpg', '2016-11-27 10:44:49', null), ('2', '参加全省保护民航铁路专用频率打击非法设台（第二阶段）专项行动', '<span line-height:22px;font-size:14pt;\"=\"\" style=\"white-space: normal;\">&nbsp; &nbsp; 11</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">月</span><span line-height:22px;font-size:14pt;\"=\"\" style=\"white-space: normal;\">17</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日，齐齐哈尔无线电管理机构完成对虎林预选址机场的测试工作任务后按照省无线电管理局要求前往双鸭山市参加保障民航铁路专用频率第二阶段的专项行动。从</span><span line-height:22px;font-size:14pt;\"=\"\" style=\"white-space: normal;\">17</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日至</span><span line-height:22px;font-size:14pt;\"=\"\" style=\"white-space: normal;\">22</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日，分别前往双鸭山市、宝清县、七台河市、北兴农场、密山市、八面通、宁安县开展测试工作，加强对当地民航导航、铁路通信调度和调频广播频段的监测力度，严查私设“黑广播”电台，对监测发现的“黑广播”及时与当地公安部门予以现场取缔，确保消除干扰隐患，保障交通通信安全。</span><span line-height:22px;font-size:14pt;\"=\"\" style=\"white-space: normal;\">11</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">月</span><span line-height:22px;font-size:14pt;\"=\"\" style=\"white-space: normal;\">23</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日，齐齐哈尔无线电管理机构完成各项测试任务后于当天返回齐齐哈尔市，全体人员对此次测试中发现的问题和不足进行了简要交流和总结，为今后开展保障行动打下了良好的基础。</span><br />', 'uploads/20161127035511_80724.jpg', '2016-11-27 10:56:28', null), ('3', '参加全省保护民航铁路专用频率打击非法设台（第二阶段）专项行动', '<span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">&nbsp; &nbsp; 11</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">月</span><span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">13</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日，齐齐哈尔无线电管理机构一行</span><span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">6</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">人驱车前往虎林市，参加全省保障民航铁路专用频率打击非法设台（第二阶段）的专项行动。按照省无线电管理局的工作部署，</span><span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\">15</span><span style=\"line-height:22px;font-family:宋体;font-size:14pt;\">日与黑河无线电管理机构在虎林预选址机场开展电磁环境测试工作。为充分保证测试数据准确性，技术人员身着棉衣、棉鞋，在雪地里搭建帐篷，并生着炭火盆在指定的野外测试地点开展测试工作。参加测试人员不畏严寒，充分保证测试时长，确保测试工作不出现纰漏。同时每天晚间由省站技术人员组织召开总结会，对测试情况进行总结分析，并结合具体问题对测试流程进行不断完善，对下一阶段的测试工作进行部署。</span><span style=\"font-family:\" line-height:22px;font-size:14pt;\"=\"\"></span><span style=\"font-family:\" line-height:22px;\"=\"\"></span> \r\n<p class=\"MsoNormal\" style=\"font-family:;\">\r\n	<span style=\"font-size:14pt;\"> 11</span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"font-size:14pt;\">17</span><span style=\"font-family:宋体;font-size:14pt;\">日，齐齐哈尔无线电管理机构完成对虎林预选址机场的测试工作任务后按照省无线电管理局要求前往双鸭山市参加保障民航铁路专用频率第二阶段的专项行动。从</span><span style=\"font-size:14pt;\">17</span><span style=\"font-family:宋体;font-size:14pt;\">日至</span><span style=\"font-size:14pt;\">22</span><span style=\"font-family:宋体;font-size:14pt;\">日，分别前往双鸭山市、宝清县、七台河市、北兴农场、密山市、八面通、宁安县开展测试工作，加强对当地民航导航、铁路通信调度和调频广播频段的监测力度，严查私设“黑广播”电台，对监测发现的“黑广播”及时与当地公安部门予以现场取缔，确保消除干扰隐患，保障交通通信安全。</span><span style=\"font-size:14pt;\">11</span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"font-size:14pt;\">23</span><span style=\"font-family:宋体;font-size:14pt;\">日，齐齐哈尔无线电管理机构完成各项测试任务后于当天返回齐齐哈尔市，全体人员对此次测试中发现的问题和不足进行了简要交流和总结，为今后开展保障行动打下了良好的基础。</span> \r\n</p>', 'uploads/20161127035927_50509.jpg', '2016-11-27 10:59:27', null), ('7', 'youyou', '<h1>\r\n	hahahah\r\n</h1>', 'uploads/20161127041200_87291.png', '2016-11-27 11:12:00', null);
COMMIT;

-- ----------------------------
--  Table structure for `t_upload`
-- ----------------------------
DROP TABLE IF EXISTS `t_upload`;
CREATE TABLE `t_upload` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_title` varchar(255) DEFAULT NULL,
  `file_src` varchar(255) DEFAULT NULL,
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `down_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`up_id`),
  KEY `fk_down_up` (`down_id`),
  CONSTRAINT `fk_down_up` FOREIGN KEY (`down_id`) REFERENCES `t_download` (`down_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_upload`
-- ----------------------------
BEGIN;
INSERT INTO `t_upload` VALUES ('2', '11-22', 'uploads/2.txt', '2016-11-15 20:30:52', '1'), ('3', '22-11', 'uploads/3.txt', '2016-11-15 20:31:01', '2'), ('4', '22-22', 'uploads/4.txt', '2016-11-16 15:42:38', '2'), ('8', '22-11', 'uploads/3.txt', '2016-11-16 15:46:27', '3'), ('9', '22-22', 'uploads/4.txt', '2016-11-16 15:46:31', '3'), ('10', '11-11', 'uploads/1.txt', '2016-11-16 15:46:36', '4'), ('11', '11-22', 'uploads/2.txt', '2016-11-16 15:46:40', '4'), ('16', '22-11', 'uploads/3.txt', '2016-11-16 15:47:02', '3'), ('17', '22-22', 'uploads/4.txt', '2016-11-16 15:47:04', '3'), ('22', '22-11', 'uploads/3.txt', '2016-11-15 20:31:01', '2'), ('23', '22-22', 'uploads/4.txt', '2016-11-16 15:42:38', '2'), ('24', '22-11', 'uploads/3.txt', '2016-11-16 15:46:27', '3'), ('25', '22-22', 'uploads/4.txt', '2016-11-16 15:46:31', '3'), ('26', '11-11', 'uploads/1.txt', '2016-11-16 15:46:36', '4'), ('27', '11-22', 'uploads/2.txt', '2016-11-16 15:46:40', '4'), ('28', '22-11', 'uploads/3.txt', '2016-11-16 15:47:02', '3'), ('29', '22-22', 'uploads/4.txt', '2016-11-16 15:47:04', '3'), ('31', '22-11', 'uploads/3.txt', '2016-11-15 20:31:01', '2'), ('32', '22-22', 'uploads/4.txt', '2016-11-16 15:42:38', '2'), ('33', '22-11', 'uploads/3.txt', '2016-11-16 15:46:27', '3'), ('34', '22-22', 'uploads/4.txt', '2016-11-16 15:46:31', '3'), ('35', '11-11', 'uploads/1.txt', '2016-11-16 15:46:36', '4'), ('36', '11-22', 'uploads/2.txt', '2016-11-16 15:46:40', '4'), ('37', '22-11', 'uploads/3.txt', '2016-11-16 15:47:02', '3'), ('38', '22-22', 'uploads/4.txt', '2016-11-16 15:47:04', '3'), ('40', '22-11', 'uploads/3.txt', '2016-11-15 20:31:01', '2'), ('41', '22-22', 'uploads/4.txt', '2016-11-16 15:42:38', '2'), ('42', '22-11', 'uploads/3.txt', '2016-11-16 15:46:27', '3'), ('43', '22-22', 'uploads/4.txt', '2016-11-16 15:46:31', '3'), ('44', '11-11', 'uploads/1.txt', '2016-11-16 15:46:36', '4'), ('45', '11-22', 'uploads/2.txt', '2016-11-16 15:46:40', '4'), ('46', '22-11', 'uploads/3.txt', '2016-11-16 15:47:02', '3'), ('47', '哈哈', 'uploads/20161122065133_98739.doc', '2016-11-22 13:51:40', '10'), ('48', 'sdsd', 'uploads/20161122071136_99664.doc', '2016-11-22 14:11:36', '10'), ('49', 'rrr', 'uploads/20161122071336_34771.doc', '2016-11-22 14:13:36', '11'), ('50', 'gg', 'uploads/20161122071438_43291.doc', '2016-11-22 14:14:38', '10'), ('51', 'ggg', 'uploads/20161122071506_34425.doc', '2016-11-22 14:15:06', '10'), ('52', 'ssss', 'uploads/20161122072336_21738.doc', '2016-11-22 14:23:36', '10'), ('53', 'werw', 'uploads/20161122072422_23211.doc', '2016-11-22 14:24:22', '10');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
