<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use App\Models\Klien;
use App\Models\Penawaran;
use App\Models\Permintaan;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari projectRepository
    // projectRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $projectRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(ProjectRepository $projectRepository) //jangan lupa import sumber classnya
    {
        $this->projectRepository = $projectRepository; 
        // projectRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh projectRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $project = $this->projectRepository->getAll(); //mengambil data dari projectRepository pada function getAll();
        // dd($project);
        return view('page.projects.index', compact( //menuju page yang di tuju sambil membawa varible project
            'project'
        )); 
    }

    public function create(){
        $offer = Penawaran::all(); //memanggil semua data penawaran dari database
        $klien = Klien::all(); // memanggil semua data klien dari database
        $language = Bahasa::all(); //memanggil semua data bahasa dari database
        $data = $this->projectRepository->add(); //variable data di gunakan untuk memanggil function add pada projectRepository
        return view('page.projects.create', compact(
            'data', 'offer', 'klien', 'language'
        )); //menuju ke halaman create sambil membawa variable data, klien, language, offer
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'penawaran_id' => 'required|string',
            'klien_id' => 'required|string',
            'bahasa_id' => 'required|string',
            'descript' => 'required|string'
        ]); //validasi data yang di inputkan


        $this->projectRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('projects')->with('success', 'projects created successfully'); //redirect ke halaman projects
    }

    public function edit($id)
    {
        $offer = Penawaran::all();
        $klien = Klien::all();
        $language = Bahasa::all();
        $data = $this->projectRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.projects.edit', compact(
            'data', 'offer', 'klien', 'language'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'penawaran_id' => 'required|string',
            'klien_id' => 'required|string',
            'bahasa_id' => 'required|string',
            'descript' => 'required|string'
        ]); //validasi data edit yang di inputkan


        $this->projectRepository->update($id, $data); //update data berdasarkan id

        return redirect('projects')->with('success', 'projects updated successfully'); //redirect ke halaman projects
    }

    public function destroy($id)
    {
        $this->projectRepository->delete($id); //menghapus data berdasarkan id
        return redirect('projects')->with('success-danger', 'Data projects deleted successfully');
    }

    public function update_status($id){

        $data['status'] = 'applied';

        $this->projectRepository->update($id, $data); //update data berdasarkan id

        

        // melakukan penambahan ke dalam tabel permintaan
        $add = [
            'project_id' => $id,
            'status' => 'proses',
        ];

        Permintaan::create($add);
        
       

        return redirect('projects')->with('success', 'status applied successfully'); //redirect ke halaman projects
    }

}
