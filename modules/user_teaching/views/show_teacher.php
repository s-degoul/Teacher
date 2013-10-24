  
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

$title_view = _("Teacher pas à pas");


foreach ($links_menu_top[3]['submenu'] as $id_submenu => $features_submenu) {
	echo '<p>'."\n";
	
	if ($features_submenu['active'] == 1)
		echo '<a href=\'.?module='.$features_submenu['module'].'&action='.$features_submenu['action'].'\'>'.$features_submenu['title'].'</a>'."\n";
	else
		echo $features_submenu['title'];
	
	echo '</p>'."\n";
}

?>

