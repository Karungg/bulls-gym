<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Package;
use CodeIgniter\HTTP\ResponseInterface;

class PackageController extends BaseController
{
    protected $packageModel;

    public function __construct()
    {
        $this->packageModel = new \App\Models\Package();
    }

    public function index()
    {
        return view('packages/index', [
            'packages' => $this->packageModel->findAll()
        ]);
    }

    public function create()
    {
        return view('packages/create');
    }

    public function store()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'nama_paket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Paket harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Deskripsi harus diisi'
                ]
            ],
            'durasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Harga harus diisi'
                ]
            ]
        ]);

        if (!$validation) {
            return view('packages/create', [
                'validation' => $this->validator
            ]);
        } else {
            $this->packageModel->insert([
                'nama_paket' => $this->request->getPost('nama_paket'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'durasi' => $this->request->getPost('durasi'),
                'harga' => $this->request->getPost('harga'),
            ]);

            session()->setFlashdata('success', 'Tambah data paket berhasil.');

            return redirect()->to(base_url('admin/packages'));
        }
    }

    public function edit($id)
    {
        $package = $this->packageModel->find($id);

        return view('packages/edit', [
            'package' => $package
        ]);
    }

    public function update()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'nama_paket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Paket harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Deskripsi harus diisi'
                ]
            ],
            'durasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Harga harus diisi'
                ]
            ]
        ]);

        if (!$validation) {
            return view('packages/create', [
                'validation' => $this->validator
            ]);
        } else {
            $this->packageModel->update($this->request->getPost('id_paket'), [
                'nama_paket' => $this->request->getPost('nama_paket'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'durasi' => $this->request->getPost('durasi'),
                'harga' => $this->request->getPost('harga'),
            ]);

            session()->setFlashdata('success', 'Ubah data paket berhasil.');

            return redirect()->to(base_url('admin/packages'));
        }
    }

    public function destroy($id)
    {
        $this->packageModel->delete($id);

        session()->setFlashdata('success', 'Data paket berhasil dihapus.');

        return redirect()->to(base_url('admin/packages'));
    }
}
