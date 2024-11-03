@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.ability.index') }}">Навыки</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Навыков</h1>
                <form action="{{ route('admin.ability.update', $ability->id) }}" method="POST" class="mb-4">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-3">
                        <label for="cost" class="form-label">Название:</label>
                        <input id="cost" name="name" class="form-control" placeholder="Введите название"
                               value="{{ old('name', $ability->name) }}" required>
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="class_race" class="form-label">Тип способности:</label>
                        <select id="class_race" class="form-control" name="class_race" required>
                            <option value="">Выберите тип</option>
                            <option value="class" {{ old('class_race', $ability->class_race ?? '') === 'class' ? 'selected' : '' }}>Класс</option>
                            <option value="race" {{ old('class_race', $ability->class_race ?? '') === 'race' ? 'selected' : '' }}>Раса</option>
                            <option value="other" {{ old('class_race', $ability->class_race ?? '') === 'other' ? 'selected' : '' }}>Другое</option>
                        </select>
                        @error('class_race')
                        <div class="text-danger">Пожалуйста, выберите тип способности</div>
                        @enderror
                    </div>

                    @php

                        $conditions = json_decode($ability->condition, true) ?? [];
                        if (!is_array($conditions)) {
                            $conditions = [$conditions];
                        }
                    @endphp

                    <div class="form-group" id="cube-container" style="{{ !empty($conditions) && count(array_intersect($conditions, range(1, 6))) > 0 ? 'display: block;' : 'display: none;' }}">
                        <label for="cube">Выберите куб:</label>
                        <select id="cube" class="select2 form-control" name="condition[]" multiple="multiple" data-placeholder="Выберите куб" style="width: 100%;">
                            @foreach(range(1, 6) as $cube)
                                <option value="{{ $cube }}" {{ in_array($cube, $conditions) ? 'selected' : '' }}>{{ $cube }}</option>
                            @endforeach
                        </select>
                        @error('condition')
                        <div class="text-danger">Пожалуйста, выберите значения куба</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea id="story" class="form-control" name="description" rows="5" style="resize: both;"
                                  placeholder="Введите текст">{{$ability->description}}</textarea>
                        @error('description')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary" value="Обновить">
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const classRaceSelect = document.getElementById('class_race');
            const cubeContainer = document.getElementById('cube-container');

            // Проверка для показа/скрытия блока выбора куба
            classRaceSelect.addEventListener('change', function() {
                cubeContainer.style.display = this.value === 'other' ? 'block' : 'none';
            });

            // Инициализация видимости блока выбора куба при загрузке страницы
            if (classRaceSelect.value === 'other') {
                cubeContainer.style.display = 'block';
            }
        });
    </script>
@endsection
