@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12 text-right">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.race.index') }}">Расы</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Редактирование Расы</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="h3 mb-0 text-gray-800">Редактирование Расы</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.race.update', $race->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name" class="font-weight-bold">Название</label>
                                <input id="name" class="form-control" name="name" placeholder="Измените название" value="{{ old('name', $race->name) }}" required>
                                @error('name')
                                <div class="text-danger">Заполните поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="icon_svg" class="font-weight-bold">Иконка</label>
                                <input id="icon_svg" class="form-control" name="icon_svg" placeholder="Измените svg" value="{{ old('icon_svg', $race->icon_svg) }}" required>
                                @error('icon_svg')
                                <div class="text-danger">Заполните поле</div>
                                @enderror
                            </div>

                            <hr class="my-4">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hp">Жизни</label>
                                        <input id="hp" class="form-control" name="hp" placeholder="Измените значение" value="{{ old('hp', $race->hp) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mp_sm">Мана/Стамина</label>
                                        <input id="mp_sm" class="form-control" name="mp/sm" placeholder="Измените значение" value="{{ old('mp/sm', $race->{'mp/sm'}) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="strength">Сила</label>
                                        <input id="strength" class="form-control" name="strength" placeholder="Измените значение" value="{{ old('strength', $race->strength) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agility">Ловкость</label>
                                        <input id="agility" class="form-control" name="agility" placeholder="Измените значение" value="{{ old('agility', $race->agility) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stamina">Выносливость</label>
                                        <input id="stamina" class="form-control" name="stamina" placeholder="Измените значение" value="{{ old('stamina', $race->stamina) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reception">Восприятие</label>
                                        <input id="reception" class="form-control" name="reception" placeholder="Измените значение" value="{{ old('reception', $race->reception) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="intelligence">Интеллект</label>
                                        <input id="intelligence" class="form-control" name="intelligence" placeholder="Измените значение" value="{{ old('intelligence', $race->intelligence) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="charisma">Харизма</label>
                                        <input id="charisma" class="form-control" name="charisma" placeholder="Измените значение" value="{{ old('charisma', $race->charisma) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="luck">Удача</label>
                                        <input id="luck" class="form-control" name="luck" placeholder="Измените значение" value="{{ old('luck', $race->luck) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fortitude">Сила воли</label>
                                        <input id="fortitude" class="form-control" name="fortitude" placeholder="Измените значение" value="{{ old('fortitude', $race->fortitude) }}">
                                    </div>
                                </div>
                            </div>
                            @if($race->icon_svg)
                                <div class="form-group">
                                    <label>Превью иконки:</label>
                                    <div>
                                        {!! $race->icon_svg !!}
                                    </div>
                                </div>
                            @endif
                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Обновить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
