<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Repositories\PermintaanRepository;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari permintaanRepository
    // permintaanRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $permintaanRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(PermintaanRepository $permintaanRepository) //jangan lupa import sumber classnya
    {
        $this->permintaanRepository = $permintaanRepository; 
        // permintaanRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh permintaanRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $permintaan = $this->permintaanRepository->getAll(); //mengambil data dari permintaanRepository pada function getAll();
        return view('page.permintaan.index', compact( //menuju page yang di tuju sambil membawa varible permintaan
            'permintaan'
        )); //struktur folder di atas berarti (page/permintaan/index) -> index adalah nama filenya
    }

    public function create(){
        $data = $this->permintaanRepository->add(); //variable data di gunakan untuk memanggil function add pada permintaanRepository
        return view('page.permintaan.create', compact(
            'data'
        )); //menuju ke halaman create sambil membawa variable data
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'project_id' => 'required|string',
            'status' => 'required|numeric',
        ]); //validasi data yang di inputkan

        $this->permintaanRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('permintaan')->with('success', 'Received created successfully'); //redirect ke halaman permintaan
    }

    public function edit($id)
    {
        $data = $this->permintaanRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.permintaan.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }
    public function update(Request $request, $id)
    {
        // $data = $request->validate([
        //     'project_id' => 'required|string',
        //     'status' => 'required|numeric',
        // ]); //validasi data edit yang di inputkan
        $data['status'] = 'finish';

        $this->permintaanRepository->update($id, $data); //update data berdasarkan id

         // melakukan penambahan ke dalam tabel tagihan
         $add = [
            'project_id' => $id,
            'status' => 'belum lunas',
        ];

        Tagihan::create($add);

        return redirect('permintaan')->with('success', 'Received updated successfully'); //redirect ke halaman permintaan
    }

    public function destroy($id)
    {
        $this->permintaanRepository->delete($id); //menghapus data berdasarkan id
        return redirect('permintaan')->with('success-danger', 'Data Received deleted successfully');
    }
}
