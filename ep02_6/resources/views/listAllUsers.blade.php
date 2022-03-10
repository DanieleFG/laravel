<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List All User </title>
</head>
<body>
    <table style="width:100%; border: 1px solid black; text-align:center;">
        <tr>
          <th>#ID</th>
          <th>Nome</th>
          <th>Email</th> 
          <th>Açoes</th>
        </tr>
           
        @foreach ($users as $user)
            
   
        <tr>
          <td> {{ $user->id }} </td>
          <td> {{ $user->name }}</td>
          <td> {{ $user->email }} </td>
          <td>
              <a href=" {{ route('user.show', ['user'=> $user->id])}} ">Ver Usuários</a>
              <form action="  " method="post">
                @csrf
                @method('delete')
                  <input type="hidden" name="user" value="  ">
                  <input type="submit"  value="Remover">
              </form>
          </td>
        </tr>
        @endforeach
      </table>
</body>
</html>