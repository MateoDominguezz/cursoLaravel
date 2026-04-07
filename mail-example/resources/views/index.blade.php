<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Test</title>
    <style>
        a{
            text-decoration: none;
            background-color: rgb(168, 155, 155);
            color: black;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
        }
        .boton-container{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="boton-container">
        <a href="{{ route("mailme") }}">Mail Send</a>
    </div>
</body>
</html>