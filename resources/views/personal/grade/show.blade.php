<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Классы</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .character-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin: 15px;
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .character-card:hover {
            transform: translateY(-8px);
        }

        .character-info {
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-grow: 1;
        }

        .character-info h1 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #333;
        }

        .stat {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .stat strong {
            color: #2ecc71;
            font-weight: 600;
        }

        .skill {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .skill:hover {
            transform: scale(1.05);
            background-color: #f1f1f1;
        }

        .skill p {
            margin: 5px 0;
        }

        .skill p strong {
            color: #3498db;
        }

        .back-button {
            background-color: #2ecc71;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
            width: 100%;
        }

        .back-button:hover {
            background-color: #27ae60;
        }

        @media screen and (max-width: 768px) {
            .character-card {
                max-width: 90%;
                padding: 16px;
            }

            .character-info {
                padding: 16px;
            }

            .back-button {
                width: auto;
            }
        }
    </style>
</head>
<body>

<div class="character-card">

    <div class="character-info">
        <h1>{{ $grades->name }}</h1>

        <div class="stat">
            <strong>Способности:</strong>
            @foreach($grades->skills as $skill)
                <div class="skill">
                    <p><strong>Уровень:</strong> {{ $skill->level }}</p>
                    <p><strong>Название:</strong> {{ $skill->name }}</p>
                    <p><strong>Описание:</strong> {{ $skill->description }}</p>
                </div>
            @endforeach
        </div>

        <a href="javascript:history.back()" class="back-button">Назад</a>
    </div>

</div>

</body>
</html>
