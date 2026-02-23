<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela Cadastro</title>
</head>
    <body>
        <a href = "/PB_PHP/Atividade_01/produto/listar">Ir para tela de Cadastro do Produto</a>
        <form method="POST" action="Salvar">
            <input type="text" name="nome" placeholder="nome do produto" require>
            <input type="value" name="valor" placeholder="valor" require>
            <input type="value" name="quantidade" placeholder="quantidade" require>
            <input type="date" name="data" placeholder="data de validade" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>