<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page {{$id}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container py-5">

    <div class="mb-4">
        <a href="/" class="btn btn-secondary">Home</a>
    </div>

    <h1 class="text-success mb-4">Hello {{$name}}! you are in page {{$id}}</h1>

    <div class="d-flex align-items-center gap-3">
        @if($id > 1)
            <a href="/{{$id - 1}}" class="btn btn-primary"><</a>
        @endif
        <span>Page: {{$id}}</span>

        @if($id < 5)
            <a href="/{{$id + 1}}" class="btn btn-primary">></a>
        @endif
    </div>
</body>
</html>
