<?php

//ARQUIVO DE CONEXÃO
include "conexao.php";

//COLETA A AÇÃO
$acao = $_GET['abelhas'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantas e Abelhas</title>

<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	
</head>

<body>
<br>
<div align="center"><h1>CONSULTA DE PLANTAS E ABELHAS</h1></div>
<br>
	
<form action="index.php?acao=consulta_abelhas" method="post" name="vendedores">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consultar Abelhas:	
<div class="form-row">
<div class="col-md-4 mb-3">
<input type="text" class="form-control" id="palavra" placeholder="Consultar Abelha" name="palavra" required>
</div>
</div>
<button class="btn btn-primary" type="submit">Pesquisar Abelhas</button>
</form>	
<br>
	
<?php if($_GET['acao']=='consulta_abelhas') { ?>

<?php
$palavra = $_POST['palavra'];	
	
$sql_abelhas = mysql_query("SELECT * FROM abelhas WHERE nome_abelha LIKE '%".$palavra."%' OR tipo_abelha LIKE '%".$palavra."%'");
while($y_abelhas = mysql_fetch_array($sql_abelhas))
{  
	
?>	
	
<table width="99%" align="center" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>&nbsp;<b><?php echo utf8_encode($y_abelhas["nome_abelha"]); ?></b> - <?php echo utf8_encode($y_abelhas["tipo_abelha"]); ?></td>
</tr>
</tbody>
</table>
	
<div style="height: 4px"></div>	

<?php } ?>		
	
<?php } ?>	

<div style="height: 14px"></div>	
	
<form action="index.php?acao=consulta_plantas" method="post" name="vendedores">
<div class="form-row">
<div class="col-md-4 mb-3">
<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Abelha</label>
<select class="custom-select my-1 mr-sm-2" id="abelha" name="abelha">
<option value="Nenhuna" selected>Escolher Abelha</option>
<?php
	
$sql_abelhas = mysql_query("SELECT * FROM abelhas ORDER BY nome_abelha ASC");
while($y_abelhas = mysql_fetch_array($sql_abelhas))
{  
	
?>
<option value="<?php echo utf8_encode($y_abelhas["codigo_abelha"]); ?>">&nbsp;<b><?php echo utf8_encode($y_abelhas["nome_abelha"]); ?></b> - <?php echo utf8_encode($y_abelhas["tipo_abelha"]); ?></option>
<?php } ?>	  
</select>
<div style="height: 4px"></div>	
<button class="btn btn-primary" type="submit">Pesquisar Plantas</button>
</div>
</div>
</form>	
	
<div style="height: 100px"></div>	
	
<form action="index.php?acao=consulta_floracao" method="post" name="vendedores">
<div class="form-row">
<div class="col-md-4 mb-3">
Pesquisar mês de Floração:
<div style="height: 4px"></div>	
<input class="form-check-input" type="checkbox" id="mes" value="Janeiro" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Janeiro</label>
<div style="height: 2px"></div>	
<input class="form-check-input" type="checkbox" id="mes" value="Fevereiro" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Fevereiro</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Março" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Março</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Abril" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Abril</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Maio" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Maio</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Junho" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Junho</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Julho" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Julho</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Agosto" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Agosto</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Setembro" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Setembro</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Outubro" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Outubro</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Novembro" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Novembro</label>
<div style="height: 2px"></div>
<input class="form-check-input" type="checkbox" id="mes" value="Dezembro" name="mes[]"><label class="form-check-label" for="gridCheck1">&nbsp;Dezembro</label>
<div style="height: 4px"></div>	
<button class="btn btn-primary" type="submit">Pesquisar Plantas</button>
</div>
</div>
</form>		
	
<?php if($_GET['acao']=='consulta_plantas') { ?>

<div><h5><b>RESULTADO DA PESQUISA</b></h5></div>
<div style="height: 4px"></div>	
	
<?php

$palavra = $_POST['palavra'];	
$abelha = $_POST['abelha'];	
	
?>	

<!-- Se nenhum tipo de abelha foi escolhido: pesquisar por plantas polinizadas por qualquer tipo de abelha. -->	
<?php	
if($abelha=='Nenhuna') {
?>
<b><i>Se nenhum tipo de abelha foi escolhido: pesquisar por plantas polinizadas por qualquer tipo de abelha.</i></b>	
<br>
<b>PLANTAS POLINIZADAS</b>	
<br>	
<?php	
$sql_polinizadas = mysql_query("SELECT * FROM plantas WHERE tipo_planta = 'Polinizada'");
while($y_polinizadas = mysql_fetch_array($sql_polinizadas))
{  
echo utf8_encode($y_polinizadas["nome_planta"]);
echo "<br>";	
}	
?>
<div style="height: 4px"></div>	
<b>TODOS TIPOS DE ABELHAS</b>	
<div style="height: 4px"></div>		
<?php	
$sql_tipo_abelhas = mysql_query("SELECT * FROM abelhas");
while($y_tipo_abelhas = mysql_fetch_array($sql_tipo_abelhas))
{  
echo "<b>" .utf8_encode($y_tipo_abelhas["nome_abelha"]) . "</b>";
echo " - ";
echo utf8_encode($y_tipo_abelhas["tipo_abelha"]);	
echo "<br>";	
}	
}	
?>
	
<!-- Se um tipo de abelha foi escolhido: pesquisar por plantas polinizadas pelo tipo de abelha escolhido -->	
<?php	
if($abelha!='Nenhuna') {	
?>
<b><i>Se um tipo de abelha foi escolhido: pesquisar por plantas polinizadas pelo tipo de abelha escolhido.</i></b>	
<br>
<b>PLANTAS POLINIZADAS</b>	
<br>	
<?php	
$sql_polinizadas = mysql_query("SELECT * FROM plantas WHERE tipo_planta = 'Polinizada'");
while($y_polinizadas = mysql_fetch_array($sql_polinizadas))
{  
echo utf8_encode($y_polinizadas["nome_planta"]);
echo "<br>";	
}	
?>
<div style="height: 4px"></div>	
<b>TODOS TIPOS DE ABELHAS</b>	
<div style="height: 4px"></div>		
<?php	
$sql_tipo_abelhas = mysql_query("SELECT * FROM abelhas WHERE codigo_abelha = '" . $abelha . "' ");
while($y_tipo_abelhas = mysql_fetch_array($sql_tipo_abelhas))
{  
echo "<b>" .utf8_encode($y_tipo_abelhas["nome_abelha"]) . "</b>";
echo " - ";
echo utf8_encode($y_tipo_abelhas["tipo_abelha"]);	
echo "<br>";	
}	
}	
?>
	
<?php } ?>	
	

<?php if($_GET['acao']=='consulta_floracao') { ?>

<?php
if(isset($_POST["mes"])) {
for($i = 0; $i < count($_POST["mes"]); $i++) {
$mes = $_POST["mes"][$i];
}}
?>	
	
<div><h5><b>RESULTADO DA PESQUISA</b></h5></div>
<div style="height: 4px"></div>		
	
<!-- Se nenhum mês de floração foi escolhido: pesquisar por plantas que florescem em qualquer mês do ano. -->	
<?php		
if($mes=='') {	
?>
<b><i>Se nenhum mês de floração foi escolhido: pesquisar por plantas que florescem em qualquer mês do ano.</i></b>	
<br>
<b>PLANTAS POLINIZADAS</b>	
<br>	
<?php	
$sql_polinizadas = mysql_query("SELECT * FROM plantas");
while($y_polinizadas = mysql_fetch_array($sql_polinizadas))
{  
echo utf8_encode($y_polinizadas["nome_planta"]);
echo "<br>";	
}	
?>
<div style="height: 4px"></div>	
<b>MESES DE FLORESCIMENTO:</b> Janeiro  Fevereiro  Março  Abril  Maio  Junho  Julho  Agosto  Setembro  Outubro  Novembro  Dezembro	
<?php } ?>	
	
<!-- Se um ou mais meses forem escolhidos: pesquisar por plantas que florescem nesses meses. -->	
<?php		
if($mes!='') {	
?>
<b><i>Se um ou mais meses forem escolhidos: pesquisar por plantas que florescem nesses meses.</i></b>	
<br>
<b>PLANTAS POLINIZADAS</b>	
<br>	
<?php	
$sql_polinizadas = mysql_query("SELECT * FROM plantas");
while($y_polinizadas = mysql_fetch_array($sql_polinizadas))
{  
echo utf8_encode($y_polinizadas["nome_planta"]);
echo "<br>";	
}	
?>
<div style="height: 4px"></div>	
<b>MESES DE FLORESCIMENTO:</b> <?php if(isset($_POST["mes"])) { 
for($i = 0; $i < count($_POST["mes"]); $i++) {
echo $_POST["mes"][$i];
echo "  ";	
}}  ?>	
<?php } ?>		
	
<?php } ?>	

	
</body>
</html>
<?php
include "fecharconexao.php";
?>