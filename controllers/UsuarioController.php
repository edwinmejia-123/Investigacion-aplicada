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

        $user = new Usuario();

        if (isset( $_POST['nombre'],$_POST['apellido'], $_POST['telefono'], $_POST['email'], $_POST['monto'], $_POST['tipo'],$_POST['fecha'])) {
            unset($user->error);
            $user->set_nombre($_POST['nombre']);
            $user->set_apellido($_POST['apellido']);
            $user->set_telefono($_POST['telefono']);
            $user->set_mail($_POST['email']);
            $user->set_tipo($_POST['tipo']);
            $user->set_monto($_POST['monto']);
            $user->set_fecha($_POST['fecha']);
            if(!isset($user->error)){
                $user->Editar_Usuario($id,$user);
                header('Location: usuarios.php?c=Listar_Usuario');
            }else{
                $respuesta = $user->error;
            }
        }else{
            $respuesta = "*Debe ingresar todos los campos";
        }
        require_once("views/EditarUsuarioView.php");
    }

    public function Buscar_Usuario()
    {
        $id=$_REQUEST['id'];
        $datos = $this->Usuarios->Buscar_Usuario($id);
        require_once ("views/EditarUsuarioView.php");
    }

    public function Eliminar_Usuario()
    {
        $id=$_REQUEST['id'];
        $this->Usuarios->Eliminar_Usuario($id);
        $respuesta = $this->Usuarios->error;
        header('Location: usuarios.php?c=Listar_Usuario');
    }

    public function Insertar_Usuario(){
        $user = new Usuario();

        if (isset( $_POST['nombre'],$_POST['apellido'], $_POST['telefono'], $_POST['email'], $_POST['monto'], $_POST['tipo'],$_POST['fecha'])) {
            unset($user->error);
            $user->set_nombre($_POST['nombre']);
            $user->set_apellido($_POST['apellido']);
            $user->set_telefono($_POST['telefono']);
            $user->set_mail($_POST['email']);
            $user->set_tipo($_POST['tipo']);
            $user->set_monto($_POST['monto']);
            $user->set_fecha($_POST['fecha']);
            if(!isset($user->error)){
                $user->Insertar_Usuario($user);
                header('Location: usuarios.php?c=Listar_Usuario');
            }else{
                $respuesta = $user->error;
            }

            /* $user->Insertar_Usuario($user); */
           /*  $respuesta = $user->error; */
            /* $respuesta = $user->nombre ." ". $_POST['apellido'] ." ". $_POST['telefono'] ." ". $_POST['email'] ." ".$_POST['monto'] ." ". $_POST['tipo'] ." ". $_POST['fecha']; */
        }else{
            $respuesta = "*Debe ingresar todos los campos";
        }
        require_once("views/InsertarUsuarioView.php");
        
    }
}
    
?>