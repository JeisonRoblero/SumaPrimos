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
            <h1 class="header-title">CALCULADORA DE NÚMEROS PRIMOS</h1>
            <div class="line"></div>
            <p class="main-instructions">Ingrese un número: </p>
            <input type="number" name="number" id="number" class="main-input-number" placeholder="0">
            <span class="main-description">
                NOTA: Al número ingresado se le encontrarán todos sus números primos inferiores y se sumarán
                Debe de ser un número entero positivo. <br>
            </span>
            <div class="button-calc-container">
                <a href="#" id="button-calc">Calcular</a>
            </div>
            
            <div id="sin-respuesta">...Aún no hay nada que calcular, ingresa un número y clic en calcular...</div>
            <div id="resultado-container">
                <h3 id="titu-respuesta">Respuesta:</h3>
                <div class="respuesta-container">
                    <p id="suma-numeros">1+2</p>
                    <p id="resultado">3</p>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>