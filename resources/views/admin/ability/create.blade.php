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
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Навыков</h1>
                </div>
                <form action="{{ route('admin.ability.store') }}" method="POST" class="col-xl-12 col-md-8 mb-4">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="cost" class="form-label">Название:</label>
                        <input id="cost" name="name" class="form-control" placeholder="Введите название" required>
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="class_race" class="form-label">Тип способности:</label>
                        <select id="class_race" class="form-control" name="class_race" required>
                            <option value="">Выберите тип</option>
                            <option value="class">Класс</option>
                            <option value="race">Раса</option>
                            <option value="other">Другое</option>
                        </select>
                        @error('class_race')
                        <div class="text-danger">Пожалуйста, выберите тип способности</div>
                        @enderror
                    </div>
                    <div class="form-group" id="cube-container" style="display: none;">
                        <label for="cube">Выберите куб:</label>
                        <select id="cube" class="select2 form-control" name="condition[]" multiple="multiple"
                                data-placeholder="Выберите куб" style="width: 100%;">
                            @for ($i = 1; $i <= 6; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('condition')
                        <div class="text-danger">Пожалуйста, выберите значения куба</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea id="story" class="form-control" name="description" rows="5" style="resize: both;"
                                  placeholder="Введите текст"></textarea>
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
        document.addEventListener('DOMContentLoaded', function() {
            const classRaceSelect = document.getElementById('class_race');
            const cubeContainer = document.getElementById('cube-container');

            classRaceSelect.addEventListener('change', function() {
                if (this.value === 'other') {
                    cubeContainer.style.display = 'block';
                } else {
                    cubeContainer.style.display = 'none';
                }
            });
        });
    </script>
@endsection
