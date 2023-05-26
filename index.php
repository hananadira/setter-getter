<?php 
//setter merupakan sebuah atribut dari php yang fungsi nya untung meng setting data atau menyimpan data, sifatnya atau fungsi nya untuk 
//menyimpan data

//getter fungsinya untuk mengambil data dari setter, untuk mengelolah data 
//setter getter merupakan bentuk dari sebuah method 

class Spesies {

    private $nama, $umur, $status;

    //setter
    public function setNama($data) {
        $this->nama = $data;
    }

    public function setUmur($data) {
        $this->umur = $data;
    }
    
    public function setStatus($data) {
        $this->status = $data;
    }

    //getter 
    public function getNama() {
        echo $this->nama;
    }

    public function getUmur() {
        echo $this->umur;
    }

    public function getStatus() {
        echo $this->status;
    }

}

$manusia = new Spesies();
$manusia->setNama("hana");
$manusia->setUmur(16);
$manusia->setStatus("cwenya mark");

$manusia1 = new Spesies();
$manusia1->setNama("fania");
$manusia1->setUmur(16);
$manusia1->setStatus("cwenya om");

echo $manusia->getNama();
echo "<br>";
echo $manusia->getUmur();
echo "<br>";
echo $manusia->getStatus();
echo "<br>";
echo $manusia1->getNama();
echo "<br>";
echo $manusia1->getUmur();
echo "<br>";
echo $manusia1->getStatus();