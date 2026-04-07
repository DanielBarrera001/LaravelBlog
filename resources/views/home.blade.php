<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-4x1 mx-auto px-4">
    <h1>Bienvenido a la pagina principal</h1>

    <x-alert type="success" class="mb-4">
        <x-slot name="title">
            Titulo de la alerta
        </x-slot>

        Contenido de la alerta
    </x-alert>

    </div>

</body>
</html>