<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "Contacto";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div id="container"></div>

<?php
	include_once('static/Footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
	body {overflow-x:hidden;}
	</style>	
</head>
<body background="../assets/images/fondo2.png" >
	<br/><br/><br/>
	<!-- Encabezado -->
		<div class="row">
				<div class="col-1"></div>	
                <div class="col-3">
				<img src="../assets/images/patei1.png"  class="img-fluid" > 
                </div>
                <div class="col-2">
				Parque <br>Terapeutico <br>Infantil 
                </div>
                <div class="col-3">
				<div class="center-block" style="font-family: 'Playball', cursive;" size="20">Diversión que fortalece</div>
				</div>
				<div class="col-1"></div>  
		</div>	 
	<!-- End Encabezado -->
		
<!-- Primera parte -->
<div class="container-fluid centrar"></div>
	<div class="row">
	<div class="col-3"> </div>
		<div class="col-md-6 col-lg-4 ">
		<!-- Formulario para contacto  -->
		<!-- <form action="https://formspree.io/email@domain.tld" method="POST" /> -->
						<form id="main-contact-form" class="contact-form" name="contact-form" action="https://formspree.io/adrianalopezm303@gmail.com" method="POST">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label>Nombre *</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" id="email" name="email" class="form-control" required="required">
                            </div> 
                            <div class="form-group">
                                <label>Asunto *</label>
                                <input type="text" id="subject" name="subject" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Mensaje *</label>
                                <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8"></textarea>
                            </div>                        
                            <div class="form-group">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Mensaje</button>
                            </div>                      
                        </div> 
                    </form>
		</div>
		<div class="col-xs-12 col-md-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.8324424290167!2d-106.4257701848893!3d31.720471781303992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75c0e18b09c2f%3A0x8387de448c2638bf!2sAv.+Tecnol%C3%B3gico+1340%2C+Fuentes+del+Valle%2C+32500+Cd+Ju%C3%A1rez%2C+Chih.!5e0!3m2!1ses!2smx!4v1558231089786!5m2!1ses!2smx" width="50%" height="60%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col">
		<!-- boton para registo pra servicio residencias -->
		</div>
	</div>
</div>
<br/>
<!-- final -->
 <div class="container mediadiv " >
			<div class="row">
				<div class="col-6 col-sm-3 col-md-offset-9">
					<a href="https://es-la.facebook.com/ParquePATEI/" target="_blank" >
                            <img src="../assets/images/Imagenes/fb1.png" ></a>  <div class="centrar" style="font-family: 'Coming Soon', serif;">Parque PATEI</div>
				</div>
				<div class="col-6 col-sm-3 col-md-offset-9">
					<img src="../assets/images/Imagenes/Ubicacion1.png"> <div class="centrar" style="font-family: 'Coming Soon', serif;">Ciudad Juárez</div>
				</div>
				<div class="col-6 col-sm-3 col-md-offset-9">
				<img src="../assets/images/Imagenes/contacto1.png" >  <div class="centrar" style="font-family: 'Coming Soon', serif;">656 1887784 </div>
				</div>
				<div class="col-6 col-sm-3 col-md-offset-9">
					<img src="../assets/images/Imagenes/correo1.png" > <div class="centrar" style="font-family: 'Coming Soon', serif;">patei_parqueterapeutico<br/>@yahoo.com</div> 
				</div>
			</div>
		</div> 