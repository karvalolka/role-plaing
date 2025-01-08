@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <!-- Навигация - хлебные крошки -->
        <div class="row mb-4">
            <div class="col-12 text-right">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.mechanic.index') }}">Механики</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="h3 mb-0 text-gray-800">Добавление Механика</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.mechanic.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="types" class="form-label">Тип:</label>
                                <input id="types" name="types" class="form-control" placeholder="Введите тип" required>
                                @error('types')
                                <div class="text-danger small">Заполните поле</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="icon_svg" class="form-label">Иконка:</label>
                                <input id="icon_svg" name="icon_svg" class="form-control" placeholder="Введите svg">
                            </div>

                            <div class="form-group mb-3">
                                <label for="conditions" class="form-label">Условия:</label>
                                <textarea id="conditions" class="form-control" name="conditions" rows="5" style="resize: both;" placeholder="Введите текст" required>{{ old('conditions') }}</textarea>
                                @error('conditions')
                                <div class="text-danger small">Заполните поле</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
