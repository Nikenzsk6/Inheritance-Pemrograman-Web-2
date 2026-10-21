<?php
class Pengguna
{
    public $nama;
    public $email;

    public function __construct($nama, $email)
    {
        $this->nama = $nama;
        $this->email = $email;
    }

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

    public function __construct(
        $nama,
        $email,
        $nim,
        $prodi
    ) {
        parent::__construct($nama, $email);

        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa()
    {
        $this->tampilkaData();
        echo "NIM : " . $this->nim . "<br>";
        echo "Program Studi : " . $this->prodi . "<br>";
    }
}

$mhs1 = new Mahasiswa("Andi", "andi@gmail.com", "2301001", "Sistem Informasi");

$mhs1->tampilkanDataMahasiswa();

echo "<br>";

$mhs2 = new Mahasiswa("Andre", "andre@gmail.com", "2301002", "Sistem Informasi");

$mhs2->tampilkanDataMahasiswa();
