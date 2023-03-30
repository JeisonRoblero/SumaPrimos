<?php
include "configs/config.php";
include "configs/funciones.php";

if(!isset($p)){
	$p = "main";
}else{
	$p = $p;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Números Primos</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/a3c0bc2905.js" crossorigin="anonymous"></script>

    <!-- Sweet Alert -->
    <script src="http://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
            #ultimo + div {
                visibility: hidden;
            }
            
            .disclaimer {
                visibility: hidden;
            }
    </style>
</head>
<body>

    <main>

        <?php
			if(file_exists("modulos/".$p.".php")){
				include "modulos/".$p.".php";
			}else{
				echo "<i>Aún estamos trabajando en el modulo <b>".$p."</b>, lo tendremos pronto listo para tí ;) <a href='./'>Regresar</a></i>"; 
			}
		?>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div id="ultimo">
	    
    </div>
</body>
</html>