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


$title_view = _("Vidéo : utilisation des dispositifs d'inhalation");

?>

<video controls poster='' width = 800 >
<?php

if (file_exists ($video_mp4)) {
?>
	<source src = '<?php echo $video_mp4; ?>' />
<?php
}

if (file_exists ($video_ogg)) {
?>
	<source src = '<?php echo $video_ogg; ?>' />
<?php
}

?>
</video>

<p>
	<?php echo _("Si vous rencontrez des problèmes pour visualiser les vidéos, nous vous conseillons l'utilisation du navigateur internet Firefox"); ?>
	(<a href='https://www.mozilla.org/fr/firefox/new/'><?php echo _("télécharger"); ?></a>)
</p>
