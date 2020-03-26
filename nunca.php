<?php
$Rg = $_POST['Rg'];
$Nome = $_POST['Nome'];
$Pipoca = $_POST['Pipoca'];
$Refrigerante = $_POST['Refrigerante'];
$Reservas = $_POST['Reservas'];
$strcon = mysqli_connect('localhost','root','','cinema') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO dados (Rg, Nome, Pipoca, Refrigerante , Reservas) VALUES ('$Rg','$Nome', '$Pipoca', '$Refrigerante' , '$Reservas') ";
mysqli_query($strcon,$sql) or die("O assento não está disponível!!" );
mysqli_close($strcon);
echo "Cadastrado com sucesso!";
echo "<br><a href='consulta.php'><input type='button' value='Consultar dados'></a>";
echo"<br><a href='aramis.php'><input type='button' value='Sair'></a>";
?>
