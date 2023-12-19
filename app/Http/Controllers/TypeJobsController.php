<?php

namespace App\Http\Controllers;

use App\Repositories\TypeJobsRepository;
use Illuminate\Http\Request;

class TypeJobsController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari TypeJobsRepository
    // TypeJobsRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $typejobsRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(TypeJobsRepository $typejobsRepository) //jangan lupa import sumber classnya
    {
        $this->typejobsRepository = $typejobsRepository; 
        // TypeJobsRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh TypeJobsRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $typejobs = $this->typejobsRepository->getAll(); //mengambil data dari TypeJobsRepository pada function getAll();
        return view('page.career.typejobs.index', compact( //menuju page yang di tuju sambil membawa varible typejobs
            'typejobs'
        )); 
    }

    public function create(){
        $data = $this->typejobsRepository->add(); //variable data di gunakan untuk memanggil function add pada typejobsRepository
        return view('page.career.typejobs.create', compact(
            'data'
        )); //menuju ke halaman create sambil membawa variable data
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'type_job' => 'required|string'
        ]); //validasi data yang di inputkan


        $this->typejobsRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('typejobs')->with('success', 'typejobs created successfully'); //redirect ke halaman typejobs
    }

    public function edit($id)
    {
        $data = $this->typejobsRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.career.typejobs.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'type_job' => 'required|string'
        ]); //validasi data edit yang di inputkan


        $this->typejobsRepository->update($id, $data); //update data berdasarkan id

        return redirect('typejobs')->with('success', 'typejobs updated successfully'); //redirect ke halaman typejobs
    }

    public function destroy($id)
    {
        $this->typejobsRepository->delete($id); //menghapus data berdasarkan id
        return redirect('typejobs')->with('success-danger', 'Data typejobs deleted successfully');
    }
}
