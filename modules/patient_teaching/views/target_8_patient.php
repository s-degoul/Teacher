  
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
if (! isset ($_GET['subject'])) {
?>

<h2><?php echo _("Maison des allergies"); ?></h2>

<p><?php echo _("Cliquez sur les bulles pour voir plus de détails"); ?></p>

<p>
   <map name = 'map_allergies_house' id = 'map_allergies_house'>
      <area shape = 'circle' coords = '70,85,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=mould' alt = '<?php echo _("moisissures"); ?>' title = '<?php echo _("moisissures"); ?>'/>
      <area shape = 'circle' coords = '195,85,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=dust_mite' alt = '<?php echo _("acariens"); ?>' title = '<?php echo _("acariens"); ?>'/>
      <area shape = 'circle' coords = '620,85,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=pets' alt = '<?php echo _("animaux"); ?>' title = '<?php echo _("animaux"); ?>'/>
      <area shape = 'circle' coords = '760,85,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=pollution' alt = '<?php echo _("pollution"); ?>' title = '<?php echo _("pollution"); ?>'/>
      <area shape = 'circle' coords = '770,230,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=pollen' alt = '<?php echo _("pollen"); ?>' title = '<?php echo _("pollen"); ?>'/>
      <area shape = 'circle' coords = '760,385,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=irritant' alt = '<?php echo _("irritants respiratoires"); ?>' title = '<?php echo _("irritants respiratoires"); ?>'/>
      <area shape = 'circle' coords = '760,530,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=sport' alt = '<?php echo _("sport"); ?>' title = '<?php echo _("sport"); ?>'/>
      <area shape = 'circle' coords = '620,540,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=irritant' alt = '<?php echo _("irritants respiratoires"); ?>' title = '<?php echo _("irritants respiratoires"); ?>'/>
      <area shape = 'circle' coords = '485,540,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=fuel' alt = '<?php echo _("irritants respiratoires"); ?>' title = '<?php echo _("irritants respiratoires"); ?>'/>
      <area shape = 'circle' coords = '350,540,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=tobacco' alt = '<?php echo _("tabac"); ?>' title = '<?php echo _("tabac"); ?>'/>
      <area shape = 'circle' coords = '210,540,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=dust_mite' alt = '<?php echo _("poussière"); ?>' title = '<?php echo _("poussière"); ?>'/>
      <area shape = 'circle' coords = '75,530,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=stress' alt = '<?php echo _("stress"); ?>' title = '<?php echo _("stress"); ?>'/>
      <area shape = 'circle' coords = '70,380,45' href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=infection' alt = '<?php echo _("infections"); ?>' title = '<?php echo _("infections"); ?>'/>
   </map>
</p>
<p>
	<img src = '<?php echo IMAGE_PATH.'target/8/allergies_house.jpg'; ?>' usemap = '#map_allergies_house' alt = '<?php echo _("maison des allergies"); ?>' />
</p>

<p>
	<h3><?php echo _("Liens directs"); ?> :</h3>
</p>
<div>
	<div class = 't8_4_links_groups'>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=mould'><?php echo _("moisissures"); ?></a>&nbsp;
		</p>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=dust_mite'><?php echo _("acariens"); ?></a>&nbsp;
		</p>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=pets'><?php echo _("animaux"); ?></a>
		</p>
	</div>
	<div class = 't8_4_links_groups'>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=pollution'><?php echo _("pollution"); ?></a>&nbsp;
		</p>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=pollen'><?php echo _("pollen"); ?></a>&nbsp;
		</p>
			<!--
			  <a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=irritant'><?php echo _("irritants respiratoires"); ?></a>&nbsp;
			-->
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=sport'><?php echo _("sport"); ?></a>&nbsp;
		</p>
	</div>
	<div class = 't8_4_links_groups'>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=irritant'><?php echo _("irritants respiratoires (1)"); ?></a>&nbsp;
		</p>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=fuel'><?php echo _("irritants respiratoires (2)"); ?></a>&nbsp;
		</p>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=tobacco'><?php echo _("tabac"); ?></a>&nbsp;
		</p>
	</div>
	<div class = 't8_4_links_groups'>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=dust_mite'><?php echo _("poussière"); ?></a>&nbsp;
		</p>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=stress'><?php echo _("stress"); ?></a>&nbsp;
		</p>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=infection'><?php echo _("infections"); ?></a>
		</p>
	</div>
</div>

<?php
}



else {
?>
<p class='return'>
	<a href='.?module=patient_teaching&action=show_target&id_target=8&type=patient' class='link'>
		<img src='<?php echo IMAGE_PATH.'return_row.png'; ?>' alt="return" />
		<?php echo _("retourner à la Maison des allergies"); ?>
	</a>
</p> 

<?php
	if (CheckPDFExists ('t8_'.$_GET['subject']) != 1) {
?>
<p class='print'>
	<a href = '<?php echo CheckPDFExists('t8_'.$_GET['subject']); ?>'>
		<img src='<?php echo IMAGE_PATH.'print_green.png'; ?>' alt = "<?php echo _("imprimer"); ?>" />
		<?php echo _("Imprimer la fiche"); ?>
	</a>
</p>
<?php
}

	switch ($_GET['subject']) {

/**********			
 mould
*********/
		case 'mould' :
			$title_view = _("Moisissures");
?>

<h2><?php echo _("Les conseils quand j'ai une allergie aux moisissures"); ?></h2>

<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/mould_1.jpg'; ?>' alt='<?php echo _("aérer les pièces"); ?>'/>
		<p><?php echo _("Tes parents doivent aérer souvent les pièces"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/mould_2.jpg'; ?>' alt='<?php echo _("ne pas boucher les aérations"); ?>'/>
		<p><?php echo _("Les aérations de la maison ne doivent pas être bouchées"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/mould_3.jpg'; ?>' alt='<?php echo _("nettoyer à l'eau de javel"); ?>'/>
		<p><?php echo _("Tes parents nettoient à l’eau de javel"); ?></p>
	</div>
</div>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Et si tu veux en savoir plus, voici quelques informations à découvrir à la maison, avec tes parents"); ?></p>
	<p><?php echo _("<strong>Les moisissures</strong> sont des champignons microscopiques dont la croissance est favorisée par l’humidité.
	Les pièces mal ventilées ou humides (salle de bain, cuisine) le bas des murs mal isolés ou avec des défauts d’étanchéité, les aliments,
	les plantes d’intérieur, les aquariums, sont des lieux propices au développement des moisissures.
	Ceci se voit par l’apparition de taches vertes, grises ou noires : ce sont des colonies formées de filaments chargés de «spores» (l’équivalent du pollen des plantes).
	Les spores restent en suspension dans l’air et sont ainsi inhalées.
	Chez les personnes sensibilisées, elle provoque des manifestions d’allergie et des irritations des muqueuses."); ?></p>
	<p><?php echo _("<strong>Afin d’éviter le développement des moisissures et donc de limiter les symptômes d’allergie</strong>,
	il convient de ventiler après les activités qui produisent beaucoup d’humidité (bain, douche, cuisson...), aérer et ventiler régulièrement l’habitat
	(sauf après un orage : les concentrations de spores dans l’atmosphère augmentent sensiblement durant 3-4 jours),
	laisser entrer le soleil dans les pièces humides en ouvrant volets et rideaux.
	Nettoyer à l’eau de javel (ou au vinaigre blanc) : les poubelles chaque semaine, les salles de bains dont les rideaux de douche,
	les joints de réfrigérateur et de machines à laver, les robinetteries, les cadres de fenêtres.
	Maintenir un taux d’humidité entre 40% à 60%. Retourner la terre des plantes d’intérieur, et maintenir de la terre fraîche en surface du pot.
	Assécher rapidement après un dégât des eaux, éviter les fuites chroniques (toitures, jointures).
	Veiller au bon entretien des systèmes de ventilation pour les maintenir efficaces."); ?></p>
	<p><?php echo _("<strong>En cas d’allergie aux moisissures, il faut éviter :</strong>
	Les promenades en forêt après la pluie et le brouillard, le ramassage des feuilles et du bois morts, les séjours
	prolongés dans les sous-sols, le stockage de vieux vêtements et de cuir (surtout chaussures) dans les placards,
	le stockage de papiers et de journaux, le stockage de fruit et légumes, les salles de bains ouvertes sur les lieux de vie,
	les aquariums ouverts, les murs recouverts de papiers peints (le papier se gorge d’humidité), les plantes d’intérieur,
	l’apparition de buée sur les vitres (favorise la multiplication des moisissures mais aussi des acariens qui s’en nourrissent)."); ?></p>
</div>

<?php
			break;

/**********			
 dust_mite
*********/
		case 'dust_mite' :
			$title_view = _("Acariens - poussières");
?>
<h2><?php echo _("Tu es allergique aux acariens. Que faire ?"); ?></h2>

<div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_1.jpg'; ?>' alt='<?php echo _("chambre aérée"); ?>'/>
		<p><?php echo _("Ta chambre doit être aérée tous les jours, 15 minutes matin et soir"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_2.jpg'; ?>' alt='<?php echo _("chambre aspirée"); ?>'/>
		<p><?php echo _("Ta chambre doit être aspirées plusieurs fois par semaine"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_3.jpg'; ?>' alt='<?php echo _("température maximum de 18°C"); ?>'/>
		<p><?php echo _("La température de ta chambre doit être au maximum de 18°C"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_4.jpg'; ?>' alt='<?php echo _("rangement"); ?>'/>
		<p><?php echo _("Tes parents privilégient le rangement et éliminent rideaux, tapis, moquette"); ?></p>
	</div>
</div>
<div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_5.jpg'; ?>' alt='<?php echo _("linge de lit synthétique"); ?>'/>
		<p><?php echo _("Dors avec un oreiller et une couette synthétiques"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_6.jpg'; ?>' alt='<?php echo _("housse anti-acariens"); ?>'/>
		<p><?php echo _("Utilise une housse anti-acariens"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_7.jpg'; ?>' alt='<?php echo _("laver les draps"); ?>'/>
		<p><?php echo _("Tes draps doivent être lavés au moins une fois par semaine à 60°. Ta couette, ton oreiller et ta peluche, une fois par mois !"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/dust_mite_8.jpg'; ?>' alt='<?php echo _("passer l'aspirateur dans la maison"); ?>'/>
		<p><?php echo _("Tes parents doivent régulièrement passer l’aspirateur dans la maison"); ?></p>
	</div>
</div>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Et si tu veux en savoir plus, voici quelques informations à découvrir à la maison, avec tes parents"); ?></p>
	<p><?php echo _("<strong>Les acariens</strong> sont des êtres vivants microscopiques (cousins de l’araignée) qui se développent dans la
	poussière de maison en se nourrissant des squames de peau humaine. On les trouve dans la literie (matelas, sommiers tapissiers, couette, oreiller...) canapés et fauteuils en tissus, tissus d’ameublement, tapis et
	moquettes. Les déjections d’acariens et les débris de leurs cadavres contiennent des substances allergéniques qui chez les personnes sensibilisées, se traduisent par de l’asthme (gène respiratoire, sifflement,
	toux) rhinite (nez qui coule, éternuement) allergie oculaire..."); ?></p>
	<p><?php echo _("<strong>En cas d’allergie aux acariens</strong>, il est nécessaire de réduire l’humidité (entre 45 et 60%) par l’aération (aérer la chambre tous les jours ainsi que le lit) et l’assèchement de l’air, ne pas dépasser une température dans
	les pièces de 18° ( maximum 20°), éviter l’accumulation de la poussière ( éviter les peluches, rideaux,tapis,
	moquette et privilégier le rangement de la chambre), nettoyer régulièrement la literie en lavant les draps
	(1 fois tous les 7 à 10 jours), les couettes et oreillers tous les mois (au maximum tous les 3 mois) à au
	moins 40° voire 60° et entourer le matelas avec une housse anti-acariens. Passer l’aspirateur régulièrement
	dans la chambre et dans le reste du logement."); ?></p>
</div>


<?php
			break;

/**********			
 pets
*********/
		case 'pets' :
			$title_view = _("Animaux");
?>

<h2><?php echo _("Tu es allergique aux poils d'animaux. Que faire ?"); ?></h2>

<div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pets_1.jpg'; ?>' alt='<?php echo _("ne pas laisser entrer les animaux"); ?>'/>
		<p><?php echo _("Ne laisse pas entrer d’animaux dans ta chambre ni dans les pièces à vivre"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pets_2.jpg'; ?>' alt='<?php echo _("passer régulièrement l'aspirateur"); ?>'/>
		<p><?php echo _("Tes parents doivent régulièrement passer l’aspirateur dans la maison"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pets_3.jpg'; ?>' alt='<?php echo _("ne pas les caresser"); ?>'/>
		<p><?php echo _("Ne caresse pas et n’embrasse pas les animaux"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pets_4.jpg'; ?>' alt='<?php echo _("se laver les mains, le nez, les yeux"); ?>'/>
		<p><?php echo _("Lave-toi les mains, le nez et les yeux, après avoir été en contact avec des animaux"); ?></p>
	</div>
</div>

<p><?php echo _("Évite d’adopter un animal de compagnie et s’il est déjà présent, il faut mieux t’en séparer."); ?></p>
<p><?php echo _("Si ce n’est pas possible :"); ?></p>
<ul>
	<li><?php echo _("l’animal doit être au maximum à l’extérieur de l’habitation"); ?></li>
	<li><?php echo _("évite qu’il aille dans les chambres, surtout dans les lits et canapés"); ?></li>
	<li><?php echo _("lave l’animal tous les 15 jours"); ?></li>
	<li><?php echo _("évite de jouer en pyjama avec l’animal car les poils vont s’y déposer et vont être transportés dans la literie"); ?></li>
	<li><?php echo _("évite de le caresser ou lave-toi les mains et le nez après l’avoir caressé"); ?></li>
	<li><?php echo _("Tes parents doivent aérer tous les jours, passer régulièrement l’aspirateur et laver régulièrement les écharpes, manteaux et bonnets
				même s’il n’y a pas d’animaux à la maison, car ceux-ci sont au contact avec d’autres vêtements potentiellement porteurs de poils d’animaux
				dans les vestiaires des écoles et des crèches"); ?></li>
</ul>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Et si tu veux en savoir plus, voici quelques informations à découvrir à la maison, avec tes parents"); ?></p>
	<p><?php echo _("3% de la population est allergique aux animaux domestiques."); ?></p>
	<p><?php echo _("Ce ne sont pas les poils d’animaux qui sont responsables de l’allergie mais une substance
					(une protéine) présente sur leurs poils. Cette substance provient de la salive, des larmes, de l’urine et des pellicules de l’animal."); ?></p>
	<p><?php echo _("L’allergie aux animaux la plus commune est celle au chat (2/3 des allergies aux animaux de compagnie)."); ?></p>
	<p><?php echo _("Mais on peut être également allergique aux chiens, rongeurs (cobaye, hamster, lapin), oiseau,
					cheval, animaux de la ferme (vaches, chèvres), reptiles (iguane, lézard, gekko), arachnidés, chinchilla."); ?></p>
</div>

<?php
			break;

/**********			
 pollution
*********/
		case 'pollution' :
			$title_view = _("Pollution");
?>

<h2><?php echo _("La pollution"); ?></h2>

<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pollution_1.jpg'; ?>' alt='<?php echo _("regarder la télé"); ?>'/>
		<p><?php echo _("Avant de sortir, écoute bien les messages radio et télé !"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pollution_2.jpg'; ?>' alt='<?php echo _("méfie toi du sport à l'extérieur"); ?>'/>
		<p><?php echo _("Méfie-toi quand tu fais du sport à l’extérieur !"); ?></p>
	</div>
	<div class = 't8_3_images'>
	</div>
</div>

<p><?php echo _("La pollution peut irriter le nez, la gorge et les bronches des personnes asthmatiques."); ?></p>

<?php
			break;

/**********			
 pollen
*********/
		case 'pollen' :
			$title_view = _("Pollens");
?>

<h2><?php echo _("Tu es allergique aux pollens. Que faire ?"); ?></h2>

<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pollen_1.jpg'; ?>' alt='<?php echo _("laver les mains, se doucher"); ?>'/>
		<p><?php echo _("Lave-toi régulièrement les mains, le nez et prends une douche le soir en période pollinique"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pollen_2.jpg'; ?>' alt='<?php echo _("méfie toi du sport à l'extérieur"); ?>'/>
		<p><?php echo _("Méfie-toi quand tu fais du sport à l’extérieur en période de pollens"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/pollen_3.jpg'; ?>' alt='<?php echo _("médicament anti-allergique"); ?>'/>
		<p><?php echo _("Prends ton médicament anti-allergique si ton médecin te l’a conseillé"); ?></p>
	</div>
</div>

<p><?php echo _("D’autres conseils à suivre en période pollinique, si tu es allergique aux pollens :"); ?></p>

<p><?php echo _("Évite :"); ?></p>
<ul>
	<li><?php echo _("d'ouvrir les fenêtres de la maison ou de la voiture dans la journée"); ?></li>
	<li><?php echo _("de tondre l’herbe ou être présent lors de la tonte"); ?></li>
	<li><?php echo _("le contact direct avec l’herbe et surtout l’herbe fraîchement coupée"); ?></li>
	<li><?php echo _("de sécher le linge dehors"); ?></li>
</ul>

<p><?php echo _("Préfère :"); ?></p>
<ul>
	<li><?php echo _("aérer le matin (car la rosée plaque les pollens au sol) ou tard le soir"); ?></li>
	<li><?php echo _("te ballader en bord de mer"); ?></li>
	<li><?php echo _("rouler en voiture les fenêtres fermées et vérifer régulièrement les filtres à air"); ?></li>
</ul>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Et si tu veux en savoir plus, voici quelques informations à découvrir à la maison, avec tes parents"); ?></p>
	<p><?php echo _("<strong>Les pollens</strong> sont de minuscules grains de quelques dizaines de micromètres de diamètre.
	C’est une poussière fécondante de fleurs produite par de nombreuses espèces de plantes : les graminées, les arbres et les herbacées."); ?></p>
	<p><?php echo _("<strong>Leur croissance est favorisée par un temps ensoleillé, chaud et un vent modéré.
	La pluie plaque les pollens aux sols et ils sont alors moins virulents. Si tu veux connaître les pollens de la région où tu es, il existe des calendriers et des sites
	(par exemple : <a href = 'http://www.pollens.fr'>www.pollens.fr</a>)"); ?></p>
</div>

<?php
			break;
			
/**********			
 irritant
*********/
		case 'irritant' :
			$title_view = _("Irritants respiratoires");
?>

<h2><?php echo _("Les polluants de la maison peuvent aussi irriter les bronches et aggraver l’asthme"); ?></h2>

<p><?php echo _("Un seul conseil : ta maison doit être aérée tous les jours"); ?></p>

<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/irritant_1.jpg'; ?>' alt="don't block air vent"/>
		<p><?php echo _("Les bouches d’aération doivent être propres et dégagées"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/irritant_2.jpg'; ?>' alt='avoid air freshener'/>
		<p><?php echo _("Les diffuseurs de parfum ou les bâtons d’encens sont irritants pour ton système respiratoire"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/irritant_3.jpg'; ?>' alt='put cleaning product away'/>
		<p><?php echo _("Tes parents doivent ranger les produits d’entretien et vérifier qu’ils soient bien fermés"); ?></p>
	</div>
</div>
<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/irritant_4.jpg'; ?>' alt='non toxic paint'/>
		<p><?php echo _("Tes parents doivent privilégier des peintures ecolabel non toxiques"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/irritant_5.jpg'; ?>' alt='air after painting'/>
		<p><?php echo _("Si tes parents viennent de peindre ta chambre, il faut bien aérer et ne pas y dormir avant quelques jours"); ?></p>
	</div>
	<div class = 't8_3_images'>
	</div>
</div>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Comment lutter contre les irritants ?"); ?></p>
	
	<p><?php echo _("Nous passons en moyenne 22 heures sur 24 en espace clos ou semi-clos que cela soit dans les logements, lieux de travail, écoles, espaces de loisirs,
	commerces, transports. L’air que l’on y respire peut contenir certains polluants sans que nous puissions toujours nous en rendre compte, et ceux-ci peuvent avoir
	des effets sur notre confort (odeur, irritation de la peau ou des yeux) et/ou notre santé (aggravation ou développement de pathologies respiratoires par exemple).
	Ces liens sont évidents pour certains polluants intérieurs comme
	le <a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=tobacco'>tabac</a>,
	les <a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=dust_mite'>acariens</a>,
	les <a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=mould'>moisissures</a>,
	ou les <a href = '.?module=patient_teaching&action=show_target&id_target=8&type=patient&subject=pets'>poils d’animaux</a>,
	le monoxyde de carbone, et ne sont que partiellement connus pour d’autres (Composés organiques volatils)."); ?></p>
	<p><?php echo _("LES COMPOSES ORGANIQUES VOLATILS"); ?></p>
	<p><?php echo _("Les composés organiques volatils (COV) et notamment le Formaldéhyde sont des polluants qui, à température ambiante, sont à l’état liquide
	mais qui ont tendance à se transformer en gaz et à se vaporiser dans l’air de nos habitations : ils sont souvent plus nombreux et plus concentrés à l’intérieur qu’à l’extérieur
	compte tenu de la multiplicité des sources intérieures. Ils proviennent principalement de produits et de matériaux utilisés pour la construction,
	la décoration, le nettoyage et le bricolage : les peintures, vernis, décapants, solvants, résines, colles, panneaux dérivés du bois, isolants thermiques (polystyrène, polyuréthane),
	produits de nettoyage et cosmétiques à vaporiser, désinfectants, désodorisants, cristaux pour les mites, agents de conservation du bois, combustion du bois, du charbon et du tabac."); ?></p>
	<p><?php echo _("Les effets sur la santé sont souvent mal connus mais on leur attribue selon les composés des irritations de la peau, des muqueuses et
	du système pulmonaire, des nausées, maux de tête et vomissements."); ?></p>
	<p><?php echo _("Afin d’en réduire la quantité dans le logement, il est recommandé de :"); ?></p>
	<ul>
		<li><?php echo _("utiliser des produits contenant peu ou pas de solvants pour le nettoyage ou le bricolage comme la peinture à l’eau ou naturelle, dans des endroits bien aérés,"); ?></li>
		<li><?php echo _("choisir des matériaux qui ne dégagent pas de vapeurs toxiques. Par exemple : le bois naturel au lieu de contre-plaqués ou d’agglomérés
					(si ces derniers sont utilisés, les enduire de peinture ou de vernis empêchant les émanations),"); ?></li>
		<li><?php echo _("utiliser des clous ou vis au lieu de colle,"); ?></li>
		<li><?php echo _("aérer les vêtements qui reviennent du nettoyage à sec, éviter l’utilisation de pesticides,"); ?></li>
		<li><?php echo _("assurer en tous temps une ventilation adéquate de la maison : ventiler beaucoup durant les deux premières années suivant la construction
					d’une habitation ou après les rénovations majeures pendant la période où les matériaux émettent le plus de COV,"); ?></li>
		<li><?php echo _("s’assurer du fonctionnement adéquat et de l’entretien de tous les appareils de combustion et de cuisson,"); ?></li>
		<li><?php echo _("éviter la vitrification de planchers et préférer les traitements aux huiles naturelles."); ?></li>
	</ul>
</div>

<?php
			break;

/**********			
 sport
*********/
		case 'sport' :
			$title_view = _("Effort physique");
?>

<h2><?php echo _("Quelques conseils pour faire du sport quand on est asthmatique."); ?></h2>

<p><?php echo _("L’asthme n’est pas une contre-indication au sport. Au contraire, le sport est fortement conseillé aux asthmatiques !"); ?></p>
<p><?php echo _("Tous les sports sont permis sauf la plongée sous-marine avec bouteilles et en cas d’asthme mal contrôlé, le parachutisme."); ?></p>

<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/sport_1.jpg'; ?>' alt='<?php echo _("activité qui te plaît"); ?>'/>
		<p><?php echo _("Choisis un sport ou une activité physique qui te plaît"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/sport_2.jpg'; ?>' alt='<?php echo _("s'échauffer"); ?>'/>
		<p><?php echo _("Échauffe toi progressivement au moins 5 minutes"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/sport_3.jpg'; ?>' alt='<?php echo _("gérer ses limites"); ?>'/>
		<p><?php echo _("Ne va pas au bout de tes limites et apprends à gérer ton effort"); ?></p>
	</div>
</div>
<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/sport_4.jpg'; ?>' alt='<?php echo _("traitement sur soi"); ?>'/>
		<p><?php echo _("Pense à avoir ton traitement sur toi par exemple dans ton sac à dos"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/sport_5.jpg'; ?>' alt='<?php echo _("prendre son médicament"); ?>'/>
		<p><?php echo _("Prends 2 bouffées de ton bronchodilatateur d’action rapide (médicament bleu) avant le sport, si ton médecin te l’a conseillé"); ?></p>
	</div>
	<div class = 't8_3_images'>
	</div>
</div>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Quelques bonnes astuces pour faire du sport dans de bonnes conditions quand on est asthmatique :"); ?></p>
	<ul>
		<li><?php echo _("j’emporte toujours mon médicament de secours bleu avec moi"); ?></li>
		<li><?php echo _("je m’échauffe toujours au début d’une séance de sport"); ?></li>
		<li><?php echo _("je n’arrête pas brutalement"); ?></li>
		<li><?php echo _("quand je fais du sport dehors par temps froid ou s’il y a du vent, je couvre mon nez et ma bouche avec un foulard,
						et je respire par le nez pour réchauffer l’air"); ?></li>
		<li><?php echo _("si j’ai déjà fait des crises en pratiquant mon sport, je prends une double bouffée de mon médicament de secours bleu avant de commencer à faire des efforts."); ?></li>
	</ul>
</div>

<?php
			break;

/**********			
 fuel
*********/
		case 'fuel' :
			$title_view = _("Irritants respiratoires");
?>

<h2><?php echo _("S’il y a dans l’habitation, des chauffages par combustion, il est utile de lire ce paragraphe :"); ?></h2>

<div>
	<div class = 't8_3_images'>
	</div>
	<div class = 't8_3_images'>
		<p><?php echo _("chauffer la maison c’est bien, mais il faut se méfier des feux à pétrole, à charbon et des cheminées sans insert"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/fuel.jpg'; ?>' alt='fuel'/>
	</div>
</div>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Et si tu veux en savoir plus, voici quelques informations à découvrir à la maison, avec tes parents"); ?></p>
	<p><?php echo _("<strong>Le monoxyde de carbone (CO)</strong> est un gaz très toxique incolore, inodore et insipide qui se forme lors de la combustion incomplète
				de matières carbonées comme le charbon, le pétrole, l’essence, le gasoil, le gaz et le bois. C’est la première cause domestique de
				mortalité accidentelle par intoxication en France."); ?></p>
	<p><?php echo _("Il se dégage à partir :"); ?></p>
	<ul>
		<li><?php echo _("les poêles à charbon, des appareils de chauffage mobiles ( poêle à pétrole, radiateur à bonbonne) non ou mal raccordés à un conduit
						d’évacuation ou fonctionnant dans des mauvaises conditions d’aération ou mal entretenus,"); ?></li>
		<li><?php echo _("du refoulement des gaz de combustion lors de conduits bouchés ou obstrués,"); ?></li>
		<li><?php echo _("des gaz d’échappement des moteurs de voiture en fonctionnement dans des pièces fermés (garage),"); ?></li>
		<li><?php echo _("les chauffe-eau ou chauffe-bain utilisés dans des petites pièces non ventilées."); ?></li>
	</ul>
	<p><?php echo _("Les inhalations de CO peuvent provoquer une intoxication aigue : maux de tête, vertiges, fatigue, nausées, vomissements, perte de connaissance
				voire coma ou une intoxication chronique lors d’inhalations répétées de petites quantités qui se traduisent par des maux de tête,
				faiblesse, difficultés de concentration..."); ?></p>
	<p><?php echo _("<strong>Afin d’éviter le dégagement de CO, il est nécessaire de veiller à l’entretien et au bon fonctionnement des appareils de combustion
				notamment en respectant les notices d’utilisation.</strong>"); ?></p>
	<p><?php echo _("Procéder au ramonage des cheminées et conduits d’évacuation une fois par an pour le gaz et 2 fois par an pour le fioul,
				le bois et le charbon et veiller à la bonne aération des locaux disposant d’appareils de combustion."); ?></p>
	<p><?php echo _("<strong>En cas d’accident : ouvrir portes et fenêtres, arrêter l’appareil en cause, sortir la victime du local et prévenir les secours.</strong>"); ?></p>
</div>

<?php
			break;

/**********			
 tobacco
*********/
		case 'tobacco' :
			$title_view = _("Tabac");
?>

<h2><?php echo _("Le tabac est un irritant pour les bronches et aggrave l’asthme."); ?></h2>

<p><?php echo _("Voici quelques conseils à appliquer si des personnes fument autour de toi :"); ?></p>

<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/tobacco_1.jpg'; ?>' alt='avoid tabacco'/>
		<p><?php echo _("Évite tout contact avec le tabac"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/tobacco_2.jpg'; ?>' alt='smoke outside'/>
		<p><?php echo _("Les adultes doivent fumer à l’extérieur"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/tobacco_3.jpg'; ?>' alt='rinse mouth out'/>
		<p><?php echo _("Tes parents doivent se rincer la bouche et se laver les mains après avoir fumé"); ?></p>
	</div>
</div>

<div class = 't8_explanations'>
	<p class = 't8_explanations_title'><img src = '<?php echo IMAGE_PATH.'target/8/picto_explanations.jpg'; ?>' alt = 'picto' />
	
	<p class = 't8_explanations_title'><?php echo _("Et si tu veux en savoir plus, voici quelques informations à découvrir à la maison, avec tes parents"); ?></p>
	<p><?php echo _("La fumée dégagée par les cigarettes, pipes et cigares ou exhalée par le fumeur contient de nombreuses substances dangereuses
	et l’exposition des non-fumeurs à la fumée de tabac s’appelle le tabagisme passif."); ?></p>
	<p><?php echo _("Cette fumée irrite les yeux, le nez et la gorge des personnes exposées, aggrave l’asthme et favorise les infections des bronches,
	du nez et des oreilles chez les enfants."); ?></p>
	<p><?php echo _("Le mieux est de ne pas fumer à l’intérieur des lieux clos, même à la fenêtre car l’air extérieur refoule à l’intérieur la fumée de cigarettes,
	respecter les zones non fumeurs, et augmenter le renouvellement d’air par l’ouverture des fenêtres."); ?></p>
	<p><?php echo _("On recommande également aux fumeurs de se laver les mains et de se rincer la bouche après avoir fumé, pour limiter les odeurs de tabac
	de l’haleine et des mains qui peuvent gêner la personne asthmatique en cas de contact proche."); ?></p>
</div>

<?php
			break;
		case 'dust' :
			break;

/**********			
 stress
*********/
		case 'stress' :
			$title_view = _("Stress");
?>

<h2><?php echo _("L’anxiété et le stress sont des facteurs aggravant l’asthme."); ?></h2>

<div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/stress_1.jpg'; ?>' alt='talk about your fears'/>
		<p><?php echo _("N’hésite pas à exprimer tes craintes et tes peurs aux adultes"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/stress_2.jpg'; ?>' alt='relax'/>
		<p><?php echo _("Détends-toi et respire profondément"); ?></p>
	</div>
	<div class = 't8_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/stress_3.jpg'; ?>' alt='pleasant sport'/>
		<p><?php echo _("Choisis un sport ou une activité physique qui te plaît"); ?></p>
	</div>
</div>

<p><?php echo _("Et souviens-toi que le sport est un excellent moyen de lutter contre le stress ..."); ?></p>

<?php
			break;

/**********			
 infection
*********/
		case 'infection' :
			$title_view = _("Infection");
?>

<h2><?php echo _("Quelques conseils pour éviter les rhumes et autres maladies..."); ?></h2>

<div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/infection_1.jpg'; ?>' alt='wrap up well'/>
		<p><?php echo _("S’il fait froid, couvre-toi bien"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/infection_2.jpg'; ?>' alt='wash hands, vaccinate")'/>
		<p><?php echo _("Il faut te laver souvent les mains, il faut te faire vacciner, pour éviter d'être malade"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/infection_3.jpg'; ?>' alt='prevent infectious contact'/>
		<p><?php echo _("Evite tout contact avec les personnes enrhumées"); ?></p>
	</div>
	<div class = 't8_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/8/infection_4.jpg'; ?>' alt='put hand in front of mouth when sneezing'/>
		<p><?php echo _("Si tu éternues, mets ta main devant ta bouche"); ?></p>
	</div>
</div>

<p><?php echo _("Les infections respiratoires (rhume, rhinopharyngite, otite, angine ou des bronchites) augmentent l’inflammation
				de tout l’appareil respiratoire et peuvent entraîner des crises d’asthme surtout si d’autres facteurs déclenchants se cumulent
				(infection +/- sport +/- contact allergique)"); ?></p>
<p><?php echo _("Pour éviter les infections respiratoires :"); ?></p>
<ul>
	<li><?php echo _("je me fais vacciner contre des maladies comme la grippe, la rougeole, la coqueluche ou le pneumocoque,"); ?></li>
	<li><?php echo _("je me lave les mains, au moins 30 secondes, en rentrant de l’école, des transports en commun, des magasins et après m’être mouché(e)."); ?></li>
	<li><?php echo _("je jette mon mouchoir après m’être mouchée"); ?></li>
	<li><?php echo _("je soigne mes rhumes sans attendre."); ?></li>
</ul>

<?php
			break;
		default :
			header ('location:.?module=patient_teaching&action=show_target&id_target=8&type=patient');
	}
}
?>
