@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.subgrade.index') }}">Подкласс</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row mb-4">
            <div class="col-xl-12 col-md-6">
                <h1 class="h3 mb-4 text-gray-800">Редактирование Подкласса</h1>
            </div>
            <form action="{{ route('admin.subgrade.update', $subgrade->id) }}" method="POST" class="col-xl-12 col-md-6">
                @csrf
                @method('PATCH')

                <div class="form-group mb-2">
                    <input
                        id="name"
                        class="form-control col-2"
                        name="name"
                        placeholder="Измените название"
                        value="{{ old('name', $subgrade->name) }}"
                    >
                    @error('name')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="grade_id">Принадлежит Классу</label>
                    <select id="grade_id" class="form-control col-2" name="grade_id">
                        <option value="">Выберите расу</option>
                        @foreach($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>
                    @error('grade_id')
                    <div class="text-danger">Выберите расу</div>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>

    </div>
@endsection
