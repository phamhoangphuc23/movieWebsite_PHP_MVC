<?php
class Home extends Controller {

   function index(){
      $postModel = $this->model('PostModel');
      $posts = $postModel->GetAllPost();
      $this->view('homepage',['posts'=> $posts]);
   }




}
?>
