<?php
/**
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 *
 * -------------------------------------------------------------------------
 * THIS SHOULD ONLY BE USED AS A LAST RESORT WHEN THE WEB INSTALLER FAILS
 *
 * If you are installing Joomla! manually i.e. not using the web browser installer
 * then rename this file to configuration.php e.g.
 *
 * UNIX -> mv configuration.php-dist configuration.php
 * Windows -> rename configuration.php-dist configuration.php
 *
 * Now edit this file and configure the parameters for your site and
 * database.
 */
class JConfig {
	/* Site Settings */
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'adgvit.in';				// Name of Joomla site
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	//public $root_user = '42';
	public $access = '1';

	/* Database Settings */
	public $dbtype = 'mysql';					// Normally mysql
	public $host = 'adg1316502274146.db.10800429.hostedresource.com';					// This is normally set to localhost
	public $user = 'adg1316502274146';							// DB username
	public $password = 'q9U@IwuvSD';						// DB password
	public $db = 'adg1316502274146';							// DB database name
	public $dbprefix = 'jos_';					// Do not change unless you need to!

	/* Server Settings */
	public $secret = 'bc8705c5e3129a5f8e53297951f1717b'; 		// Change this to something more secure
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '';
	public $tmp_path = '/home/content/29/10800429/html/tmp';
	public $log_path = '/home/content/29/10800429/html/logs';
	public $live_site = 'http://adgvit.in/'; 					// Optional, Full url to Joomla install.
	public $force_ssl = 0;						// Force areas of the site to be SSL ONLY.  0 = None, 1 = Administrator, 2 = Both Site and Administrator

	/* Locale Settings */
	public $offset = 'UTC';

	/* Session settings */
	public $lifetime = '15';					// Session time
	public $session_handler = 'database';

	/* Mail Settings */
	public $mailer = 'mail';
	public $mailfrom = 'anshul.jain010@gmail.com';
	public $fromname = 'adgvit.in';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';

	/* Cache Settings */
	public $caching = '0';
	public $cachetime = '15';
	public $cache_handler = 'file';

	/* Debug Settings */
	public $debug = '0';
	public $debug_lang = '0';

	/* Meta Settings */
	public $MetaDesc = 'Joomla! - the dynamic portal engine and content management system';
	public $MetaKeys = 'joomla, Joomla';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';

	/* SEO Settings */
	public $sef = '1';
	public $sef_rewrite = '1';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';

	/* Feed Settings */
	public $feed_limit = 10;
	public $feed_email = 'author';
}
