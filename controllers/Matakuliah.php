<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('Matakuliah_model','matkul1');

    // buat object model 1 dan nilai nya
    $this->matkul1->id='001';
    $this->matkul1->nama='Rahma Maulina';
    $this->matkul1->sks='3.9';
    $this->matkul1->kode='0110121227';

        $this->load->model('Matakuliah_model','matkul2');

    // buat object model 2 dan nilai nya
    $this->matkul2->id='002';
    $this->matkul2->nama='Raihana Zahira';
    $this->matkul2->sks='3.8';
    $this->matkul2->kode='0110156780';

        $this->load->model('Matakuliah_model','matkul3');

    // buat object model 3 dan nilai nya
    $this->matkul3->id='003';
    $this->matkul3->nama='Radika Afriyanda';
    $this->matkul3->sks='3.7';
    $this->matkul3->kode='0110134356';

    // simpan object yang kita buat tadi ke dalam array
    $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
    // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
    $data['list_matkul'] = $list_matkul;
    // render data dan kirim data ke dalam view
    $this->load->view('matakuliah/index', $data);
    }
}
?>