  
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
$content_top = lastpage_essential ('what') . nextpage_essential ('how');
?>

<h1><?php echo _("Pourquoi proposer l’éducation thérapeutique à l’enfant asthmatique ?"); ?></h1>

<p><?php echo _("L’<strong>éducation thérapeutique</strong> est recommandée dans la prise en charge globale de
<strong>l’enfant asthmatique</strong> et de sa famille.<br/>
De nombreuses études"); ?>
 (<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>2</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>3</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>4</a>)
<?php echo _("ont prouvé qu’elle contribue à atteindre les objectifs thérapeutiques suivants"); ?> :</p>	
<ul>
	<li><?php echo _("une absence ou un minimum de symptômes,"); ?></li>
	<li><?php echo _("une fonction pulmonaire normale,"); ?></li>
	<li><?php echo _("une scolarisation normale, des activités physiques et sportives et autres activités quotidiennes non limitées"); ?></li>
</ul>
