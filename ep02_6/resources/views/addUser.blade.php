<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
</head>
<body style="text-align: center; padding:50px 400px 10px 400px;">
    
    <form action=" {{ route('user.store')}} " method="post">
        
      @csrf
        <fieldset>
                <legend>CADASTRO DE USUÁRIO</legend>
            <label for="name">Nome do Usuário:</label><br>
            <input type="text" id="name" name="name" value=""><br>
            
            <label for="email">Email do Usuario:</label><br>
            <input type="email" id="email" name="email" value=""><br>

            <label for="password">Senha do Usuário:</label><br>
            <input type="password" id="password" name="password" value=""><br><br>
            
            <input type="submit" value="Cadastrar usuário">
        </fieldset>
        </form> 
</body>
</html>