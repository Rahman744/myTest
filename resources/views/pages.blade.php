<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page {{$id}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .progress-bar {
            transition: width 0.3s ease-in-out;
        }
    </style>
</head>
<body class="container py-5">

    <!-- Кнопка "На главную" -->
    <div class="mb-4">
        <a href="/" class="btn btn-secondary">🏠 Главная</a>
    </div>

    <h1 class="text-primary mb-4">Привет, {{$name}}!</h1>

    <!-- Прогресс-бар -->
    <div class="mb-4">
        <p>Страница {{$id}} из 5</p>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $id * 20 }}%"></div>
        </div>
    </div>

    <!-- Навигация -->
    <div class="d-flex align-items-center gap-3">
        @if($id > 1)
            <a href="/{{$id - 1}}" class="btn btn-outline-primary">&lt; Назад</a>
        @endif

        <span>Текущая: {{$id}}</span>

        @if($id < 5)
            <a href="/{{$id + 1}}" class="btn btn-outline-primary">Вперёд &gt;</a>
        @endif
    </div>
</body>
</html>
