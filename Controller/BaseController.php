<?php

class BaseController{
    const VIEW_FOLDER_NAME = "../View";
    const VIEW_MODEL_NAME = "../Model";
    protected function view($viewpath, array $data =[]){
        foreach($data as $item => $value){
            $$item = $value;
        }
        $viewpath =  self::VIEW_FOLDER_NAME.'/'.str_replace('.','/',$viewpath).'.php';
       
        require ($viewpath);
    }
    protected function loadModel($ModelPath){
        $viewpath =  self::VIEW_MODEL_NAME."/".$ModelPath.'.php';
        require_once ($viewpath);
    }
}

?>