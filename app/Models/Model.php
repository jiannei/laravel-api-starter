<?php


namespace App\Models;


use App\Support\Traits\SerializeDate;
use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    use SerializeDate;
}
