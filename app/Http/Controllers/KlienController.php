<?php

namespace App\Http\Controllers;

use App\Repositories\KlienRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KlienController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari KlienRepository
    // KlienRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $klienRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(KlienRepository $klienRepository) //jangan lupa import sumber classnya
    {
        $this->klienRepository = $klienRepository; 
        // klienRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh KlienRepository untuk mengelola data pengguna di dalam sistem.

    }

    public function index()
    {
        $kliens = $this->klienRepository->getAll(); //mengambil data dari KlienRepostory pada function getAll();
        return view('page.kliens.klien', compact( //menuju page yang di tuju sambil membawa varible kliens
            'kliens'
        )); //struktur folder di atas berarti (page/kliens/klien) -> klien adalah nama filenya
    }

    public function create(){
        $data = $this->klienRepository->add(); //variable data di gunakan untuk memanggil function add pada KlienRepository
        return view('page.kliens.create', compact(
            'data'
        )); //menuju ke halaman create sambil membawa variable data
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:kliens',
            'telephone' => 'required|numeric',
            'address' => 'required|string',
            'images' => 'image|file',
        ]); //validasi data yang di inputkan

        if($request->file('images')){
            $names =  implode("",array_slice(explode(" ", $request->name),0 , 1)); // 1 dalam explode di gunakan untuk mengambail kata pertama dalam request name
            $dt = date('Y-m-d_His_a'); //mengambil tanggal dan waktu saat image di inputkan
            $extension = $request->file('images')->extension(); //mengambil extensi gambar
            $nama_file = $names . "_" . $dt . "." . $extension; //memberi nama gambar

            $request->file('images')->move('asset/images/kliens', $nama_file); //this for move to directory file with original name
            $data['images'] = $nama_file; //this for create name images in database
        }

        $this->klienRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('kliens')->with('success', 'Klien created successfully'); //redirect ke halaman klien
    }

    public function edit($id)
    {
        $data = $this->klienRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.kliens.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }

    public function update(Request $request, $id)
    {
        $klien = $this->klienRepository->find($id);
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:kliens,email,' . $id, //required -> field tidak boleh kosong dan email-> harus berupa alamat email yang valid
            // unique:kliens,email,' . $id -> Ini adalah aturan validasi yang menyatakan bahwa isi field harus unik dalam tabel kliens, namun mengabaikan record dengan id yang sama dengan $id. 
            // Dengan kata lain, ini memungkinkan email yang sama digunakan jika itu adalah email dari record yang sedang diedit.
            'telephone' => 'required|numeric',
            'address' => 'required|string',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); //validasi input edit data

        if($request->file('images')){ //jika request gambar ada atau ada gambar baru
            if($klien->images){ //jika gambar yang lama ada
                File::delete('asset/images/kliens/'.$klien->images); //delete gambar yang lama di dalam directory
                $klien->images = $request->file('images')->getClientOriginalName();
            }

            $names =  implode("",array_slice(explode(" ", $request->name),0 , 1)) . "_new_update"; // 1 dalam explode di gunakan untuk mengambail kata pertama dalam request name
            $dt = date('Y-m-d_His_a');
            $extension = $request->file('images')->extension();
            $nama_file = $names . "_" . $dt . "." . $extension;
            $request->file('images')->move('asset/images/kliens', $nama_file); //this for move to directory file with original name
            $data['images'] = $nama_file; //this for create name images in database
        }

        $this->klienRepository->update($id, $data); //update data berdasarkan id

        return redirect('kliens')->with('success', 'Klien updated successfully'); //redirect ke halaman kliens
    }

    
    public function destroy($id)
    {
        $klien = $this->klienRepository->find($id);
        File:: delete('asset/images/kliens/'.$klien->images);
        $this->klienRepository->delete($id); //menghapus data berdasarkan id
        return redirect('kliens')->with('success-danger', 'Klien deleted successfully');
    }
}
