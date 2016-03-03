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
<div class = 'progress_bar'>
<?php

	if (isset ($page_essential)) {
		if ($page_essential == 'what')
			$progress = -2;
		elseif ($page_essential == 'why')
			$progress = -1;
		elseif ($page_essential == 'how')
			$progress = 0;
		elseif ($page_essential == 'ref')
			$progress = 5;
		else
			$progress = $page_essential;
		
		$page_min = -2;
		$page_max = 5;
	}
	elseif (isset ($page_eval)) {
		$progress = $page_eval;
		
		$page_min = 1;
		$page_max = 3;
	}

	
	for ($page = $page_min; $page <= $page_max ; $page ++) {
		if ($page <= $progress)
			$css = 'done';
		else
			$css = 'to_do';
?>
	<div class = 'step_<?php echo $css; ?>'></div>
<?php
	}
?>
</div>
