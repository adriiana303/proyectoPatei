<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "Galeria";
	
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
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css" >  
  
 <!--  <link rel="stylesheet" href="../dist/css/swiper.min.css"> -->

  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
     /* background:"../assets/images/fondo2.png" class="img-fluid"; */
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
/*       color:#000;
 */      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 50%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
    }
    .gallery-top {
      height: 80%;
      width: 60%;
    }
    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
      width: 25%;
      height: 80%;
      opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }
  </style>
</head>

<body>

  <!-- Swiper -->
  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
   
      <!--  --><div class="swiper-slide "style="background-image:url(../assets/images/Imagenes/Galeria/foto1.jpg)"></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto1.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto2.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto3.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto4.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto5.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto6.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto7.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto8.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto9.jpg" class="img-fluid" ></div>
      <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto10.jpg" class="img-fluid" ></div>

    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-black"></div>
    <div class="swiper-button-prev swiper-button-black"></div>
  </div>
  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto1.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto2.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto3.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto4.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto5.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto6.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto7.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto8.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto9.jpg" class="img-fluid" ></div>
            <div class="swiper-slide"><img src="../assets/images/Imagenes/Galeria/foto10.jpg" class="img-fluid" ></div>

    </div>
  </div>

  <!-- Swiper JS -->
  <script src="../dist/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 6,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
  </script>
</body>
</html>