@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;"><a href="{{ route('admin.grade.index') }}">Классы</a></li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Класса</h1>
                </div>
                <form action="{{ route('admin.grade.store') }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <label for="story">Название</label>
                        <input id="story" class="form-control" name="name" placeholder="Введите название">
                        @error('name')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="icon">Иконка</label>
                        <input id="icon" class="form-control" name="icon_svg" placeholder="Введите svg">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>

            </div>
        </div>
    </div>
@endsection
