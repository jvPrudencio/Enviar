<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Formulário de Login e Registro com HTML5 e CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="DesignPaginas.css" />
</head>
<body>
    <div class="container" >
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

        <div class="content">      
            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
                <form method="post" action="verificarLogin.php"> 
                    <h1>Login</h1> 
                    <p> 
                        <label for="nome_login">Seu e-mail</label>
                        <input id="email_login" name="email_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
                    </p>

                    <p> 
                        <label for="email_login">Sua Senha</label>
                        <input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha" maxlength="8" /> 
                    </p>

                    <p> 
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                        <label for="manterlogado">Manter-me logado</label>
                    </p>

                    <p> 
                        <input type="submit" value="Logar" /> 
                    </p>

                    <p class="link">
                        Ainda não tem conta?
                        <a href="formularioCadastro.php">Cadastre-se</a>
                    </p>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>
