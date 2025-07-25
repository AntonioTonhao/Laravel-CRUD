<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script defer src="//unpkg.com/alpinejs"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="font-sans bg-slate-800 text-gray-200 min-h-screen w-full">


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


<x-navigation/>

<div class="flex justify-between items-center mb-4 p-8">
    <a onclick="document.getElementById('create_modal').showModal()" class="btn bg-blue-600 text-white hover:bg-blue-800">
        + Criar chamado
    </a>
</div>

@if ($errors->any())
    <script>
    window.onload = function() {
    document.getElementById('create_modal').showModal();
    }
    </script>
@endif
<x-modal-create-chamado />


<div class="flex p-10">
<x-list :chamados="$chamados" />
</div>

</body>
</html>
