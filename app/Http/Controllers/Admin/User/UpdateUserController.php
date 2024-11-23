<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function __invoke(Request $request, User $user)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users, email' . $user->id,
            'role' => 'required|integer',
        ]);

        $user->update($data);
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Имя должно быть строкой',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Ваша почта должна соответствовать формату mail@some.domain',
            'email.unique' => 'Пользователь с email таким уже существует',
        ];
    }
}
