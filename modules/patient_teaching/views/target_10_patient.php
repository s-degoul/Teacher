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

<h2><?php echo _("Mathis est enrhumé"); ?></h2>

<p><?php echo _("&laquo; je sais réagir quand je commence un rhume &raquo;"); ?></p>

<div class = 't10_story'>
	<p class = 't10_title'><?php echo _("Histoire"); ?></p>
	<p class = 't10_story_image'>
		<img src = '<?php echo IMAGE_PATH.'target/10/runny_nose.jpg'; ?>' alt = "runny nose" width = 100px />
	</p>
	<p class = 't_10_story_text_side'><?php echo _("Mathis est asthmatique et il a attrapé froid : il a mal à la gorge, son nez coule et est bouché, il se sent fatigué et il a un peu de fièvre. Il se dit : &laquo; je suis enrhumé, mais de toutes façons, ce n’est pas grave, et en plus ça m’embête de me soigner. Attendons que ça passe tout seul &raquo;, et il ne fait rien. Deux jours plus tard, Mathis n’arrive pas à dormir car il n’arrête pas de tousser. Il a du mal à respirer et ça siffle dans sa poitrine."); ?></p>
</div>

<div>
	<p class = 't10_title'><?php echo _("Les questions"); ?></p>
	<div>
		<p class = 't10_num_question'><span>1</span></p>
		<p class = 't10_question_answer_text'><?php echo _("D’après toi, que se passe-t-il ? Pourquoi ?"); ?></p>
	</div>
	<div>
		<p class = 't10_num_question'><span>2</span></p>
		<p class = 't10_question_answer_text'><?php echo _("Qu’est-ce qu’il aurait pu faire pour l’éviter ?"); ?></p>
	</div>
	<div>
		<p class = 't10_num_question'><span>3</span></p>
		<p class = 't10_question_answer_text'><?php echo _("Comment peux-tu faire pour éviter d’attraper des infections ?"); ?></p>
	</div>
</div>

<div>
	<p class = 't10_title'><?php echo _("Les réponses"); ?></p>
	<div>
		<p class = 't10_num_question'><span>1</span></p>
		<p class = 't10_question_answer_text'><?php echo _("Mathis est en train de faire une crise d’asthme. Tu le sais bien : quand on a de l’asthme, les infections peuvent déclencher des crises."); ?></p>
	</div>
	<div>
		<p class = 't10_num_question'><span>2</span></p>
		<div class = 't10_question_answer_text'>
			<p><?php echo _("Comme il savait que ses bronches risquaient de s’enflammer plus que d’habitude à cause de l’infection, il aurait dû"); ?> :</p>
			<ul>
				<li><?php echo _("soigner son rhume sans attendre"); ?></li>
				<li><?php echo _("surveiller son DEP. Voir les fiches &laquo; Je sais mesurer mon souffle &raquo; (Objectif 6) et &laquo; Je sais adapter mon traitement selon les résultats de mon débit de pointe &raquo; (Objectif 7)"); ?></li>
				<li><?php echo _("renforcer son traitement de fond qui diminue l’inflammation, par exemple en doublant les doses, si son médecin le lui avait conseillé."); ?></li>
			</ul>
		</div>
	</div>
	<div>
		<p class = 't10_num_question'><span>3</span></p>
		<div class = 't10_question_answer_text'>
			<ul>
				<li><?php echo _("Je me vaccine contre le pneumocoque, la grippe, la rougeole ou la coqueluche pour éviter les infections bronchiques favorisées par ces microbes."); ?></li>
				<li><?php echo _("Je me lave les mains plusieurs fois par jour, au moins 30 secondes, en rentrant de l’école, avant de manger, et après m’être mouché(e)"); ?></li>
				<li><?php echo _("Je soigne mes rhumes sans attendre, par des lavages de nez au sérum physiologique."); ?></li>
			</ul>
		</div>
	</div>
</div>



<h2><?php echo _("Julie fait une crise d’asthme à l’école"); ?></h2>

<div class = 't10_story'>
	<p class = 't10_title'><?php echo _("Histoire"); ?></p>
	<p class = 't10_story_image'>
		<img src = '<?php echo IMAGE_PATH.'target/10/stress.jpg'; ?>' alt = "runny nose" width = 100px />
	</p>
	<p class = 't_10_story_text_side'><?php echo _("Julie est asthmatique et allergique aux acariens. Aujourd’hui, elle rentre en CM1. Elle s’est dépêchée et du coup, elle a oublié, ce matin, de prendre son traitement pour l’asthme. Dans la matinée, Julie est stressée, puis elle a mal à la tête et le nez qui gratte, puis elle commence à tousser à avoir du  mal à respirer. Elle commence une crise d’asthme."); ?></p>
</div>

<div>
	<p class = 't10_title'><?php echo _("Les questions"); ?></p>
	<div>
		<p class = 't10_num_question'><span>1</span></p>
		<div class = 't10_question_answer_text'>
			<p><?php echo _("Sur quel(s) signe(s) peut-on deviner que Julie commence une crise d’asthme ?"); ?></p>
			<ol>
				<li><?php echo _("elle est stressée,"); ?></li>
				<li><?php echo _("elle a mal à la tête"); ?></li>
				<li><?php echo _("elle a le nez qui gratte"); ?></li>
				<li><?php echo _("elle tousse et est gênée pour respirer"); ?></li>
			</ol>
			<p><?php echo _("Et toi, quels sont tes signes de crise d’asthme ?"); ?></p>
		</div>
	</div>
	<div>
		<p class = 't10_num_question'><span>2</span></p>
		<div class = 't10_question_answer_text'>
			<p><?php echo _("Julie sait ce qu’il faut faire en cas de crise d’asthme mais ne sait plus dans quel ordre : peux-tu l’aider ?"); ?></p>
			<ol>
				<li><?php echo _("demander son médicament de secours,"); ?></li>
				<li><?php echo _("prévenir un adulte (le professeur) qu’elle fait une crise d’asthme,"); ?></li>
				<li><?php echo _("commencer à se calmer, respirer lentement par le nez et souffler par la bouche,"); ?></li>
				<li><?php echo _("prendre 1 à 2 bouffées de son médicament de secours."); ?></li>
			</ol>
			<p><?php echo _("Te rappelles-tu de quelle couleur est ton médicament de secours ?"); ?></p>
		</div>
	</div>
</div>

<div class = 't10_story'>
	<p class = 't10_title'><?php echo _("Suite de l'histoire"); ?></p>
	<p class = 't_10_story_text'><?php echo _("Le professeur ne sait pas que Julie fait de l’asthme et n’a pas de médicament de secours. Il appelle la maman de Julie qui vient, et donne le médicament. Julie respire mieux."); ?></p>
</div>

<div>
	<p class = 't10_title'><?php echo _("Les questions"); ?></p>
	<div>
		<p class = 't10_num_question'><span>3</span></p>
		<div class = 't10_question_answer_text'>
			<p><?php echo _("Que doit faire la maman de Julie pour que cela n’arrive plus ?"); ?></p>
			<ol>
				<li><?php echo _("que Julie n’aille plus à l’école,"); ?></li>
				<li><?php echo _("que sa maman reste avec elle à l’école au cas où Julie aurait une crise d’asthme,"); ?></li>
				<li><?php echo _("donner au professeur de Julie le traitement de secours mais le professeur ne sait pas s’en servir et ne sait pas quand il faut le donner à Julie,"); ?></li>
				<li><?php echo _(" demander au directeur de l’école un PAI (plan d’accueil individualisé) qui consiste à expliquer et noter par écrit aux professeurs les signes d’asthme de Julie et le traitement à donner et qui prévenir."); ?></li>
			</ol>
		</div>
	</div>
</div>

<div>
	<p class = 't10_title'><?php echo _("Les bonnes réponses"); ?></p>
	<div>
		<p class = 't10_num_question'><span>1</span></p>
		<p class = 't10_question_answer_text'>= 4</p>
	</div>
	<div>
		<p class = 't10_num_question'><span>2</span></p>
		<p class = 't10_question_answer_text'>= 2-1-3-4</p>
	</div>
	<div>
		<p class = 't10_num_question'><span>3</span></p>
		<p class = 't10_question_answer_text'>= 4</p>
	</div>
</div>

<div class='t10_pict_good_to_know'>
</div>
<div class='t10_good_to_know'>
	<p><?php echo _("Pour tes parents, s’il veulent en savoir plus sur le PAI :"); ?></p>
	<p><?php echo _("En France, grâce à la circulaire du 22 septembre 2003, les parents peuvent demander un PAI (plan d’accueil individualisé) au directeur d’établissement, pour l’enfant asthmatique afin de définir le rôle de chacun. Il est valable 1 an.<br/>Le(s) parent(s), le directeur d’établissement qui représente l’éducation nationale, le médecin ou infirmière scolaire, le(s) professeur(s) de l’enfant et si nécessaire le personnel péri-scolaire si l’enfant est accueilli après l’école en garderie se réunissent. Le PAI est rédigé à partir d’un certificat médical, fait par le pédiatre (ou médecin généraliste ou pneumologue ou allergologue) qui connaît l’asthme de l’enfant et où est détaillé les signes de crise d’asthme propres à l’enfant, le traitement à lui administrer (nom, posologie, et mode d’administration) et les personnes à prévenir. On peut y détailler aussi les précautions à prendre si l’enfant a un asthme induit par l’exercice. Le médecin doit également joindre une ordonnance avec les médicaments spécifiés dans le certificat. La famille de l’enfant doit rapporter les médicaments, le certificat du médecin et l’ordonnance lors de la rédaction du PAI."); ?></p>
</div>



<h2><?php echo _("Arsène est invité chez un ami"); ?></h2>

<p><?php echo _("&laquo; Je connais les précautions à prendre quand je ne suis pas à la maison &raquo;"); ?></p>

<div class = 't10_story'>
	<p class = 't10_title'><?php echo _("Histoire"); ?></p>
	<p class = 't_10_story_text'><?php echo _("Arsène a été invité par Achille, son meilleur ami, à venir passer une semaine de vacances chez ses grands-parents.<br/>Arsène a très envie d’y aller, mais, comme il a fait une crise d’asthme l’année dernière quand il était en vacances, il refuse l’invitation."); ?></p>
</div>

<div>
	<p class = 't10_title'><?php echo _("Les questions"); ?></p>
	<div>
		<p class = 't10_num_question'><span>1</span></p>
		<p class = 't10_question_answer_text'><?php echo _("Pourquoi crois-tu qu’Arsène refuse d’aller chez son ami ?"); ?></p>
	</div>
	<div>
		<p class = 't10_num_question'><span>2</span></p>
		<p class = 't10_question_answer_text'><?php echo _("Et toi, à la place d’Arsène, aurais-tu accepté ou refusé l’invitation d’Achille ? Comment aurais-tu fait pour éviter d’avoir des crises ?"); ?></p>
	</div>
</div>

<div class = 't10_story'>
	<p class = 't10_title'><?php echo _("Jeu"); ?></p>
	<p class = 't_10_story_text'><?php echo _("Arsène et Achille prévoient des activités"); ?> :</p>
	<ol>
		<li><?php echo _("Chasse aux trésors dans le grenier"); ?></li>
		<li><?php echo _("Jeux dans la cave"); ?></li>
		<li><?php echo _("Balade à vélo en forêt"); ?></li>
		<li><?php echo _("Sortie au parc d’attraction"); ?></li>
		<li><?php echo _("Partie de foot avec les voisins"); ?></li>
		<li><?php echo _("Aller chercher les œufs dans le poulailler"); ?></li>
		<li><?php echo _("Aller faire les courses"); ?></li>
		<li><?php echo _("Jouer avec Belsébuth le chat de Mamie"); ?></li>
		<li><?php echo _("Cueillir des fraises"); ?></li>
		<li><?php echo _("Participer au cross de la kermesse"); ?></li>
		<li><?php echo _("Bataille d’oreillers"); ?></li>
		<li><?php echo _("Faire des crêpes"); ?></li>
		<li><?php echo _("Aider Papi à ramasser l’herbe tondue"); ?></li>
		<li><?php echo _("Fabriquer un radeau pour aller naviguer sur la rivière"); ?></li>
		<li><?php echo _("Jouer à la console"); ?></li>
		<li><?php echo _("Regarder la télé, blottis dans le vieux canapé en tissus"); ?></li>
		<li><?php echo _("Aller à l’anniversaire de la voisine"); ?></li>
		<li><?php echo _("Promenade en poney"); ?></li>
	</ol>
	<p class = 't_10_story_text'><?php echo _("Parmi celles indiquées, choisis"); ?> :</p>
	<ul>
		<li><?php echo _("celles qui sont permises quelles que soient les allergies d’Arsène,"); ?></li>
		<li><?php echo _("celles qui ne sont pas conseillées si Arsène est allergique aux acariens / pollens / poils d’animaux"); ?></li>
	</ul>
	<p class = 't_10_story_text'><?php echo _("C’est encore mieux si tu précises tes réponses."); ?> :</p>
</div>

<div>
	<p class = 't10_title'><?php echo _("Les réponses"); ?></p>
	<div>
		<p class = 't10_num_question'><span>1</span></p>
		<p class = 't10_question_answer_text'><?php echo _("Il a peur de faire une crise d’asthme car si une crise arrive, il sera sans ses parents, et d’habitude, ce sont eux qui décident ce qu’il faut faire en cas de crise."); ?></p>
	</div>
	<div>
		<p class = 't10_num_question'><span>2</span></p>
		<p class = 't10_question_answer_text'><?php echo _("Arsène peut accepter l’invitation à condition de prendre quelques précautions."); ?></p>
	</div>
</div>

<div class = 't10_tricks'>
	<div class = 't10_tricks_part'>
		<p class = 't10_tricks_part_title'><span><?php echo _("Avant le séjour"); ?> :</span></p>
		<ul>
			<li><?php echo _("il faut prévenir les grand-parents d’Achille qu’il est asthmatique,") ;?></li>
			<li><?php echo _("il faut préciser les situations qui déclenchent les crises et en particuliers les allergènes,") ;?></li>
			<li><?php echo _("et leur remettre un exemplaire de son plan d'action personnalisé.") ;?></li>
		</ul>
		<p><?php echo _("De cette façon, à condition de le savoir à l'avance, les grands-parents d'Achille auront arrangé la maison et prévu des activités pour éviter qu'Arsène soit en contact avec ses facteurs de risque. Comme ses parents, ils pourront même l'aider à faire ce qu'il faut en cas de crise."); ?></p>
	</div>

	<div class = 't10_tricks_part'>
		<p class = 't10_tricks_part_title'><span><?php echo _("Il emporte dans sa valise"); ?> :</span></p>
		<ul>
			<li><?php echo _("sa trousse d'urgence : elle contient son débimètre de pointe (il connaît sa valeur alerte), son médicament de secours de couleur bleue, sa chambre d'inhalation ainsi que des corticoïdes en comprimés,") ;?></li>
			<li><?php echo _("ses médicaments &laquo; de fond &raquo; (anti-inflammatoires) qu'il prend habituellement,") ;?></li>
			<li><?php echo _("son plan d'action personnalisé qui explique ce qu'il faut faire en cas de crise,") ;?></li>
			<li><?php echo _("s'il est allergique aux acariens, sa housse et son oreiller anti-acariens.") ;?></li>
		</ul>
	</div>

	<div class = 't10_tricks_part'>
		<p class = 't10_tricks_part_title'><span><?php echo _("Pendant le séjour"); ?> :</span></p>
		<ul>
			<li><?php echo _("il prend son traitement de fond tous les jours comme à la maison,") ;?></li>
			<li><?php echo _("il évite") ;?> :
				<ul>
					<li><?php echo _("de trop s'énerver"); ?></li>
					<li><?php echo _("les jeux qui risqueraient de déclencher des crises (donne un exemple au cas où Arsène est allergique : aux acariens, au chat, aux pollens de graminés, aux moisissures, les endroits où on fume)"); ?></li>
				</ul></li>
			<li><?php echo _("il ne joue pas dehors par temps froid et sec, en cas de pollution, de grand vent ou de brouillard,") ;?></li>
			<li><?php echo _("s'il est allergique à des plantes, il doit faire particulièrement attention si c'est l'époque de leur pollinisation.") ;?></li>
		</ul>
	</div>
</div>
