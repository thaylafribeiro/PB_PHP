<?php
session_start();

class Alunos {
    private $nome;
    private $sobrenome;
    private $nota;
    private $dataNascimento;

    public function __construct($nome, $sobrenome, $nota, $dataNascimento) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->nota = $nota;
        $this->dataNascimento = $dataNascimento;
    }

    public function salvar() {
        if (!isset($_SESSION['alunos'])) {
            $_SESSION['alunos'] = [];
        }

        $_SESSION['alunos'][] = [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'nota' => $this->nota,
            'dataNascimento' => $this->dataNascimento,
        ];
    }
}

function calcularIdade($dataNascimento) {
    $dataNascimento = new DateTime($dataNascimento);
    $idadeAtual= new DateTime();
        return $idadeAtual->diff($dataNascimento)->y;
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nota = $_POST['nota'];
    $dataNascimento = $_POST['dataNascimento'];

    $aluno = new Alunos($nome, $sobrenome, $nota, $dataNascimento);
    $aluno->salvar();
}

    if (isset($_GET['reset'])) {
    session_destroy();
}

    $media = 0;
    if (isset($_SESSION['alunos']) && count($_SESSION['alunos']) > 0) {
    $soma = 0;
        foreach ($_SESSION['alunos'] as $aluno) {
        $soma += $aluno['nota'];
    }
    $media = $soma / count($_SESSION['alunos']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>

<h2 style="color:darkblue; font-family:Arial">Cadastro de Aluno</h2>
<form action="" method="POST" style="background:#f2f2f2; padding:15px; border-radius:8px; width:300px">
    Nome:<br>
    <input type="text" name="nome" required style="width:100%; margin-bottom:10px"><br>
    Sobrenome:<br>
    <input type="text" name="sobrenome" required style="width:100%; margin-bottom:10px"><br>
    Nota:<br>
    <input type="number" name="nota" required style="width:100%; margin-bottom:10px"><br>
    Data de Nascimento:<br>
    <input type="date" name="dataNascimento" required style="width:100%; margin-bottom:10px"><br>
    <button type="submit" style="background:green; color:white; padding:5px 10px;">Cadastrar</button>
    <button type="reset" style="background:red; color:white; padding:5px 10px;">Limpar</button>

</form>
<?php if (isset($_SESSION['alunos'])): ?>
<table border="1" >
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Nota</th>
            <th>Data de Nascimento</th>
            <th>Idade</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['alunos'] as $aluno): ?>
        <tr>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['sobrenome'] ?></td>
            <td><?= $aluno['nota'] ?></td>
            <td><?= $aluno['dataNascimento'] ?></td>
            <td><?= calcularIdade($aluno['dataNascimento']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p>
    <strong>Média das notas:</strong>
        <?php echo $media; ?>
</p>
    <?php endif; ?>
    <body>
</html>

