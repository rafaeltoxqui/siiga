<?php
	include("includes/Conectar.php");
	include("includes/Security.php");
	include("includes/Tools.php");
	include("includes/ToolsHtml.php");
	include("includes/Menu.php");

	$Seguridad=new Security();
	if(!$Seguridad->SesionExiste())
		header("Location: index.php");
	
	$Menu= new Menu($_SESSION['UsuarioId']);
	$Herramientas= new Tools($_SESSION['UsuarioId']);
	$HerramientasHtml= new ToolsHtml($_SESSION['UsuarioId']);	
	

	$Folio=$_POST['MiFolio'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/styleVentana.css" rel="stylesheet" type="text/css" />
<link href="style/tabla.css" rel="stylesheet" type="text/css" />
<link href="style/jquery-ui.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1.8.1.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/general.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" src="js/combos.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="js/sortedtable.js"></script>

</head>
</head>
<body>

	
		
		<form id="foo" name="foo" method="post" >
		<div id="TituloVentana">Cambia Estatus</div>
		<input type="hidden" name="ModuloId" id="ModuloId" value="22" />
			<br>			
			<div align="center" id="resultados"></div>
			<div id="display" name="display">	
			<?php				
				$HerramientasHtml->drawTablaEstatusEquipos($Folio);			
			?>
			<div id="dvData">
			</div>
			</div>
		</form>
		
	

</body>
</html>