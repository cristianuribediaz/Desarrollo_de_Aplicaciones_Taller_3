<?php
require_once("../Config/database.php");

    class LibrosModels{

        private $db;
        private $codigo;
        private $titulo;
        private $isbn;
        private $editorial;
        
        

        public function __construct($parametros){
            $this->codigo = $parametros["codigo"];
            $this->titulo = $parametros["titulo"];
            $this->isbn = $parametros["isbn"];
            $this->editorial = $parametros["editorial"];
        }

        public function insertar(){
            try{
                $db = Connect::Conectar()->prepare("INSERT INTO libros (codigo,titulo,isbn,editorial) VALUES ('$this->codigo','$this->titulo','$this->isbn','$this->editorial')");
                $db->execute();
            }catch(PDOEXception $e){
                echo $e->getMessage();
                die();
            }
            $this->get_libros();
           
        }

        public function get_libros(){
            $db = Connect::Conectar()->prepare("SELECT * FROM libros");
            $db->execute();
            if($db->rowCount()>=0){
                try{
                    require_once("../Views/AdminLibro.php");
                    while($row = $db->fetch()):
                        return;
                    endwhile;
                }catch(PDOEXception $e){
                    echo $e->getMessage();
                    die();
                }
            }
            return $this->titulo;
        }

        public function delete_libros(){
            $db = Connect::Conectar()->prepare("DELETE FROM libros WHERE codigo='".$this->codigo."'");
            $res = $db->execute();
            if($res){
                $this->get_libros();
            }else{
                return false;
            }
        }

        public function get_id($codigo){
            $db = Connect::Conectar()->prepare("SELECT * FROM libros WHERE codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($row = $res->fetch_assoc()){
                $this->titulo[] = $row;
            }
            return $this->titulo;
        }

        public function actualizar(){
            $db = Connect::Conectar()->prepare("UPDATE libros SET titulo='".$this->titulo."' ,isbn='".$this->isbn."',editorial='".$this->editorial."' where codigo='".$this->codigo."' ");
            $res = $db->execute();
            if($res){
                $this->get_libros();
            }else{
                return false;
            }
        }

    }
?>