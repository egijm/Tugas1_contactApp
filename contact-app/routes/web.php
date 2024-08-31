<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
        <h1>Aplikasi Kontak</h1>
        <div>
            <a href='/contacts'>Kontak</a>
            <a href='/contacts/create'>Kontak Baru</a>
            <a href='/contacts/2'>Tampilan Kontak</a>
            <a href='/students/egg'>Tampilan Nama</a>
        </div>
    ";
    return $html;
});

Route::get('contacts', function() {
    return "<h1><marquee>Egi Sayang Roblox, Roblox Sayang Egi. Rafi Sayang Roblox, Roblox Sayang Rafi, Semuanya Sayang Roblox</marquee></h1>";
});

Route::get('contacts/create', function() {
    return "<h1>Tambah kontak Baru</h1>";
});

Route::get('/contacts/{id}', function($id) {
    return "Halaman kontak dengan ID".$id;
});
Route::get('/students/{name}', function($name=null) {
    if ($name) {
        return "Nama lengkap: ".$name;
    }else {
        return "Nama Lengkap belum di isi";
    }
});
