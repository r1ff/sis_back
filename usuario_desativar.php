<?php
/***************************************************************/
/*Sistema de auxilio ao backup - Suporte Gerencial Informatica */
/*Autor: Marciso Gonzalez Martines                             */
/*e-mail: marciso.gonzalez@gmail.com                           */
/***************************************************************/

##Cabeçalho padrão
require_once ("header.php");
require_once ("admin.php");

##Pagina Protegida

require_once "login.php";
include_once 'db.php';


//recebendo a variavel da pagina admin
$id = $_GET['id'];

$sql = "UPDATE users SET st='i' WHERE id='$id' ";
echo $sql;
if(mysql_query($sql,$cnx) or die (mysql_error() )){ // INICIO IF
	$_SESSION['info']="Usuario desativado com sucesso!";
	echo '<script language="javascript" type="text/javascript">'; 
	echo 'window.location.href="admin.php";';
	echo '</script>'; 
	
}

else{
	$_SESSION['errors']="Erro ao desativar o usuario!";
	echo '<script language="javascript" type="text/javascript">';
	echo 'window.location.href="admin.php";';
	echo '</script>'; 
}

?>