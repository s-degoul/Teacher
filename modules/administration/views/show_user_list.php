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

$title_view = _("Liste des utilisateurs du système");

?>

<p>
	<a href = '.?module=administration&action=add_update_user' class = 'link_action'><?php echo _("Ajouter un utilisateur"); ?></a>
</p>

<p>
	<?php echo _("Pour modifier les informations d'un utilisateur, cliquez sur son nom."); ?>
</p>

<form action = '' method = 'post'>

	<table class = 'table_user_list'>
		<thead>
			<tr>
				<th><?php echo _("NOM Prénom"); ?></th>
				<th><?php echo _("Titre"); ?></th>
				<th><?php echo _("Login"); ?></th>
				<th><?php echo _("Mail"); ?></th>
				<th><?php echo _("Téléphone"); ?></th>
				<th><?php echo _("Adresse"); ?></th>
				<th><?php echo _("Pays"); ?></th>
				<th><?php echo _("Adminis-<br/>trateur ?"); ?></th>
				<th><?php echo _("Sélection"); ?></th>
			</tr>
		</thead>
		<tbody>

<?php
foreach ($list_user as $user) {
?>
			<tr>
				<td><a href = '.?module=administration&action=add_update_user&id_user=<?php echo $user['id_user']; ?>'><?php echo strtoupper($user['user_surname']).' '.$user['user_firstname']; ?></a></td>
				<td><?php echo $user['user_title']; ?></td>
				<td><?php echo $user['user_login']; ?></td>
				<td><a href='mailto:<?php echo $user['user_mail']; ?>'><?php echo $user['user_mail']; ?></a></td>
				<td><?php echo $user['user_phone']; ?></td>
				<td><?php
				echo $user['user_street'] == ''?'':$user['user_street'].', ';
				echo $user['user_postal_code'] == ''?'':$user['user_postal_code'].', ';
				echo $user['user_city'] == ''?'':$user['user_city']; ?></td>
				<td><?php echo $user['country_name']; ?></td>
				<td><?php echo $user['user_rights']=='admin'?_("oui"):_("non"); ?></td>
<?php
	$id = 'id_user_'.$user['id_user'];
	$checked = '';
	if (isset ($user_del[$id]))
		$checked = 'checked';
	
	$value = 1;
	if ($user['user_rights'] == 'admin')
		$value = 2;
	if ($user['id_user'] == $_SESSION['id_user'])
		$value = 3;
?>
				<td><input type = 'checkbox' name = 'id_user_<?php echo $user['id_user']; ?>' value = <?php echo $value.' '.$checked; ?>/></td>
			</tr>
<?php
}
?>

		</tbody>
	</table>

	<p>
		<input type = 'submit' name = 'valid_del_user' value = "<?php echo _("supprimer les utilisateurs sélectionnés"); ?>" class = 'button_validation_critical'/>
	</p>
</form>
