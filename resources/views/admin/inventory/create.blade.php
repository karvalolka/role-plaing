@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.inventory.index') }}">Инвентарь</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Инвенторя</h1>
                </div>
                <form action="{{ route('admin.inventory.store') }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <label for="cube">Выберите куб:</label>
                        <select id="cube" class="form-control" name="cube">
                            @for ($i = 1; $i <= 6; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('cube')
                        <div class="text-danger">Пожалуйста, выберите значение куба</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gold">Введите количество золота</label>
                        <input type="number" class="form-control" name="gold" placeholder="Введите число" required step="any" min="0">
                        @error('gold')
                        <div class="text-danger">Заполните поле корректно</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <textarea id="story" class="form-control" name="structure" rows="5" style="resize: both;" placeholder="Введите текст"></textarea>
                        @error('structure')
                        <div class="text-danger">Заполните поле</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection
