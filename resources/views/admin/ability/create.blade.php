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
                                <a href="{{ route('admin.ability.index') }}">Навыки</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>

        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Навыков</h1>
                </div>
                <form action="{{ route('admin.ability.store') }}" method="POST" class="col-xl-12 col-md-8 mb-4">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Название:</label>
                        <input id="name" name="name" class="form-control" placeholder="Введите название" required value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Тип способности:</label>
                        <select class="select2" name="type_ability[]" id="type_ability" multiple="multiple" data-placeholder="Выберите тип" style="width: 100%;">
                            @foreach ($typeAbilities as $type)
                                <option value="{{ $type->id }}" {{ in_array($type->id, old('type_ability', [])) ? 'selected' : '' }}>{{ $type->name }}</option>
                            @endforeach
                        </select>
                        @error('type_ability')
                        <div class="text-danger">Пожалуйста, выберите тип способности</div>
                        @enderror
                    </div>

                    <div class="form-group" id="class-container" style="display: none;">
                        <label for="grade">Выберите класс:</label>
                        <select id="grade" class="form-control" name="class_id[]">
                            <option value="">Выберите класс</option>
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}" {{ in_array($grade->id, old('class_id', [])) ? 'selected' : '' }}>{{ $grade->name }}</option>
                            @endforeach
                        </select>
                        @error('class_id')
                        <div class="text-danger">Пожалуйста, выберите класс</div>
                        @enderror
                    </div>

                    <div class="form-group" id="race-container" style="display: none;">
                        <label for="race">Выберите расу:</label>
                        <select id="race" class="select2 form-control" name="race_id[]" multiple="multiple" data-placeholder="Выберите расу" style="width: 100%;">
                            @foreach($races as $race)
                                <option value="{{ $race->id }}" {{ in_array($race->id, old('race_id', [])) ? 'selected' : '' }}>{{ $race->name }}</option>
                            @endforeach
                        </select>
                        @error('race_id')
                        <div class="text-danger">Пожалуйста, выберите расу</div>
                        @enderror
                    </div>

                    <div class="form-group" id="cube-container" style="display: none;">
                        <label for="cube">Выберите куб:</label>
                        <select id="cube" class="select2 form-control" name="condition[]" multiple="multiple" data-placeholder="Выберите куб" style="width: 100%;">
                            @foreach($cubes as $cube)
                                <option value="{{ $cube->id }}" {{ in_array($cube->id, old('condition', [])) ? 'selected' : '' }}>{{ $cube->name }}</option>
                            @endforeach
                        </select>
                        @error('condition')
                        <div class="text-danger">Пожалуйста, выберите значения куба</div>
                        @enderror
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const abilityTypeSelect = document.getElementById('type_ability');
            const classContainer = document.getElementById('class-container');
            const raceContainer = document.getElementById('race-container');
            const cubeContainer = document.getElementById('cube-container');

            // IDs для типов способностей
            const raceAbilityId = '1';
            const classAbilityId = '2';
            const cubeAbilityId = '3';

            // Функция для обновления видимости элементов в зависимости от выбранных типов способностей
            function updateFieldsVisibility() {
                const selectedAbilities = Array.from(abilityTypeSelect.selectedOptions).map(option => option.value);

                classContainer.style.display = selectedAbilities.includes(classAbilityId) ? 'block' : 'none';
                raceContainer.style.display = selectedAbilities.includes(raceAbilityId) ? 'block' : 'none';
                cubeContainer.style.display = selectedAbilities.includes(cubeAbilityId) ? 'block' : 'none';
            }

            abilityTypeSelect.addEventListener('change', updateFieldsVisibility);

            updateFieldsVisibility();

            // Инициализация Select2
            $('.select2').select2();
        });
    </script>
@endsection
