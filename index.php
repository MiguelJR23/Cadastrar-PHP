<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h1>Cadastro</h1>
        <form action="forms/login.php" method="POST">

            <label>Nome</label>
            <input type="text" name="nome" required placeholder="Roberto Barros">
            <label>E-mail</label>
            <input type="email" name="email" required placeholder="r0b3rts2332@gmail.com">
            <label>Senha</label>
            <input type="password" name="senha" required accept="fulano23">
            <button type="submit">Cadastrar</button>

        </form>
    </div>

</body>
</html>