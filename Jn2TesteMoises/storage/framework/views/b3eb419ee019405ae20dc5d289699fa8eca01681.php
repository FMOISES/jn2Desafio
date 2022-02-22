<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <style type="text/css">
            @charset  "utf-8";
            /*limpando formatação padrão*/
            *{
                margin: 0;
                padding: 0;
            }
            /*fim limpeza*/
            body{
                font-size: 1em;
                font-family: Arial, Helvetica, sans-serif;
                background:silver ;
            }

            /*layout*/
            .postagem-lateral{
                font-size: 0.8em;
                padding: 5px;
            }
            .conteudo-lateral{
                background-color: white;
                padding: 10px;
                margin-bottom: 10px;
            }
            a:active{
                color: black;
            }
            #area-principal{
                width: 920px;
                margin: 0 auto;
                padding: 15px;
            }
            #area-postagem{
                width: 1000px;
                float: left;
            }
            #area-lateral{
                width: 240px;
                float: right;
            }
            .postagem{
                padding: 20px;
                margin-bottom: 20px;
                background-color: white;
            }
            #rodape{
                margin: 0px auto;
                background-color: #ccc;
                clear: both;
                text-align: center;
                padding: 15px;
            }
            #cabecalho{
                background-color: red;
                padding: 15px;
                text-align: center;
            }
            #logo,#menu{
                padding: 10px;
                width: 600px;
                margin: 0px auto;
            }

            .branco{
                color: white;
            }
            /*fim layout*/
            /*formatando menu*/
            a{
                text-decoration: none;
                padding: 8px 12px;
                color: orange;
            }
            #cabecalho a:link{
                color: white;
            }
            #cabecalho a:visited{
                color:white;
            }
            #cabecalho a:hover{
                color: white;
                background-color: #ffa500;
            }
            #cabecalho a:active{
                color: black;
            }
            /*fim formatação de menu*/

            /*formatação padrão*/
            h1{
                color: #353839;
                font-size: 2.5em;
            }
            h2{
                color: #f7b600;
            }
            .data-postagem{
                font-size: 0.8em;

                padding-bottom: 10px;
                margin-bottom: 10px;
                border-bottom: 1px solid #ccc;
                display: block;
            }
            h3{
                color: #565656;
                background-color: #ccc;
                padding: 10px;
            }

            /*fim formatação padrão*/
        </style>
        <title>tecblog o seu site de tecnologia</title>
    </head>

    <body>
        <div id="cabecalho">
            <div id="logo">
                <img src="https://www.jn2.com.br/wp-content/themes/jn2/images/logo-jn2.svg" alt="alt"/>
            </div>
            <div id="menu">
                <h1>Desafio Jn2</h1>
            </div>
        </div>
        <div id="area-principal">
            <div id="area-postagem">
                <!-- inicio postagem-->
                <div class="postagem">
                    <h2>Sobre o Desafio Técnico JN2</h2>
                    <span class="data-postagem">18 de janeiro de 2020</span>
                    <img width="620px" src="imagens/imagem1.jpg">
                    <p>Você está recebendo o desafio JN2 ,tem o prazo de 48hs para entregar!</p>



                    <p>    O nosso desafio consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro.</p>



                        Você precisará construir uma base de dados com os seguintes campos:


                        <<ul>
                            <li>                        ID;
</li>
                            <li>                        Nome;
</li>
                            <li>                        Nome;
</li>
<li>                        Telefone;
</li>
<li>                        CPF;
</li>
<li>                        CPF;
</li>
<li>                        Placa do Carro.
</li>
                        </ul>








                        Para o gerenciamento dessa base, você construirá uma API REST contendo os seguintes endpoints:</p>

                </div>

            </div>
            <div id="rodape">
                todos os direitos reservados
            </div>
        </div>

    </body>

</html><?php /**PATH /app/resources/views/jn2/jn2.blade.php ENDPATH**/ ?>