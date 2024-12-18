@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.typeAbility.index') }}">Тип навыка</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Типа навыков</h1>
            </div>
            <form action="{{ route('admin.typeAbility.update', $typeAbility->id) }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                @csrf
                @method('PATCH')
                <div class="form-group col-1 ">
                    <input
                        class="form-control"
                        name="name"
                        placeholder="Введите число"
                        value="{{ old('name', $typeAbility->name) }}"
                        required
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
