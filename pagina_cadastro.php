<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimento online</title>
    <link rel="stylesheet" href="requerimento.css">
</head>

<center>
<body class="fundo">
    <div class="form2">
        <h1 class="titulo">Cadastro</h1>
        <form class="input" action="" method="post">
            <input class="input" type="text" name="nome" placeholder="Nome">
            <input class="input" type="text" name="email" placeholder="Email">
            <input class="input" type="password" name="senha" placeholder="Senha">
            <input class="input" type="text" name="telefone" placeholder="Telefone">
            <button class="login" name="cadastrar">Cadastrar</button>
            <button class="login" name="sair">voltar</button>
        </form>
    </div>

    <?php
    if (isset($_POST['cadastrar'])) {
        // obtem os valores do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        // pega a matrícula do email institucional
        $padrao = '/^(\d{12})@ifba\.edu\.br$/';
        if (preg_match($padrao, $email, $matches)) {
            $matricula = $matches[1]; // Os números capturados serão armazenados em $matches[1]
        } else {
            echo "Formato de email institucional inválido.";
            exit();
        }

        // inclui o arquivo de configuração do banco de dados
        include_once("configuracao.php");

        // criptografa a senha
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        // insere os dados do usuário no banco de dados
        $query = "INSERT INTO alunos (matricula, nome, email, senha, telefone) VALUES ('$matricula', '$nome', '$email', '$senhaCriptografada', '$telefone')";
        $result = mysqli_query($conexao, $query);

        if ($result) {
            echo "Cadastro realizado com sucesso!";
            header('Location: pagina_requerimento.php');
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    }

    // verifica se o botão de voltar foi pressionado
    if (isset($sair)) {
        header('Location: pagina_login.php');
    }
    ?>
</body>
</center>
</html>