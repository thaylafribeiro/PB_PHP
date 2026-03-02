<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
      <a href = "/PB_PHP/Atividade_01/produto/telaCadastro">Lista de produto</a>
    <h2>Produto</h2>
    <table border ="1">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Data</th>
            <th>Ações</th>
        <tr>
        <?php foreach($produto as $id => $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['valor']?></td>
                <td><?= $u['quantidade']?></td>
                <td><?= $u['data']?></td>
                <td>
                    <a href="/PB_PHP/Atividade_01/produto/telaEditar?id=<?= $id ?>">Editar</a>
                    <a  href="/PB_PHP/Atividade_01/produto/excluir?id=<?= $id ?>">Excluir</a>
                </td>
            <tr>
        <?php endforeach; ?>
    <table>
</body>
</html>