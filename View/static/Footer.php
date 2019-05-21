<div class="clearfix"></div>
<footer>
    
</footer>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery-3.3.1.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/bootstrap/bootstrap.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/Swiper/swiper.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery.lazyload.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/greensock.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/kl-animate.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/<?=$page_title?>.js?<?=$elapsed_time?>"></script>


<!-- JS Imports -->
<script>
            var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            },
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            });
            
            </script>
<script src="includes\jquery.js"></script>
        <script src="bootstrap-4.2.1-dist\js\bootstrap.min.js"></script>
       
<script>
    $(document).ready(function(){
       $("img.lazy").lazyload({
            threshold : 200,
            effect : "fadeIn"
        });
       $("#botonmenu, #cerrar").click(function (){
            $(".menu-hidden-show").toggleClass("esconder-menu-hiden-show");
        });
       $.klAnimate();
    });
</script>
</body>
</html>