<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use App\Models\Cube;
use App\Models\Grade;
use App\Models\Race;
use App\Models\TypeAbility;
use App\Models\User;

class EditUserController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }

}
