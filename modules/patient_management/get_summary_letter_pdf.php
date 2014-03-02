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

// désactive le temps max d'exécution
set_time_limit(0);

// on a bien une demande de téléchargement de fichier
if (empty($_GET["file"])) {
    header("HTTP/1.1 404 Not Found");
    exit;
}

$name = $_GET["file"].'.pdf';

// le nom doit être un nom de fichier
if(basename($name) != $name) {
    header("HTTP/1.1 400 Bad Request");
    exit;
}

// vérifie l'existence et l'accès en lecture au fichier
$filename = SECURED_PDF_PATH.$name;
if (!is_file($filename) || !is_readable($filename)) {
    header("HTTP/1.1 404 Not Found");
    exit;
}

$size = filesize($filename);

// désactivation compression GZip
if (ini_get("zlib.output_compression")) {
    ini_set("zlib.output_compression", "Off");
}


// fermeture de la session
session_write_close();
 
// désactive la mise en cache
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0");
header("Cache-Control: max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
 
// force le téléchargement du fichier avec un beau nom
header("Content-Type: application/force-download");

header('Content-Disposition: attachment; filename="'.$name.'"');
 
// indique la taille du fichier à télécharger
header("Content-Length: ".$size);
 
// envoi le contenu du fichier
readfile($filename);
exit;
?>
