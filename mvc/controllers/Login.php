<?php
class Login extends Controller {

    function form(){
        $this->view('auth/login');
    }
    function attempt(){
        if (isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->view('homepage',[
                'user' => 'DuyPhan'
            ]);
        }
        else {
            $this->view("auth/login");
        }
    }




}
?>
