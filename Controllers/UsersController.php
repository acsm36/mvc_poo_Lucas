<?php

class UsersController extends Controller
{

  private $args;
  private $model;
  protected $name = "Users";

  public function __construct()
  {
    return $this->model = new UsersModel();
  }


  public function index()
  {
    $data = $this->model->getAllUsers();
    $this->render('users/index', $data);
  }

  public function show()
  {
    // ignores other arguments. First one is assumed to be id of user, ignores others
    $this->args = (int) func_get_args()[0][0];
    if($data = $this->model->getOneUser($this->args)){
      $this->render('users/show', $data);
    }
    else{
      $data = $this->args;
      $this->render('users/notfound', $data);
    }
  }

  public function delete()
  {
    $this->args = func_get_args();
    echo "delete 1 user";
  }
}
