<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title></title>
	<style type="text/css">
		table{
			width: 100%;
			border-collapse: collapse;
		}
		table, td, th{
			border: 1px solid black;
			padding: 5px;
		}
		th{text-align: left;}
	</style>
</head>
<body>


<?php 
	
	$c = intval($_GET['c']);
	$con = mysqli_connect('localhost', 'root', '', 'w3schools_php_ajax'); //or die("Algo deu errado!");
	//mysqli_set_charset("utf-8", $con);

	if(!$con){
		die("Não foi possível conectar ao banco: " + msqli_error($con));
	}

	mysqli_select_db($con, "w3schools_php_ajax");

	$sql = "SELECT *FROM dados_pessoais WHERE id = '".$c."' ";
	$result = mysqli_query($con, $sql);

	echo "<table>;
		  <tr>;
		  <th>Primeiro Nome</th>;
		  <th>Sobrenome</th>;
		  <th>Idade</th>;
		  <th>Cidade Natal</th>;
		  <th>Profissão</th>;
		  </tr>";

	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>" . $row['PrimeiroNome'] . "</td>";
		echo "<td>" . $row['SobreNome'] . "</td>";
		echo "<td>" . $row['idade'] . "</td>";
		echo "<td>" . $row['CidadeNatal'] . "</td>";
		echo "<td>" . $row['Profissao'] . "</td>";
		echo "</tr>";
	}

	echo "</table>";
	mysqli_close($con);
 ?>

 </body>
 </html>