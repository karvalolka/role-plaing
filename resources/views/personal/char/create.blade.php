<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача с ячейками и свободными очками</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            max-width: 500px;
            margin: 0 auto;
        }

        .cell {
            width: 80px;
            height: 40px;
            text-align: center;
            font-size: 18px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        .cell:focus {
            outline: none;
            border-color: #66afe9;
            background-color: #e6f7ff;
        }

        #nextBtn, #nextBtn2, #nextBtn3 {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #nextBtn:hover, #nextBtn2:hover, #nextBtn3:hover {
            background-color: #45a049;
        }

        #free-points {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .error-message {
            color: red;
            font-weight: bold;
        }

        .cell.hidden {
            background-color: #f0f0f0;
            opacity: 0.5;
        }

        #intro-message {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            background-color: #f0f8ff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Скрытие контейнеров выбора класса и расы */
        .hidden-container {
            display: none;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }

        .form-group {
            display: flex;
            align-items: center; /* Вертикальное выравнивание */
            margin-bottom: 15px;
        }

        .stat-label {
            font-weight: bold;
            color: #333;
            font-size: 16px;
            margin-right: 10px; /* Отступ справа от текста */
        }

        .stat-input {
            width: 50px; /* Ширина поля ввода */
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .stat-input:focus {
            outline: none;
            border-color: #66afe9;
            background-color: #e6f7ff;
        }

        label {
            font-weight: bold;
            color: #333;
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        select:focus, input[type="number"]:focus {
            outline: none;
            border-color: #66afe9;
            background-color: #e6f7ff;
        }

        .text-danger {
            color: red;
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div id="intro-message">
    Добро пожаловать! Заполните все ячейки и нажмите "Далее".
</div>

<!-- 10 Ячеек -->
<div class="container">
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

<!-- Контейнеры для расстановки статок (будут скрыты изначально) -->
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

<script>
    // Функция для вычисления свободных очков
    function calculateFreePoints(cells) {
        // Сортируем числа по возрастанию и убираем два минимальных
        cells.sort((a, b) => a - b).splice(0, 2);

        // Считаем сумму оставшихся 10 чисел
        const sumRemaining = cells.reduce((sum, num) => sum + num, 0);

        // Вычисляем свободные очки
        return 48 - sumRemaining;
    }

    // Обработчик клика на первую кнопку "Далее"
    document.getElementById('nextBtn').addEventListener('click', function () {
        // Скрываем первую кнопку "Далее" после нажатия
        document.getElementById('nextBtn').style.display = 'none';

        // Получаем значения из ячеек
        let cells = [];
        let cellValues = [];

        for (let i = 1; i <= 10; i++) {
            const value = document.getElementById('cell' + i).value;
            if (value) {
                cells.push(parseInt(value));  // Массив всех значений ячеек
                cellValues.push({index: i, value: parseInt(value)}); // Массив с номерами ячеек и значениями
            }
        }

        // Проверяем, что все 10 ячеек заполнены
        if (cells.length < 10) {
            alert("Заполните все ячейки!");
            return;
        }

        // Вычисляем свободные очки
        const freePoints = calculateFreePoints(cells);

        // Проверяем, если свободные очки больше 24
        if (freePoints > 24) {
            document.getElementById('free-points').innerHTML = `<span class="error-message">Слишком маленькие значения! Бросьте кубики заново.</span>`;

            // Очищаем все ячейки и делаем их видимыми снова
            for (let i = 1; i <= 10; i++) {
                const cell = document.getElementById('cell' + i);
                cell.value = "";
                cell.classList.remove('hidden');  // Снимаем скрытие с ячеек
            }

            // Показываем первую кнопку снова
            document.getElementById('nextBtn').style.display = 'block';
        } else {
            // Отображаем свободные очки
            document.getElementById('free-points').innerText = `Свободные очки: ${freePoints}`;

            // Показываем контейнеры для выбора расы и класса
            document.getElementById('race-class-container').classList.remove('hidden-container');

            // Сортируем по значению и убираем два минимальных
            const sortedCells = cellValues.sort((a, b) => a.value - b.value);
            const remainingCells = sortedCells.slice(2); // Оставляем 10 значений

            // Скрываем ячейки с минимальными значениями
            for (let i = 1; i <= 10; i++) {
                const currentCell = document.getElementById('cell' + i);
                if (remainingCells.some(cell => cell.index === i)) {
                    currentCell.classList.remove('hidden'); // Оставляем видимыми
                } else {
                    currentCell.classList.add('hidden'); // Скрываем
                }
            }
        }
    });

    // Обработчик клика на вторую кнопку "Далее"
    document.getElementById('nextBtn2').addEventListener('click', function () {
        // Скрываем вторую кнопку "Далее"
        document.getElementById('nextBtn2').style.display = 'none';

        // Показываем контейнер для ввода характеристик
        document.getElementById('stats-container').classList.remove('hidden-container');
    });

    // Обработчик клика на третью кнопку "Далее"
    document.getElementById('nextBtn3').addEventListener('click', function () {
        // Здесь можно добавить дальнейшие действия, если необходимо
        alert("Всё готово!");
    });
</script>

</body>
</html>
