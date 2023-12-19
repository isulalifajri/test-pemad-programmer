<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari CompanyRepository
    // CompanyRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $companyRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(CompanyRepository $companyRepository) //jangan lupa import sumber classnya
    {
        $this->companyRepository = $companyRepository; 
        // CompanyRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh CompanyRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $company = $this->companyRepository->getAll(); //mengambil data dari CompanyRepository pada function getAll();
        return view('page.company.index', compact( //menuju page yang di tuju sambil membawa varible company
            'company'
        )); //struktur folder di atas berarti (page/company/index) -> index adalah nama filenya
    }
    public function create(){
        $data = $this->companyRepository->add(); //variable data di gunakan untuk memanggil function add pada companyRepository
        return view('page.company.create', compact(
            'data'
        )); //menuju ke halaman create sambil membawa variable data
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_company' => 'required|string',
            'descript' => 'required|string',
            'contact_info' => 'required|string',
            'jam_kerja' => 'required|string',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); //validasi data yang di inputkan

        if($request->file('images')){
            $names =  implode("",array_slice(explode(" ", $request->name_company),0 , 2)); // 1 dalam explode di gunakan untuk mengambail kata pertama dalam request name
            $dt = date('Y-m-d_His_a'); //mengambil tanggal dan waktu saat image di inputkan
            $extension = $request->file('images')->extension(); //mengambil extensi gambar
            $nama_file = $names . "_" . $dt . "." . $extension; //memberi nama gambar

            $request->file('images')->move('asset/images/company', $nama_file); //this for move to directory file with original name
            $data['images'] = $nama_file; //this for create name images in database
        }

        $this->companyRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('company')->with('success', 'Company created successfully'); //redirect ke halaman company
    }

    public function edit($id)
    {
        $data = $this->companyRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.company.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }

    public function update(Request $request, $id)
    {
        $company = $this->companyRepository->find($id);
        $data = $request->validate([
            'name_company' => 'required|string',
            'descript' => 'required|string',
            'contact_info' => 'required|string',
            'jam_kerja' => 'required|string',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); //validasi edit data yang di inputkan

        if($request->file('images')){ //jika request gambar ada atau ada gambar baru
            if($company->images){ //jika gambar yang lama ada
                File::delete('asset/images/company/'.$company->images); //delete gambar yang lama di dalam directory
                $company->images = $request->file('images')->getClientOriginalName();
            }

            $names =  implode("",array_slice(explode(" ", $request->name_company),0 , 2)) . "_new_update"; // 1 dalam explode di gunakan untuk mengambail kata pertama dalam request name
            $dt = date('Y-m-d_His_a');
            $extension = $request->file('images')->extension();
            $nama_file = $names . "_" . $dt . "." . $extension;
            $request->file('images')->move('asset/images/company', $nama_file); //this for move to directory file with original name
            $data['images'] = $nama_file; //this for create name images in database
        }

        $this->companyRepository->update($id, $data); //update data berdasarkan id

        return redirect('company')->with('success', 'Company updated successfully'); //redirect ke halaman company
    }

    
}
