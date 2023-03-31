<?php
if(isset($send)){
	$correo = clear($correo);
	$contra = clear($contra); 

    $objUsuario = new Usuario();
    $objUsuario->login($correo, $contra);
}

if (isset($_SESSION['id_usuario'])) {
	redir("?p=mainu");
}

?>

<div class="main-container">
    <div class="content-container">
    <h1 class="header-title">Iniciar Sesión</h1>
    <div class="line"></div>
    <form action="" method="post">
        <p class="main-instructions">Ingresa tu correo: </p>
        <input type="email" name="correo" id="correo" class="main-input-number" placeholder="Correo electrónico">
        <p class="main-instructions">Ingresa tu contraseña: </p>
        <input type="password" name="contra" id="contra" class="main-input-number" placeholder="Contraseña">
                
        <div class="button-calc-container">
            <button id="button-login" name="send">Iniciar Sesión</button>
        </div>

        <div class="button-calc-container">
            <a href="?p=signup" id="button-no-user">No tengo usuario</a>
        </div>
    </form>   
    </div>
</div>