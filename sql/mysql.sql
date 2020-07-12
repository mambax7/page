# phpMyAdmin MySQL-Dump
# version 2.2.2
# http://phpwizard.net/phpMyAdmin/
# http://phpmyadmin.sourceforge.net/ (download page)
#
# --------------------------------------------------------

#
# Table structure for table `eascont`
#

CREATE TABLE eascont (
  artid int(11) NOT NULL auto_increment,
  easyid int(11) NOT NULL default '0',
  url_title varchar(16) NOT NULL default '',
  title text NOT NULL,
  content longtext,
  counter int(11) NOT NULL default '0',
  weight int(3) NOT NULL DEFAULT '0' ,
  isactive tinyint(1) NOT NULL DEFAULT '0' ,
  PRIMARY KEY  (artid),
  KEY idxeasyconteasyid (easyid),
  KEY idxeasycontcounterdesc (counter)
) TYPE=MyISAM;


#
# Table structure for table `easyweb`
#

CREATE TABLE easyweb (
  easyid int(11) NOT NULL auto_increment,
  easyname varchar(16) NOT NULL default '',
  content longtext,
  weight int(3) NOT NULL DEFAULT '0' ,
  isactive tinyint(1) NOT NULL DEFAULT '0' ,
  PRIMARY KEY  (easyid),
  KEY idxeasytionseasyname (easyname)
) TYPE=MyISAM;


#
# Table structure for table `easyweb_startpage`
#

CREATE TABLE easyweb_startpage (
  id int(11) NOT NULL auto_increment,
  content longtext,
  PRIMARY KEY  (id)
) TYPE=MyISAM;
