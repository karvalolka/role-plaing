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
                        <label for="name" class="form-label">Название:</label>
                        <input id="name" name="name" class="form-control" placeholder="Введите название"
                               value="{{ old('name', $ability->name) }}" required>
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Тип способности:</label>
                        <select class="select2" name="type_ability[]" id="type_ability" multiple="multiple"
                                data-placeholder="Выберите тип" style="width: 100%;">
                            @foreach ($typeAbilities as $type)
                                <option value="{{ $type->id }}"
                                        @if(in_array($type->id, old('type_ability', $selectedTypeAbilities))) selected @endif>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_ability')
                        <div class="text-danger">Пожалуйста, выберите тип способности</div>
                        @enderror
                    </div>

                    <div class="form-group" id="class-container" style="display: none;">
                        <label for="grade">Выберите класс:</label>
                        <select id="grade" class="form-control" name="class_id[]" multiple="multiple">
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}"
                                        @if(in_array($grade->id, old('class_id', $selectedGrades->toArray())))
                                            selected
                                    @endif>
                                    {{ $grade->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('class_id')
                        <div class="text-danger">Пожалуйста, выберите класс</div>
                        @enderror
                    </div>

                    <div class="form-group" id="race-container" style="display: none;">
                        <label for="race">Выберите расу:</label>
                        <select id="race" class="form-control" name="race_id[]" multiple="multiple">
                            @foreach($races as $race)
                                <option value="{{ $race->id }}"
                                        @if(in_array($race->id, old('race_id', $selectedRaces->toArray())))
                                            selected
                                    @endif>
                                    {{ $race->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('race_id')
                        <div class="text-danger">Пожалуйста, выберите расу</div>
                        @enderror
                    </div>

                    <div class="form-group" id="cube-container" style="display: none;">
                        <label for="cube">Выберите куб:</label>
                        <select id="cube" class="form-control" name="condition[]" multiple="multiple">
                            @foreach($cubes as $cube)
                                <option value="{{ $cube->id }}"
                                        @if(in_array($cube->id, old('condition', $selectedCubes->toArray())))
                                            selected
                                    @endif>
                                    {{ $cube->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('condition')
                        <div class="text-danger">Пожалуйста, выберите значения куба</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Описание навыка:</label>
                        <textarea id="description" class="form-control" name="description" rows="5"
                                  style="resize: both;"
                                  placeholder="Введите текст">{{ old('description', $ability->description) }}</textarea>
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
        document.addEventListener('DOMContentLoaded', function () {
            const abilityTypeSelect = document.getElementById('type_ability');
            const classContainer = document.getElementById('class-container');
            const raceContainer = document.getElementById('race-container');
            const cubeContainer = document.getElementById('cube-container');

            const raceAbilityId = '1';
            const classAbilityId = '2';
            const cubeAbilityId = '3';


            function updateFieldsVisibility() {
                const selectedAbilities = Array.from(abilityTypeSelect.selectedOptions).map(option => option.value);

                classContainer.style.display = selectedAbilities.includes(classAbilityId) ? 'block' : 'none';
                raceContainer.style.display = selectedAbilities.includes(raceAbilityId) ? 'block' : 'none';
                cubeContainer.style.display = selectedAbilities.includes(cubeAbilityId) ? 'block' : 'none';
            }

            abilityTypeSelect.addEventListener('change', updateFieldsVisibility);

            updateFieldsVisibility();

            $('.select2').select2();
        });
    </script>
@endsection
