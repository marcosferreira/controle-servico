<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClaimantModel;
use CodeIgniter\HTTP\ResponseInterface;

class Claimant extends BaseController
{
    private $claimant;
    private $claimantList;

    public function __construct()
    {
        $this->claimant = new ClaimantModel();
        $this->claimantList = [
            'claimants' => $this->claimant->findAll()
        ];
    }

    public function index()
    {
        //
    }
}
