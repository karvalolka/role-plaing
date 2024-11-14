@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{route('admin.patch.index')}}">Патч</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>

        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Патча</h1>
                </div>
                <form action="{{ route('admin.patch.store') }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <label for="number">Номер патча</label>
                        <input class="form-control" name="number" placeholder="Введите номер патча" required>
                        @error('number')
                        <div class="text-danger">Заполните поле корректно</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Список изменений</label>
                        <textarea id="description" class="form-control" name="description" rows="5" style="resize: both;" placeholder="Напишите список изменений"></textarea>
                        @error('description')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection
