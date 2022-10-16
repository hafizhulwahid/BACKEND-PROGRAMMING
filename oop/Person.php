<?php

class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        return $this->nama;
    }

    # buat method set dan get alamat
    public function setAlamat($data)
    {
        $this->alamat = $data;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    # buat method set dan get jurusan
    public function setJurusan($data)
    {
        $this->jurusan = $data;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }
}

$edo = new Person('Edo Riansyah', 'Bogor', 'Informatika');
$ismail = new Person('Ismail Marzuki', 'Depok', 'Bisnis Digital');

echo $edo->getNama().' ';
echo $edo->getAlamat().' ';
echo $edo->getJurusan();
echo '<br>==========';
echo '<br>';
echo $ismail->getNama() .' ';
echo $ismail->getAlamat().' ';
echo $ismail->getJurusan();

// $mahasiswa = [
//     [
//         'nama' => 'Edo Riansyah',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Ismail Marzuki',
//         'jurusan' => 'Sistem Informasi',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $edo = new Person();
// $edo->setNama('Edo Riansyah');
// echo $edo->getNama();
// echo '<br>';

// $ismail = new Person();
// $ismail->setNama('Ismail Marjuki');
// echo $ismail->getNama();