<?php
    include("conexao.php");
    $consulta1 = "SELECT NOME_CURSO FROM curso WHERE IDCURSO = 4";
    $con = $conector->query($consulta1) or die ($conector->error);

    $consulta2 = "SELECT NOME_CURSO FROM curso WHERE IDCURSO = 9";
    $con2 = $conector->query($consulta2) or die ($conector->error);
    
    $consulta3 = "SELECT NOME_CURSO FROM curso WHERE IDCURSO = 13";
    $con3 = $conector->query($consulta3) or die ($conector->error);

    $consulta4 = "SELECT NOME_CURSO FROM curso WHERE IDCURSO = 19";
    $con4 = $conector->query($consulta4) or die ($conector->error);

    $consulta5 = "SELECT NOME_CURSO FROM curso WHERE IDCURSO = 3";
    $con5 = $conector->query($consulta5) or die ($conector->error);

    $consulta6 = "SELECT NOME_CURSO FROM curso WHERE IDCURSO = 17";
    $con6 = $conector->query($consulta6) or die ($conector->error);
  
    if(isset($_POST['submit'])){
        include("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $mensagem = $_POST['mensagem'];
        
        $result = mysqli_query($conector, "INSERT INTO formulario(NOME,EMAIL,TEL_FIXO,TEL_CELULAR,MENSAGEM) values ('$nome','$email','$telefone','$celular','$mensagem')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualificas</title>
    <link rel="stylesheet" href=".\styles.css">
</head>
<body>

    <header class="cabecalho"> <!--Aqui ficará a barra de navegação do site-->
        <a href="index.php"><img id="cabecalho-imagem" src="./img/logotipo.png" width="80px" height="50px" alt="Logo da Qualificas"></a>
        
        <nav class="cabecalho-menu">
            <ul class="lista-menu">
                <li><a href="#banner" class="cabecalho-menu-item">Início</a></li>
                <li><a href="#team" class="cabecalho-menu-item">Quem somos?</a></li>
                <li><a href="#cursos" class="cabecalho-menu-item">Cursos</a></li>
                <li><a href="#contato" class="cabecalho-menu-item">Contato</a></li>
            </ul>
            <section class="mobile-menu-icon">
            <a href="index.php"><img id="logo-mobile" src="./img/logotipo.png" width="80px" height="50px" style="margin-left:-180px;" alt="Logo da Qualificas"></a>
                <button onclick="menuShow()"><img class="icon" src="./img/menu_white_36dp.svg"></button>
            </section>

            <section class="menu-mobile">
                <ul class="lista-menu-mobile">
                    <li><a href="#banner" class="mobile-item">Início</a></li>
                    <li><a href="#team" class="mobile-item">Quem somos?</a></li>
                    <li><a href="#cursos" class="mobile-item">Cursos</a></li>
                    <li><a href="#contato" class="mobile-item">Contato</a></li>
                </ul>
            </section>
        </nav>
    </header>

    <main class="conteudo">
        <a name="banner"></a>
        <section class="conteudo-slider"> <!--Essa section será usada para criar o slider de imagens-->
            <ul class="slider">
                <li>
                    <input type="radio" id="slide1" name="slide" checked>
                    <label for="slide1"></label>
                    <img class="conteudo-slider-imagem" src="./img/slide1.png" alt="Imagem de exibição 01">
                </li>

                <li>
                    <input type="radio" id="slide2" name="slide" checked>
                    <label for="slide2"></label>
                    <img class="conteudo-slider-imagem" src="./img/slide2.png" alt="Imagem de exibição 02">
                </li>

                <li>
                    <input type="radio" id="slide3" name="slide" checked>
                    <label for="slide3"></label>
                    <img class="conteudo-slider-imagem" src="./img/slide3.png" alt="Imagem de exibição 03">
                </li>
           </ul>           
            
        </section>
        <a name="team"></a>
        <section class="conteudo-quemsomos"> <!--Esta section irá conter informações sobre a nossa empresa !!-->
           <section class="texto">
                <h2>Quem Somos?</h2>
                <p>Nossa empresa fornece serviços de divulgações de cursos para insituições pequenas e de médio porte.</p>
                <p id="sub">Vantagens de trabalhar conosco:</p>
                <ul class="vantagens">
                    <li>Aumento de alunos matrículados.</li>
                    <li>Divulgação da sua institução na web.</li>
                    <li>Aumento na rentabilidade.</li>
                </ul>
            </section>
            <section class="image">
                <img src="./img/team.png" alt="imagem de equipe" width="500px">
            </section>
        </section>
        <a name="cursos"></a>
        <section class="conteudo-principal"> <!--Essa section será usada para criar os cards (instituiçoes ou cursos ? A DEFINIR !!!)-->
            <section class="conteudo-principal-escrito"> <!--Div usada para conter um titulo e uma breve descrição da seção-->
                <h2 class="conteudo-principal-escrito-titulo">Instituições Parceiras</h2>
                <p class="conteudo-principal-escrito-texto">Abaixo você consegue visualizar as informações referente aos cursos oferecidos pelas nossas instituições parceiras:</p>
            </section>
            
            <section class="conteudo-principal-card"> <!--Será adicionados os cards das instituicao dentro dessa div-->
                <section class="conteudo-principal-instituicao"> <!--Div para ser usada na criação do card 01-->
                    <img src="./img/curso1.jpg" width="288px" alt="Imagem ong">
                    <?php while ($dado = $con->fetch_array()){?>
                    <h3><?php echo $dado["NOME_CURSO"];?></h3>
                    <?php } ?>
                    <a href="https://larjesuscriancas.org.br" target="_blank"><button id="btn_um">Acesse o site oficial</button></a>
                </section>

                <section class="conteudo-principal-instituicao"> <!--Div para ser usada na criação do card 02-->
                    <img src="./img/curso2.jpg" width="288px" alt="Imagem ong">
                    <?php while ($dado2 = $con2->fetch_array()){?>
                    <h3><?php echo $dado2["NOME_CURSO"];?></h3>
                    <?php } ?>
                    <a href="https://vivereh.org.br" target="_blank"><button>Acesse o site oficial</button></a>
                </section>

                <section class="conteudo-principal-instituicao"> <!--Div para ser usada na criação do card 03-->
                    <img src="./img/curso3.jpg" width="288px" alt="Imagem ong">
                    <?php while ($dado3 = $con3->fetch_array()){?>
                    <h3><?php echo $dado3["NOME_CURSO"];?></h3>
                    <?php } ?>
                    <a href="http://www.centrosocialcarisma.org" target="_blank"><button>Acesse o site oficial</button></a>
                </section>

                <section class="conteudo-principal-instituicao"> <!--Div para ser usada na criação do card 04-->
                    <img src="./img/curso4.jpg" width="288px" alt="Imagem ong">
                    <?php while ($dado4 = $con4->fetch_array()){?>
                    <h3><?php echo $dado4["NOME_CURSO"];?></h3>
                    <?php } ?>
                    <a href="http://www.centrosocialcarisma.org" target="_blank"><button>Acesse o site oficial</button></a>
                </section>

                <section class="conteudo-principal-instituicao"> <!--Div para ser usada na criação do card 05-->
                    <img src="./img/curso5.jpg" width="288px" alt="Imagem ong">
                    <?php while ($dado5 = $con5->fetch_array()){?>
                    <h3><?php echo $dado5["NOME_CURSO"];?></h3>
                    <?php } ?>
                    <a href="https://larjesuscriancas.org.br" target="_blank"><button id="btn_cinco">Acesse o site oficial</button></a>
                </section>

                <section class="conteudo-principal-instituicao"> <!--Div para ser usada na criação do card 06-->
                    <img src="./img/curso6.jpg" width="288px" alt="Imagem ong">
                    <?php while ($dado6 = $con6->fetch_array()){?>
                    <h3><?php echo $dado6["NOME_CURSO"];?></h3>
                    <?php } ?>
                    <a href="http://www.centrosocialcarisma.org" target="_blank"><button id="btn_seis">Acesse o site oficial</button></a>
                </section>
            </section>
            <section class="btn_cursos">
                    <a href="./cursos.php" ><button>Todos os Cursos</button></a>
            </section>
        </section>
        <section class="contato">
            <a name="contato"></a>
            <h2>contato</h2>
            <p>Entre em contato com a nossa empresa através do formulário abaixo:</p>
            <section class="obs_contato">
                <p> ATENÇÃO: Dúvidas referente aos cursos e instituições contatar o canal disponibilizado pela mesma.</p>
            </section>
            <section class="formulario">
                <form action="index.php" method="POST">
                        <section class="inputBox">
                            <label for="nome">Nome Completo<strong>*</strong></label>
                            <br>
                            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" class="inputUser" required>
                        </section>
                        <br><br>
                        <section class="inputBox">
                            <label for="email">E-mail<strong>*</strong></label>
                            <br>
                            <input type="email" name="email" id="email" placeholder="Digite o seu e-mail" class="inputUser" required>   
                        </section>
                        <br><br>
                        <section class="inputBox">
                            <label for="telefone">Telefone</label>
                            <label for="celular" id="lcelular">Celular<strong>*</strong></label>
                            <br>
                            <input type="tel" name="telefone" id="telefone" placeholder="(DD) XXXX-XXXX" class="inputUser" required>
                            <input type="tel" name="celular" id="celular" placeholder="(DD) XXXXX-XXXX" class="inputUser" required>
                        </section>
                        <br><br>
                            <label>Digite a sua mensagem<strong>*</strong></label>
                            <br>
                            <textarea name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem..." cols="30" rows="10"></textarea>
                        <br><br>  
                        <section class="button"> 
                            <input type="submit" name="submit" id="submit">
                        </section>    
                </form>
            </section>
    </main>
    <hr>
    <footer class="rodape">
        <section class="rede">
            <a href="https://twitter.com" target="_blank"><img src="./img/rede1.png" width="60px"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="./img/rede2.png" width="60px"></a>
            <a href="https://www.facebook.com" target="_blank"><img src="./img/rede3.png" width="60px"></a>
        </section>
    </footer>
    <script src="./scriptjava.js"></script>
</body>
</html>