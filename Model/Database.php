<?php 
class Database{
    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DB_NAME = "facebook_api";
     
    public function conn(){
        $conn = mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DB_NAME);
        mysqli_set_charset($conn,'UTF-8');
        if(mysqli_connect_errno()===0){
            return $conn;
        }
        return false;
    }
}

?>