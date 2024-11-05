@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.subgrade.index') }}">Подклассы</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Добавление Подкласса</h1>
            </div>
            <form action="{{ route('admin.subgrade.store') }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                @csrf
                <div class="form-group">
                    <label for="name">Название</label>
                    <input id="name" class="form-control" name="name" placeholder="Введите название" style="max-width: 300px;">
                    @error('name')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="grade_id">Принадлежит Классу</label>
                    <select id="grade_id" class="form-control" name="grade_id" style="max-width: 300px;">
                        <option value="">Выберите расу</option>
                        @foreach($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>
                    @error('grade_id')
                    <div class="text-danger">Выберите класс</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>

        </div>
    </div>
@endsection
