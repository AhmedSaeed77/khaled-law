<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\User\UserRequest;
use App\Http\Services\Dashboard\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private readonly UserService $user)
    {
        $this->middleware('check_permission:users-read')->only('index');
        $this->middleware('check_permission:users-create')->only('create','store');
        $this->middleware('check_permission:users-update')->only('edit','update');
        $this->middleware('check_permission:users-delete')->only('destroy');
    }

    public function index()
    {
        return $this->user->index();
    }

    public function show($id)
    {
        return $this->user->show($id);
    }

    public function create()
    {
        return $this->user->create();
    }

    public function store(UserRequest $request)
    {
        return $this->user->store($request);
    }

    public function edit(string $id)
    {
        return $this->user->edit($id);
    }

    public function update(UserRequest $request, string $id)
    {
        return $this->user->update($request, $id);
    }

    public function destroy(string $id)
    {
        return $this->user->destroy($id);
    }

    public function toggle(Request $request)
    {
        return $this->user->toggle($request);
    }
}
