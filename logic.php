<?php

    // sediakan kotak pembungkus yang akan digunakan (sesuai dengan fitur)
        class Databahanbakar {

        
        private $HargaSSuper;
        private $HargaSVPower;
        private $HargaSVPowerDiesel;
        private $HargaSVPowerNitro;

        // atribut harga harga dibuat privet karena sudah ada getter yang akan menampilkan data nya

        public $JenisYangDipilih;
        public $totalliter;

        // atribut di atas di set public karena nilai nya akan diisi dari luar

        protected $totalpembayaran;

        // set protected karena hanya digunakan oleh class dia dan turunan untuk proses data

        public function setHarga ($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro){

            // mengisi nilai ke atribut, nilai nantinya diisi dari luar kelas melalui function
            // nilai dari luar diambil ke dalam kelas melalui parameter
            // penamaan oarameter bebas atau urutan pengisian dari luar sesuai


        $this-> $HargaSSuper = $valSSuper;
        $this-> $HargaSVPower = $valSVPower;
        $this-> $HargaSVPowerDiesel = $valSVPowerDiesel;
        $this-> $HargaSVPowerNitro =  $valSVPowerNitro;
        }

        public function getHarga () {
            // setelah nilai atribut di simpan, fungsi getter akan mengembalikan atua menampilkannya untuk digunakan di tempat lain
            // karena data yang akan di kirim atau di keluarkan lebih dari 1, makan data data tersebut disatukan terlebih dahulu
        $semuadatasolar ['SSuper'] = $this -> HargaSSuper;
        $semuadatasolar ['SVPower'] = $this -> HargaSVPower;
        $semuadatasolar ['SVPowerDiesel'] = $this -> HargaSVPowerDiesel;
        $semuadatasolar ['SVPowerNitro'] = $this -> HargaSVPowerNitro;

        // tujuan utama dari getter : return 

        return $semuadatasolar;
        }
    }

        class pembelian extends Databahanbakar {
            // data sudah di sediakan, tinggal proses penghitungan jumlah pembelian
            public function totalHarga (){
                $this-> totalpembayaran = $this-> getharga ()[$this -> jenisyangdipilih] * $this ->totaliter;
                $this -> totalharga;
            }

            public function cetakbukti () {
                echo "--------------------------------------------------";
                echo "Jenis Bahan Bakar:" . $this->JenisYangDipilih;
                echo " Total Liter :".$this -> totalliter;
                echo "Harga Bayar: Rp" . number_format ($this ->totalpembayaran, 0,',', '.');
                echo "----------------------------------";
            }
        }



?>