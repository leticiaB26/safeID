
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - SafeID</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">

    
        <!-- Mostrar a logo acima do login centralizada -->
        <img src="logo3.png" class="logo" alt="Logo SafeID">

        <h1>SafeID</h1>

            <?php 
            session_start(); // precisa estar aqui se ainda não estiver no topo
                if (isset($_SESSION['erroLogin'])) {
                echo '<p style="color:red">'.$_SESSION['erroLogin'].'</p>';
                unset($_SESSION['erroLogin']); // limpa a mensagem após exibir
            }
            ?>
         
        <form action="PHP/validaLogin.php" method="POST">
            <input type="text" name="nLogin" placeholder="Login" required>
            <br>
            
            <br>
            <input type="password" name="nSenha" placeholder="Senha" required>
            <br>
            
            <br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
