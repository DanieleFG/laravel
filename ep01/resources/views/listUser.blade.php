<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista Informação do Usuario</title>
</head>
<body>
    <h1>Lista de Usuário</h1>
    <p> Nome: {{ $user->name }} </p>
    <p>Email: {{$user->email }} </p>
    <p>
      {{date('d/m/Y H:i:sa', strtotime($user->created_at) )}}
    </p>
</body>
</html>


