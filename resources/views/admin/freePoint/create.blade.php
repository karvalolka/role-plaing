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
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Свободных очков</h1>
                </div>
                <form action="{{ route('admin.freePoint.store') }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <label for="cost">Стоимость:</label>
                        <input type="number" id="cost" name="points" class="form-control" placeholder="Введите стоимость" required>
                        @error('points')
                        <div class="text-danger">Пожалуйста, введите число</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name_or_gold">Выберите тип:</label>
                        <select class="form-control" id="name_or_gold" name="type" required>
                            <option value="" disabled selected>Выберите тип</option>
                            <option value="name">Имя</option>
                            <option value="gold">Золото</option>
                        </select>
                    </div>

                    <div class="form-group" id="name_field" style="display: none;">
                        <textarea id="story" class="form-control" name="name" rows="5" style="resize: both;" placeholder="Введите текст"></textarea>
                        @error('name')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>

                    <div class="form-group" id="gold_field" style="display: none;">
                        <input type="number" id="gold" name="gold" class="form-control" placeholder="Введите количество золота" step="any">
                        @error('gold')
                        <div class="text-danger">Пожалуйста, введите количество золота</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cost">Иконка:</label>
                        <input id="cost" name="icon_svg" class="form-control" placeholder="Введите svg">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Добавить">
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
