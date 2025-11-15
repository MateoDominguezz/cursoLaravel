<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    @if($users->isEmpty())
        <h1>No tenes ningun usuario registrado</h1>
    @else
        <h1>Lista de usuarios:</h1>
        @foreach ($users as $user)
            <h2>Nombre: {{ $user->name }} </h2>
            <h2>Email: {{ $user->email }} </h2>     
        @endforeach
    @endif

    <!-- Otra forma de hacer lo de arriba pero reduciendo codigo
    @forelse ($users as $user )
        <h1>User List</h1>
        <h2>Nombre: {{ $user->name }} </h2>
        <h2>Email: {{ $user->email }} </h2>       
    @empty
        <p>No tenes ningun usuario</p>
    @endforelse 
    -->
</body>
</html>