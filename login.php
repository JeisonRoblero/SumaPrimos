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

    <!-- Sweet Alert -->
    <script src="http://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <main>
        <div class="content-container">
            <h1 class="header-title">Iniciar Sesión</h1>
            <div class="line"></div>
            <form action="">
                <p class="main-instructions">Ingresa tu correo: </p>
                <input type="email" name="correo" id="correo" class="main-input-number" placeholder="Correo electrónico">
                <p class="main-instructions">Ingresa tu contraseña: </p>
                <input type="password" name="contra" id="contra" class="main-input-number" placeholder="Contraseña">
                
                <div class="button-calc-container">
                    <button href="#" id="button-login">Iniciar Sesión</button>
                </div>

                <div class="button-calc-container">
                    <a href="./signup.php" id="button-no-user">No tengo usuario</a>
                </div>
            </form>
            
            
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>