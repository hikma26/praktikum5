<?php
    class Mahasiswa {
        public $stb;
        public $nama;
        public $angkatan;
        function _construct ($stb,$nama,$angkatan){
            $this->stb =$stb;
            $this->nama =$nama;
            $this->angkatan =$angkatan;
        }
    }
?>