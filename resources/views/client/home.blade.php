<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../../scss/app.scss">
</head>
<body id="client-home">
    <div class="text-center position-absolute top-50 start-50 translate-middle">
        <h1>Il fumettaro</h1>
        <p>Fumetti manga e molto altro ...</p>
        <a class="btn btn-primary" href="{{ route('admin.home.index')}}" role="button">Accedi</a>
    </div>

    @vite('resources/js/app.js')
</body>
</html>

