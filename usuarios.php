
<?php
require_once ("config/conexion.php");
require_once ("controllers/UsuarioController.php");
$Controlador = new Usuario_Controller();
if(!isset($_REQUEST['c'])){
    header('Location: index.php'); 
}else{
        $action = $_REQUEST['c'];
        call_user_func(array($Controlador,$action));
}
?>
