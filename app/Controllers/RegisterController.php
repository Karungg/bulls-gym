<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RegisterController extends BaseController
{
    protected $packageModel;

    public function __construct()
    {
        $this->packageModel = new \App\Models\Package();
    }

    public function index()
    {
        helper('form');

        return view('register', [
            'packages' => $this->packageModel->findAll()
        ]);
    }

    public function register()
    {
        $nama_lengkap = $this->request->getPost('nama_lengkap');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $no_telp = $this->request->getPost('no_telp');
        $no_ktp = $this->request->getPost('no_ktp');
        $alamat = $this->request->getPost('alamat');
        $foto_ktp = $this->request->getFile('foto_ktp');
        $foto_diri = $this->request->getFile('foto_diri');
        $paket = $this->request->getPost('paket');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        return "
        nama : $nama_lengkap,
        tanggal lahir : $tgl_lahir,
        jenis kelamin : $jenis_kelamin,
        no_telp : $no_telp,
        no_ktp : $no_ktp,
        alamat : $alamat,
        foto ktp : $foto_ktp,
        foto diri : $foto_diri,
        paket : $paket
        username : $username,
        password : $password
        ";
    }
}
