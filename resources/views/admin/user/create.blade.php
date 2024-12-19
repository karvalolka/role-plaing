@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">

                            <li style="display: inline; margin-left: 10px;"><a href="{{route('admin.user.index')}}">Пользователи</a>
                            </li>

                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Пользователя</h1>
                </div>
                <form action="{{ route('admin.user.store') }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <label for="story">Введите имя пользователя</label>
                        <input class="form-control" name="name" placeholder="Введите имя пользователя" required>

                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="story">Введите Email</label>
                        <input class="form-control" name="email" placeholder="Email" required>

                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="story">Введите пароль</label>
                        <input class="form-control" name="password" placeholder="Введите пароль" required>

                        @error('password')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Роль:</label>
                        <select class="select2" name="role">
                            @foreach ($roles as $id => $role)
                                <option value="{{ $id }}" {{ $id == old('role_id') ? 'selected' : '' }}>{{ $role}}</option>
                            @endforeach
                        </select>
                        @error('role')
                        <div class="text-danger">Пожалуйста, выберите роль</div>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>
            </div>

        </div>
    </div>
@endsection
