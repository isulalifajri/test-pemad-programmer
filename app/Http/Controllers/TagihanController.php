<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Repositories\TagihanRepository;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari tagihanRepository
    // tagihanRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $tagihanRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(TagihanRepository $tagihanRepository) //jangan lupa import sumber classnya
    {
        $this->tagihanRepository = $tagihanRepository; 
        // tagihanRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh tagihanRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $tagihan = $this->tagihanRepository->getAll(); //mengambil data dari tagihanRepository pada function getAll();
        return view('page.tagihan.index', compact( //menuju page yang di tuju sambil membawa varible tagihan
            'tagihan'
        )); //struktur folder di atas berarti (page/tagihan/index) -> index adalah nama filenya
    }

    public function edit($id)
    {
        $data = $this->tagihanRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.tagihan.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }

    public function update(Request $request, $id)
    {
        // $data = $request->validate([
        //     'project_id' => 'required|string',
        //     'status' => 'required|numeric',
        // ]); //validasi data edit yang di inputkan
        $data['status'] = 'lunas';


        $this->tagihanRepository->update($id, $data); //update data berdasarkan id

        $add = [
            'tagihan_id' => $id,
            'tanggal_pembayaran' => date('Y-m-d', strtotime($request->tanggal_pembayaran))
        ];

        // dd($add);
 
         if($request->file('bukti_pembayaran')){
             $dt = date('Y-m-d_His_a'); //mengambil tanggal dan waktu saat image di inputkan
             $extension = $request->file('bukti_pembayaran')->extension(); //mengambil extensi gambar
             $nama_file = $id . "_bukti_bayar" . "_" . $dt . "." . $extension; //memberi nama gambar
 
             $request->file('bukti_pembayaran')->move('asset/images/pembayaran', $nama_file); //this for move to directory file with original name
             $add['bukti_pembayaran'] = $nama_file; //this for create name images in database
         }


        Pembayaran::create($add);

        return redirect('tagihan')->with('success', 'Received updated successfully'); //redirect ke halaman tagihan
    }
}
