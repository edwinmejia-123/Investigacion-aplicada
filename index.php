
<?php
require_once ("config/conexion.php");
require_once ("controllers/UsuarioController.php");
$Controlador = new Usuario_Controller();
if(!isset($_REQUEST['c'])){
    $Controlador->index();
}else{
    /* $action = $_REQUEST['c'];
    call_user_func(array($Controlador,$action)); */
    header('Location: index.php');
}
?>

