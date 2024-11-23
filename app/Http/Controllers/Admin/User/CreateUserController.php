<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Cube;
use App\Models\Grade;
use App\Models\Race;
use App\Models\TypeAbility;
use App\Models\User;

class CreateUserController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRoles();
        return view('admin.user.create', compact('roles'));
    }
}
