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
        return view('register', [
            'packages' => $this->packageModel->findAll()
        ]);
    }

    public function register()
    {
        return "halo";
    }
}
