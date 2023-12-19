<?php

namespace App\Http\Controllers;

use App\Models\TypeJob;
use App\Repositories\CareerRepository;
use App\Repositories\TypeJobsRepository;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari CareerRepository
    // CareerRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $careerRepository;
    protected $typejobsRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(CareerRepository $careerRepository,TypeJobsRepository $typejobsRepository) //jangan lupa import sumber classnya
    {
        $this->careerRepository = $careerRepository; 
        $this->typejobsRepository = $typejobsRepository; 
        // CareerRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh CareerRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $career = $this->careerRepository->getAll(); //mengambil data dari careerRepository pada function getAll();
        return view('page.career.index', compact( //menuju page yang di tuju sambil membawa varible career
            'career'
        )); //struktur folder di atas berarti (page/career/index) -> index adalah nama filenya
    }

    public function create(){
        $typejobs = $this->typejobsRepository->getAll(); //mengambil data dari TypeJobsRepository pada function getAll();
        $data = $this->careerRepository->add(); //variable data di gunakan untuk memanggil function add pada careerRepository
        return view('page.career.create', compact(
            'data', 'typejobs'
        )); //menuju ke halaman create sambil membawa variable data
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'typejob_id' => 'required|string',
            'descript' => 'required|string',
        ]); //validasi data yang di inputkan


        $this->careerRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('jobs')->with('success', 'Jobs created successfully'); //redirect ke halaman jobs
    }

    public function show($id)
    {
        $data = $this->careerRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.career.show', compact(
            'data'
        )); //menampilkan data di halaman show sesuai id yang di kirimkan
    }

    public function edit($id)
    {
        $typejobs = $this->typejobsRepository->getAll(); //mengambil data dari TypeJobsRepository pada function getAll();
        $data = $this->careerRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.career.edit', compact(
            'data','typejobs'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'typejob_id' => 'required|string',
            'descript' => 'required|string',
        ]); //validasi data edit yang di inputkan


        $this->careerRepository->update($id, $data); //update data berdasarkan id

        return redirect('jobs')->with('success', 'Jobs updated successfully'); //redirect ke halaman jobs
    }

    public function destroy($id)
    {
        $this->careerRepository->delete($id); //menghapus data berdasarkan id
        return redirect('jobs')->with('success-danger', 'Data jobs deleted successfully');
    }
}
