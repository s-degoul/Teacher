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

//mb_internal_encoding('UTF-8');

//file tree

// TO BE ADAPTED
// depends on location of the website on the server
//define ('ROOT_PATH','/home/s-degoul/Site_Internet/test/Teacher/');
define ('WEB_ADRESS', 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']);

// depends only of local file's organization
define ('STYLE_PATH','css/');
define ('MODULE_PATH','modules/');
define ('MODEL_PATH', 'models/');
//define ('MODEL_PATH', dirname(__FILE__).'/models/');
define ('TEMPLATE_PATH', 'template/');
define ('CONFIG_PATH', 'configuration/');
define ('IMAGE_PATH', 'images/');
define ('LIB_PATH', 'lib/');
define ('SECURED_PDF_PATH', 'secured_pdf/');
define ('STATIC_PDF_PATH', 'static_pdf/');
define ('STATISTICS_PATH', 'modules/administration/');
define ('STATISTICS_GRAPHIC_PATH', 'modules/administration/statistics/graphics/');

// where is the file which contains informations for connexion to database ?
// better if in a parent folder of website root folder
define ('SECURITY_FILE','configuration/security.php');


?>
