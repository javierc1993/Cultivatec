<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información</title>
    <script src="https://kit.fontawesome.com/8b93d6230e.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav class="nav">
		<a href="#inicio" class="marca">Cultivatec</a>
		<ul id=menu class=menu>
            <li data-menuanchor="inicio">
					<a href="#inicio">inicio</a>
			</li>
            <li data-menuanchor="variedades">
					<a href="#variedades">Variedades</a>
			</li>
			<li data-menuanchor="cultivo" class='active'>
				<a href="#cultivo">Cultivos</a>
			</li>
			<li data-menuanchor="instructivo" >
					<a href="#instructivo">Instructivos</a>
			</li>
			<li data-menuanchor="informacion">
						<a href="#informacion">Contacto</a>
			</li>
		</ul>
	</nav>

     <main id="fullpage">
        <header class="section header">
        	<div class="contenedor-titulo">
				<h1 class="titulo"><span class="texto-verde">
						Productos
				</span></h1>
			</div>

			<video loop muted data-autoplay class="bg-video">
				<source src="media/Cultivatec.mp4" type="video/mp4">
			</video>
        </header>
       
        <section class="section variedades"> tipos de lechuga</section>
        <section class="section cultivo"> tipos de cultivo</section>
        <section class="section instructivo"> como armar tu cultivo</section>
        <section class="section informacion"> contacto</section>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js"></script>
	<script src="js/app.js"></script>

</body>
</html>