<?php
require_once("../Config/database.php");

    class AutorModels{

        private $db;
        private $codigo;
        private $nombre;
               

        public function __construct($parametros){
            $this->codigo = $parametros["codigo"];
            $this->nombre = $parametros["nombre"];
                    }

        public function insertar(){
            try{
                $db = Connect::Conectar()->prepare("INSERT INTO autor (codigo,nombre) VALUES ('$this->codigo','$this->nombre')");
                $db->execute();
            }catch(PDOEXception $e){
                echo $e->getMessage();
                die();
            }
            $this->get_autor();
           
        }

        public function get_autor(){
            $db = Connect::Conectar()->prepare("SELECT * FROM autor");
            $db->execute();
            if($db->rowCount()>=0){
                try{
                    require_once("../Views/AdminAutor.php");
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

        public function delete_autor(){
            $db = Connect::Conectar()->prepare("DELETE FROM autor WHERE codigo='".$this->codigo."'");
            $res = $db->execute();
            if($res){
                $this->get_autor();
            }else{
                return false;
            }
        }

        public function get_id($codigo){
            $db = Connect::Conectar()->prepare("SELECT * FROM autor WHERE codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($row = $res->fetch_assoc()){
                $this->autor[] = $row;
            }
            return $this->autor;
        }

        public function actualizar(){
            $db = Connect::Conectar()->prepare("UPDATE autor SET nombre='".$this->nombre."' where codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($res){
                $this->get_autor();
            }else{
                return false;
            }
        }

    }
?>