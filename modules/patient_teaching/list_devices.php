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


$list_devices = array (
					'aerosolchb' =>  array(
										'title' => _("aérosol doseur avec chambre d'inhalation"),
										'questions' => array (
													1 => _("Enlève le capuchon"),
													2 => _("Secoue le produit et place-le à l’extrémité de la chambre"),
													3 => _("Serre les lèvres autour de l’embout à l’autre extrémité"),
													4 => _("Bouche ton nez avec tes doigts"),
													5 => _("Envoie une bouffée"),
													6 => _("Respire 6 à 7 fois"),
													7 => _("Si ton médecin te l’a prescrit, refais une 2<sup>ème</sup> bouffée et respire 6 à 7 fois")
													)
										),
					'aerosol' => array(
									'title' => _("aérosol doseur sans chambre d'inhalation"),
									'questions' => array (
													1 => _("Enlève le capuchon"),
													2 => _("Secoue le produit"),
													3 => _("Souffle à fond"),
													4 => _("Mets le spray en bouche en serrant les lèvres autour"),
													5 => _("Appuie sur le spray et inspire fort"),
													6 => _("Retiens ta respiration 5 secondes"),
													7 => _("Souffle et remets le capuchon")
													)
									),
					'novolizer' =>  array(
									'title' => _("Novolizer"),
									'questions' => array (
													1 => _("Enlève le capuchon, le voyant est rouge"),
													2 => _("Appuie sur le bouton : le voyant passe au vert"),
													3 => _("Souffle a fond"),
													4 => _("Mets le novolizer dans ta bouche en serrant les lèvres autour"),
													5 => _("Inspire fort : tu entendras un clic et tu sentiras un goût sucré"),
													6 => _("Retiens ta respiration 5 secondes"),
													7 => _("Souffle et remets le capuchon")
													)
									),
					'diskus' =>  array(
									'title' => _("Diskus"),
									'questions' => array (
													1 => _("Mets ton pouce dans l’encoche et pousse le couvercle le plus loin possible"),
													2 => _("Pousse le levier vers l’extérieur tu entendras le déclic"),
													3 => _("Souffle à fond en dehors du diskus"),
													4 => _("Inspire fortement par l’embout buccal"),
													5 => _("Retiens ta respiration 5 secondes"),
													6 => _("Souffle et referme le couvercle (clic)")
													)
									),
					'autohaler' =>  array(
									'title' => _("Autohaler"),
									'questions' => array (
													1 => _("Tiens l’autohaler la partie renflée vers le bas et enlève le capuchon (petite encoche derrière)"),
													2 => _("Secoue l’autohaler"),
													3 => _("Soulève le levier : l’autohaler est armé"),
													4 => _("Souffle à fond"),
													5 => _("Mets ta bouche autour de l’embout et aspire à fond : tu entends un clic"),
													6 => _("Retiens ta respiration 5 secondes"),
													7 => _("Souffle et remets le capuchon")
													)
									),
					'turbuhaler' =>  array(
									'title' => _("Turbuhaler"),
									'questions' => array (
													1 => _("Dévisse le capuchon"),
													2 => _("Tiens le turbuhaler bien droit la molette en bas"),
													3 => _("Tourne la molette à fond à droite, puis à gauche pour entendre le clic"),
													4 => _("Souffle en dehors du turbuhaler"),
													5 => _("Mets l’embout entre les dents, bouche fermée et inspire fort"),
													6 => _("Retiens ta respiration 5 secondes")
													)
									)
					);
?>
