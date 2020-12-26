<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiControllerTrait;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = ['bank'];

    public function __construct(Account $model)
    {
        $this->model = $model;
    }
}
