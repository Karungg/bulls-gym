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
}
