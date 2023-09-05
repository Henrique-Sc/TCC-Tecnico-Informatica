<?php 
    error_reporting(0);
    ini_set("display_errors", 0);
    include_once('php/verify_darkmode.php');
    include_once('database/db.php');
    include_once('php/consultas.php');
    include_once('php/verify_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br" <?php if ($darkmode) {echo "class='darkmode'";} ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../docs/css/edita_cads.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <script src="https://kit.fontawesome.com/c9ce4f5a4f.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
        function hidePass() {
            senha = document.getElementById('senha');
            olho = document.getElementById('verSenha');

            if (olho.className == 'fa-regular fa-eye-slash') {

                senha.type = 'text';
                olho.className = 'fa-regular fa-eye';
                
            } else{
                
                senha.type = 'password';
                olho.className = 'fa-regular fa-eye-slash';

            }
        }

        function editar() {
            edit_btn = document.getElementById('edit_btn');
            form_edit = document.getElementById('form-edit');
            form_edit.action = 'php/edita_user.php'

            if (window.confirm('Deseja mesmo editar estas informações?')) {    
                form_edit.submit();
            }
        }
            
        function deletar() {
            del_btn = document.getElementById('del_btn');
            form_edit = document.getElementById('form-edit');
            form_edit.action = 'php/del_user.php'

            if (window.confirm('Deseja mesmo deletar o seu cadastro?')) {    
                form_edit.submit();
            }
        }

    </script>

    <title>Editar</title>
</head>
<body>
    
    <?php

        include('navbar.php');
        $id = $_SESSION['login']['id'];
        $condicao = "SELECT * FROM Usuarios WHERE idUser = '$id'";
        $consulta = query($conexao_db, $condicao);
        $per_user = mysqli_fetch_row($consulta);

    ?>
    
    <div id="top_linha">
        <h1 class="h2">Configuração</h1>
        <hr>
        <div class="img-user">
            <a href="perfil.php"><img src="<?php echo get_img($_SESSION['login']['imgUser']) ?>" alt="Imagem do usuário E link para o perfil do usuário"></a>
        </div>
    </div>

    <div id="edicao">

        <form method="post" id="form-edit">

            <table>

                <tr>
                    <th>Nome</th>
                    <td><input type="text" name="nome" id="nome" class="caixas_form border" value="<?php echo $per_user[1];?>"></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" id="email" class="caixas_form border" disabled value="<?php echo $per_user[2];?>"></td>
                </tr>

                <tr>
                    <th>Senha</th>
                    <td>
                        <div class="wrap-senha">
                            <input type="password" name="senha" id="senha" class="caixas_form border" placeholder="Sem alteração">
                            <i id="verSenha" class="fa-regular fa-eye-slash" style="cursor: pointer;" onclick="hidePass()"></i>
                        </div>
                    </td>
                </tr>
                
                <!-- 
                <tr>
                    <th>Foto</th>
                    <td>
                        <input type="file" name="foto" id="foto" class="caixas_form">
                    </td>
                </tr>
                <tr style="font-size: 0.8em;">
                    <th>Observação:</th>
                    <td><p class="caixas_form text">Se não inserir nenhuma imagem, a foto atual será preservada</p></td>
                </tr>
                 -->
                <tr>
                    <table>
                        <tr>
                            <td colspan="" style="text-align: right; border: none;" class="wrap-buttons">
                            <input type="button" value="Deletar" id="del_btn" class="btn" onclick="deletar()">
                        </td>
                            <td style="text-align: left; border: none;" class="wrap-button">
                                <input type="button" value="Editar" id="edit_btn" class="btn" onclick="editar()">
                            </td>
                        </tr>
                    </table>
                </tr>

            </table>
        </form>

    </div>


</body>
</html>