<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Administrador</title>
    </head>

    <body>
        <div class="container">
            <div class="card-form">
                <div class="card-header">
                    <h1 class="text-header">Cadastre-se</h1>
                    <p class="subtext-header">Faça seu cadastro de Administrador</p>
                </div>
                <hr>
                <div class="card-formulario">
                    <form class="formulario-cadastro" method="POST" action="./controller/ControleUser.php?ACAO=cadastrarAdm">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" id="inputEmail" required>
                        <br>
                        <label for="inputSenha">Senha</label>
                        <input type="password" name="senha" id="inputSenha" required>
                        <br>
                        <label for="inputNome">Nome</label>
                        <input type="text" name="nome" id="inputNome" required>
                        <br>
                        <label for="inputCpf">CPF</label>
                        <input type="text" name="cpf" id="inputCpf" required>
                        <br>
                        <label for="inputEndereco">Endereço</label>
                        <input type="text" name="endereco" id="inputEndereco" required>
                        <br>
                        <label for="inputTelefone">Telefone</label>
                        <input type="tel" name="telefone" id="inputTelefone" required>
                        <br>
                        <button type="submit" class="cad-se">Cadastrar-se</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>