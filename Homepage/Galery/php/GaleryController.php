<?php
require "../../../DatabaseConnection/DatabaseConnection.php";

    class GaleryController{

        private static $instance;

        public static function getInstance(){
            if (!self::$instance){
                self::$instance = new GaleryController();
            }
            return self::$instance;
        }

        public function allPosts(){
            $allposts= $this->database->query("SELECT Bildpfad from post");
            $allpostsarray = $this->database->toArray($allposts);

            return $allpostsarray;
        }


    }
