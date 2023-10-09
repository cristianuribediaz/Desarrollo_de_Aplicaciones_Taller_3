<?php
require_once("../Config/database.php");

    class UsuarioModels{

        private $db;
        private $codigo;
        private $nombre;
        private $telefono;
        private $direccion;
        
        

        public function __construct($parametros){
            $this->codigo = $parametros["codigo"];
            $this->nombre = $parametros["nombre"];
            $this->telefono = $parametros["telefono"];
            $this->direccion = $parametros["direccion"];
        }

        public function insertar(){
            try{
                $db = Connect::Conectar()->prepare("INSERT INTO usuario (codigo,nombre,telefono,direccion) VALUES ('$this->codigo','$this->nombre','$this->telefono','$this->direccion')");
                $db->execute();
            }catch(PDOEXception $e){
                echo $e->getMessage();
                die();
            }
            $this->get_usuario();
           
        }

        public function get_usuario(){
            $db = Connect::Conectar()->prepare("SELECT * FROM usuario");
            $db->execute();
            if($db->rowCount()>=0){
                try{
                    require_once("../Views/AdminUsuario.php");
                    while($row = $db->fetch()):
                        return;
                    endwhile;
                }catch(PDOEXception $e){
                    echo $e->getMessage();
                    die();
                }
            }
            return $this->nombre;
        }

        public function delete_usuario(){
            $db = Connect::Conectar()->prepare("DELETE FROM usuario WHERE codigo='".$this->codigo."'");
            $res = $db->execute();
            if($res){
                $this->get_usuario();
            }else{
                return false;
            }
        }

        public function get_id($codigo){
            $db = Connect::Conectar()->prepare("SELECT * FROM usuario WHERE codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($row = $res->fetch_assoc()){
                $this->titulo[] = $row;
            }
            return $this->nombre;
        }

        public function actualizar(){
            $db = Connect::Conectar()->prepare("UPDATE usuario SET nombre='".$this->nombre."' ,telefono='".$this->telefono."',direccion='".$this->direccion."' where codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($res){
                $this->get_usuario();
            }else{
                return false;
            }
        }

    }
?>