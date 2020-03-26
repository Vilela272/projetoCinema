<?php
$host = "localhost";
$db   = "cinema";
$user = "root";
$pass = "";
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($db, $con);
$query = sprintf("SELECT Rg ,  Nome, Pipoca, Refrigerante , Reservas FROM dados2");
$dados = mysql_query($query, $con) or die(mysql_error());
$linha = mysql_fetch_assoc($dados);
$total = mysql_num_rows($dados);
?>

<center>
<html>
	<head>Power Rangers
	<title>Dados cadastrados</title>
</head>
<body>
	<table border="1">
			<tr>
			<th>Rg</th>
			<th>Nome</th>
			<th>Pipoca</th>
			<th>Refrigerante</th>
			<th>Reservas</th>
			</tr>
<?php
	if($total > 0) {
		do {
?>
	<tr>
	<td><?=$linha['Rg']?></td>	
	<td><?=$linha['Nome']?></td>
	<td><?=$linha['Pipoca']?></td>
	<td><?=$linha['Refrigerante']?></td>
	<td><?=$linha['Reservas']?></td>
	</tr>

<?php

		}while($linha = mysql_fetch_assoc($dados));
	}
?>
	</table><br>
	<a href="aramis.php"><input type="button"value="Sair"></a>

</body>
</html>
</center>
<?php
mysql_free_result($dados);
?>
