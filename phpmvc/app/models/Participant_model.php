<?php

class Participant_model {

    private $table = 'participant';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllParticipant(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }
    public function tambahData($data){
        $query = "INSERT INTO participant
                    VALUES
                    ('', :nama, :phone, :alamat)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('alamat', $data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteData($id){
        $query = "DELETE FROM participant WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getDataId($id){
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id = :id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function updateData($data){
        $query = "UPDATE participant SET
                    nama = :nama, 
                    phone = :phone,
                    alamat = :alamat
                WHERE id = :id"; 
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}