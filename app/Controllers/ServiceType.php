<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceTypeModel;
use CodeIgniter\HTTP\ResponseInterface;

class ServiceType extends BaseController
{
    private $serviceType;
    private $serviceTypeList;

    public function __construct()
    {
        $this->serviceType = new ServiceTypeModel();
        $this->serviceTypeList = [
            'serviceTypes' => $this->serviceType->findAll(),
        ];
    }

    public function index()
    {
        //
    }
}
