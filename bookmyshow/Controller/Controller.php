<?php
 include_once("model/Model.php");

 Class Controller{
  public $model;

  public function Controller()
  {
   $this->model=new Model();
  // $this->model->Model();
  }

  public function insertdata()
  {
   $result = $this->model->insert_data();
   include 'view/sign-up.php';
  }

  public function userlogin()
  {
    $result=$this->model->login();
    include 'view/sign-in.php';
  }
 }
?>