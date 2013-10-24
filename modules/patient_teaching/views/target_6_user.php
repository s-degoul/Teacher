  
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



<div class='content_target'>
	
	<div class='pict_good_to_know'>
	</div>
	<div class='good_to_know'>
		<p><?php echo _("Le débitmètre de pointe permet de mesurer le débit instantané maximal au cours d’une manœuvre d’expiration forcée, réalisée à partir de la position d’inspiration complète.
						Il reflète le calibre des voies aériennes centrales et, à un moindre degré, périphériques. Il permet l’auto-surveillance par le patient
						de sa fonction respiratoire afin d’adapter son traitement. Il est exprimé en litres par minute.
						Les valeurs théoriques moyennes chez l’enfant sont fonction de la taille."); ?>:</p>
	</div>

	<div class='pict_how_to_guide'>
	</div>
	<div class='how_to_guide'>
		<p><?php echo _("<strong>Le pédiatre</strong> présente à l’enfant un débitmètre de pointe et lui explique son utilité : mesurer le souffle."); ?></p>
		<p><?php echo _("possibilité de montrer").' <a href = .?module=patient_teaching&action=show_video_peakflow>'		
							._("la vidéo d’Achille : «je mesure mon souffle»").'</a>'; ?></p>
		<p><?php echo _("Il lui fait faire 3 mesures selon les consignes du tableau"); ?></p>
		<p>
			<a href = '.?module=patient_teaching&action=create_peakflow_use&from=target_6'>
				<img src = 'images/screenshot_table_peakflow_use.png' alt = '<?php echo _("Accéder au tableau"); ?>' height = 100px />
			</a>
		</p>


		<p><?php echo _("<strong>L’enfant :</strong> fait 3 mesures de DEP, et note sur la feuille sa meilleure valeur (on obtient le DEP réel)"); ?></p>
		<p><?php echo _("(Pour savoir si la valeur obtenue est réellement la valeur du patient, il faut la comparer aux
							<a href = '#'>valeurs théoriques des
							abaques définies en fonction de la taille et l’âge de l’enfant</a>)"); ?></p>
		<p><?php echo _("<strong>Le pédiatre</strong> explique qu’en cas de crise d’asthme, les bronches se resserrent et l’air a du mal à passer :
						les valeurs du débit de pointe sont donc plus basses. Il calcule alors la <span class = 'text_orange'><strong>valeur alerte</strong></span>
						de l’enfant. Le soignant la calcule
						<span class = 'text_orange'>(la valeur alerte est 80% de la valeur du DEP normal : ex DEP = 200, valeur alerte = 160 ( 200X80/100))</span>"); ?></p>
		<p><?php echo _("<strong>L’enfant</strong> la note sur sa feuille"); ?></p>
		<p><?php echo _("<strong>Le pédiatre :</strong> explique qu’il y a aussi une <span class = 'text_red'><strong>valeur alerte grave</strong></span>
							qui correspond à une crise grave : il la calcule
							<span class = 'text_red'>(la valeur alerte grave est de 60% de la valeur du DEP normal : ex DEP = 200, valeur alerte = 120 ( 200X60/100))</span>"); ?></p>
		<p><?php echo _("<strong>L’enfant</strong> la note sur sa feuille"); ?></p>
		<p><?php echo _("<strong>Le pédiatre</strong> explique à l’enfant à quels moments mesurer son souffle avec le DEP :"); ?></p>
		<ul>
			<li><?php echo _("en cas de gêne respiratoire ou crise d’asthme pour savoir si on est en dessous des valeurs alertes et adapter son traitement si nécessaire"); ?></li>
			<li><?php echo _("mais aussi quand tout va bien pour connaître le DEP réel"); ?></li>
			<li><?php echo _("en cas de pollution ou brouillard ou avant le sport pour certains, pour vérifier l’absence de spasme bronchique"); ?></li>
			<li><?php echo _("au moins deux fois par an chez le pédiatre car avec la croissance et l’âge, les valeurs du DEP se modifient."); ?></li>
		</ul>
		
		<p><?php echo _("<strong>L’enfant</strong> emporte la grille à la maison. Il la remplira, puis il la rapportera à la prochaine consultation."); ?></p>

		<div class='key_message'>
			<div class='pict_key_message'></div>
			<div class='content_key_message'>
				<ul>
					<li><?php echo _("L’enfant sait que le débitmètre de pointe sert à mesurer le souffle"); ?></li>
					<li><?php echo _("L’enfant connaît sa valeur de DEP réelle (quand tout va bien)"); ?></li>
					<li><?php echo _("il a compris qu’en cas de gêne respiratoire ou crise d’asthme, la valeur du DEP baisse plus ou moins fortement selon l’importance de la crise"); ?></li>
					<li><?php echo _("il connaît sa valeur d’alerte : au-dessus tout va bien en dessous : il doit le signaler à un adulte pour adapter son traitement si nécessaire"); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class='advice_target'>

	<p class='title_advice_target'><?php echo _("Méthode d’apprentissage").' :'; ?></p>
	<p><?php echo _("apprentissage du geste technique"); ?></p>

	<p class='title_advice_target'><?php echo _("Durée de la séance").' :'; ?></p>
	<p><?php echo _("10 min"); ?></p>

	<p class='title_advice_target'><?php echo _("Imprimer").' :'; ?></p>
	<p><?php echo _("la fiche «Je sais mesurer mon souffle»"); ?></p>

	<p class='title_advice_target'><?php echo _("Matériel nécessaire").' :'; ?></p>
	<p><?php echo _("un débitmètre de pointe, idéalement celui de l’enfant"); ?></p>
	<p><?php echo _("Video d’Achille sur la mesure du DEP"); ?></p>

</div>
