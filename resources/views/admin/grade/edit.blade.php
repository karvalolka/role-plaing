@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.grade.index') }}">Классы</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row mb-4">
            <div class="col-xl-12 col-md-6">
                <h1 class="h3 mb-4 text-gray-800">Редактирование Класса</h1>
            </div>
            <form action="{{ route('admin.grade.update', $grade->id) }}" method="POST" class="col-xl-12 col-md-6">
                @csrf
                @method('PATCH')

                <div class="form-group mb-3">
                    <label for="name">Название</label>
                    <input
                        id="name"
                        class="form-control"
                        name="name"
                        style="width: 200px;"
                    placeholder="Измените название"
                    value="{{ old('name', $grade->name) }}"
                    >
                    @error('name')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
    </div>
@endsection
