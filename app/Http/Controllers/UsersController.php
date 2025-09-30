<?php

namespace App\Http\Controllers;

use App\Enums\ResponseEnum;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return $this->success(UserResource::collection($users));
    }

    public function paginate()
    {
        $users = User::paginate(5);

        return $this->success(UserResource::collection($users));
    }

    public function simplePaginate()
    {
        $users = User::simplePaginate(5);

        return $this->success(UserResource::collection($users));
    }

    public function cursorPaginate()
    {
        $users = User::cursorPaginate(5);

        return $this->success(UserResource::collection($users));
    }

    public function item()
    {
        $user = User::first();

        return $this->created(UserResource::make($user));
    }

    public function array()
    {
        return $this->success([
            'name' => 'Jiannel',
            'email' => 'longjian.huang@foxmail.com',
        ], '', ResponseEnum::SERVICE_REGISTER_SUCCESS);
    }

    public function failure()
    {
        return $this->fail();
    }

    public function exception()
    {
        abort(500102, '异常信息');
    }

    public function validationException(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
    }
}
