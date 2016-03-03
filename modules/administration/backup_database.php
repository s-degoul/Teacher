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

$filename = 'backup_DB_'.date('Y.m.d_H.i.s').'.sql';;
$file = SECURED_PDF_PATH.$filename;
$secured_filename = $filename.'.asc';
$secured_file = SECURED_PDF_PATH.$secured_filename;

$command = 'mysqldump -C --host='.HOST_DB.' --user='.LOGIN_DB.' --password='.PASSWORD_DB.' --default-character-set=utf8 '.NAME_DB.' > '.$file;
system($command);
$command = 'gpg -c --armor --passphrase '.PASS_ENCRYPTION.' --homedir '.GPG_HOMEDIR.' -o '.$secured_file.' '.$file;
exec($command);
$command = 'rm '.$file;
system($command);


set_time_limit(0);

if(basename($secured_filename) != $secured_filename) {
    header("HTTP/1.1 400 Bad Request");
    exit;
}

if (!is_file($secured_file) || !is_readable($secured_file)) {
    header("HTTP/1.1 404 Not Found");
    exit;
}

$size = filesize($secured_file);

if (ini_get("zlib.output_compression")) {
    ini_set("zlib.output_compression", "Off");
}


session_write_close();

header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0");
header("Cache-Control: max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

header("Content-Type: application/force-download");

header('Content-Disposition: attachment; filename="'.$secured_filename.'"');

header("Content-Length: ".$size);

readfile($secured_file);
exit;
?>
