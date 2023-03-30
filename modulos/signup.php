<?php

if (isset($send)) {
	$nombre = clear($nombre);
	$apellido = clear($apellido);
	$telefono = clear($telefono);
	$correo = clear($correo);
	$contra = clear($contra);

	$link = conectarse();
	$sql = "SELECT * FROM usuario WHERE correo = '$correo'";
	$q=mysqli_query($link, $sql);

	if (mysqli_fetch_array($q)>0) {
		alert("Ya existe un usuario con el mismo correo o nombre de usuario",0,'registrarse');
	}else{
		$link = conectarse();
		$sql = "INSERT INTO usuario (nombre,apellido,telefono,correo,contraseña) VALUES ('$nombre','$apellido','$telefono','$correo','$contra')";
		mysqli_query($link, $sql);

		$link = conectarse();
		$sql = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contra'";
		$ss = mysqli_query($link, $sql);

		$rss = mysqli_fetch_array($ss);

		$_SESSION['id_usuario'] = $rss['id_usuario'];

		alert("Registro realizado con exito!",1,'main');
	}

}

?>

<div class="main-container">
    <div class="content-container">
    <h1 class="header-title">Registrar Usuario</h1>
    <div class="line"></div>
    <form action="" method="post">
        <p class="main-instructions">Ingresa tu nombre: </p>
        <input type="text" name="nombre" id="nombre" class="main-input-number" placeholder="Nombre">
        <p class="main-instructions">Ingresa tu apellido: </p>
        <input type="text" name="apellido" id="apellido" class="main-input-number" placeholder="Apellido">
        <p class="main-instructions">Ingresa tu teléfono: </p>
        <input type="number" name="telefono" id="telefono" class="main-input-number" placeholder="Teléfono">
        <p class="main-instructions">Ingresa tu correo: </p>
        <input type="email" name="correo" id="correo" class="main-input-number" placeholder="Correo electrónico">
        <p class="main-instructions">Ingresa tu contraseña: </p>
        <input type="password" name="contra" id="contra" class="main-input-number" placeholder="Contraseña">
                
        <div class="button-calc-container">
            <button type="submit" name="send" id="button-login">Registrar Usuario</button>
        </div>

        <div class="button-calc-container">
            <a href="?p=login" id="button-no-user">Ya tengo un usuario</a>
        </div>
    </form>
    </div>
</div>