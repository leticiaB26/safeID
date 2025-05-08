<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Gerar Crachá - SafeID</title>
    <link rel="stylesheet" href="sidebar.css">

</head>

<body>

    <?php include 'sidebar.php'; ?>
    <div class="sidebar">
        <img src="logo4.png" class="logo" alt="Logo SafeID" width="150">
        <br>
        <br>
        <a href="gerar_cracha.php">Gerar Crachá</a>
        <a href="relatorios.php">Relatórios</a>
        <a href="configuracoes.php">Configurações</a>
        <div class="logout">
            <a href="index.php">Sair</a>
        </div>

        <div class="content">
            <div class="form-container">
                <h2>Gerar Crachá</h2>

                <label for="cpf">CPF do Funcionário:</label>
                <input type="text" id="cpf" placeholder="Digite o CPF" maxlength="14" required>

                <button onclick="gerarCracha()">Gerar Crachá</button>
            </div>
        </div>

        <script>
            function gerarCracha() {
                const cpf = document.getElementById('cpf').value.trim();
                if (!cpf) {
                    alert("Por favor, insira o CPF.");
                    return;
                }

                const numeroCracha = Math.floor(10000 + Math.random() * 90000); // 5 dígitos
                alert(`Crachá gerado para o CPF ${cpf}:\n\n${numeroCracha}`);
            }
        </script>

</body>

</html>