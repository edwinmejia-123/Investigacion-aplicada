<?php
    class Usuario{
        public $id, $nombre, $apellido, $telefono, $mail,$tipo,$monto,$fecha;
        private $conectar;
        private $db;
        private $usuarios;
        public $error;

        public function __construct()
        {
            $this->conectar=new Conectar();
            $this->db = $this->conectar->conexion();
            $this->usuarios = array();
            $this->error = array();
        }

        public function Listar_Usuario(){
            $consulta = $this->db->query("SELECT * FROM users");
            while($filas=$consulta->fetch_assoc()){
                $this->usuarios[]=$filas;
            }
            return $this->usuarios;
        }

        public function Insertar_Usuario(Usuario $usuario){
            $sql = "INSERT INTO users (Name, Lastname, Cellphone, Email, User_type, Amount, Registration_date) VALUES ('$usuario->nombre ','$usuario->apellido','$usuario->telefono','$usuario->mail','$usuario->tipo','$usuario->monto','$usuario->fecha')";
            $consulta = $this->db->query($sql);
           if (!$consulta) {
               $this->error = "Error: No se ingresaron los datos.";
           }/* else {
               $this->error = $sql;
           } */
           
        }
    
        public function Editar_Usuario($id, Usuario $usuario){
            $sql = "UPDATE users SET Name='$usuario->nombre', Lastname='$usuario->apellido', Cellphone='$usuario->telefono', Email='$usuario->mail', User_type='$usuario->tipo', Amount='$usuario->monto', Registration_date='$usuario->fecha' WHERE Id_user='$id'";
            $consulta = $this->db->query($sql);
            if (!$consulta) {
                $this->error = "Error: No se ingresaron los datos.";
            }
        }

        public function Buscar_Usuario($id){
            $consulta = $this->db->query("SELECT * FROM users WHERE Id_user='$id'");
            while($filas=$consulta->fetch_assoc()){
                $this->usuarios[]=$filas;
            }
            return $this->usuarios;
        }

        public function Eliminar_Usuario($id)
        {
            $sql = "DELETE FROM users  WHERE Id_user='$id'";
            $consulta =  $this->db->query($sql);
            if (!$consulta) {
                $this->error = "Error: No se eliminaron los datos.";
            }
        }

        public function get_id(){

        }
        
        public function set_id(){
            
        }
        
        public function set_nombre(string $nombre){
            $this->nombre = $nombre;
            /* $this->error = $nombre; */
        }

        public function set_apellido(string $apellido){
            $this->apellido = $apellido;
        }
        
        public function set_telefono(string $telefono){
           
            $regex = '/^(2|6|7){1}[0-9]{3}-[0-9]{4}$/';
            if (preg_match($regex, $telefono)) {
                $this->telefono = $telefono;
            } else {
                $this->error[] = "*Error: Formato de Teléfono no válido";
            }
            

        }

        public function set_mail(string $email){
            $regex =  '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/'; 
            if (preg_match($regex, $email)) {
                $this->mail = $email;
            } else {
                $this->error[] = "*Error: Formato de Email no válido";
            }
        }

        public function set_tipo(string $tipo){
            $this->tipo = $tipo;
        }

        public function set_monto(string $monto){
            $this->monto = $monto;
        }

        public function set_fecha(string $fecha){
            $this->fecha = $fecha;
        }
    }
?>