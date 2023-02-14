<?php
    session_start();
    include_once '../Models/User.php';

    class UserController extends User {
        public function index_user(){
            include '../Views/User/index_user.php';
        }

        # Minor Functions
        public function validate_email($email_u, $email_confirm_u){
            if(!filter_var($email_u, FILTER_VALIDATE_EMAIL)) {
                die("invalid_email");
            }

            if($email_u != $email_confirm_u){
                die("different_emails");
            }
        }

        public function search_email($email_u){
            $this->email_u = $email_u;
            $search = $this->search_email_user();
            if($search == TRUE){
                die("mail_in_use");
            }
        }

        public function validate_password($password_u){
            if(strlen($password_u) < 8){
                die("len");
            }

            if (!preg_match('`[a-z]`', $password_u)) {
                die('minus');
            }

            if (!preg_match('`[0-9]`', $password_u)) {
                die('number');
            }

            $password_hash = password_hash($password_u, PASSWORD_ARGON2ID);
            $this->password_u = $password_hash;
        }

        public function search_username($username_u){
            $this->username_u = $username_u;
            $search = $this->search_username_log();
            if($search == TRUE){
                die("username_in_use");
            }
        }

        public function validate_date($date_day_u, $date_month_u, $date_year_u){
            if($date_day_u > 31){
                die("day");
            }

            if($date_month_u != "January" && $date_month_u != "February" && $date_month_u != "March" && $date_month_u != "April" && $date_month_u != "May" && $date_month_u != "June" && $date_month_u != "July" && $date_month_u != "August" && $date_month_u != "September" && $date_month_u != "October" && $date_month_u != "November" && $date_month_u != "Dicember"){
                die("month");
            }   

            if($date_year_u > date("Y")){
                die("year");
            }

            $this->birthday_u = "$date_month_u $date_day_u, $date_year_u";
        }

        # [SECTION]: User register and validations
        public function prepare_registration($email_u, $email_confirm_u, $password_u, $username_u, $date_day_u, $date_month_u, $date_year_u, $sex_u){
            $this->validate_email($email_u, $email_confirm_u);
            $this->search_email($email_u);
            $this->validate_password($password_u);
            $this->search_username($username_u);
            $this->validate_date($date_day_u, $date_month_u, $date_year_u);

            $this->sex_u = $sex_u;

            $this->register_user();
        }
    }

    # -------------------------------------------------------------------------------------------------------------------- #

    # CREATE
    if(isset($_POST['action']) && $_POST['action'] == 'prepare_registration' && !empty($_POST['email_u'] && $_POST['email_confirm_u'] && $_POST['password_u'] && $_POST['username_u'] && $_POST['date_day_u'] && $_POST['date_month_u'] && $_POST['date_year_u'] && $_POST['sex_u'])){
        $usercontroller = new UserController();
        $usercontroller->prepare_registration($_POST['email_u'], $_POST['email_confirm_u'], $_POST['password_u'], $_POST['username_u'], $_POST['date_day_u'], $_POST['date_month_u'], $_POST['date_year_u'], $_POST['sex_u']);

        return;
    }

    # Empty Values
    if(isset($_POST['action']) && $_POST['action'] == 'prepare_registration' && !empty($_POST['email_u'] || $_POST['email_confirm_u'] || $_POST['password_u'] || $_POST['username_u'] || $_POST['date_day_u'] || $_POST['date_month_u'] || $_POST['date_year_u'] || $_POST['sex_u'])){
        die("empty_values");
    }
?>