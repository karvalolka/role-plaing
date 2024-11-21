@extends('admin.layouts.main')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.skill.index') }}">Способности</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>

        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Способностей</h1>
                </div>
                <form action="{{ route('admin.skill.store') }}" method="POST" class="col-xl-12 col-md-8 mb-4">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Название:</label>
                        <input id="name" name="name" class="form-control" placeholder="Введите название" required>
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cost">Уровень:</label>
                        <input type="number" id="cost" name="level" class="form-control" placeholder="Введите уровень" required>
                        @error('level')
                        <div class="text-danger">Пожалуйста, введите число</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="grade">Выберите класс:</label>
                        <select id="grade" class="form-control" name="class_id">
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}" {{ old('class_id') == $grade->id ? 'selected' : '' }}>
                                    {{ $grade->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Описание навыка:</label>
                        <textarea id="description" class="form-control" name="description" rows="5" style="resize: both;" placeholder="Введите текст">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection
