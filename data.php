<?php
//isi file data.php
include_once ’koneksi.php’;

class data extends koneksi{
    private $nama, $nim, $umur;
    public function __construct(){
        parent::__construct();
        $this->nama = $_POST['nama'];
        $this->nim  = $_POST['nim'];
        $this->umur	= $_POST['umur'];
    }

    public function printhasil(){
	    echo "Data yang dikirim adalah: <br>";
        echo "Nama : " . $this->nama ;
        echo " nim : ". $this->nim;
        echo "Tanggal lahir". $this->umur;
    }

    public function simpan(){
	    $this->conn->query(“INSERT INTO datamahasiswa(nim, nama, umur)
                                       VALUES(‘$this->nama’, ‘$this->nim’, ‘$this-> umur’)”);
    }
 
}
