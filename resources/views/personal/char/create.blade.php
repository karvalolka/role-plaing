<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание персонажа</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div id="intro-message">
    Добро пожаловать! Заполните все ячейки и нажмите "Далее".
</div>

<!-- 10 Ячеек -->
<div id="block-1" class="form-container">
    <input type="number" class="cell" id="cell1" min="1" max="6">
    <input type="number" class="cell" id="cell2" min="1" max="6">
    <input type="number" class="cell" id="cell3" min="1" max="6">
    <input type="number" class="cell" id="cell4" min="1" max="6">
    <input type="number" class="cell" id="cell5" min="1" max="6">
    <input type="number" class="cell" id="cell6" min="1" max="6">
    <input type="number" class="cell" id="cell7" min="1" max="6">
    <input type="number" class="cell" id="cell8" min="1" max="6">
    <input type="number" class="cell" id="cell9" min="1" max="6">
    <input type="number" class="cell" id="cell10" min="1" max="6">
</div>

<!-- Кнопка "Далее" -->
<button id="nextBtn">Далее</button>

<!-- Место для отображения свободных очков -->
<div id="free-points"></div>

<!-- Контейнеры для выбора расы и класса (будут скрыты изначально) -->
<div id="race-class-container" class="hidden-container form-container">
    <div class="form-group">
        <label for="race">Выберите расу</label>
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
        <label for="grade">Выберите класс</label>
        <select id="grade" class="select2 form-control" name="grade_id" required>
            @foreach($grades as $grade)
                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
            @endforeach
        </select>
        @error('grade_id')
        <div class="text-danger">Пожалуйста, выберите класс</div>
        @enderror
    </div>
    <button id="nextBtn2" class="hidden-container">Далее</button>
</div>

<!-- Контейнер для расстановки статок (будут скрыты изначально) -->
<div id="stats-container" class="hidden-container form-container">
    <div class="form-group">
        <label for="strength" class="stat-label">Сила</label>
        <input type="number" id="strength" class="stat-input" min="1" max="6">
    </div>
    <div class="form-group">
        <label for="agility" class="stat-label">Ловкость</label>
        <input type="number" id="agility" class="stat-input" min="1" max="6">
    </div>
    <div class="form-group">
        <label for="stamina" class="stat-label">Выносливость</label>
        <input type="number" id="stamina" class="stat-input" min="1" max="6">
    </div>
    <div class="form-group">
        <label for="reception" class="stat-label">Восприятие</label>
        <input type="number" id="reception" class="stat-input" min="1" max="6">
    </div>
    <div class="form-group">
        <label for="intelligence" class="stat-label">Интеллект</label>
        <input type="number" id="intelligence" class="stat-input" min="1" max="6">
    </div>
    <div class="form-group">
        <label for="charisma" class="stat-label">Харизма</label>
        <input type="number" id="charisma" class="stat-input" min="1" max="6">
    </div>
    <div class="form-group">
        <label for="luck" class="stat-label">Удача</label>
        <input type="number" id="luck" class="stat-input" min="1" max="6">
    </div>
    <div class="form-group">
        <label for="fortitude" class="stat-label">Сила воли</label>
        <input type="number" id="fortitude" class="stat-input" min="1" max="6">
    </div>
    <!-- Новая кнопка "Далее" -->
    <button id="nextBtn3" class="hidden-container">Далее</button>
</div>

<!-- Контейнер для выбора навыков (будут скрыты изначально) -->
<div id="ability-container" class="hidden-container form-container">
    <div class="form-group">
        <label for="ability">Выберите навыки</label>
        <select id="ability" class="select2 form-control" name="ability_id" required>

        </select>
    </div>
    <button id="nextBtn4" class="hidden-container">Далее</button>
</div>

<!-- Контейнер для выбора инвенторя (будут скрыты изначально) -->
<div id="inventory-container" class="hidden-container form-container">
    <div class="form-group">
        <label for="inventory">Выберите инвентарь</label>
        <select id="inventory" class="select2 form-control" name="inventory_id" required>

        </select>
    </div>
    <button id="nextBtn5" class="hidden-container">Далее</button>
</div>

<!-- Контейнер для выбора за свободку (будут скрыты изначально) -->
<div id="free_point-container" class="hidden-container form-container">
    <div class="form-group">
        <label for="free_point">Выберите навыки</label>
        <select id="free_point" class="select2 form-control" name="free_point_id" required>

        </select>
    </div>
    <button id="nextBtn6" class="hidden-container">Далее</button>
</div>

<!-- Контейнер Итоговый (будут скрыты изначально) -->
<div id="finish-container" class="hidden-container form-container">
    <div class="form-group">
        <label>Получите распешитесь</label>
        <select class="select2 form-control" name="finish_id" required>

        </select>
    </div>
    <button id="nextBtn7" class="hidden-container">Сохранить</button>
</div>

<script src="{{ asset('js/visionButton.js') }}"></script>
</body>
</html>
