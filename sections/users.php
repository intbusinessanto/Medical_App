<?php 
// INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`, `usuRol`) VALUES (NULL, 'santo', '12345678', 'Activo', 'Gerente');

include_once '../settings/db.php';
$conexionDB = DB::crearInstancia();

$idUsuario = isset($_POST['idUsuario'])?$_POST['idUsuario']:'';
$usuLogin = isset($_POST['usuLogin'])?$_POST['usuLogin']:'';
$usuPassword = isset($_POST['usuPassword'])?$_POST['usuPassword']:'';
$usuEstado = isset($_POST['usuEstado'])?$_POST['usuEstado']:'';
$usuRol = isset($_POST['usuRol'])?$_POST['usuRol']:'';
$accion = isset($_POST['accion'])?$_POST['accion']:'';

// print_r($_POST);

if($accion != ''){

    switch($accion){

        case 'agregar':
            $sql = "INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`, `usuRol`) VALUES (NULL, '$usuLogin', '$usuPassword', '$usuEstado', '$usuRol')";
            
            $consulta = $conexionDB->prepare($sql);
            $consulta->execute();

            echo $sql;
        break;

        case 'editar':
            $sql = "UPDATE `usuarios` SET `usuLogin` = '$usuLogin', `usuPassword` = '$usuPassword', `usuEstado` = '$usuEstado', `usuRol` = '$usuRol' WHERE `usuarios`.`idUsuario` = $idUsuario";
            $consulta = $conexionDB->prepare($sql);
            $consulta->execute();
        break;

        case 'borrar':
            $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`idUsuario` = $idUsuario";
            $consulta = $conexionDB->prepare($sql);
            $consulta->execute();
        break;

        case "Seleccionar":
            $sql = "SELECT * FROM usuarios WHERE idUsuario = $idUsuario";
            $consulta = $conexionDB->prepare($sql);
            // $consulta->bindParam(':idUsuario', $idUsuario);
            $consulta->execute();
            $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

            // $usuario = $consulta->fetchAll();
            // var_dump($usuario->fetchAll());

            $usuLogin = $usuario['usuLogin'];
            // echo $usuLogin;
            // print_r($usuario);
        break;

    }

}


$consulta = $conexionDB->prepare("SELECT * FROM usuarios");
$consulta->execute();
$listarUsuarios = $consulta->fetchAll();

?>