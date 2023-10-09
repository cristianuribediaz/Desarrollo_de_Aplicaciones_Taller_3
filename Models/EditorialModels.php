<?php
require_once("../Config/database.php");

    class EditorialModels{

        private $db;
        private $codigo;
        private $editorial;
        

        public function __construct($parametros){
            $this->codigo = $parametros["codigo"];
            $this->editorial = $parametros["nombre"];
        }

        public function insertar(){
            try{
                $db = Connect::Conectar()->prepare("INSERT INTO editorial (codigo, nombre) VALUES ('$this->codigo', '$this->editorial')");
                $db->execute();
            }catch(PDOEXception $e){
                echo $e->getMessage();
                die();
            }
            $this->get_editoriales();
            
        }

        public function get_editoriales(){
            $db = Connect::Conectar()->prepare("SELECT * FROM editorial");
            $db->execute();
            if($db->rowCount()>=0){
                try{
                    require_once("../Views/AdminEditorial.php");
                    while($row = $db->fetch()):
                        return;
                    endwhile;
                }catch(PDOEXception $e){
                    echo $e->getMessage();
                    die();
                }
            }
            return $this->editorial;
        }

        public function delete_editorial(){
            $db = Connect::Conectar()->prepare("DELETE FROM editorial WHERE codigo='".$this->codigo."'");
            $res = $db->execute();
            if($res){
                $this->get_editoriales();
            }else{
                return false;
            }
        }

        public function get_id($codigo){
            $db = Connect::Conectar()->prepare("SELECT * FROM editorial WHERE codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($row = $res->fetch_assoc()){
                $this->editorial[] = $row;
            }
            return $this->editorial;
        }

        public function actualizar(){
            $db = Connect::Conectar()->prepare("UPDATE editorial SET nombre='".$this->editorial."' where codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($res){
                $this->get_editoriales();
            }else{
                return false;
            }
        }

    }
?>