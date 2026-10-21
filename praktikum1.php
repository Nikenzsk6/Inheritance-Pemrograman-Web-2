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

$pengguna1 = new Pengguna();
$pengguna1->nama = "Andi";
$pengguna1->email = "andi@gmail.comm";

$pengguna1->tampilkaData();
