<?php
class UserModel extends Database{
    protected  $conn;
    private $user = 'user';
    public function __construct()
    {
        $this->conn = $this->conn();
        // $this->Database = new Database();
    }
    public function getLogin($paramas){
    $conn = $this->conn();
    $sql = "SELECT * FROM `user` WHERE username = '{$paramas['username']}'";
    $result =  $conn->query($sql);
    // var_dump($sql);
    if($conn->errno){
        die('error query'.$conn->error);
    }if($result->num_rows ==1){
        $rows  = $result->fetch_assoc();
        if($rows['password']==$paramas['password']){
                return $rows;
        }
    }

}
    public function getAll(){
        $conn = $this->conn();
        $select = "SELECT * From user";   
        $result =  $conn->query($select);
        $data = [];
        if ($result->num_rows >0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {  
                // echo "<pre>";
                // var_dump($row);
                $data[] = $row;
            }
          } else {
                echo "0 results";
          }     
          return $data;
    }
    public function finByid($id){
        return __METHOD__;
    }
    public function delete(){
        return __METHOD__;
    }
}


?>
<!-- <h1>modeluser</h1> -->