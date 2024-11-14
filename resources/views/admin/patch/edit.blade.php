@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.patch.index') }}">Патч</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Патча</h1>
            </div>
            <form action="{{ route('admin.patch.update', $patch->id) }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                @csrf
                @method('PATCH')
                <div class="form-group col-3 ">
                    <input
                        class="form-control"
                        name="number"
                        placeholder="Введите номер патча"
                        value="{{ old('number', $patch->number) }}"
                        required
                    >

                    @error('number')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" placeholder="Измените историю" style="min-height: 150px; resize: vertical;">{{$patch->description}}</textarea>
                    @error('description')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
    </div>
@endsection
