@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.subrace.index') }}">Подрасы</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row mb-4">
            <div class="col-xl-12 col-md-6">
                <h1 class="h3 mb-4 text-gray-800">Редактирование Подрасы</h1> <!-- Увеличен отступ снизу -->
            </div>
            <form action="{{ route('admin.subrace.update', $subrace->id) }}" method="POST" class="col-xl-12 col-md-6">
                @csrf
                @method('PATCH')

                <div class="form-group mb-2">
                    <input
                        id="name"
                        class="form-control col-2"
                        name="name"
                        placeholder="Измените название"
                        value="{{ old('name', $subrace->name) }}"
                    >
                    @error('name')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="race_id">Принадлежит Расе</label>
                    <select id="race_id" class="form-control col-2" name="race_id">
                        <option value="">Выберите расу</option>
                        @foreach($races as $race)
                            <option value="{{ $race->id }}">{{ $race->name }}</option>
                        @endforeach
                    </select>
                    @error('race_id')
                    <div class="text-danger">Выберите расу</div>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>

    </div>
@endsection
