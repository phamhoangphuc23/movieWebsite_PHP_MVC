<?php
class Register extends Controller {
    public $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model('UserModel');
    }

    function form(){
        $this->view('auth/register');
    }
    function create(){
        if (isset($_POST['submit'])){

            /*Kiểm tra tên người dùng Post lên*/
            if (isset($_POST['name'])){
                $name = $_POST['name'];
            }
            else {
                array_push($errors,'Vui lòng nhập tên');
            }

            /*Kiểm tra Username người dùng Post lên*/
            if (isset($_POST['username'])){
                if (!$this->UserModel->checkExistUsername($_POST['username'])){
                    $username = $_POST['username'];
                }
                else {
                    array_push($errors,'Username đã tồn tại');
                }
            }
            else {
                array_push($errors,'Vui lòng nhập Username');
            }

            /*Kiểm tra Email người dùng Post lên*/
            if (isset($_POST['email'])){
                if ($this->UserModel->checkEmail($_POST['email'])) {
                    if (!$this->UserModel->checkExistEmail($_POST['email'])){
                        $email = $_POST['email'];
                    }
                    else {
                        array_push($errors,'Email đã dùng đăng ký');
                    }
                }
                else {
                    array_push($errors,'Email đã không đúng format');
                }
            }
            else {
                array_push($errors,'Vui lòng nhập Email');
            }

            /*Kiểm tra Password người dùng Post lên*/
            if (isset($_POST['password'])){
                if (!$this->UserModel->checkPassword($_POST['password'])){
                    $password = $_POST['password'];
                }
                else {
                    array_push($errors,'Password phải chứa dài hơn 5 ký tự và chứa 1 chữ cái');
                }
            }
            else {
                array_push($errors,'Vui lòng nhập Password');
            }

            if (isset())
            $passwordConfirm = $_POST['passwordConfirm'];
            if ($password != $passwordConfirm) {
                return  $this->view('auth/register',[
                    'errors' => ['Password Không khớp']
                ]);
            }



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
