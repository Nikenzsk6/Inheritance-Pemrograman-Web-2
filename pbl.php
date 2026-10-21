<?php
class Pengguna
{
    protected $nama;
    protected $email;

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

    public function tampilkanPern()
    {
        echo "Peran : Pengguna Umum";
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

    public function tampilkanPeran()
    {
        echo "Peran : Mahasiswa";
    }
}

class Dosen extends Pengguna
{
    public $nidn;
    public $bidangKeahlian;

    public function __construct(
        $nama,
        $email,
        $nidn,
        $bidangKeahlian
    ) {
        parent::__construct($nama, $email);

        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanPeran()
    {
        echo "Peran : Dosen";
    }
}

class Administrasi extends Pengguna
{
    public $idPegawai;
    public $bagian;

    public function __construct(
        $nama,
        $email,
        $idPegawai,
        $bagian
    ) {
        parent::__construct($nama, $email);

        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanPeran()
    {
        echo "Peran : Administrasi";
    }
}

$mhs = new Mahasiswa("Andi", "andi@gmail.com", "2301001", "Sistem Informasi");
$dosen = new Dosen("Budi", "budi@gmail.com", "0011223344", "Pemrograman WEB");
$admin = new Dosen("Rudi", "rudi@gmail.com", "0987654321", "Administrasi");

echo "<h2>Data Mahasiswa</h2>";
$mhs->tampilkaData();
$mhs->tampilkanPeran();

echo "<br>";
echo "<h2>Data Dosen</h2>";
$dosen->tampilkaData();
$dosen->tampilkanPeran();

echo "<br>";
echo "<h2>Data Admin</h2>";
$admin->tampilkaData();
$admin->tampilkanPeran();
