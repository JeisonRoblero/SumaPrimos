<?php
if (isset($_SESSION['id_usuario'])) {
    redir("?p=mainu");
} else {
?>

<div class="button-login-container">
    <a href="?p=login" id="button-go-login"><i class="fas fa-sign-in-alt"></i> Login</a>
</div>
<div class="main-container">
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
</div>

<script src="js/app.js"></script>

<?php
}
?>