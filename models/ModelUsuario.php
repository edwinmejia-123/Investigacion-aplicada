<?php
    class Usuario{
        Private $id, $nombre, $apellido, $telefono, $mail,$tipo,$monto,$fecha;
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
            $this->id="";
        }
        
        public function Editar_Usuario($id){

        }

        public function get_id(){

        }
        
        public function set_id(){
            
        }
        
        public function set_nombre(string $nombre){
            
        }

        public function set_apellido(string $apellido){
            
        }
        
        public function set_telefono(string $telefono){
            
        }

        public function set_mail(string $email){
            
        }

        public function set_tipo(string $tipo){
            
        }

        public function set_monto(string $monto){
            
        }

        public function set_fecha(string $fecha){
            
        }
    }
?>