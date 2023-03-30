<?php
if(isset($send)){
	$correo = clear($correo);
	$contra = clear($contra); 

   $link = Conectarse();
 
   $query = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contra'";
 
   $q = mysqli_query($link, $query); 

	if(mysqli_num_rows($q)>0){
		$r = mysqli_fetch_array($q);
		$_SESSION['id_usuario'] = $r['id_usuario'];
		redir("?p=login");
	}else{
		alert("Los datos no son validos",0,'login');
	}
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