@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.freePoint.index') }}">Свободные очки</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Свободных очков</h1>
                <form action="{{ route('admin.freePoint.update', $freePoint->id) }}" method="POST" class="mb-4">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-3">
                        <label for="cost" class="form-label">Стоимость:</label>
                        <input type="number" id="cost" name="points" class="form-control" placeholder="Введите стоимость"
                               value="{{ old('points', $freePoint->points) }}" required>
                        @error('points')
                        <div class="text-danger small">Пожалуйста, введите число</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="name_or_gold">Выберите тип:</label>
                        <select class="form-control" id="name_or_gold" name="type" required>
                            <option value="" disabled>Выберите тип</option>
                            <option value="name" {{ old('type', $freePoint->name ? 'name' : 'gold') == 'name' ? 'selected' : '' }}>Имя</option>
                            <option value="gold" {{ old('type', $freePoint->gold ? 'gold' : 'name') == 'gold' ? 'selected' : '' }}>Золото</option>
                        </select>
                    </div>

                    <div class="form-group" id="name_field" style="display: {{ old('type', $freePoint->name ? 'name' : 'gold') == 'name' ? 'block' : 'none' }}">
                        <textarea id="story" class="form-control" name="name" rows="5" style="resize: both;" placeholder="Введите текст">{{ old('name', $freePoint->name) }}</textarea>
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>

                    <div class="form-group" id="gold_field" style="display: {{ old('type', $freePoint->gold ? 'gold' : 'name') == 'gold' ? 'block' : 'none' }}">
                        <input type="number" id="gold" name="gold" class="form-control" placeholder="Введите количество золота" step="any" value="{{ old('gold', $freePoint->gold) }}">
                        @error('gold')
                        <div class="text-danger small">Пожалуйста, введите количество золота</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="cost" class="form-label">Иконка:</label>
                        <input id="cost" name="icon_svg" class="form-control" placeholder="Введите svg"
                               value="{{ old('icon_svg', $freePoint->icon_svg) }}">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Обновить">
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('name_or_gold').addEventListener('change', function () {
            var nameField = document.getElementById('name_field');
            var goldField = document.getElementById('gold_field');

            nameField.style.display = 'none';
            goldField.style.display = 'none';

            if (this.value === 'name') {
                nameField.style.display = 'block';
            } else if (this.value === 'gold') {
                goldField.style.display = 'block';
            }
        });
    </script>
@endsection
