<link rel="stylesheet" type="text/css" href="formatapadrao.css" />
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
.A:link {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#FFFFFF;
}
.A:visited { TEXT-DECORATION: none; font-family:Verdana; color:#333333}
.A:hover {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#0088FF;
}
</style>
</head>

<body>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td colspan="3"><span> </span> </td>
  </tr>
  <tr align="left" valign="top"> 
    <td height="28"></td>
    <td height="28">&nbsp;</td>
    <td height="28" align="right"></td>
  </tr>
  <tr> 
    <td width="3%"></td>
    <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
    <td width="3%" align="right"></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="teste2.js"></script>
</body>
</html>

<center>
<!--Início Alterar-->
<center>
<form method="post" action="alterar_contato.php"><br>
<p> 
Codigo Contato:<select size="1" name="codcontato">
<?php
// Gera a lista de categoria
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("contatos",$conexao);
$res=mysql_query("select * from contatos");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>
Nome:
<input type="text" name="nome"><br><br>
<br>
<br><br>
Telefone:
<input type="text" name="tel"><br><br>
<br>
<br><br>
Email:
<input type="text" name="email"><br><br>
<br>


<input type="submit" name="Submit" value="Alterar" class="botao" >
</form>
</center>
<!--Fim Alterar-->
