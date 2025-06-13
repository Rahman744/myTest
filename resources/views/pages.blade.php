<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <h1>---- Page ----</h1>
    <div style="display: flex; align-items: center;">
        @if($id != 1)<a href="/{{$id - 1}}"><button><</button></a>@endif
        <div style="padding: 0 1 rem;">
            <h4>Page: {{$id}}</h4>
        </div>
        @if($id < 5)<a href="/{{$id + 1}}"><button>></button></a>@endif
    </div>
</body>
</html>