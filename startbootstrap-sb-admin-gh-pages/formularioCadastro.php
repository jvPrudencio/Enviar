<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Formulário de Login e Registro com HTML5 e CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="DesignPaginas.css" />
    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco_cad').value=("");
            document.getElementById('bairro_cad').value=("");
            document.getElementById('localidade_cad').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco_cad').value=(conteudo.logradouro);
            document.getElementById('bairro_cad').value=(conteudo.bairro);
            document.getElementById('localidade_cad').value=(conteudo.localidade);
            ;
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco_cad').value="...";
                document.getElementById('bairro_cad').value="...";
                document.getElementById('localidade_cad').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</head>
<body>
    <div class="container" >


        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

        <div class="content">      


            <!--FORMULÁRIO DE CADASTRO-->
            <div id="cadastro">
                <form method="post" action="inserirRegistro.php"> 
                    <h1>Cadastro</h1> 

                    <p> 
                        <label for="nome_cad">Nome:</label>
                        <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="ex. João" />
                    </p>

                    <p> 
                        <label for="email_cad">E-mail:</label>
                        <input id="email_cad" name="email_cad" required="required" type="email" placeholder="ex. joao@gmail.com"/> 
                    </p>

                    <p> 
                        <label for="senha_cad">Senha:</label>
                        <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
                    </p>

                    <p>
                        <label for="cep_cad">Cep:</label>
                        <input name="cep_cad" type="text" id="cep_cad" value=""  maxlength="9" onblur="pesquisacep(this.value);" required="required" placeholder="ex. 73000000"/>
                    </P>
                    
                    <p>
                        <label for="endereco_cad">Endereço:</label>
                        <input name="endereco_cad" type="text" id="endereco_cad"  required="required" placeholder="ex. quandra 7 conj A" />
                    </p>        
                        
                    <p>
                        <label for="bairro_cad">Bairro:</label>
                        <input name="bairro_cad" type="text" id="bairro_cad" required="required" placeholder="ex. quandra 7 conj A casa 23"/>
                    </p>
                    
                    <p>
                        <label for="localidade_cad">localidade:</label>
                        <input name="localidade_cad" type="text" id="localidade_cad" required="required" placeholder="ex. Sobradinho" />
                    </p>
                    
                    <p> 
                        <input type="submit" value="Cadastrar"/> 
                        
                    </p>

                    <p class="link">  
                        Já tem conta?
                        <a href="fomularioLogin.php"> Ir para Login </a>
                    </p>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>
