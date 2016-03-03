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

$title_view = _("Fin du programme Teacher");
?>

	
<p>
	<?php echo _("Vous semblez posséder suffisamment de compétences pour considérer que vous êtes initié(e) à l’ETP. Des formations diplômantes plus personnalisées et approfondies sont à votre disposition."); ?>
</p>

<p>
	<?php echo ("Vous pouvez continuer à utiliser Teacher à votre convenance"); ?>
</p>

<p>
	<?php echo _("Si vous souhaitez accéder au récapitulatif de toutes vos auto-évaluations, cliquer sur &laquo;&nbsp;Ma progression&nbsp;&raquo; dans le menu à gauche ou accédez y directement"); ?>
	<a href='.?module=user_teaching&action=show_summ_all_eval'><?php echo _("ici");?></a>.
</p>	

