<?php

namespace App\Http\Controllers;

use App\Repositories\PembayaranRepository;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari pembayaranRepository
    // pembayaranRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $pembayaranRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(PembayaranRepository $pembayaranRepository) //jangan lupa import sumber classnya
    {
        $this->pembayaranRepository = $pembayaranRepository; 
        // pembayaranRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh pembayaranRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $pembayaran = $this->pembayaranRepository->getAll(); //mengambil data dari pembayaranRepository pada function getAll();
        return view('page.pembayaran.index', compact( //menuju page yang di tuju sambil membawa varible pembayaran
            'pembayaran'
        )); //struktur folder di atas berarti (page/pembayaran/index) -> index adalah nama filenya
    }
    public function cetak()
    {
        $pembayaran = $this->pembayaranRepository->getAll(); //mengambil data dari pembayaranRepository pada function getAll();
        return view('page.pembayaran.cetak', compact( //menuju page yang di tuju sambil membawa varible pembayaran
            'pembayaran'
        )); //struktur folder di atas berarti (page/pembayaran/cetak) -> cetak adalah nama filenya
    }
}
