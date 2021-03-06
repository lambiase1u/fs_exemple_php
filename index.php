<?php
#    This file is part of the PHP example for FranceConnect
#
#    Copyright (C) 2015-2016 Eric Pommateau, Maxime Reyrolle, Arnaud Bétrémieux
#
#    This example is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    This example is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this example.  If not, see <http://www.gnu.org/licenses/>.

include("init.php");
?>

<html>
<head>
<title>Fournisseur de service France-Connect</title>
</head>

<body>
<h1>WS France Connect</h1>
<div style='text-align: center'>

<?php if (isset($_SESSION['user_info'])) : ?>

Identifié en tant que <b><?php echo $_SESSION['user_info']['given_name']." ".$_SESSION['user_info']['family_name'] ?></b>
&nbsp;-&nbsp;<a href='logout.php'>Déconnexion</a>

<h2>Données issues de la connexion France Connect</h2>
<table>
	<?php foreach($_SESSION['user_info'] as $key=>$value): ?>
		<tr>
			<th><?php echo $key ?></th>
			<td><?php echo $value ?></td>
		</tr>
	<?php endforeach;?>
</table>
<h2>Données issues des fournisseurs de données </h2>

<table>
	<tr>
		<th>Fournisseur de données</th>
		<th>Type de données</th>
		<th>Valeur</th>
	</tr>
		<?php foreach($_SESSION['fd_user_info'] as $fd => $info): ?>
			<?php foreach($info as $key => $value): ?>
				<tr>
					<td><?php echo $fd ?></td>
					<td><?php echo $key ?></td>
					<td><?php echo $value ?></td>
				</tr>
			<?php endforeach;?>
		<?php endforeach;?>
	
</table>
<?php else :?>
<form action='authentication.php' method='post'>

	<input type='submit' value='Authentification France Connect'/>

</form>
<?php endif;?>
</div>
</body>
</html>
