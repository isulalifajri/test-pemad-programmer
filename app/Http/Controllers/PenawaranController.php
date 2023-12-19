<?php

namespace App\Http\Controllers;

use App\Repositories\PenawaranRepository;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari penawaranRepository
    // penawaranRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $penawaranRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(PenawaranRepository $penawaranRepository) //jangan lupa import sumber classnya
    {
        $this->penawaranRepository = $penawaranRepository; 
        // penawaranRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh penawaranRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $penawaran = $this->penawaranRepository->getAll(); //mengambil data dari penawaranRepository pada function getAll();
        return view('page.penawaran.index', compact( //menuju page yang di tuju sambil membawa varible penawaran
            'penawaran'
        )); //struktur folder di atas berarti (page/penawaran/index) -> index adalah nama filenya
    }

    public function create(){
        $data = $this->penawaranRepository->add(); //variable data di gunakan untuk memanggil function add pada penawaranRepository
        return view('page.penawaran.create', compact(
            'data'
        )); //menuju ke halaman create sambil membawa variable data
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'jasa_penawaran' => 'required|string',
            'price' => 'required|numeric',
            'descript' => 'required|string',
        ]); //validasi data yang di inputkan

        $data['price'] = str_replace('.','',$request->price); //mengilangkan tanda titik pada price yang berikan

        $this->penawaranRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('penawaran')->with('success', 'Penawaran created successfully'); //redirect ke halaman Penawaran
    }

    public function show($id)
    {
        $data = $this->penawaranRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.penawaran.show', compact(
            'data'
        )); //menampilkan data di halaman show sesuai id yang di kirimkan
    }

    public function edit($id)
    {
        $data = $this->penawaranRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.penawaran.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jasa_penawaran' => 'required|string',
            'price' => 'required|numeric',
            'descript' => 'required|string',
        ]); //validasi data edit yang di inputkan

        $data['price'] = str_replace('.','',$request->price); //mengilangkan tanda titik pada price yang berikan

        $this->penawaranRepository->update($id, $data); //update data berdasarkan id

        return redirect('penawaran')->with('success', 'Penawaran updated successfully'); //redirect ke halaman Penawaran
    }

    public function destroy($id)
    {
        $this->penawaranRepository->delete($id); //menghapus data berdasarkan id
        return redirect('penawaran')->with('success-danger', 'Data Penawaran deleted successfully');
    }
}
