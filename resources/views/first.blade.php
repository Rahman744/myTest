<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column align-items-center justify-content-center vh-100">
    <h1 class="mb-4">Welcome</h1>

    <form method="POST" action="/start" class="text-center w-50">
        @csrf
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Your name" required>
        </div>
        <!-- <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Your email" required>
        </div> -->
        <div class="mb-3">
            <input type="password" name="code" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Start</button>
    </form>
</body>

</html>