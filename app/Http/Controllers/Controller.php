<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Jiannei\Response\Laravel\Support\Traits\JsonResponseTrait;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, JsonResponseTrait;
}
