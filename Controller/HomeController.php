<?php 

class HomeController extends BaseController{
    
    protected $userModel = 'userModel';
    public function __construct()
    {
             $this->loadModel('UserModel');
             $this->userModel = new UserModel();
    }
    public function index(){
        

        if(!isset($_SESSION['username'])){
            header("Location:?controller=index&action=index");
        }
        $data = [];
        $data  =  $this->userModel->getAll();
        return $this->view("Home.index",$data);
    }

}

?>