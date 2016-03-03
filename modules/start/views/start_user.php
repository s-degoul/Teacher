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


$title_view = _("Bienvenue sur Teacher");
$style[] = 'start_user';

//if (isset ($_GET['from']) and $_GET['from'] == 'connection')
//	$messages['info'][] = _("Vous pouvez à tous moments cliquer sur &quot;Accueil&quot; en haut à gauche pour revenir sur cette page.");
?>


<?php
if ($_SESSION['user_end_teacher'] == 2) {
?>
<p>
	<?php echo _("Ayant validé l'ensemble du programme, vous pouvez maintenant utiliser Teacher comme outil de travail pour vous aider dans l'éducation thérapeutique de vos patients asthmatiques."); ?>
</p>
<p>
	<?php echo _("Vous avez toujours accès à l'ensemble de Teacher via le menu de gauche, permettant d'accéder au résumé de votre progression, au résultat de votre dernier auto-évaluation en particulier ainsi que la formation &laquo;&nbsp;l'essentiel à savoir&nbsp;&raquo; et les détails du programme éducatif d'un patient."); ?>
</p>

<p>
	<?php echo _("Vous pouvez également consulter"); ?>
	<a href = '.?module=start&action=show_color_code&from=start_user' class = 'link'><?php echo _("les codes couleurs"); ?></a>
	<?php echo _("ainsi que"); ?>
	<a href='?module=start&action=summary&from=start_user' class = 'link'><?php echo _("le coup d'oeil sur Teacher"); ?></a>.
</p>

<?php
}
else {
	if ($_SESSION['user_end_teacher'] == 1) {
?>
<p class = 'end_teacher'>
	<?php echo ("Votre avancement dans le programme vous permet de"); ?>
	<a href='.?module=user_teaching&action=end_teacher' class = 'link_action'><?php echo _("terminer Teacher"); ?></a>
</p>
<?php
	}
?>

<p class = 'start_user_content'><?php echo _("Ce site est destiné à vous initier à l'éducation thérapeutique du patient par sa pratique auprès des enfants asthmatiques et de leur famille."); ?><p>
<p class = 'start_user_content'>
<!--
	<?php echo _("Étape après étape, il vous guidera dans votre démarche pédagogique."); ?>
-->
	<strong><?php echo _("Attention : ce programme est très riche&nbsp;; n'essayez pas de le parcourir en une seule fois !");?></strong>
</p>
<p>
<!--
	<?php echo _("Pour vous faciliter sa compréhension, nous avons instauré des codes couleurs"); ?>
	(<a href = '.?module=start&action=show_color_code'><?php echo _("en savoir plus"); ?></a>).
	<?php echo _("Première connexion ? Pour commencer la démarche, c'est par ici"); ?> ????
-->
</p>

<hr>

<p>
	<?php echo _("Quelques liens utiles"); ?> :
	<ul>
		<li>
			<?php echo _("Comprendre le code couleur de Teacher"); ?> :
			<div class = 'link_container'>
				<a href='?module=start&action=show_color_code&from=start_user' class = 'link'>
					<?php echo _("Code couleur"); ?>
				</a>
			</div>
		</li>
		<li>
			<?php echo _("S'informer des différentes étapes du programme"); ?> :
			<div class = 'link_container'>
				<a href='?module=start&action=summary&from=start_user' class = 'link'>
					<?php echo _("Coup d'oeil"); ?>
				</a>
			</div>
		</li>
		<li>
			<?php echo _("Suivre ma progression"); ?> :
			<div class = 'link_container'>
				<a href='?module=user_teaching&action=show_training&from=start_user' class = 'link'>
					<?php echo _("Ma progression"); ?>
				</a>
			</div>
		</li>
		<li>
			<?php echo _("Consulter la liste de mes patients"); ?> :
			<div class = 'link_container'>
				<a href='?module=patient_management&action=show_patient_list&from=start_user' class = 'link'>
					<?php echo _("Mes patients"); ?>
				</a>
			</div>
		</li>
	</ul>
</p>

<!--
<p class = 'start_user_content'><?php echo _("Dans un premier temps, visualisez le contenu de Teacher"); ?>
&nbsp;(<a href='?module=start&action=summary'><?php echo _("cliquez ici pour accéder au &laquo; Coup d'oeil &raquo;"); ?></a>).</p>
<p class = 'start_user_content'><?php echo _("Ensuite, laissez vous guider au fil des étapes du parcours (menu de gauche). Attention, <strong>au début de votre parcours</strong>, il faudra d'abord passer par les deux premières étapes &laquo;&nbsp;Je teste mes compétences&nbsp;&raquo; puis &laquo;&nbsp;L'essentiel à savoir&nbsp;&raquo; avant d'accéder aux autres fonctionnalités de Teacher (dont l'inclusion d'un premier patient)."); ?><p>
<p class = 'start_user_content'><?php echo _("Pour découvrir la trame du programme éducatif du patient, cliquez sur &laquo;&nbsp;Programme éducatif&nbsp;&raquo;."); ?></p>
<p class = 'start_user_content'><?php echo _("Pour inclure un patient, cliquez sur &laquo;&nbspMes patients&nbsp&raquo; dans le menu en haut, ou &laquo;&nbspListe de mes patients&nbsp&raquo; dans la page résumant le programme éducatif."); ?></p>

<p class = 'start_user_content'><?php echo _("Il faut avoir réalisé un programme éducatif complet (y compris les évaluations finales) pour 3 enfants avant de pouvoir re-tester ses compétences. Vous visualiserez ainsi vos progrès en éducation thérapeutique."); ?></p>
-->

<!--
<div class = 'link_last'></div>
<div class = 'link_next'>
	<p><a href='?module=start&action=summary'><?php echo _("En savoir plus (coup d'oeil)"); ?></a></p>
</div>
-->
<?php
}
?>
