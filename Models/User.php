<?php
    class User {
        protected $email_u;
        protected $password_u;
        protected $username_u;
        protected $birthday_u;
        protected $sex_u;

        # CREATE
        public function register_user(){
            try {
                include_once '../Config/dbconnection.php';
                $connection = new Connection();
    
                $sql = "INSERT INTO user_dus(email_u, password_u, username_u, birthday_u, sex_u) VALUES(?, ?, ?, ?, ?)";
                $insert = $connection->stm->prepare($sql);
    
                $insert->bindParam(1, $this->email_u);
                $insert->bindParam(2, $this->password_u);
                $insert->bindParam(3, $this->username_u);
                $insert->bindParam(4, $this->birthday_u);
                $insert->bindParam(5, $this->sex_u);
    
                $insert->execute();

            } catch(PDOException $e){
                die("Error: " . $e);
            }
        }

        public function search_email_user(){
            try {
                include_once '../Config/dbconnection.php';
                $connection = new Connection();
        
                $sql = "SELECT email_u FROM user_dus WHERE email_u = '$this->email_u'";
                $result = $connection->stm->prepare($sql);
                $result->execute();
            
                $email_user = $result->fetchAll(PDO::FETCH_OBJ);

                if ($email_user) { 
                    return TRUE; 
                } else { 
                    return FALSE; 
                }

            } catch(PDOException $e){
                die("Error: " . $e);
            }
        }

        public function search_username_log(){
            try {
                include_once '../Config/dbconnection.php';
                $connection = new Connection();
        
                $sql = "SELECT username_u FROM user_dus WHERE username_u = '$this->username_u'";
                $result = $connection->stm->prepare($sql);
                $result->execute();
            
                $username_u = $result->fetchAll(PDO::FETCH_OBJ);

                if ($username_u) { 
                    return TRUE; 
                } else { 
                    return FALSE; 
                }

            } catch(PDOException $e){
                die("Error: " . $e);
            }
        }
    }
?>