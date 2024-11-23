@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.user.index') }}">Пользователь</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Пользователя</h1>
            </div>
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                @csrf
                @method('PATCH')
                <div class="form-group col-3 ">
                    <input class="form-control" name="name" placeholder="Введите имя пользователя" value="{{ old('name', $user->name) }}" required>

                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group col-3 ">
                    <input class="form-control" name="email" placeholder="Введите имя пользователя" value="{{ old('email', $user->email) }}" required>

                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Роль:</label>
                    <select class="select2" name="role">
                        @foreach ($roles as $id => $role)
                            <option value="{{ $id }}" {{ $id == $user->role ? 'selected' : '' }}>{{ $role}}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="text-danger">Пожалуйста, выберите тип способности</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                </div>

                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
    </div>
@endsection
