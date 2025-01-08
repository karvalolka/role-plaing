<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Инвентарь</title>
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
            padding: 25px;
            text-align: center;
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
            margin-bottom: 20px;
            color: #333;
        }

        .stat {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
            line-height: 1.6;
            text-align: left;
        }

        .stat strong {
            color: #2ecc71;
            font-weight: 600;
        }

        .stat div {
            margin-bottom: 15px;
        }

        .back-button {
            background-color: #2ecc71;
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #27ae60;
        }

        @media screen and (max-width: 768px) {
            .character-card {
                max-width: 90%;
                padding: 20px;
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
        <h1>{{ optional(\App\Models\Cube::find($inventory->cube_id))->name}}</h1>

        <div class="stat">
            <div>
                @if($inventory->gold > 0)
                    <p><strong>Золото:</strong> {{ $inventory->gold }}</p>
                @endif
                <p><strong>Предметы:</strong> {{ $inventory->structure }}</p>
            </div>
        </div>

        <a href="javascript:history.back()" class="back-button">Назад</a>
    </div>

</div>

</body>
</html>
