

<?php
    @include '../modelo/sesion_model.php';
?>






<header class="main_header">
    <div class="container container--flex">
        <div class="logo-container column column--50">
            <h1 class="logo"><a href="<?php echo INDEX;?>" class="header__logo">Web Braille</a></h1>
        </div>

        

        <?php if(!empty($user)): ?>

                <div class="main-header__contactInfo column column--50">
                    <p class="main-header__contactInfo__phone">
                        <span class="fas fa-user"></span>
                            <a href="<?php echo MY_PERFIL; ?>" class="header__link"><?=$user['Nombre'];?> <?=$user['Apellido'];?> </a>
                        
                    </p>

                    <p class="main-header__contactInfo__address">
                        <span class="fas fa-power-off"></span>
                            <a href="../logeo/logout.php" class="header__link">Salir</a>
                        
                     </p>
        </div>





        <?php else: ?>

                <div class="main-header__contactInfo column column--50">
                    <p class="main-header__contactInfo__phone">
                        <span class="fas fa-user-plus"></span>
                            <a href="../logeo/signup.php" class="header__link">Registrarse</a>
                    </p>

                    <p class="main-header__contactInfo__address">
                        <span class="fas fa-sign-in-alt"></span>
                            <a href="../logeo/login.php" class="header__link">Iniciar sesión</a>
                     </p>
                </div>

        <?php endif; ?>

    </div>
</header>