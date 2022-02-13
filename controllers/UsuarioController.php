<?php
require_once("models/ModelUsuario.php");
class Usuario_Controller{
    Private $Usuarios;
    public function __construct()
    {
        $this->Usuarios = new Usuario();

    } 
    public function index(){
        require_once('views/indexView.php');
    }

    public function Listar_Usuario(){
        $datos = $this->Usuarios->Listar_Usuario();
        require_once("views/UsuariosView.php");
    }

    public function Editar_Usuario(){
        $id=$_REQUEST['id'];
        $this->Usuarios->Editar_Usuario($id);
        require_once("views/EditarUsuarioView.php");
    }

    public function Insertar_Usuario(){
        $user = new Usuario();
        if (isset( $_POST['nombre'],$_POST['apellido'], $_POST['telefono'], $_POST['email'], $_POST['monto'], $_POST['tipo'],$_POST['fecha'])) {
            $user->set_nombre($_POST['nombre']);
            $user->set_apellido($_POST['apellido']);
            $user->set_telefono($_POST['telefono']);
            $user->set_mail($_POST['email']);
            $user->set_tipo($_POST['tipo']);
            $user->set_monto($_POST['monto']);
            $user->set_fecha($_POST['fecha']);
            if(!isset($user->error)){
                $user->Insertar_Usuario($user);
            }else{
                $respuesta = $user->error;
            }
        }else{
            $respuesta = "Debe ingresar todos los campos";
        }

        require_once("views/InsertarUsuarioView.php");
    }
}
    
?>