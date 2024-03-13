<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Jiannei\Response\Laravel\Support\Traits\JsonResponseTrait;

abstract class Controller
{
    use JsonResponseTrait,ValidatesRequests;
}
