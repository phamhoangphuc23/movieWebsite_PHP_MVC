<?php
require_once "mvc/core/DB.php";

class UserModel extends \mvc\core\DB {
    public  function checkExistUsername($username){
        $query = 'SELECT * FROM users where username =='.$username;
        $rows = mysqli_query($this->con, $query);
        if (mysqli_num_rows($rows)>0){
            return true; /* True = Da ton tai */
        }
        return false; /*False = chua ton tai */
    }

    public function checkEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            /*đúng format*/
            return true;
        }
        /*sai format*/
        return false;

    }

    public function checkExistEmail($email) {
        $query = 'SELECT * FROM users where email =='.$email;
        $rows = mysqli_query($this->con, $query);
        if (mysqli_num_rows($rows)>0){
            return true; /* True = Da ton tai */
        }
        return false; /*False = chua ton tai */
    }

    public function checkPassword($password){
        if (preg_match('^(?=.*[a-zA-Z])(?=.{5})')){
            /*Dung format*/
            return true;
        };
        /*Sai format*/
        return false;
    }
}

?>