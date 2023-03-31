<?php
include "config.php";

	// Función para conectarse con la base de datos
	function Conectarse(){
     	global $host_mysql, $puerto, $user_mysql, $pass_mysql, $db_mysql;
 
		if (!($link = mysqli_connect($host_mysql, $user_mysql, $pass_mysql))) { 
			echo "Error conectando a la base de datos.<br>"; 
			exit(); 
		}
		
		if (!mysqli_select_db($link, $db_mysql)) { 
			echo "Error seleccionando la base de datos.<br>"; 
			exit(); 
		}
   		return $link; 
    } 

	function esPrimo($n) {
		if ($n == 0 || $n == 1 || $n == 4) return false;
		for($i = 2; $i < $n/2; $i++) {
			if ($n % $i == 0) return false;
		}
		return true;
	}

	//Funciones
	function clear($var){
		htmlspecialchars($var);
		return $var;
	}

	function redir($var){
	?>
	<script>
		window.location="<?=$var?>";
	</script>

	<?php
	die();
	}

	function alert($var,$type,$url){
		//error, success, info
		if ($type==0) {
			$t = "error";
			$titu = 'Error :(';
		}elseif ($type==1) {
			$t = "success";
			$titu = 'Éxito! ;)';
		}elseif ($type==2) {
			$t = "info";
			$titu = 'Hey :O';
		}

		echo '<script>swal({ title: "'.$titu.'", text: "'.$var.'", icon: "'.$t.'"});';
		echo '$(".swal-button").click(function(){ window.location="'.$url.'"; });';
		echo '</script>';

	}

	function nombre_usuario($id_usuario){
		$link = Conectarse();
		$query = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
		$q = mysqli_query($link, $query);

		$r = mysqli_fetch_array($q);
		return $r['nombre'];
	}

?>
