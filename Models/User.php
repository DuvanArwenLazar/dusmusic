<?php
    class User {
        protected $email_u;
        protected $password_u;
        protected $username_u;
        protected $birthday_u;
        protected $sex_u;

        public function register_user(){
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
            echo "inserte cosas";
        }

    }
?>