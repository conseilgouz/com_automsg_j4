CREATE TABLE IF NOT EXISTS `#__automsg` (
`id` integer NOT NULL AUTO_INCREMENT,
`state` integer NOT NULL default 0,
`article_id` integer NOT NULL ,
`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
`sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Auto Message Table';
