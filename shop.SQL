CREATE TABLE `shopitem` (
  `shop_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'UID',
    `item_one` smallint(5)  unsigned COMMENT 'item_one',
    `item_two` smallint(5)  unsigned COMMENT 'item_two',
    `item_thr` smallint(5)  unsigned COMMENT 'item_thr',
    `item_fou` smallint(5)  unsigned COMMENT 'item_fou',
    `item_fiv` smallint(5)  unsigned COMMENT 'item_fiv',
    `item_six` smallint(5)  unsigned COMMENT 'item_six',
    `item_sev` smallint(5)  unsigned COMMENT 'item_sev',
    `item_eig` smallint(5)  unsigned COMMENT 'item_eig',
    `item_nin` smallint(5)  unsigned COMMENT 'item_nin',
    `item_ten` smallint(5)  unsigned COMMENT 'item_ten',
    `member_id` smallint(5)  unsigned NOT NULL COMMENT 'member_id',
    
   PRIMARY KEY (`shop_id`)
 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `member` (
  `member_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'UID',
  `Account` varchar(12) NOT NULL  COMMENT 'Account',
  `Password` varchar(12) NOT NULL COMMENT 'Password',
  `Gender` varchar(10) NOT NULL COMMENT 'Gender',
  `Birthday` date NOT NULL COMMENT  'Birthday',
  `Email` varchar(255) NOT NULL COMMENT 'Email',
   PRIMARY KEY (`member_id`)
 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `chat` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'UID',
  `author` varchar(12) NOT NULL COMMENT 'author',
  `content` varchar(255) NOT NULL  COMMENT 'content',
  `time` datetime NOT NULL COMMENT 'time',
   PRIMARY KEY (`user_id`)
 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `chatre` (
  `chat_num` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'UID',
  `content` varchar(255) NOT NULL  COMMENT 'content',
  `time` datetime NOT NULL COMMENT 'time',
   PRIMARY KEY (`chat_num`)
 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;