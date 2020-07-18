<?php 
class ApiController extends BaseController{
    public function __construct()
    {
             $this->loadModel('UserModel');
             $this->userModel = new UserModel();
    }
    public function index(){
        $data =[];
        $data['json'] = json_encode($this->userModel->getAll()); 
          return $this->view("Api.index",$data);
    }
}



?>