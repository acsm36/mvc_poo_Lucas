<?php 
class Controller {

    private $view;

    public function getCtName(){
        return $this->name;
    }

    protected function render(String $viewPath, $data = null){
        $this->data = $data;
        $this->view = "./Views/{$viewPath}.php";
        require_once "./Views/layout.php";
    }

}