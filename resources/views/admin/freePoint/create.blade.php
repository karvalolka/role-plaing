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
                        <textarea id="story" class="form-control" name="name" rows="5" style="resize: both;" placeholder="Введите текст"></textarea>
                        @error('name')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection
