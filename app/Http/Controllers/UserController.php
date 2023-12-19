<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //protected, artinya properti ini hanya dapat diakses dari dalam class itu sendiri dan turunannya 
    // -> next -> Properti ini akan digunakan untuk menyimpan instance dari UserRepository
    // UserRepository mengambil dari class yang kita buat sebelumnya di Folder Repositories
    protected $userRepository;

    //Dependency Injection -> class dapat menerima instance dari class lain sebagai parameter consruktor
    public function __construct(UserRepository $userRepository) //jangan lupa import sumber classnya
    {
        $this->userRepository = $userRepository; 
        // UserRepository untuk menyimpan instance(wujud dari class) yang di teruskan sebagai parameter constructor kedalam property $userRepository
        // Dengan cara ini, class ini dapat menggunakan metode dan fungsionalitas yang disediakan oleh UserRepository untuk mengelola data pengguna di dalam sistem.

    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $users = $this->userRepository->getAll(); //mengambil data dari UserRepostory pada function getAll();
        return view('page.users.user', compact( //menuju page yang di tuju sambil membawa varible users
            'users'
        )); //struktur folder di atas berarti (page/users/user) -> user adalah nama filenya
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->userRepository->add(); //variable data di gunakan untuk memanggil function add pada UserRepository
        return view('page.users.create', compact(
            'data'
        )); //menuju ke halaman create sambil membawa variable data
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ]); //validasi data yang di inputkan

        $this->userRepository->create($data); //menambahkan data yang di inputkan ke dalam database

        return redirect('users')->with('success', 'User created successfully'); //redirect ke halaman user
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->userRepository->find($id);
        return view('page.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->userRepository->find($id); //mengambil data berdasarkan id yang di kirimkan
        return view('page.users.edit', compact(
            'data'
        )); //menampilkan data di halaman edit sesuai id yang di kirimkan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id, //required -> field tidak boleh kosong dan email-> harus berupa alamat email yang valid
            // unique:users,email,' . $id -> Ini adalah aturan validasi yang menyatakan bahwa isi field harus unik dalam tabel users, namun mengabaikan record dengan id yang sama dengan $id. 
            // Dengan kata lain, ini memungkinkan email yang sama digunakan jika itu adalah email dari record yang sedang diedit.
            // 'password' => 'required|min:3',
        ]); //validasi input edit data

        $this->userRepository->update($id, $data); //update data berdasarkan id

        return redirect('users')->with('success', 'User updated successfully'); //redirect ke halaman users
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->userRepository->delete($id); //menghapus data berdasarkan id
        return redirect('users')->with('success-danger', 'User deleted successfully');
    }
}
