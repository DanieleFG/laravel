<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List All User </title>
</head>
<body>
    <table style="width:100%; text-align:center;">
        <tr>
          <th>#ID</th>
          <th>Nome</th>
          <th>Email</th> 
          <th>Açoes</th>
        </tr>
        @foreach($users as $user)         
        
        <tr>
          <td> {{ $user->id }} </td>
          <td> {{ $user->name }} </td>
          <td> {{ $user->email }} </td>
          <td>
              <a href="">Ver Usuários</a>
              <form action=" {{ route('users.destroy', ['user'=>$user->id] )}} " method="post">
                @csrf
                @method('delete')
                  <input type="hidden" name="user" value=" {{ $user->id }} ">
                  <input type="submit"  value="Remover">
              </form>
          </td>
        </tr>
        @endforeach
      </table>
</body>
</html>