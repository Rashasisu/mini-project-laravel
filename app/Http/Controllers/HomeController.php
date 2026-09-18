<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $namaUsaha = "Segar Jaya";

        $deskripsi = "Menyediakan air isi ulang berkualitas untuk kebutuhan sehari-hari.";

        return view('home', compact('namaUsaha', 'deskripsi'));
    }

    public function produk()
    {
        $produk = [
            [
                'nama' => 'Air Mineral',
                'harga' => 'Rp5.000',
                'deskripsi' => 'Air isi ulang berkualitas untuk kebutuhan sehari-hari.'
            ],
            [
                'nama' => 'Air RO',
                'harga' => 'Rp8.000',
                'deskripsi' => 'Air Reverse Osmosis dengan proses penyaringan lebih detail.'
            ],
            [
                'nama' => 'Air Alkali',
                'harga' => 'Rp10.000',
                'deskripsi' => 'Air alkali yang diproses menggunakan teknologi penyaringan.'
            ]
        ];

        return view('produk', compact('produk'));
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }
}