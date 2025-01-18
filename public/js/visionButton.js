    // Функция для отображения следующего блока
    function showNextBlock(currentBlockId, nextBlockId, currentBtnId) {
    // Отображаем следующий блок
    document.getElementById(nextBlockId).classList.remove('hidden-container');
    // Скрываем текущую кнопку
    document.getElementById(currentBtnId).style.display = 'none';
}

    // Настройка для первого блока
    document.getElementById('nextBtn').addEventListener('click', function() {
    // Проверка на заполненность всех ячеек
    const cellsFilled = [...document.querySelectorAll('.cell')].every(input => input.value !== '');
    if (cellsFilled) {
    showNextBlock('block-1', 'race-class-container', 'nextBtn');
} else {
    alert('Пожалуйста, заполните все ячейки.');
}
});

    // Настройка для второго блока
    document.getElementById('nextBtn2').addEventListener('click', function() {
    showNextBlock('race-class-container', 'stats-container', 'nextBtn2');
});

    // Настройка для третьего блока
    document.getElementById('nextBtn3').addEventListener('click', function() {
    showNextBlock('stats-container', 'ability-container', 'nextBtn3');
});

    // Настройка для четвертого блока
    document.getElementById('nextBtn4').addEventListener('click', function() {
    showNextBlock('ability-container', 'inventory-container', 'nextBtn4');
});

    // Настройка для пятого блока
    document.getElementById('nextBtn5').addEventListener('click', function() {
    showNextBlock('inventory-container', 'free_point-container', 'nextBtn5');
});

    // Настройка для шестого блока
    document.getElementById('nextBtn6').addEventListener('click', function() {
    showNextBlock('free_point-container', 'finish-container', 'nextBtn6');
});

    // Настройка для седьмого блока
    document.getElementById('nextBtn7').addEventListener('click', function() {
    // Финальный блок, можно добавить логику для сохранения
    alert('Персонаж сохранен!');
});

