<?php
class Participant extends Controller {
    public function index(){
        $data['judul'] = 'Daftar Participant';
        $data['prt'] = $this->model('Participant_model')->getAllParticipant();
        $this->view('templates/header', $data);
        $this->view('participant/index', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Participant_model')->tambahData($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'primary');
            header('Location:' . BASEURL . '/participant');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location:' . BASEURL . '/participant');
            exit;
        }
    }
    public function delete($id){
        if($this->model('Participant_model')->deleteData($id) > 0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'primary');
            header('Location:' . BASEURL . '/participant');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location:' . BASEURL . '/participant');
            exit;
        }
    }

    public function getupdate(){
        // echo 'oke';
        $data1 = $this->model('Participant_model')->getDataId($_POST['id']);
        echo json_encode($data1);
    }
    public function update(){
        if($this->model('Participant_model')->updateData($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Diubah', 'primary');
            header('Location:' . BASEURL . '/participant');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header('Location:' . BASEURL . '/participant');
            exit;
        }   
    }
}