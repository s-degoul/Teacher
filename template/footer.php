  
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


			</div>
		</section>
	</div>
	
	<footer>
		<div>
			
<?php
	// à adapter selon la langue (cf  http://creativecommons.org/choose/?lang=en )
	// ou à mettre dans la page de licence ??? peut être, pour pouvoir préciser en plus que le code source est libre
?>
			<p class = 'logo_footer'>
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.fr">
<!--					<img alt="Licence Creative Commons" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /> -->
					<img alt="Licence Creative Commons" src="images/CC_BY_NC_SA.png" />
				</a>
			</p>
			<p class = 'links_footer'>
				Teacher
				(<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.samuel-degoul.org/Teacher/" property="cc:attributionName" rel="cc:attributionURL"><?php echo WEB_ADRESS; ?></a>)
<?php
	echo _("est mis à disposition selon les termes d'une licence Creative Commons Attribution")
?>			
<!--				<a rel='license' href='http://creativecommons.org/licenses/by-nc-sa/3.0/deed.fr'> -->
				(<a rel='license' href='.?module=legal_notices&action=show_licence'><?php echo _("Voir les détails"); ?></a>)
				<!--					 - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions 3.0 non transposé -->
			</p>
			<p class = 'links_footer'>
				<a href = '.?module=contact&action=contact_admin'>
					<?php echo _("Contacter l'administrateur du site"); ?>
				</a>
			</p>
<!--			<p class = 'links_footer'><a href = '.?module=legal_notices&action=show_licence'> <?php // echo _("Licence"); ?> </a></p> -->
		</div>
	</footer>
	
</body>
</html>
