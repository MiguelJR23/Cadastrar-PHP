<?php
$emailLogin = $_POST['email'];
$senhaLogin = $_POST['senha'];

$nomeCadastro = $_POST['nomeCadastro'];
$emailCadastro = $_POST['emailCadastro'];
$senhaCadastro = $_POST['senhaCadastro'];

$loginCorreto = (
    $emailLogin == $emailCadastro &&
    $senhaLogin == $senhaCadastro
);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <?php if($loginCorreto){ ?>

            <h1>Login realizado com sucesso!</h1>
            <p class="sucesso">
                Bem-vindo ao sistema, <?php echo $nomeCadastro; ?>!
            </p>
        <?php } else { ?>

            <h1>Erro no login</h1>
            <p class="erro">
                Email ou senha incorretos :(
            </p>

        <?php } ?>
    </div>

</body>
</html>