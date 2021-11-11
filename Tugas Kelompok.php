<?php

class KelompokPBO 
{
    private $nama;
    private $TI;
    
    public function setnama($nama) {
        $this->nama = $nama;
    }

    public function setTI($TI) {
        $this->TI = $TI;
    }

    public function getnama() {
        return $this->nama;
    }

    public function getTI() {
        return $this->TI;
    }

    public function perkenalan() {
        return "Nama angota kelompok : .$this->nama  Dari Prodi : ".$this->TI;
    }
}


$KelompokPBO = new KELOMPOKPBO;
$KelompokPBO->setnama("Farik F,Ridwan AP,M.Nurizki,M.Elki");
$KelompokPBO->setTI("Teknik Informatika kelas B");

echo $KelompokPBO->perkenalan();