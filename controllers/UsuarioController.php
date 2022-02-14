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
        session_start();
        if(isset($_SESSION['correcto'])){
            $correcto = $_SESSION['correcto'];
        }
        if(isset($_SESSION['errores'])){
            $respuesta = $_SESSION['errores'];
        }
        require_once("views/UsuariosView.php");
        session_unset();
        session_destroy();
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
                session_start();
                $respuesta = $user->sqlresp;
                $_SESSION['correcto']=$respuesta;
                header('Location: usuarios.php?c=Listar_Usuario');
            }else{
                $respuesta = $user->error;
                session_start();
                $_SESSION['errores']= $respuesta;
                header('Location: usuarios.php?c=Buscar_Usuario&id='.$id);
            }
        }else{
            session_start();
            $respuesta = "*Debe ingresar todos los campos";
            $_SESSION['errores']= $respuesta;
            header('Location: usuarios.php?c=Buscar_Usuario&id='.$id);
        }
        require_once("views/EditarUsuarioView.php");
    }

    public function Buscar_Usuario()
    {
        $id=$_REQUEST['id'];
        session_start();
        if(isset($_SESSION['errores'])){
            $respuesta=$_SESSION['errores'];
        }
        $datos = $this->Usuarios->Buscar_Usuario($id);
        require_once ("views/EditarUsuarioView.php");
        session_unset();
        session_destroy();
    }

    public function Eliminar_Usuario()
    {
        $id=$_REQUEST['id'];
        unset($this->Usuarios->error,$this->Usuarios->sqlresp);
        $this->Usuarios->Eliminar_Usuario($id);
        
        session_start();
        if(isset($this->Usuarios->error)){
            $respuesta = $this->Usuarios->error;
            $_SESSION['errores']= $respuesta;
        }
        
        if(isset($this->Usuarios->sqlresp)){
            $correcto = $this->Usuarios->sqlresp;
            $_SESSION['correcto']= $correcto;
        }
        
        
       
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
                session_start();
                $respuesta = $user->sqlresp;
                $_SESSION['correcto']=$respuesta;
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