CREATE TABLE IF NOT EXISTS `#__automsg` (
`id` integer NOT NULL AUTO_INCREMENT,
`state` integer NOT NULL default 0,
`articles` text NOT NULL ,
`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` int(10) unsigned NOT NULL DEFAULT '0',
`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
`modified_by` int(10) unsigned NOT NULL DEFAULT '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Auto Message Table';
