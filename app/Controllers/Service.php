<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceModel;
use CodeIgniter\HTTP\ResponseInterface;

class Service extends BaseController
{
    private $service;
    private $data;

    public function __construct()
    {
        $this->service = new ServiceModel();

        $this->data = [
            'service' => $this->service->findAll(),
        ];
    }

    public function index(): string
    {
        return view('home', $this->data);
    }

    public function store()
    {
        $request = $this->request->getPost();

        $this->service->save($request);

        return dd($request);
    }
}
