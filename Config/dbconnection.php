<?php
    class Connection{
        public $stm;
    
        public function __construct(){
            try{
                $this->stm = new PDO("mysql:host=localhost;dbname=dusmusic", 'root', '');
                # DB:Servidor; dbname:nombre de la db;
            } catch(PDOException $error) {
                # En Caso De Error, guardar la informacion en la variable $error.
                echo "Error: ". $error->getMessage();
            }
        }
    }
?>