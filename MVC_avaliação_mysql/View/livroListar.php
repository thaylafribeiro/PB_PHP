<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
      <a href = "telaCadastro">Ir para tela de Cadastro</a>
    <h2>Usuário</h2>
    <table border ="1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ano_publicacao</th>
            <th>Editora</th>
              <th>Ações</th>
        <tr>
        <?php foreach($livro as $id => $u): ?>
            <tr>
                <td><?= $u['Titulo']?></td>
                <td><?= $u['Autor']?></td>
                 <td><?= $u['Ano_publicacao']?></td>
                  <td><?= $u['Editora']?></td>
                <td>
                    <a href="/PB_PHP/MVC_avaliação_mysql/livro/telaEditar?id=<?= $u['ID'] ?>">Editar</a>
                    <a href="/PB_PHP/MVC_avaliação_mysql/livro/excluir?id=<?= $u['ID'] ?>">Excluir</a>
                </td>
            <tr>
        <?php endforeach; ?>
    <table>
</body>
</html>