<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="100" />
        <h3>Usuário</h3>
    </div>

    <form method="POST" action="#">
        @csrf
        <input type="text" placeholder="Texto" name="campo1"><br><br>
        <input type="text" placeholder="Texto" name="campo2"><br><br>
        <input type="text" placeholder="Texto" name="campo3"><br><br>
        <input type="text" placeholder="Texto" name="campo4"><br><br>
        <input type="text" placeholder="Texto" name="campo5"><br><br>

        <label>Seu curso:</label><br>
        <input type="radio" name="curso" value="informatica"> Téc. Informática<br>
        <input type="radio" name="curso" value="agropecuaria"> Téc. Agropecuária<br>
        <input type="radio" name="curso" value="viticultura"> Téc. Viticultura e Enologia<br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
