
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
?>

<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }

    include("funcoes.php"); //esqueci minha senha, codigo que leva para o e-mail da pessoa trocar de senha 

    $_SESSION['logado'] = 0;

    $login = stripslashes($_POST["nLogin"]);
    $senha = stripslashes($_POST["nSenha"]);

    //$_POST - Valor enviado pelo FORM através da propriedade NAME do elemento HTML 
    //$_GET - Valor enviado pelo FORM através da URL
    //$_SESSION - Variável criada pelo usuário no PHP

    include("conexao.php");//conexão com o banco de dados sa2025senai
    $sql = "SELECT * FROM tb_usuario "
            ." WHERE login_usu = '$login' "
            ." AND senha_usu = md5('$senha');";

    //var_dump($sql);
   // close();


    $resultLogin = mysqli_query($conn,$sql);
    mysqli_close($conn);

    //Validar se tem retorno do BD
    if (mysqli_num_rows($resultLogin) > 0) {  
        
        //enviarEmail('destino@email.com.br','Mensagem de e-mail para SA','Teste SA','Eu mesmo');

        foreach ($resultLogin as $coluna) {
                        
            //***Verificar os dados da consulta SQL
            $_SESSION['idTipoUsuario'] = $coluna['tb_tipo_usuario_id_tipo_usuario'];
            $_SESSION['logado']        = 1;
            $_SESSION['idLogin']       = $coluna['id_Usuario'];
            $_SESSION['NomeLogin']     = $coluna['nome_usu'];
            $_SESSION['AtivoLogin']    = $coluna['flgAtivo'];

            //Acessar a tela inicial
            header('location: ../inicial.php');
            
        }        
    }else{

        //MENSAGEM DE ERRO
        $_SESSION['erroLogin'] = 'Login ou senha inválidos';
        header('location: ../');
    }



?>
