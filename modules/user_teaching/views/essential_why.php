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


$content_bottom = lastpage_essential ('what') . nextpage_essential ('how');
$content_top .= $content_bottom;
?>

<h2><?php echo _("Pourquoi proposer l’éducation thérapeutique à l’enfant asthmatique ?"); ?></h2>

<p><?php echo _("L’<strong>éducation thérapeutique</strong> est recommandée dans la prise en charge globale de
<strong>l’enfant asthmatique</strong> et de sa famille.<br/>
De nombreuses études"); ?>
<!--
 (<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>2</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>3</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>4</a>)
-->
(2,3,4)
<?php echo _("ont prouvé qu’elle contribue à atteindre les objectifs thérapeutiques suivants"); ?> :</p>	
<ul>
	<li><?php echo _("une absence ou un minimum de symptômes,"); ?></li>
	<li><?php echo _("une fonction pulmonaire normale,"); ?></li>
	<li><?php echo _("une scolarisation normale, des activités physiques et sportives et autres activités quotidiennes non limitées"); ?></li>
</ul>


<div class = 'references_bottom'>
	<p><?php echo _("Références");?></p>
	<p>2- Cabana MD, Slish KH, Evans D, et al. Impact of physician asthma care education on patient outcomes. Pediatrics 2006 ; 117(6):2149-57</p>
	<p>3- Coffman J. M., Cabana M. D, Halpin H.A, et al. Effects of Asthma Education on Children’s Use of Acute Care Services: A Meta-analysis. Paediatrics 2008 ; 121(3):575-86</p>
	<p>4- Guevara JP, Wolf FM, Grum CM, et al. Effects of educational interventions for self management of asthma in children and adolescents: systematic review and meta-analysis. BMJ 2003 ; 326: 1308-13.</p>
</div>
