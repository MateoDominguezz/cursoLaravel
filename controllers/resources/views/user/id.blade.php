<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
        <h1>El usuario: {{ $userById->name }} </h1>
        <ul>
        <li>
            <h3>Edad: {{ $userById->age }}</h3>
            <h3>Email: {{ $userById->email }} </h3>   
            <h3>Addres: {{ $userById->addres }} -- Code: {{ $userById->zip_code }}</h3>
        </li>   

        </ul>

</body>
</html>