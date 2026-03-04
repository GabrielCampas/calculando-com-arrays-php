<?php
if ($_POST) {
    $erro = "Por favor, digite as notas dos alunos corretamente.";
    $invalido = "Por favor, insira um número válido nas notas dos alunos.";

    // Caso nome1 estiver vazio
    if (empty($_POST['nome1'])) {
        die("Digite o nome do primeiro aluno.");
    }
    // caso nome2 estiver vazio
    if (empty($_POST['nome2'])) {
        die("Digite o nome do segundo aluno.");
    }
    // caso o nome3 estiver vazio
    if (empty($_POST['nome3'])) {
        die("Digite o nome do terceiro aluno.");
    }
    // caso a nota1 do primeiro aluno estiver VAZIA
    if (empty($_POST['nota1-1'])) {
        die($erro);
    }
    // caso a nota2 do primeiro aluno estiver VAZIA
    if (empty($_POST['nota2-1'])) {
        die($erro);
    }
    // caso a nota1 do segundo aluno estiver VAZIA
    if (empty($_POST['nota1-2'])) {
        die($erro);
    }
    // caso a nota2 do segundo aluno estiver VAZIA
    if (empty($_POST['nota2-2'])) {
        die($erro);
    }
    // caso a nota1 do terceiro aluno estiver VAZIA
    if (empty($_POST['nota1-3'])) {
        die($erro);
    }
    // caso a nota2 do terceiro aluno estiver VAZIA
    if (empty($_POST['nota2-3'])) {
        die($erro);
    }
    // caso a nota1 do primeiro aluno estiver INVALIDA
    if ($_POST['nota1-1'] < 0) {
        die($invalido);
    }
    // caso a nota2 do primeiro aluno estiver INVALIDA
    if ($_POST['nota2-1'] < 0) {
        die($invalido);
    }
    // caso a nota1 do segundo aluno estiver INVALIDA
    if ($_POST['nota1-2'] < 0) {
        die($invalido);
    }
    // caso a nota2 do segundo aluno estiver INVALIDA
    if ($_POST['nota2-2'] < 0) {
        die($invalido);
    }
    // caso a nota1 do terceiro aluno estiver INVALIDA
    if ($_POST['nota1-3'] < 0) {
        die($invalido);
    }
    // caso a nota2 do terceiro aluno estiver INVALIDA
    if ($_POST['nota2-3'] < 0) {
        die($invalido);
    }

    // Armazenando nomes
    $nome1 = $_POST['nome1'];
    $nome2 = $_POST['nome2'];
    $nome3 = $_POST['nome3'];
    // Armazenando notas
    $nota1aluno1 = $_POST['nota1-1'];
    $nota2aluno1 = $_POST['nota2-1'];
    //
    $nota1aluno2 = $_POST['nota1-2'];
    $nota2aluno2 = $_POST['nota2-2'];
    //
    $nota1aluno3 = $_POST['nota1-3'];
    $nota2aluno3 = $_POST['nota2-3'];
    // Criando as médias
    $mediaaluno1 = ($nota1aluno1 + $nota2aluno1) / 2;
    $mediaaluno2 = ($nota1aluno2 + $nota2aluno2) / 2;
    $mediaaluno3 = ($nota1aluno3 + $nota2aluno3) / 2;

    // Criando array
    $alunos = [
        [
            "Nome do Primeiro aluno: {$nome1}",
            "Notas e Média: Nota 1: {$nota1aluno1} | Nota 2: {$nota2aluno1} | Média final: {$mediaaluno1}"
        ],
        [
            "Nome do Segundo aluno: {$nome2}",
            "Notas e Média: Nota 1: {$nota1aluno2} | Nota 2: {$nota2aluno2} | Média final: {$mediaaluno2}"
        ],
        [
            "Nome do Terceiro aluno: {$nome3}",
            "Notas e Média: Nota 1: {$nota1aluno3} | Nota 2: {$nota2aluno3} | Média final: {$mediaaluno3}"
        ],
    ];

    foreach ($alunos as $aluno) {
        echo "<h3>" . $aluno[0] . "</h3>"; // Exibe o Nome
        echo "<p>" . $aluno[1] . "</p>";   // Exibe as Notas e Média
        echo "<hr>";
    }
}



?>