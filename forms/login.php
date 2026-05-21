<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <h1>Login</h1>

        <form action="processar.php" method="POST">

            <label>E-mail</label>
            <input type="email" name="email" required>
            <label>Senha</label>
            <input type="password" name="senha" required>
            <input type="hidden" name="emailCadastro" value="<?php echo $email; ?>">
            <input type="hidden" name="senhaCadastro" value="<?php echo $senha; ?>">
            <button type="submit">Entrar</button>

        </form>
    </div>

</body>
</html>