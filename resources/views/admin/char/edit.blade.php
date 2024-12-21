@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">
                                <a href="{{ route('admin.char.index') }}">Персонаж</a>
                            </li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Персонажа</h1>
            </div>
            <form action="{{ route('admin.char.update', $char->id) }}" method="POST" class="col-xl-12 col-md-6 mb-4">
                @csrf
                @method('PATCH')
                <div class="form-group col-3">
                    <input class="form-control" name="name" placeholder="Введите имя персонажа" value="{{ old('name', $char->name) }}" required>

                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group col-3" id="user-container">
                    <label for="user">Выберите Пользователя:</label>
                    <select id="user" class="select2 form-control" name="user_id">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <div class="text-danger">Пожалуйста, выберите пользователя</div>
                    @enderror
                </div>

                <div class="form-group col-3" id="user-container">
                    <label for="race">Выберите расу:</label>
                    <select id="race" class="select2 form-control" name="race_id">
                        @foreach($races as $race)
                            <option value="{{ $race->id }}">{{ $race->name }}</option>
                        @endforeach
                    </select>
                    @error('race_id')
                    <div class="text-danger">Пожалуйста, выберите расу</div>
                    @enderror
                </div>

                <div class="form-group col-3" id="user-container">
                    <label for="grade">Выберите класс:</label>
                    <select id="grade" class="select2 form-control" name="grade_id">
                        @foreach($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>
                    @error('grade_id')
                    <div class="text-danger">Пожалуйста, выберите класс</div>
                    @enderror
                </div>

                <div class="form-group col-3" id="user-container">
                    <label for="inventory">Выберите инвентарь:</label>
                    <select id="inventory" class="select2 form-control" name="inventory_id">
                        @foreach($inventories as $inventory)
                            <option value="{{ $inventory->id }}">{{ $inventory->cube }}</option>
                        @endforeach
                    </select>
                    @error('inventory_id')
                    <div class="text-danger">Пожалуйста, выберите класс</div>
                    @enderror
                </div>

                <div class="form-group col-3">
                    <label for="free_point">Выберите свободку:</label>
                    <div id="free_point" class="free-point-container">
                        @foreach($free_points as $free_point)
                            <div class="free-point-item">
                                <label for="free_point_{{ $free_point->id }}" style="font-weight: normal;">
                                    @if($free_point->name)
                                        {{ $free_point->name }}. Цена: {{ $free_point->points }}
                                    @else
                                        Золото: {{ $free_point->gold }}. Цена: {{ $free_point->points }}
                                    @endif
                                </label>
                                <div class="input-group">
                                    <input class="number-text form-control" type="number"
                                           name="free_point_count[{{ $free_point->id }}]"
                                           value="{{ isset($char) && $char->freePoints->contains('id', $free_point->id) ?
                            $char->freePoints->firstWhere('id', $free_point->id)->pivot->quantity : 0 }}"
                                           min="0">
                                    <input type="hidden" name="free_point_id[]" value="{{ $free_point->id }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @error('free_point_id')
                    <div class="text-danger">Пожалуйста, выберите свободку</div>
                    @enderror
                </div>






                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
    </div>
@endsection
