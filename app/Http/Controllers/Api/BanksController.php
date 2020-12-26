<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiControllerTrait;
use App\Models\Bank;
use Illuminate\Http\Request;

class BanksController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(Bank $model)
    {
        $this->model = $model;
    }
}
