  
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

function showDate ($date_SQL, $precision = 'minute') {
	
	if ($date_SQL == '')
		return $date_SQL;
	else {

		$date_SQL_parts = explode (' ', $date_SQL);
		
		$date_SQL_day = explode ('-', $date_SQL_parts[0]);
		$date_show_day = $date_SQL_day[2].'/'.$date_SQL_day[1].'/'.$date_SQL_day[0];
		
		if (isset ($date_SQL_parts[1]))
			$date_SQL_hour = explode (':', $date_SQL_parts[1]);
		else
			$precision = 'day';

		if ($date_SQL_day[2] == '00')
			$precision = 'month';
		
		
		switch ($precision) {
			case 'second' :
				$date_show = $date_show_day.' '._("à").' '
								.$date_SQL_hour[0]._("h").' '.$date_SQL_hour[1]._("min").' '.$date_SQL_hour[2]._("s");
				break;
			case 'day' :
				$date_show = $date_show_day;
				break;
			case 'month' :
				$name_months = array (
									'00' => _("Année"),
									'01' => _("Janvier"),
									'02' => _("Février"),
									'03' => _("Mars"),
									'04' => _("Avril"),
									'05' => _("Mai"),
									'06' => _("Juin"),
									'07' => _("Juillet"),
									'08' => _("Août"),
									'09' => _("Septembre"),
									'10' => _("Octobre"),
									'11' => _("Novembre"),
									'12' => _("Décembre")
								);
				$nb_month = $date_SQL_day[1];
				$date_show = $name_months[$nb_month].' '.$date_SQL_day[0];
				break;
			case 'minute'  : default :
				$date_show = $date_show_day.' '._("à").' '
								.$date_SQL_hour[0]._("h").' '.$date_SQL_hour[1];
				break;
		}
		
		return $date_show;
	}
}

function prepareDateSQL ($year, $month, $day, $hour = '', $minute = '', $second = '') {
	if ($hour == '')
		return $year.'-'.$month.'-'.$day;
	else
		return $year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':'.$second;
}

function calculateAge ($date_SQL, $precision = 'year')  {
//	$date_SQL_parts = explode (' ', $date_SQL);
	list($year, $month, $day) = explode('-', $date_SQL);
	  
	$today['month'] = date('m');
	$today['day'] = date('d');
	$today['year'] = date('Y');

	$age_year = $today['year'] - $year;
	$age_month = $today['month'] - $month;
	
	if ($today['month'] <= $month) {
		if ($today['month'] == $month) {
			if ($today['day'] <= $day) {
				$age_year --;
				$age_month = 11;
			}
		}
		else {
			$age_year --;
			$age_month = 12 + $age_month;
		}
	}
	
	if ($precision == 'year')
		return $age_year;
	elseif ($precision == 'month') {
		$age = array ('year' => $age_year, 'month' => $age_month);
		return $age;
	}
}


function checkVarPost ($exception = array()){
	$vars = array();
	
	foreach ($_POST as $key => $value) {
		if (! in_array ($key, $exception))
			//$vars[$key] = htmlentities (trim ($value));
			$vars[$key] = htmlspecialchars ( trim ($value));
			
			if (get_magic_quotes_gpc() == 1)
				$vars[$key] = stripslashes ($vars[$key]);
	}
		
	return $vars;
}


function createRandomString ($length_string) {
	$string = '';
	$list_characters = 'abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	srand((double)microtime()*1000000);
	
	for($i=0; $i<$length_string; $i++) {
		$string .= $list_characters[rand()%strlen($list_characters)];
	}
	
	return $string;	
}


function DBConnect () {
	$db = new PDO ('mysql:host='.HOST_DB.';dbname='.NAME_DB, LOGIN_DB, PASSWORD_DB);
	$db -> exec ('SET NAMES utf8');
			
	return $db;
}
?>
