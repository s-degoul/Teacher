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


require (MODEL_PATH.'select_statistics.php');
?>

<p>
	<a href='.?module=administration&action=create_statistics' class='link'><?php echo _("Mettre à jour les analyses"); ?></a>
</p>

<h2><?php echo _("Patients"); ?></h2>

<p>
	<?php echo _("Nombre de patients").' : '.count($list_patient); ?>
</p>
<p>
	<?php echo _("Nombre moyen de patients par médecin").' : '.round(count($list_patient)/count($list_user), 1); ?>
</p>

<figure>
	<img src='<?php echo STATISTICS_GRAPHIC_PATH.'patient_sex.png'; ?>' alt="patient sex" />
	<figcaption><?php echo _("Répartition du sexe"); ?></figcaption>
</figure>

<figure>
	<img src='<?php echo STATISTICS_GRAPHIC_PATH.'patient_age.png'; ?>' alt="patient age" />
	<figcaption><?php echo _("Répartition de l'âge"); ?></figcaption>
</figure>


<h2><?php echo _("Médecins inscrits"); ?></h2>

<p>
	<?php echo _("Nombre de médecins").' : '.count($list_user); ?>
</p>
