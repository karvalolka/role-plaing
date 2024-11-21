@extends('admin.layouts.main')

@section('content')
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
            <div class="col-xl-4 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Способностей</h1>
                <form action="{{ route('admin.skill.update', $skill->id) }}" method="POST" class="mb-4">
                    @csrf
                    @method('PATCH')

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Название:</label>
                        <input id="name" name="name" class="form-control" placeholder="Введите название"
                               value="{{ old('name', $skill->name) }}" required>
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cost">Уровень:</label>
                        <input type="number" id="cost" name="level" class="form-control" placeholder="Введите уровень" value="{{ old('level', $skill->level) }}" required>
                        @error('level')
                        <div class="text-danger">Пожалуйста, введите число</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="grade">Выберите класс:</label>
                        <select id="grade" class="form-control" name="class_id">
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}"
                                    {{ old('class_id', $skill->grades->first()->id ?? '') == $grade->id ? 'selected' : '' }}>
                                    {{ $grade->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('class_id')
                        <div class="text-danger">Пожалуйста, выберите класс</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Описание навыка:</label>
                        <textarea id="description" class="form-control" name="description" rows="5"
                                  style="resize: both;"
                                  placeholder="Введите текст">{{ old('description', $skill->description) }}</textarea>
                        @error('description')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary" value="Обновить">
                </form>
            </div>
        </div>
    </div>

@endsection
