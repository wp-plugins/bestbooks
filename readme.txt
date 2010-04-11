=== Bestbooks ===
Contributors: phkcorp2005
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9674139
Tags: shari phk corporation bestbooks accounting application framework sourceforge
Requires at least: 2.9
Tested up to: 2.9
Stable tag: 1.0

Provides an accounting application framework for wordpress.

== Description ==

BestBooks For PHP was created as a test and validation during the
development of BestBooks for Java, the original framework.

BestBooks for PHP is a minimal accounting framework.

BestBooks for PHP has enough functionality that you can create
workable scripts that solve accounting problems. You will be able to
implement many of the accounting problems on the accounting
learning website, http://www.simplestudies.com


Requirements:
------------

PHP 5 	(does not work for PHP4)
Pear DB	(for database access)


== Installation ==

To instal this plugin, follow these steps:

1. Download the plugin
2. Extract the single file
3. Extract mavis plugin to the `/wp-content/plugins/` directory as new directory will be created identified as 'mavis-https-to-http-redirect'
4. Activate the plugin through the 'Plugins' menu in WordPress, identified by 'Bestbooks'


== Arbitrary section ==


Tables creation from SQL:
------------------------

CREATE DATABASE `bestbooks`;

-- 
-- Table structure for table `Accounts`
-- 

CREATE TABLE `Accounts` (
  `id` tinyint(4) NOT NULL auto_increment,
  `date` date NOT NULL default '0000-00-00',
  `name` varchar(50) NOT NULL default '',
  `type` varchar(20) NOT NULL default '',
  `data` varchar(25) NOT NULL default '',
  `class` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `Journal`
-- 

CREATE TABLE IF NOT EXISTS `Journal` (
  `date` date NOT NULL default '0000-00-00',
  `ref` tinyint(4) NOT NULL default '0',
  `account` varchar(50) NOT NULL default '',
  `debit` decimal(10,2) NOT NULL default '0.00',
  `credit` decimal(10,2) NOT NULL default '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `Ledger`
-- 

CREATE TABLE IF NOT EXISTS `Ledger` (
  `id` tinyint(4) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `date` date NOT NULL default '0000-00-00',
  `note` varchar(255) NOT NULL default '',
  `ref` double NOT NULL default '0',
  `data` decimal(10,2) NOT NULL default '0.00',
  `credit` decimal(10,2) NOT NULL default '0.00',
  `balance` decimal(10,2) NOT NULL default '0.00',
  `type` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


Testing:
-------

Create a page with the following shortcode, [bestbooks-sample-1]
then check your database tables for the validation.

If you get an error, please report it!

Important Information for hosts with PHP5 extensions:
----------------------------------------------------

Many hosting providers include both PHP4 and PHP5 support. While PHP4
support is automatic when using just the .PHP file extension, to
obtain PHP5 support (required for BestBooks for PHP), you must used the
PHP5 extension. Support for using the PHP5 extension has been included
under the php5-ext directory.

== Frequently Asked Questions ==

Please do not be afraid of asking questions?<br>

(There are no stupid or dumb questions!)


== Changelog ==
= 1.0 =
* Created

== Upgrade Notice ==

== Credits ==

We make honorable mention to anyone who helps make Mavis HTTPS to HTTP Redirect a better plugin!

== Contact ==

Please contact phkcorp2005@gmail.com or visit www.phkcorp.com?do=wordpress with questions, comments, or requests.
