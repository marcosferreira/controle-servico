<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceCategoryModel;
use CodeIgniter\HTTP\ResponseInterface;

class ServiceCategory extends BaseController
{
    private $serviceCategory;
    private $data;

    public function __construct()
    {
        // $this->serviceCategory = new ServiceCategoryModel();

        // $this->data = [
        //     'serviceCategories' => $this->serviceCategory->findAll(),
        // ];
    }

    public function index()
    {
        return view('home');
    }
}
