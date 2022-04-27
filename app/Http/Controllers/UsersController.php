<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Enums\ResponseCodeEnum;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return $this->success(new UserCollection($users));
    }

    public function paginate()
    {
        $users = User::paginate(5);

        return $this->success(new UserCollection($users));
    }

    public function simplePaginate()
    {
        $users = User::simplePaginate(5);

        return $this->success(new UserCollection($users));
    }

    public function item()
    {
        $user = User::first();

        return $this->created(new UserResource($user));
    }

    public function array()
    {
        return $this->success([
            'name' => 'Jiannel',
            'email' => 'longjian.huang@foxmail.com'
        ],'', ResponseCodeEnum::SERVICE_REGISTER_SUCCESS);
    }

    public function failure()
    {
        $this->fail();
    }

    public function exception()
    {
        abort(ResponseCodeEnum::SERVICE_LOGIN_ERROR);
    }

    public function validationException(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
    }
}
