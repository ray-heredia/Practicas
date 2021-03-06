﻿<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="Index - Maquetado Vista de Blog" />
	<meta name="keywords" content="Concursos, programacion, enviar, categoria" />
	<meta name="author" content="Equipo Alpha" />
	<link href="css/general.css" type="text/css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
	<script src="jquery/jquery-1.7.2.min.js" type="text/javascript" ></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
	<script src="jquery/jquery.effects.core.js" type="text/javascript" ></script>
	
	<script type="text/javascript" src="js/adminConcursosJS.js"></script>
	
	<script type="text/javascript" >
			 $(document).ready(function(e) {
				$('#site-name h1').show('fast')
			$('#menu-r li a').hover(function(){$(this).stop(false,true).animate({'color':'#F33'},500)},function(){$(this).stop(false,true).animate({'color':'#FFF'},200)});	
			});
		
	</script>	

	
	<!-- Scripts de JQuery y el plugin del calendario -->
	<script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="calendario_dw/calendario_dw.js"></script> 
	
	<!-- Hoja de estilos del calendario -->
	<link rel="stylesheet" href="calendario_dw/calendario_dw-estilos.css" type="text/css"/>

	<meta charset="UTF-8" />
	<meta name="description" content="Practica 11 - Calendario con JS o JQuery" />
	<meta name="keywords" content="correo, usuario, avatar, contraseña, dirección, teléfono, fecha de nacimiento, sexo, enviar, limpiar" />
	<meta name="author" content="Iván Antonio Corona Zárate" />
	<meta http-equiv="refresh" content="300" />
	
	<!-- Script Javascript que invoca el plugin jQuery para hacer que el campo de texto se convierta en un calendario.  -->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".campofecha").calendarioDW();
		})
	</script>
	
	<!-- Para el Cross-Browser Rich Text Editor -->
	
	<script  type="text/javascript" src="cbrte/html2xhtml.min.js"></script>
	<script  type="text/javascript" src="cbrte/richtext_compressed.js"></script>
	
	<title>Concursos de Programación</title>		
</head>

<body id="container">

	<header id="header">
	
		<div id="site-name">
			<h1 style="display:none; ">Concursos</h1>
		</div>
		
	   <nav id="menu-r">
			<?php
				include('sections/menu.html');
			?>
		
	   </nav>
	   
	<h1>Administración de concursos</h1>
	
	</header>
	
	
	<article class="articulo">
		<div class="cont"><a class="boton1" href="404.shtml"><span>enviar</span></a></div>
		<section class="seccion">
			
			<div class="concurso" id="div_name"><p id="concurso_name">DDoS Atack</p></div>

			<div class="features"><div class="spec">Categoría: </div><div class="spec_content" id="div_cat"><p id="pCat">Ruby</p></div> <div class="spec"> Dificultad: </div> <div class="spec_content" id="div_dif"><p id="pDif">Intermedio</p></div><div class="spec"> Inicia: </div> <div class="spec_content" id="div_Finic"><p id="pFinic">12/09/12</p></div> <div class="spec"> Termina: </div> <div class="spec_content" id="div_Ffin"><p id="pFfin">20/09/12</p></div> </div>
			<div class="clear"></div>
			<a href="http://www.google.com" id="hashtag"><p id="pHash">#DDOSYeah</p></a>
			
			<br /><br /><br />
			
			<div id="div_content">
			<p id="pCont">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam imperdiet congue. Phasellus nibh enim, feugiat sed facilisis ut, pharetra sed ipsum. Etiam tempor turpis quis tortor blandit a consectetur dolor tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tristique ligula vel sapien suscipit sodales lobortis sem porta. Fusce vel mattis sem. Ut non diam non massa dictum rutrum. Pellentesque sed ligula dolor. Maecenas lacinia gravida euismod. Pellentesque gravida, massa sit amet ultrices porttitor, felis enim molestie metus, id hendrerit odio neque id lorem. Vivamus tristique, odio sit amet egestas semper, elit orci ultrices dui, id interdum libero lorem a quam. Nunc congue lorem sapien, eu laoreet quam. Sed quis tempor nunc. Duis molestie arcu a elit eleifend sodales. Proin cursus convallis nulla vitae rhoncus.
			
	Suspendisse sit amet dictum enim. Cras quis elit nunc. Duis accumsan sem ut dui venenatis commodo. Vivamus sed turpis et turpis interdum venenatis. Praesent in nulla quis massa cursus vulputate nec et felis. Nam sit amet libero pulvinar diam dignissim faucibus. Vestibulum dictum iaculis hendrerit. Donec enim nulla, dignissim id aliquam sed, mollis in dolor. Donec convallis elit gravida justo gravida in feugiat augue dignissim. Proin orci felis, cursus et posuere vel, mattis sit amet felis. Duis mattis porta enim eget scelerisque. Sed tellus mi, fringilla eu volutpat id, luctus eget enim. Vivamus sagittis consectetur velit, vitae posuere dolor convallis in. Nunc ante nisl, suscipit a consectetur sed, mattis in mauris. Etiam at enim a purus scelerisque dapibus id nec tellus.
			
	Nulla facilisi. Vivamus turpis odio, pellentesque at aliquet id, iaculis vel nunc. Suspendisse potenti. Pellentesque scelerisque consectetur lobortis. Integer pellentesque turpis eget urna consequat laoreet. Pellentesque in nibh id risus accumsan suscipit. Nunc non arcu erat. Quisque consequat sem urna. Curabitur eros ipsum, lobortis ac fringilla eu, tempor ut mauris. Phasellus et turpis tortor, in vehicula diam. 
	
	Quisque vehicula tortor id leo malesuada a ultricies diam laoreet. Proin consectetur tortor in augue blandit commodo. Morbi ornare, turpis a blandit dictum, tellus leo ornare enim, vitae sodales purus est ac nisi. Proin tristique, lacus nec commodo convallis, dolor magna porttitor risus, ac rhoncus libero risus et eros. Mauris egestas suscipit purus, eget vestibulum quam tincidunt nec. Nulla ut leo nec sapien placerat ornare sit amet et velit. Pellentesque metus justo, facilisis nec laoreet eu, congue at orci. 
			</p>
			</div>
			<br />
			
			<div class="features"><div class="spec_envia"> Enviado por: </div><div class="remitente"><p id="pEnvia">DOOM-2099</p></div></div>
			
			<div class="clear"></div>

			<br />
			
			<!-- Botones de administrador -->
			
			<input type="button" id="bAceptado" name="aceptado" value="Aceptar concurso" onClick="acceptContest()" class="button"/>
			
			<input type="button" id="bRechazado" name="rechazado" value="Cancelar concurso" onClick="cancelContest()" class="button"/>
			
			<input type="button" id="bCancelDec" name="cancelado" value="Cancelar decisión" onClick="cancelDecision()" class="button"/>
			
			<input type="button" id="bEditar" name="editar" value="Editar" onClick="editContest()" class="button"/>

			
			<div class="clear"></div>
			
			<!-- Mensajes y divs de aprobación o rechazo -->
			
			<form name="validacion" method="POST" action="">
			
				<div id="mensaje_aceptado" class="div_mensaje">
					<p class="msg">¡Concurso aceptado!</p>
					<img src="images/aprobar.png" alt="aceptar_icon" />
				</div>
				
				<div id="mensaje_rechazado" class="div_mensaje">
					<p class="msg">¡Concurso cancelado!</p>
					<img src="images/rechazar.png" alt="cancelar_icon" />
				</div>
			
				<div id="comments" class="div_comments">
					<br /><label for="textarea">Razones de rechazo (campo no obligatorio): </label><br />
					<textarea id="textarea" rows="7" cols="75" maxlength="750"  resizable="false" placeholder="Escriba aquí" ></textarea><br />
					<input type="button" id="bComments" name="bComments" value="Aceptar" onClick="sendReasons()"/>
				</div>
			
				<div id="error_comment" class="div_mensaje">
					<p>¡Escriba una razón de rechazo válida (entre 10 y 750 caracteres)!</p>
				</div>
			
			</form>
			
			<div id="div_r"></div>
			
			<!-- Edición de concursos -->
			
			<div id="div_edit">
			
				<form name="form_edit" method="POST" action="">
				<fieldset>
				<legend><strong>Editar concurso</strong></legend><br />
				
				<label for="user">Enviado por: </label>
				<input type="text" id="user" name="user" disabled/>
				
				<br /><br />
				
				<label for="nombre">Nombre del concurso: </label>
				<input type="text" id="inNombre" name="nombre" required />
				
				<div id="error_nombre" class="div_error">
					<p>¡Introduzca un nombre para el concurso y que sea válido (entre 5 y 20 caracteres)!</p>
				</div>
				
				<br /><br />
				
				<label for="field_hashtag">Hashtag para Twitter: </label>
				<input type="text" id="field_hashtag" name="field_hashtag" required />
				
				<div id="error_hashtag" class="div_error">
					<p>¡Introduzca un hashtag del concurso para Twitter y que sea válido (entre 5 y 20 caracteres)! Comienza con '#'.</p>
				</div>
				
				<br /><br /><br />
				
				<label for="categoria">Categoría: </label>				
				<select id="list_cat">
					<option selected value="0"> <strong>Eliga una opción: </strong></option>
					<option value="1">Java</option> 
					<option value="2">JavaScript</option> 
					<option value="3">PHP</option>
					<option value="4">C</option>
					<option value="5">C++</option>
					<option value="6">C#</option>
					<option value="7">Python</option>
					<option value="8">Pearl</option>
					<option value="9">Ruby</option>
					<option value="10">Abierto</option>
				</select>
				&nbsp &nbsp &nbsp &nbsp
				<label for="nueva_cat">Nueva categoría: </label>
				<input type="text" id="new_cat" name="nueva_cat" />
				<input type="button" id="acceptCat" name="acceptCat" value="Aceptar" onClick="addCategory()" />
				
				<div id="error_categoria" class="div_error">
					<p>¡Seleccione una categoría para el concurso!</p>
				</div>
				
				<div id="error_nueva_categoria" class="div_error">
					<p>¡Escriba una categoría nueva para el concurso (menor a 20 caracteres)! Procure no repetirlas. </p>
				</div>
				
				<br /><br />
				
				<label for="diff">Dificultad: </label>
				<select id="list_dif">
					<option selected value="0"> Eliga una opción: </option>
					<option value="1">Básico</option> 
					<option value="2">Intermedio</option> 
					<option value="3">Avanzado</option>
				</select>
				
				<div id="error_dificultad" class="div_error">
					<p>¡Seleccione una dificultad para el concurso!</p>
				</div>
				
				<br /><br /><br />
				
				<label for="images">Imagen(es) del concurso: </label>
				<div id="images"></div>
				
				<br /><br />
				
				<label for="imagen1">Subir imagen(es): </label><br /><br / >
				<input type="file" id="imagen1" name="imagen" accept="image/*" required/>
				
				<div id="error_imagen" class="div_error">
					<p>¡Seleccione una imagen de sus archivos para el concurso!</p>
				</div>
				
				<br /><br />				
				
				<label for="botra_img" id="lotra">Otra imagen: </label>
				<input type="button" id="botra_img" name="botra_img" value="Otra imagen" onClick="otherImage()"/>
				
				<div id="error_otraimg" class="div_error">
					<p>¡Seleccione otra(s) imagen(es) de sus archivos para el concurso!</p>
				</div>
				
				<br /><br />							
				
				<br /><br />
				<!--
				<label for="content_area">Contenido: </label>
				<textarea id="content_area" name="content_area" rows="20" cols="100" maxlength="10000"></textarea>
				-->
				
				
				<script  type="text/javascript">
					function submitForm() {
						//make sure hidden and iframe values are in sync for all rtes before submitting form
						updateRTEs();
						//var datosEditor = document.RTEDemo.rte1.value;
						//document.RTEDemo.style.display = 'none';
						/******/

					
					/******/
						//document.getElementById('descConcurso').value = datosEditor;
						//change the following line to true to submit form
						return false;
					}
					//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
					initRTE("cbrte/images/", "cbrte/", "", true);
					//-->
				 </script>
				<script  type="text/javascript">
					//build new richTextEditor
					var rte1 = new richTextEditor('rte1');
					rte1.html = document.getElementById("pCont").innerHTML;
		
					//enable all commands 
					rte1.cmdFormatBlock = true;
					rte1.cmdFontName = true;
					rte1.cmdFontSize = true;
					rte1.cmdIncreaseFontSize = true;
					rte1.cmdDecreaseFontSize = true;
		
					rte1.cmdBold = true;
					rte1.cmdItalic = true;
					rte1.cmdUnderline = true;
					rte1.cmdStrikethrough = true;
					rte1.cmdSuperscript = true;
					rte1.cmdSubscript = true;
		
					rte1.cmdJustifyLeft = true;
					rte1.cmdJustifyCenter = true;
					rte1.cmdJustifyRight = true;
					rte1.cmdJustifyFull = true;
		
					rte1.cmdInsertHorizontalRule = true;
					rte1.cmdInsertOrderedList = true;
					rte1.cmdInsertUnorderedList = true;
		
					rte1.cmdOutdent = true;
					rte1.cmdIndent = true;
					rte1.cmdForeColor = true;
					rte1.cmdHiliteColor = true;
					rte1.cmdInsertLink = true;
					rte1.cmdInsertImage = true;
					rte1.cmdInsertSpecialChars = true;
					rte1.cmdInsertTable = true;
					rte1.cmdSpellcheck = true;
		
					rte1.cmdCut = true;
					rte1.cmdCopy = true;
					rte1.cmdPaste = true;
					rte1.cmdUndo = true;
					rte1.cmdRedo = true;
					rte1.cmdRemoveFormat = true;
					rte1.cmdUnlink = true;
	
					rte1.toggleSrc = false;
		
					rte1.build();
				</script>

		
				
				<div id="error_contenido" class="div_error">
					<p>¡Escriba el contenido y descripción del concurso!</p>
				</div>
				
				<br /><br />
				
				<label for="fini" >Fecha de inicio: </label>
				<input type="text" id="fini" name="fini" class="campofecha" size="12" required>
				
				&nbsp &nbsp &nbsp &nbsp
				
				<label for="ffinal" >Fecha de finalización: </label>
				<input type="text" id="ffinal" name="ffinal" class="campofecha" size="12" required>
				
				<br /><br /><br />
					
				<label for="fcreacion" >Fecha de creación: </label>
				<input type="text" id="fcreacion" name="fcreacion" size="12" value="13/10/2012" disabled />
				
				
				<div id="error_fechas" class="div_error">
					<p>¡Seleccione las fechas que se piden!</p>
				</div>
			
				<div id="error_fechaAct" class="div_error">
					<p>¡La fecha de inicio debe ser mayor o igual a la fecha actual!</p>
				</div>
				
				<div id="error_fechasIF" class="div_error">
					<p>¡La fecha de finalización debe ser mayor a la fecha de inicio!</p>
				</div>
				
				<div id="error_fechasIC" class="div_error">
					<p>¡La fecha de inicio debe ser mayor a la fecha de creación!</p>
				</div>
			
				
				<br /><br />
				<input type="button" id="bCancelEdit" name="bCancelEdit" value="Cancelar" onClick="cancelChanges()" />
				<input type="button" id="bEdit" name="bEdit" value="Aceptar" onClick="makeChanges()" />
				
				
				</fieldset>				
				</form>
			
			</div>
			
			<div id="div_editado" class="div_mensaje">
				<p class="msg">¡Concurso editado correctamente!</p>
				<img src="images/edit.png" alt="edit_icon" />
			</div>
			
			<br />

		</section>
		<div class="sombra_seccion"></div>
		
	</article>
	
	
	<footer id="paginacion">
		
		<?php
			include('sections/antSig.html');
			include('sections/copyright.html');
		?>

	</footer>

	
</body>

</html>
