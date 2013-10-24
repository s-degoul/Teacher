  
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


﻿<?php
$title_view = _("Diagnostic éducatif");
$style[] = 'educ_diag';
$style[] = 'user_help';
?>


<div class="info_section_body">
	<div class="info_picto">
		<img src="images/picto-conseil.gif"/>
		Conseil pour une réalisation optimale du bilan éducatif partagé :
	</div>
	<div class="info_conseils">
		<div class="info_conseil">
			<img src="images/nb1.gif"/><br/>
			Prévoyer 30 minutes
		</div>
		<div class="info_conseil">
			<img src="images/nb2.gif"/><br/>
			Pour gagner du temps, demandez à la famille de remplir le test de contrôle de l’asthme
			(c ACT) avant Imprimer le diagnostic éducatif, par exemple en salle d’attente.
		</div>
		<div class="info_conseil">
			<img src="images/nb3.gif"/><br/>
			Expliquez à l’enfant en quoi le bilan est utile. Par exemple : ce bilan va nous aider à
			mieux connaître les conséquences de ton asthme, et ce qu’il faut amélio- rer pour qu’il
			te gêne le moins possible.
		</div>
		<div class="info_conseil">
			<img src="images/nb4.gif"/><br/>
			Adressez-vous en priorité à l’enfant. Ne faites compléter par les adultes que si 
			nécessaire.
		</div>
		
	</div>
	
	<div class="info_picto">
		<img src="images/picto-materiel-vert.gif"/>
		Matériel nécessaire :
	</div>
	<div class="info_conseils_spray">
		<div class="info_conseil_spray">
			<img src="images/aerosol-doseur-sschambre-gris.gif"/><br/>
				Spray, inhalateur à poudre sèche, Autohaler de démonstration
		</div>
		<div class="info_conseil_spray">
			<img src="images/chambre-inhalation.gif"/><br/>
				Chambre d'inhalation
		</div>
		<div class="info_conseil_spray">
			<img src="images/debimetre-de-pointe.gif"/><br/>
				Débimètre de pointe
		</div>
		<div class="info_conseil_spray4">
			<div><img src="images/carre_info.png"/> Embouts jetables</div></p>
			<div><img src="images/carre_info.png"/> Tests de contrôle de l'asthme c ACT</div>
		</div>		
	</div>
	
	<div class="info_text3">
		<div class="info_text3_img"><img src="images/nb5.gif"/>
		</div>
		<div class="info_text3_text">  Important !  <font color="#8F127D">Le diagnostic éducatif 
		ne doit être qu’un recueil d’informations. Ne cédez pas à l’envie de corriger une réponse 
		erronée ou à apporter un complément d’information dans l’immédiat : la séance deviendrait 
		trop longue. L’apprentissage fera l’objet des séances ultérieures.</font>
		</div>
	</div>
	<div>
		<center>
			<a href='.?module=patient_teaching&action=create_educ_diag&page_educ_diag=team' class="educ_diag_info_go">
			<img src="images/fleche_bas.png" align="middle">
				C'est parti !</a> 
		<center>
	</div>	
</div>
