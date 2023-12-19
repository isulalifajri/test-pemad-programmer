<?php

namespace App\Http\Controllers;

use App\Repositories\LanguageRepository;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari languageRepository
    // languageRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $languageRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(LanguageRepository $languageRepository) //jangan lupa import sumber classnya
    {
        $this->languageRepository = $languageRepository; 
        // languageRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh languageRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $language = $this->languageRepository->getAll(); //mengambil data dari languageRepository pada function getAll();
        return view('page.language.index', compact( //menuju page yang di tuju sambil membawa varible project
            'language'
        )); 
    }

    public function create(){
        $data = $this->languageRepository->add(); //variable data di gunakan untuk memanggil function add pada languageRepository
        return view('page.language.create', compact(
            'data'
        )); //menuju ke halaman create sambil membawa variable data
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_language' => 'required|string'
        ]); //validasi data yang di inputkan


        $this->languageRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('languages')->with('success', 'languages created successfully'); //redirect ke halaman languages
    }

    public function edit($id)
    {
        $data = $this->languageRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.language.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name_language' => 'required|string'
        ]); //validasi data edit yang di inputkan


        $this->languageRepository->update($id, $data); //update data berdasarkan id

        return redirect('languages')->with('success', 'languages updated successfully'); //redirect ke halaman languages
    }

    public function destroy($id)
    {
        $this->languageRepository->delete($id); //menghapus data berdasarkan id
        return redirect('languages')->with('success-danger', 'Data languages deleted successfully');
    }
}
