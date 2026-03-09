<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Cadastro</title>
</head>
    <body>
        <a href = "listar">Ir para tela Listar</a>
        <form method="POST" action="Salvar">
            <input type="text" name="titulo" placeholder="Nome do titulo" require>
            <input type="text" name="autor" placeholder="Nome do autor" require>
            <input type="date" name="ano_publicacao" placeholder="Ano da publicação" require>
            <input type="text" name="editora" placeholder="Nome da editora" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>