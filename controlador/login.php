<?php
    session_start();
    if(!empty($_POST["btnIngresar"])){
        if(!empty($_POST["usuario"]) and !empty($_POST["password"])){            
            $usuario = $_POST["usuario"];
            $password = md5($_POST["password"]);
            $sql = $conexion -> query("SELECT * FROM usuario WHERE usuario = '$usuario'  and password = '$password'");
            if($datos = $sql -> fetch_object()){
                $_SESSION["nombre"] = $datos -> nombre;
                $_SESSION["apellido"] = $datos -> apellido;
                header("location:../inicio.php");
            }else{
                echo "<div class='alert alert-danger'>El usuario o la contraseña son incorrectos</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Los campos están vacíos</div>";
        }
    }
?>

