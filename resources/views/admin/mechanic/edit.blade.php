@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.mechanic.index') }}">Механики</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Механик</h1>
            </div>
            <form action="{{ route('admin.mechanic.update', $mechanic->id) }}" method="POST" class="mb-4">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <label for="cost" class="form-label">Стоимость:</label>
                    <input id="cost" name="types" class="form-control" placeholder="Введите стоимость"
                           value="{{ old('types', $mechanic->types) }}" required>
                    @error('types')
                    <div class="text-danger small">Заполните поле</div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="conditions" placeholder="Измените историю" style="min-height: 150px; resize: vertical;">{{$mechanic->conditions}}</textarea>
                    @error('conditions')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
    </div>
@endsection
