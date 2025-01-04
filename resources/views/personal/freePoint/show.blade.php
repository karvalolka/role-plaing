<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Свободные очки</title>
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

        .inventory-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .inventory-list li {
            font-size: 14px;
            color: #777;
            padding: 5px 0;
        }

        @media screen and (max-width: 768px) {
            .character-card {
                max-width: 90%;
                padding: 16px;
            }

            .character-info {
                padding: 16px;
            }
        }
    </style>
</head>
<body>

<div class="character-card">

    <div class="character-info">
        <h1>{{ $free_points->points }}</h1>

        <div class="stat">{{ $free_points->name }}</div>

    </div>
</div>

</body>
</html>
