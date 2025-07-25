<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="h-full" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-200 ">
    @if(session('message'))
        <script>
        Swal.fire({
            title: 'Sucesso!',
            text: '{{ session("message") }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
        </script>
    @endif
    {{ $slot }}
</body>
</html>