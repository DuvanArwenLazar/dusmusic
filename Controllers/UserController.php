<?php
    session_start();
    include_once '../Models/User.php';

    class UserController extends User {
        public function index_user(){
            include '../Views/User/index_user.php';
        }

        # [SECTION]: User register and validations
        function prepare_registration($email_u, $email_confirm_u, $password_u, $username_u, $date_day_u, $date_month_u, $date_year_u, $sex_u){
            $this->$email_u = $email_u;
            $this->$password_u = $password_u;
            $this->$username_u = $username_u;
            $this->birthday_u = "$date_month_u $date_day_u, $date_year_u";
            $this->sex_u = $sex_u;

            $this->register_user();
        }
    }

    # -------------------------------------------------------------------------------------------------------------------- #

    if(isset($_POST['action']) && $_POST['action'] == 'prepare_registration' && !empty($_POST['email_u'] && $_POST['email_confirm_u'] && $_POST['password_u'] && $_POST['username_u'] && $_POST['date_day_u'] && $_POST['date_month_u'] && $_POST['date_year_u'] && $_POST['sex_u'])){
        $usercontroller = new UserController();
        echo "hola";
        $usercontroller->prepare_registration($_POST['email_u'], $_POST['email_confirm_u'], $_POST['password_u'], $_POST['username_u'], $_POST['date_day_u'], $_POST['date_month_u'], $_POST['date_year_u'], $_POST['sex_u']);
        
    } else {
        echo "no encuentro nada D:";
    }
?>