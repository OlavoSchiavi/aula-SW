<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Login</title>
</head>
<body>
    <form id="forms">
        <h1>Cadastro</h1><br>
        <label>nome</label>
        <input type="text" required id="nome"> <br>

        <label>idade</label>
        <input type="date"><br requierd id="idade">

        <label>e-mail</label>
        <input type="email" required id="email"> <br>

        <label>senha</label>
        <input type="password" required id="pass"> <br>

        <label>confirmar senha</label>
        <input type="password" required id="apass"><br>

        <label>escolaridade</label>
        <select class="stint" id="cmb" required id="list">
            <option value="">Selecione...</option>
            <option value="">Escola 1</option>
            <option value="">Escola 2</option>
            <option value="">Escola 3</option>
            <option value="">Escola 4</option>
          </select><br>
          <input type="submit" value="Cadastrar">
        </form>
</body>
</html>
<script>
    $(document).ready(function() {
            $('#forms').on('submit', function(event) {
                event.preventDefault();

                var nome = $('#nome').val();
                var email = $('#email').val();
                var list = $('#list').val();
                var idade = $('#idade').val();
                var pass = $('#pass').val();
                var apass = $('#apass').val();

                if (nome || email || list || idade || pass || apass) {
                    window.location.href = 'main.php';
                }
            });
        });
</script>