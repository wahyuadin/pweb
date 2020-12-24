<?php

function kode($kode_buku){
    $hasil_kode = '' . number_format($kode_buku,2,',',',');
    return $hasil_kode;
}