<?php
include "lib/config.php";

include "templates/header.php";
?>
<header class="header">
    <div class="header__logo">
        <img src="./resources/logo.png" alt="Neoshop" title="Neoshop" />
    </div><!-- .header__logo -->
    <div class="header__shop shop">
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-shopping-cart"></i></i></span>
            <span class="shop__text">Carrito</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-user"></i></span>
            <span class="shop__text">Mi perfil</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-box-open"></i></i></span>
            <span class="shop__text">Mis pedidos</span>
        </a><!-- .shop__button -->
    </div><!-- .header__shop -->
</header>
    <div class="wrapper">
      
        <!-- Marcado hecho en un componente aparte debajo importación-->
       <?php
        include  "templates/slider.php"
       ?>   
    

    <div class="products">
       <!--Marcado hecho en un componente aparte debajo importación-->
       <?php
        include  "templates/products.php"
       ?>   
    </div>
    <div class="load">
        <!-- TODO: BONUS. Desarrollar la funcionalidad para que el botón cargue más productos -->
        <span class="load__button button">Cargar más productos</span>
    </div><!-- .load -->
</div><!-- .wrapper -->
<footer class="footer">
    <p class="logo"><img  src="./resources/logo.png" alt="Neoshop" title="Neoshop" /></p>
    <p>Prueba técnica para candidatos</p>
</footer>
<?php
include "templates/footer.php";
