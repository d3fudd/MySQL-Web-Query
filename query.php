<?php

$host = "localhost";
$user = "root";		// usuário (TROCAR)
$pass = "toor";		// senha (TROCAR)

// conecta no MySQL
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);

// recebe o nome do banco de dados via parâmetro
$db = sprintf($_GET['db']);
// recebe a query via parâmetro
$query = sprintf($_GET['q']);
// conecta na base de dados
mysql_select_db($db, $con);

// envia a query
$dados = mysql_query($query, $con) or die(mysql_error());
$linha = mysql_fetch_assoc($dados);
$total = mysql_num_rows($dados);
?>

<!-- exibe o output do MySQL na página -->
<html>
<head>
	<title>MYSQL WEB QUERY</title>
</head>
<body>

<?php
do {
?>
<p><?=print_r($linha);?></p>
<?php
}while($linha = mysql_fetch_assoc($dados));
?>

</body>
</html>

<?php
mysql_free_result($dados);
?>
