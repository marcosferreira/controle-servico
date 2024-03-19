<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SectorModel;
use CodeIgniter\HTTP\ResponseInterface;

class Sector extends BaseController
{
    private $sector;
    private $sectorList;

    public function __construct()
    {
        $this->sector = new SectorModel();
        $this->sectorList = [
            'sectors' => $this->sector->findAll(),
        ];
    }

    public function index()
    {
        //
    }
}
