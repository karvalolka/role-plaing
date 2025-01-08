@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12 text-right">
                <nav aria-label="Breadcrumb">
                    <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                        <li style="display: inline; margin-left: 10px;">
                            <a href="{{ route('admin.mechanic.index') }}">Механики</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Механик</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-12">
                <form action="{{ route('admin.mechanic.update', $mechanic->id) }}" method="POST" class="card shadow-sm p-4">
                    @csrf
                    @method('PATCH')

                    <div class="form-group mb-3">
                        <label for="types" class="form-label">Название:</label>
                        <input id="types" name="types" class="form-control" placeholder="Введите название" value="{{ old('types', $mechanic->types) }}" required>
                        @error('types')
                        <div class="text-danger small mt-2">Заполните поле</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="icon_svg" class="form-label">Иконка:</label>
                        <input id="icon_svg" name="icon_svg" class="form-control" placeholder="Введите svg" value="{{ old('types', $mechanic->icon_svg) }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="conditions" class="form-label">Условия:</label>
                        <textarea id="conditions" class="form-control" name="conditions" placeholder="Измените условия" style="min-height: 150px; resize: vertical;" required>{{ old('conditions', $mechanic->conditions) }}</textarea>
                        @error('conditions')
                        <div class="text-danger small mt-2">Заполните поле</div>
                        @enderror
                    </div>
                    @if($mechanic->icon_svg)
                        <div class="form-group">
                            <label>Превью иконки:</label>
                            <div>
                                {!! $mechanic->icon_svg !!}
                            </div>
                        </div>
                    @endif
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            Обновить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
