<?php

  class Home extends Controller{

    public function __construct(){

    }

    public function index(){

      $data = [
        'title' => 'Bienvenido'
      ];
      $this->view('pages/home',$data);

    }

  }


 ?>
