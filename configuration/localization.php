  
<?php
/*********************************************************************
Teacher

Copyright 2013 by Sébastien Mabon and Samuel Degoul (sdegoul@gmail.com)

This file is part of Teacher.

Teacher is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Teacher is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Teacher.  If not, see <http://www.gnu.org/licenses/>
*********************************************************************/
?>


<?php

date_default_timezone_set ("Europe/Paris");

// define constants
define('PROJECT_DIR', realpath('.'));
define('LOCALE_DIR', PROJECT_DIR .'/locale');
define('DEFAULT_LOCALE', 'fr_FR');

require_once('lib/gettext/gettext.inc');

$supported_locales = array('en_US', 'fr_FR');
$encoding = 'UTF-8';


if (isset ($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}
elseif (!isset ($_SESSION['lang'])) {
	$_SESSION['lang'] = substr ($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5);
	$_SESSION['lang'] = str_replace ('-', '_', $_SESSION['lang']);
}

$locale = (isset($_SESSION['lang']))? $_SESSION['lang'].'.utf8' : DEFAULT_LOCALE;

// gettext setup
T_setlocale(LC_MESSAGES, $locale);
// Set the text domain as 'messages'
$domain = 'trad';
bindtextdomain($domain, LOCALE_DIR);
// bind_textdomain_codeset is supported only in PHP 4.2.0+
if (function_exists('bind_textdomain_codeset'))
  bind_textdomain_codeset($domain, $encoding);
textdomain($domain);

header("Content-type: text/html; charset=$encoding");

?>
