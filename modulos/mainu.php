<?php
if (!isset($_SESSION['id_usuario'])) {
    redir("?p=login");
} else {

    $numeroIngresado = 0;
    $numerosSumados = '';
    $numerosSumadosC = '';
    $resultado = '';
    $suma = 0;
    $usuario = $_SESSION['id_usuario'];

    if(isset($calcular)) {

        $number = clear($number);
        $numeroIngresado = $number;

        if ($number < 2) {
            alert("El número ingresado debe ser un número entero positivo, ingresa otro número",0,'mainu');
        } else {     
            for ($i=0; $i<=$number; $i++) {
                if (esPrimo($i) == true) {
                    $numerosSumados .= $i.' + ';
                    $suma += $i;
                }
            }
            
            $numerosSumadosC = substr($numerosSumados,0,strlen($numerosSumados) - 2);
            $resultado = ' = '.$suma;
            $numberConc = $number.': '.$numerosSumadosC.' '.$resultado;

            if(strlen($numberConc) > 500) {
                $numberConc = substr($numberConc,0,500);
            }

            $link = conectarse();
		    $sql = "INSERT INTO calculo (numero,desc_calculo,fecha,id_usuario,resultado) VALUES ('$number','$numberConc',NOW(),'$usuario','$suma')";
		    mysqli_query($link, $sql);
    
        }

    }

    if(isset($reiniciar)) {
        $numeroIngresado = 0;
        $numerosSumados = '';
        $numerosSumadosC = '';
        $resultado = '';
        $suma = 0;
    }
?>

<div class="button-login-container"> 
    <div class="welcome-container">
        <h3 class="welcome-message">Bienvenido <?php echo nombre_usuario($_SESSION['id_usuario']) ?> </h3>
    </div>
    <a href="?p=signout" id="button-go-login"><i class="fas fa-door-open"></i> Salir</a>
</div>
<div class="main-container">
    <div class="content-container">
        <h1 class="header-title">CALCULADORA DE NÚMEROS PRIMOS</h1>
        <div class="line"></div>
        <form action="" method="post">
            <p class="main-instructions">Ingrese un número: </p>
            <input type="number" name="number" id="number" class="main-input-number" placeholder="0" value="<?php echo $numeroIngresado ?>">
            <span class="main-description">
                NOTA: Al número ingresado se le encontrarán todos sus números primos inferiores y se sumarán
                Debe de ser un número entero positivo. <br>
            </span>
            <div class="button-calc-container">
                <button name="calcular" id="button-calc">Calcular</button>&nbsp;&nbsp;
                <button name="reiniciar" id="button-calc"><i class="fas fa-sync-alt"></i></button>
            </div>
        </form>
        
        <?php
            if($resultado=='') {
        ?>        
            <div id="sin-respuesta-u">...Aún no hay nada que calcular, ingresa un número y clic en calcular...</div>
        <?php
            } else {
        ?>
            <div id="resultado-container-u">
                <h3 id="titu-respuesta">Respuesta:</h3>
                <div class="respuesta-container">
                    <p id="suma-numeros"><?php echo $numerosSumadosC ?></p>
                    <p id="resultado"><?php echo $resultado ?></p>
                </div>
            </div>
        <?php
            }
        ?>

        <br>

              
            <div id="resultado-container-u-h">
                <h3 id="titu-respuesta">Historial:</h3>
                <div class="respuesta-container">
                <table class="table-container-h">
                    <th>Detalle de calculo </th>
                    <th>Fecha </th>
                
                <?php
                    $link = Conectarse();
                    $query = "SELECT * FROM calculo WHERE id_usuario = $usuario ORDER BY fecha DESC";
                    $q = mysqli_query($link, $query);

                    while($r=mysqli_fetch_array($q)){

                ?>  
                        <tr>
                            <td id="suma-numeros"><?=$r['desc_calculo']?></td>
                            <td id="suma-numeros"><?=$r['fecha']?></td>
                        </tr>
                <?php
                    }
                ?>
                </table>
                </div>
            </div>
        

    </div>
</div>

<script src="js/app-login.js"></script>

<?php
}
?>