@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.cube.index') }}">D6</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Граней куба</h1>
            </div>
            <form action="{{ route('admin.cube.update', $cube->id) }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                @csrf
                @method('PATCH')

                <div class="form-group col-1">
                    <input
                        type="number"
                        class="form-control"
                        name="name"
                        placeholder="Введите число"
                        value="{{ old('name', $cube->name) }}"
                        required
                    >

                    @error('name')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <input
                        class="form-control"
                        name="icon_svg"
                        placeholder="Введите svg"
                        value="{{ old('icon_svg', $cube->icon_svg) }}"
                    >
                </div>
                @if($cube->icon_svg)
                    <div class="form-group">
                        <label>Превью иконки:</label>
                        <div style="max-width: 100px; max-height: 100px; overflow: hidden;">
                            {!! $cube->icon_svg !!}
                        </div>
                    </div>
                @endif

                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>

        </div>
    </div>
@endsection
