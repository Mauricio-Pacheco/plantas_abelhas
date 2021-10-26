<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
session_start();
$host = "localhost";
$user = "root";
$senhabd = "";
$dbname = "plantas_abelhas";
//conecta ao banco de dados
$conn = mysql_connect($host, $user, $senhabd) or die("Não foi possível conectar-se com o banco de dados");
//seleciona o banco de dados
mysql_select_db($dbname)or die("Não foi possível conectar-se com o banco de dados");

?>
