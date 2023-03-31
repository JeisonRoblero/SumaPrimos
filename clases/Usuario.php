<?php
class Usuario {

    // Atributos
    public $id_usuario;
    public $contra;
    public $apellido;
    public $nombre;
    public $telefono;
    public $correo;

    /**
     * Función para agregar usuario
     */
    public function agregarUsuario($contra, $apellido, $nombre, $telefono, $correo) {
        // Inserta un usuario con todos los atributos pasados por parámetros
        $link = conectarse();
		$sql = "INSERT INTO usuario (nombre,apellido,telefono,correo,contraseña) VALUES ('$nombre','$apellido','$telefono','$correo','$contra')";
		mysqli_query($link, $sql);

        // Consulta a la base de datos ese usuario para retornarlo a donde fue llamada la función
		$sql = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contra'";
		$ss = mysqli_query($link, $sql);
		$rss = mysqli_fetch_array($ss);
        $_SESSION['id_usuario'] = $rss['id_usuario'];
		alert("Registro realizado con exito!",1,'?p=mainu');
        redir('./');
    }

    /**
     * Función para iniciar sesión de usuario
     */
    public function login($correo, $contra) {
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

    /**
     * Función para eliminar un usuario de la base de datos
     */
    public function eliminarUsuario($id_usuario) {
        $link = Conectarse();
        $query = "DELETE FROM usuario WHERE id_usuario = '$id_usuario'";
        $q = mysqli_query($link, $query);
    }
}

?>