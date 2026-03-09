<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela Editar</title>
</head>
    <body>
        <h2>Editar livros📚<h2>
        <a href = "/PB_PHP/MVC_mysql/usuario/listar">Ir para tela Listar</a>
        <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
            <input type="text" name="titulo" value="<?= htmlspecialchars($usuario['titulo'])?>" require>
            <input type="text" name="autor" value="<?= htmlspecialchars($usuario['autor'])?>" require>
            <input type="date" name="ano_publicacao" value="<?= htmlspecialchars($usuario['ano_publicacao'])?>" require>
            <input type="text" name="editora" value="<?= htmlspecialchars($usuario['editora'])?>" require>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>