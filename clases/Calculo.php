<?php
class Calculo {

    // Atributos
    public $numeroIngresado;
    public $numeroPrimo;
    public $totalSuma;
    public $fechaIntento;
    public $usuario;

    /**
     * Función par saber si es un número primo
    */
    public function esPrimo($n) {
		if ($n == 0 || $n == 1 || $n == 4) return false;
		for($i = 2; $i < $n/2; $i++) {
			if ($n % $i == 0) return false;
		}
		return true;
	}

    /**
     * Función para sumar primos
    */
    public function sumaPrimos($number) {
        $suma = 0;
        $numerosSumados = '';
        for ($i=0; $i<=$number; $i++) {
            if ($this->esPrimo($i) == true) {
                $numerosSumados .= $i.' + ';
                $suma += $i;
            }
        }
        
        $numerosSumadosC = substr($numerosSumados,0,strlen($numerosSumados) - 2);
        $resultado = ' = '.$suma;
        $numberConc = $number.': '.$numerosSumadosC.' '.$resultado;
        $usuario = $_SESSION['id_usuario'];

        if(strlen($numberConc) > 500) {
            $numberConc = substr($numberConc,0,500);
        }

        $link = conectarse();
        $sql = "INSERT INTO calculo (numero,desc_calculo,fecha,id_usuario,resultado) VALUES ('$number','$numberConc',NOW(),'$usuario','$suma')";
        mysqli_query($link, $sql);
    }
}

?>