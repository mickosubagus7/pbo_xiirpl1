<?php

//membuat class
class perhitungan{

    //property
    var $sisi, $sisi1, $sis2, $sisi3;
    var $alas, $tinggi;
    var $panjang, $lebar;
    var $hasil;
    // Method merupakan suatu operasi berupa fungsi-fungsi yang dapat dikerjakan 
    // oleh suatu object. Method didefinisikan pada class akan tetapi dipanggil melalui object.
    //method
    function LuasPersegi($sisi){
        $hasil=$sisi*$sisi;
        return "Hasil Luas Persegi : ".$hasil."<br>";
    }
    function LuasPersegiPanjang($panjang, $lebar){
        $hasil=$panjang*$lebar;
        return "Hasil Luas Persegi Panjang : ".$hasil."<br>";
    }
    function LuasSegitiga($alas, $tinggi){
        $hasil=$alas*$tinggi/2;
        return "Hasil Luas Segitiga : ".$hasil."<br>";
    }
}