﻿<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="Index - Maquetado Vista de Blog" />
	<meta name="keywords" content="Concursos, programacion, enviar, categoria" />
	<meta name="author" content="Equipo Alpha" />
	<meta http-equiv="refresh" content="160" />
	<link href="css/general.css" type="text/css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
	<script src="jquery/jquery-1.7.2.min.js" type="text/javascript" ></script>
	<script src="jquery/jquery.effects.core.js" type="text/javascript" ></script>
	<script type="text/javascript" >
			 $(document).ready(function(e) {
				$('#site-name h1').show('fast')
			$('#menu-r li a').hover(function(){$(this).stop(false,true).animate({'color':'#F33'},500)},function(){$(this).stop(false,true).animate({'color':'#FFF'},200)});	
			});
	</script>	
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
	
	</header>
	
	
	<article class="articulo">
		<div class="cont"><a class="boton1" href="404.shtml"><span>enviar</span></a></div>
		<section class="seccion">
			
			<div class="concurso">Grafos XKCMX</div>

			<div class="features"><div class="spec">Categoría: </div><div class="spec_content">PHP</div> <div class="spec"> Dificultad: </div> <div class="spec_content">Avanzado</div><div class="spec"> Inicia: </div> <div class="spec_content">12/09/12</div> <div class="spec"> Termina: </div> <div class="spec_content">20/09/12</div> </div>
			<br /><br /><br />
			
			<div class="image"><img src="images/template/poster.png" width="700" height="800"  alt="Poster"/></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo erat, varius rhoncus porta vel, tincidunt id ipsum. Suspendisse dapibus, libero sit amet fermentum consectetur, justo nunc condimentum risus, id venenatis nunc arcu in est. Proin luctus adipiscing augue quis posuere.</p>
			<p>Donec imperdiet nisl ut urna lacinia accumsan. Pellentesque vitae vehicula massa. Nunc feugiat lacinia lectus, at interdum purus placerat id.</p>						
			
			<br />
			
			<div class="entrada"><b>Entradas:</b> 6 </div>
			
			<div class="ver_mas"><b><a href="vista-detalle.html">Ver más...</a></b></div>
			<br />

		</section>
		<div class="sombra_seccion"></div>
		
		<section class="seccion">
			
			<div class="concurso">Grafos XEDK</div>

			<div class="features"><div class="spec">Categoría: </div><div class="spec_content">PHP</div> <div class="spec"> Dificultad: </div> <div class="spec_content">Media</div><div class="spec"> Inicia: </div> <div class="spec_content">12/09/12</div> <div class="spec"> Termina: </div> <div class="spec_content">20/09/12</div> </div>
			<br /><br /><br />
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo erat, varius rhoncus porta vel, tincidunt id ipsum. Suspendisse dapibus, libero sit amet fermentum consectetur, justo nunc condimentum risus, id venenatis nunc arcu in est. Proin luctus adipiscing augue quis posuere. Donec imperdiet nisl ut urna lacinia accumsan. Pellentesque vitae vehicula massa. Nunc feugiat lacinia lectus, at interdum purus placerat id.</p>						
			
			<br />
			
			<div class="entrada"><b>Entradas:</b> 13 </div>
			
			<div class="ver_mas"><b><a href="">Ver más...</a></b></div>
			<br />

		</section>
		<div class="sombra_seccion"></div>
		
		<section class="seccion">
			
			<div class="concurso">RPNMX en 140 caracteres</div>

			
			<div class="features"><div class="spec">Categoría: </div><div class="spec_content">PHP</div> <div class="spec"> Dificultad: </div><div class="spec_content">Avanzado</div><div class="spec"> Terminó: </div><div class="spec_content"> 20/09/12 </div></div>
			<br /><br /><br />
			
			<div class="image"><img src="images/template/poster.png" width="700" height="800" alt="Poster"/></div>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p> 
			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>						
			
			<br />
			
			<div class="entrada"><b>Entradas:</b> 7 <b> || Ganador:</b> @Wolverine90210 </div>
			
			<div class="ver_mas"><b><a href="">Ver más...</a></b></div>
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
