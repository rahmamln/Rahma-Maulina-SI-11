<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('Dosen_model','dsn1');

    // buat object model 1 dan nilai nya
    $this->dsn1->id='001';
    $this->dsn1->nama='Rahma Maulina';
    $this->dsn1->gender='P';
    $this->dsn1->tmp_lahir='Jakarta';
    $this->dsn1->tgl_lahir='25-11-2002';
    $this->dsn1->nidn='0110121227';
    $this->dsn1->pendidikan='Pendidikan Ekonomi S1';

        $this->load->model('Dosen_model','dsn2');

    // buat object model 2 dan nilai nya
    $this->dsn2->id='002';
    $this->dsn2->nama='Rifqi Fauzan';
    $this->dsn2->gender='L';
    $this->dsn2->tmp_lahir='Jakarta';
    $this->dsn2->tgl_lahir='21-03-2003';
    $this->dsn2->nidn='0110135467';
    $this->dsn2->pendidikan='Teknik Informatika S1';

        $this->load->model('Dosen_model','dsn3');

    // buat object model 3 dan nilai nya
    $this->dsn3->id='003';
    $this->dsn3->nama='Raihana Zahira';
    $this->dsn3->gender='P';
    $this->dsn3->tmp_lahir='Jakarta';
    $this->dsn3->tgl_lahir='01-01-2002';
    $this->dsn3->nidn='0110145689';
    $this->dsn3->pendidikan='Ilmu Komunikasi S1';

    // simpan object yang kita buat tadi ke dalam array
    $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
    // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
    $data['list_dsn'] = $list_dsn;
    // render data dan kirim data ke dalam view
    $this->load->view('dosen/index', $data);
    }
}
?>