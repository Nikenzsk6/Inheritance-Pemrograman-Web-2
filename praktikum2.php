<?php

class Pengguna
{
    public $nama;
    public $email;

    public function tampilkaData()
    {
        echo "Nama : " . $this->nama . "<br>";
        echo "Email : " . $this->email . "<br>";
    }
}

class Mahasiswa extends Pengguna
{
    public $nim;
    public $prodi;
}

$mhs1 = new Mahasiswa();
$mhs1->nama = "Andi";
$mhs1->email = "andi@gmail.comm";
$mhs1->nim = "2301001";
$mhs1->prodi = "SI";

$mhs1->tampilkaData();
echo "NIM : " . $mhs1->nim . "<br>";
echo "Program Studi : " . $mhs1->prodi . "<br>";
