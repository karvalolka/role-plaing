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
                        <label for="name" class="form-label">Предмет:</label>
                        <textarea class="form-control" id="name" name="name" placeholder="Измените историю"
                                  style="min-height: 100px; resize: vertical;">{{ old('name', $freePoint->name) }}</textarea>
                        @error('name')
                        <div class="text-danger small">Заполните поле</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Обновить">
                </form>
            </div>
        </div>
    </div>
@endsection
