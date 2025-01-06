@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <!-- Хлебные крошки -->
        <div class="row mb-4">
            <div class="col-12 text-right">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.char.index') }}">Персонажи</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Добавление Персонажа</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Заголовок страницы -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="h3 mb-0 text-gray-800">Добавление Персонажа</h1>
            </div>
        </div>

        <!-- Форма добавления персонажа -->
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.char.store') }}" method="POST">
                            @csrf

                            <!-- Имя персонажа -->
                            <div class="form-group">
                                <label for="name" class="font-weight-bold">Введите имя персонажа</label>
                                <input class="form-control" name="name" placeholder="Введите имя персонажа" required>
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <!-- Выбор пользователя -->
                            <div class="form-group">
                                <label for="user" class="font-weight-bold">Выберите Пользователя</label>
                                <select id="user" class="select2 form-control" name="user_id" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                <div class="text-danger">Пожалуйста, выберите пользователя</div>
                                @enderror
                            </div>

                            <!-- Выбор расы -->
                            <div class="form-group">
                                <label for="race" class="font-weight-bold">Выберите расу</label>
                                <select id="race" class="select2 form-control" name="race_id" required>
                                    @foreach($races as $race)
                                        <option value="{{ $race->id }}">{{ $race->name }}</option>
                                    @endforeach
                                </select>
                                @error('race_id')
                                <div class="text-danger">Пожалуйста, выберите расу</div>
                                @enderror
                            </div>

                            <!-- Выбор класса -->
                            <div class="form-group">
                                <label for="grade" class="font-weight-bold">Выберите класс</label>
                                <select id="grade" class="select2 form-control" name="grade_id" required>
                                    @foreach($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                                @error('grade_id')
                                <div class="text-danger">Пожалуйста, выберите класс</div>
                                @enderror
                            </div>

                            <!-- Выбор инвентаря -->
                            <div class="form-group">
                                <label for="inventory" class="font-weight-bold">Выберите инвентарь</label>
                                <select id="inventory" class="select2 form-control" name="inventory_id" required>
                                    @foreach($inventories as $inventory)
                                        <option value="{{ $inventory->id }}">{{ $inventory->cube }}</option>
                                    @endforeach
                                </select>
                                @error('inventory_id')
                                <div class="text-danger">Пожалуйста, выберите инвентарь</div>
                                @enderror
                            </div>

                            <!-- Блок свободных очков -->
                            <div class="form-group">
                                <label class="font-weight-bold">Выберите свободные очки</label>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div id="free_point" class="free-point-container">
                                            @foreach($free_points as $free_point)
                                                <div class="free-point-item mb-3">
                                                    <label for="free_point_{{ $free_point->id }}" style="font-weight: normal;">
                                                        @if($free_point->name)
                                                            {{ $free_point->name }}. Цена: {{$free_point->points}}
                                                        @else
                                                            Золото: {{ $free_point->gold }}. Цена: {{$free_point->points}}
                                                        @endif
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="number-text form-control" type="number" name="free_point_count[{{ $free_point->id }}]" value="0" min="0">
                                                        <input type="hidden" name="free_point_id[]" value="{{ $free_point->id }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @error('free_point_id')
                                <div class="text-danger">Пожалуйста, выберите свободные очки</div>
                                @enderror
                            </div>

                            <!-- Кнопка отправки формы -->
                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Добавить Персонажа</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Инициализация Select2 -->
    <script>
        $(document).ready(function() {
            // Инициализация Select2 для всех выпадающих списков
            $('#user, #race, #grade, #inventory').select2({
                width: '100%',
                placeholder: 'Выберите значение',
                allowClear: true
            });
        });
    </script>
@endsection
