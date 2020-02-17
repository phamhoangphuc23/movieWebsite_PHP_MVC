<?php
require_once "mvc/core/DB.php";
class PostModel extends \mvc\core\DB {
    public  function GetAllPost(){
        $query = 'SELECT * FROM posts';
        return mysqli_query($this->con, $query);
    }
}
?>