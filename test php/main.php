<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">

        <p>Qual foi o ano da Independência do Brasil?</p>
        <input type="radio" name="per1" value="1" />1822 <br>
        <input type="radio" name="per1" value="0" />1808 <br>
        <input type="radio" name="per1" value="0" />1889 <br>
        <input type="radio" name="per1" value="0" />1500 <br>

        <p>Quem foi o primeiro presidente do Brasil?</p>
        <input type="radio" name="per2" value="0" />Pedro II <br>
        <input type="radio" name="per2" value="0" />Juscelino Kubitschek <br>
        <input type="radio" name="per2" value="1" />Marechal Deodoro da Fonseca <br>
        <input type="radio" name="per2" value="0" />Getúlio Vargas <br>

        <p>Em que ano ocorreu a Revolução Francesa?</p>
        <input type="radio" name="per3" value="0" />1848 <br>
        <input type="radio" name="per3" value="1" />1789 <br>
        <input type="radio" name="per3" value="0" />1917 <br>
        <input type="radio" name="per3" value="0" />1492 <br>

        <p>Qual foi o principal evento que marcou o início da Segunda Guerra Mundial?</p>
        <input type="radio" name="per4" value="0" />Tratado de Versalhes <br>
        <input type="radio" name="per4" value="1" />Invasão da Polônia pela Alemanha <br>
        <input type="radio" name="per4" value="0" />Batalha de Stalingrado <br>
        <input type="radio" name="per4" value="0" />Ataque a Pearl Harbor <br>

        <p>Quem foi o líder da União Soviética durante a Segunda Guerra Mundial?</p>
        <input type="radio" name="per5" value="0" />Leon Trotsky <br>
        <input type="radio" name="per5" value="0" />Vladimir Lenin <br>
        <input type="radio" name="per5" value="0" />Nikita Khrushchev <br>
        <input type="radio" name="per5" value="1" />Josef Stalin <br>

        <p>Qual civilização construiu as pirâmides de Gizé?</p>
        <input type="radio" name="per6" value="1" />Egípcios <br>
        <input type="radio" name="per6" value="0" />Romanos <br>
        <input type="radio" name="per6" value="0" />Maias <br>
        <input type="radio" name="per6" value="0" />Babilônios <br>

        <p>Em que ano ocorreu a chegada de Pedro Álvares Cabral ao Brasil?</p>
        <input type="radio" name="per7" value="0" />1600 <br>
        <input type="radio" name="per7" value="0" />1492 <br>
        <input type="radio" name="per7" value="1" />1500 <br>
        <input type="radio" name="per7" value="0" />1534 <br>

        <p>Qual foi o ano da Independência do Brasil?</p>
        <input type="radio" name="per8" value="0" />Revolução Russa <br>
        <input type="radio" name="per8" value="1" />Invenção da máquina a vapor <br>
        <input type="radio" name="per8" value="0" />Invenção do telefone <br>
        <input type="radio" name="per8" value="0" />Descoberta da eletricidade <br>

        <p>Quem foi o responsável pela unificação da Alemanha no século XIX?</p>
        <input type="radio" name="per9" value="0" />Adolf Hitler <br>
        <input type="radio" name="per9" value="0" />Frederico II <br>
        <input type="radio" name="per9" value="1" />Otto von Bismarck <br>
        <input type="radio" name="per9" value="0" />Napoleão Bonaparte <br>

        <p>Em que ano foi assinada a Constituição Brasileira vigente?</p>
        <input type="radio" name="per10" value="0" />1964<br>
        <input type="radio" name="per10" value="0" />2000<br>
        <input type="radio" name="per10" value="1" />1988<br>
        <input type="radio" name="per10" value="0" />1946<br>

        <input type="hidden" name="tempo_decorrido" id="tempo_decorrido" value="0">

        <button type="submit">Enviar Respostas</button>
</form>
</body>
</html>

<?php
// Variáveis para contar acertos e erros
$acertos = 0;
    $erros = 0;
    $tempoDecorrido = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Respostas corretas
        $respostasCorretas = [
        'per1' => '1',
        'per2' => '1',
        'per3' => '1',
        'per4' => '1',
        'per5' => '1',
        'per6' => '1',
        'per7' => '1',
        'per8' => '1',
        'per9' => '1',
        'per10' => '1'
    ];

    // Verificar respostas
    foreach ($respostasCorretas as $pergunta => $respostaCorreta) {
        if (isset($_POST[$pergunta]) && $_POST[$pergunta] == $respostaCorreta) {
            $acertos++;
        } else {
            $erros++;
        }
    }

    // Tempo decorrido enviado via campo oculto
    $tempoDecorrido = $_POST['tempo_decorrido'];

    // Exibir resultado
    echo "<div class='result'>
            <h3>Resultado</h3>
            <p>Acertos: $acertos</p>
            <p>Erros: $erros</p>
            <p>Tempo decorrido: $tempoDecorrido segundos</p>
          </div>";
}
?>

<script>
    // Inicializa o tempo inicial ao carregar a página
    let inicioTempo = Date.now();

    // Função para calcular o tempo decorrido antes de enviar o formulário
    document.querySelector('form').onsubmit = function() {
        let fimTempo = Date.now();
        let tempoDecorrido = Math.floor((fimTempo - inicioTempo) / 1000); // Em segundos
        document.getElementById('tempo_decorrido').value = tempoDecorrido;
    };

    // Mostrar resultado se o formulário foi submetido
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        document.querySelector('.result').style.display = 'block';
    <?php endif; ?>
</script>