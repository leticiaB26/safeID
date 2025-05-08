<?php
//Função para listar todos os usuários
function listaUsuario(){

    include("conexao.php");
    $sql = "SELECT * FROM tb_usuario ORDER BY id_usuario;";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    $lista = '';
    $ativo = '';

    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $coluna) {
            $ativo = ($coluna["flg_ativo"] == 'S') ? 'checked' : '';
            $icone = ($coluna["flg_ativo"] == 'S') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>';

            $lista .= 
            '<tr>'
                .'<td align="center">'.$coluna["id_usuario"].'</td>'
                .'<td align="center">'.descrTipoUsuario($coluna["id_tipo_usuario"]).'</td>'
                .'<td>'.$coluna["nome_usu"].'</td>'
                .'<td>'.$coluna["login_usu"].'</td>'
                .'<td align="center">'.$icone.'</td>'
                .'<td>'
                    .'<div class="row" align="center">'
                        .'<div class="col-6">'
                            .'<a href="#modalEditUsuario'.$coluna["id_usuario"].'" data-toggle="modal">'
                                .'<h6><i class="fas fa-edit text-info" data-toggle="tooltip" title="Cadastrar usuário"></i></h6>'
                            .'</a>'
                        .'</div>'
                        .'<div class="col-6">'
                            .'<a href="#modalDeleteUsuario'.$coluna["id_usuario"].'" data-toggle="modal">'
                                .'<h6><i class="fas fa-trash text-danger" data-toggle="tooltip" title="Excluir usuário"></i></h6>'
                            .'</a>'
                        .'</div>'
                    .'</div>'
                .'</td>'
            .'</tr>';
        }
    }

    return $lista;
}

function proxIdUsuario(){
    $id = "";
    include("conexao.php");
    $sql = "SELECT MAX(id_usuario) AS Maior FROM tb_usuario;";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0) {
        $linha = mysqli_fetch_assoc($result);
        $id = $linha["Maior"] + 1;
    }

    return $id;
}

function tipoAcessoUsuario($id){
    $resp = "";
    include("conexao.php");
    $sql = "SELECT id_tipo_usuario FROM tb_usuario WHERE id_usuario = $id;";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0) {
        $linha = mysqli_fetch_assoc($result);
        $tipo = $linha["id_tipo_usuario"];
        if($tipo == 1){
            $resp = '<option value="1">Admin</option><option value="1">Comum</option>';
        } else {
            $resp = '<option value="2">Comum</option><option value="2">Admin</option>';
        }
    }

    return $resp;
}

function loginUsuario($id){
    $resp = "";
    include("conexao.php");
    $sql = "SELECT login_usu FROM tb_usuario WHERE id_usuario = $id;";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0) {
        $linha = mysqli_fetch_assoc($result);
        $resp = $linha["login_usu"];
    }

    return $resp;
}

function ativoUsuario($id){
    $resp = "";
    include("conexao.php");
    $sql = "SELECT flg_ativo FROM tb_usuario WHERE id_usuario = $id;";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0) {
        $linha = mysqli_fetch_assoc($result);
        $resp = ($linha["flg_ativo"] == 'S') ? 'checked' : '';
    }

    return $resp;
}

function qtdUsuariosAtivos(){
    $qtd = 0;
    include("conexao.php");
    $sql = "SELECT COUNT(*) AS Qtd FROM tb_usuario WHERE flg_ativo = 'S';";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0) {
        $linha = mysqli_fetch_assoc($result);
        $qtd = $linha['Qtd'];
    }

    return $qtd;
}
?>
