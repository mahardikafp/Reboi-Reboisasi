<?php
class Login_admin{
    private $table = 'login_data';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getUserByUsername($username)
    {
    $this->db->query('SELECT * FROM '.$this->table.' WHERE username=:username');
    $this->db->bind('username',$username);
    return $this->db->single();
    }
} 