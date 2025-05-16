<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <button>Aluno</button>
        <button>Empresa</button>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="100" />
    </div>

    <form method="POST" action="#">
        @csrf
        <label>Texto:</label><br>
        <input type="text" name="email"><br><br>

        <label>Texto:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Entrar</button>
    </form>

    <p>Não tem uma conta? <a href="/cadastro/aluno">Crie aqui!</a></p>
</body>
</html>
