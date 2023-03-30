<?php
include "config.php";

	function Conectarse(){
     global $host_mysql, $puerto, $user_mysql, $pass_mysql, $db_mysql;
 
     if (!($link = mysqli_connect($host_mysql, $user_mysql, $pass_mysql))) 
     { 
        echo "Error conectando a la base de datos.<br>"; 
        exit(); 
     }
     
     if (!mysqli_select_db($link, $db_mysql)) 
      { 
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

	function check_admin(){
		if (!isset($_SESSION['id_usuario'])) {
			redir("./");
		}
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

	function check_user($url){

		if(!isset($_SESSION['id_cliente']) AND !isset($_SESSION['id'])){
			redir("?p=login&return=$url");
		}else{

		}
	}

	function nombre_usuario($id_usuario){
		$link = Conectarse();
		$query = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
		$q = mysqli_query($link, $query);

		$r = mysqli_fetch_array($q);
		return $r['nombre'];
	}

	function nombre_admin($id){
		$link = Conectarse();
		$query = "SELECT * FROM admin WHERE id = '$id'";
		$q = mysqli_query($link, $query);

		$r = mysqli_fetch_array($q);
		return $r['name'];
	}

	function fecha($fecha){
		$e = explode("-",$fecha);
		$year = $e[0];
		$month = $e[1];
		$e2 = explode(" ",$e[2]);
		$day = $e2[0];
		$time = $e2[1];

		$e3 = explode(":",$time);
		$hour = $e3[0];
		$mins = $e3[1];
		$seconds = $e3[2];

		return $day."/".$month."/".$year." a las: ".$hour.":".$mins.":".$seconds;
	}

	function estado($id_estado){
		if ($id_estado == 0) {
			$status = "Iniciando";
		}elseif ($id_estado == 1) {
			$status = "Preparando";
		}elseif ($id_estado == 2) {
			$status = "Despachando";
		}elseif ($id_estado == 3) {
			$status = "Finalizado";
		}else{
			$status = "Indefinido";
		}

		return $status;
	}


	function nombre_admin_dash(){
		$id = $_SESSION['id'];
		$link = Conectarse();
		$query = "SELECT * FROM admin WHERE id = '$id'";
		$q = mysqli_query($link, $query);

		$r = mysqli_fetch_array($q);
		return $r['name'];
	}
?>
