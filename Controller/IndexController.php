<?php 
class IndexController extends BaseController{
    protected $userModel = 'userModel';
    public function __construct()
    {
             $this->loadModel('UserModel');
             $this->userModel = new UserModel();
    }
    public function logout(){
            session_start();
            $datalogin = [];
            $datalogout = [];
            $data_user = $this->userModel->getLogin($datalogout);
            
            session_unset();
            session_destroy();
            header("location:?controller=index&action=index");
    }
    public function index(){
        // 
            $data = [];
            $datalogin = [];
       if(isset($_POST['btnsubmit'])){
        if($_POST['username'] == ""|| $_POST['password']==""){
            $data['error'] = "<b style='color:Red'>Thiếu Trường Thông Tin</b>";
        }else{
            $datalogin['username'] = $_POST['username'];
            $datalogin['password'] = $_POST['password'];
            $data_user = $this->userModel->getLogin($datalogin);
            if(is_array($data_user)){
                unset($data_user['password']);
                $_SESSION['username'] = $data_user;
                header("location:?controller=Home&action=index");
            }else{
                $data['error'] = "Sai Tài Khoản Hoặc Mật Khẩu";
            }
            }
       }
            if(isset($_SESSION['username']['username'])==true){
                header("Location:?controller=home&action=index");
            }
            return $this->view("index.index",$data);
    }
    public function show(){
        echo __METHOD__;
    }
}

?>