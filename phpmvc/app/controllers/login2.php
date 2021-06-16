<?php

class login2 extends Controller{
    public function index(){
        $data['judul'] = 'Login admin';
        $this->view('templates/header', $data);
        $this->view('login2/index', $data);
        $this->view('templates/footer');
        
    }
    public function setLogin(){
        // var_dump($_POST);
        $data_usernm = $this->model('Login_admin')->getUserByUsername($_POST['username']);
        // var_dump($data_usernm);
        if ($_POST['password'] == $data_usernm['password']){
          header('Location:' . BASEURL . '/participant');
          }else{
              header('Location:' . BASEURL . '/login2');
          }
      }
}