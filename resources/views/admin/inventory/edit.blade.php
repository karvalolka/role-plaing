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
            <div class="col-xl-12 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Инвентаря</h1>
            </div>
            <form action="{{ route('admin.inventory.update', $inventory->id) }}" method="POST"
                  class="col-xl-12 col-md-6 mb-4">
                @csrf
                @method('PATCH')
                <div class="form-group col-3">
                    <label for="cube" class="form-label">Выберите куб:</label>
                    <select id="cube" class="form-control custom-select" name="cube">
                        @foreach ($cubes as $cube)
                            <option value="{{ $cube->id }}"
                                {{ old('cube', $inventory->cube_id) == $cube->id ? 'selected' : '' }}>
                                {{ $cube->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('cube')
                    <div class="text-danger mt-2" style="font-size: 0.875rem;">Пожалуйста, выберите значение куба</div>
                    @enderror
                </div>


                <div class="form-group col-3">
                    <label for="gold">Введите количества золота</label>
                    <input type="number" class="form-control" name="gold" value="{{ old('gold', $inventory->gold) }}"
                           placeholder="Введите число" required step="any" min="0">
                    @error('gold')
                    <div class="text-danger">Заполните поле корректно</div>
                    @enderror
                </div>
                <div class="form-group col-3">
                    <textarea class="form-control" name="structure" placeholder="Измените историю"
                              style="min-height: 150px; resize: vertical;">{{$inventory->structure}}</textarea>
                    @error('structure')
                    <div class="text-danger">Заполните поле</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
    </div>
@endsection
