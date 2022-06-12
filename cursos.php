<?php
    include("conexao.php");
    $consulta1 = "SELECT NOME_FANTASIA FROM INSTITUICAO WHERE IDINSTITUICAO = 1";
    $con = $conector->query($consulta1) or die ($mysqli->error);

    $consulta2 = "SELECT * FROM ENDERECO WHERE IDENDERECO = 1";
    $con2 = $conector->query($consulta2) or die ($mysqli->error);

    $consulta3 = "SELECT * FROM CONTATO WHERE IDCONTATO = 1";
    $con3 = $conector->query($consulta3) or die ($mysqli->error);

    $consulta4 = "SELECT * FROM CONTATO WHERE IDCONTATO = 1";
    $con4 = $conector->query($consulta4) or die ($mysqli->error);
?>    

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualificas</title>
    <link rel="stylesheet" href="./curso.css">
</head>
<body>

    <header class="cabecalho"> <!--Aqui ficará a barra de navegação do site-->
        <a href="index.php"><img class="cabecalho-imagem" src="./img/logotipo.png" width="80px" height="50px" alt="Logo da Qualificas"></a>
        <nav class="cabecalho-menu">
            <ul class="lista-menu">
                <li><a href="./#banner" class="cabecalho-menu-item">Início</a></li>
                <li><a href="./#team" class="cabecalho-menu-item">Quem somos?</a></li>
                <li><a href="./#cursos" class="cabecalho-menu-item">Cursos</a></li>
                <li><a href="./#contato" class="cabecalho-menu-item">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="curso">
            <section class="insituicao">
                <section class="logo-instituicao">
                    <img src="./img/logo_inst1.png">
                </section>
                <section class="detalhe-instituicao">
                    <?php while ($dado = $con->fetch_array()){?>
                        <h3><?php echo $dado["NOME_FANTASIA"];?></h3>
                    <?php } ?>
                    <p>Horário de Funcionamento Secretaria Geral: De segunda a sexta das 08:00 às 17:30</p>
                    <?php while ($dado2 = $con2->fetch_array()){?>
                        <p> Localização: <?php echo $dado2["ENDERECO"]. ", " .$dado2["NUMERO"]. " - ".$dado2["BAIRRO"]. "/".$dado2["ESTADO"]." - ".$dado2["CEP"];?></p>
                    <?php } ?>
                    <?php while ($dado3 = $con3->fetch_array()){?>
                        <p> Telefone Fixo: <?php echo $dado3["TELEFONE_FIXO"].'<br>'. "E-mail: ".$dado3["EMAIL"];?></p>
                    <?php } ?>
                    <section class="btn_site">
                        <?php while ($dado4 = $con4->fetch_array()){?>
                            <a href="<?php echo $dado4["SITE"];?>" target="_blank" ><button>Acesse o site oficial</button></a>
                        <?php } ?>
                    <section>
                </section>
            </section>
            <section class="cursos">
                <section class="imagem-curso">
                    <img src="./img/imagem_curso1.jpg" height="250px">
                </section>
                <section class="intruducao">
                <h3>Projeto construindo futuros</h3>
                    <p> O projeto “Construindo Futuros” é criado a partir da formação do Itaú UNICEF ao Lar Jesus.
                    <br>O projeto atenderá em contraturno escolar adolescentes vulneráveis, com idade de 14 a 16 anos que 
                    necessitam de atividades dirigidas para o desenvolvimento integral, estimulando a convivência social, 
                    a participação cidadã e uma formação geral para o mundo do trabalho.</p>
                </section>
                
                <section class="detalhe-curso">
                    
                    <p>Carga horária:   | Nível:</p>
                    <p>Mais descrições.</p>
                </section>
            </section>
        </section>
    
    </main>
    <hr>
    <!--<footer class="rodape">
        <section class="rede">
            <a href="https://twitter.com" target="_blank"><img src="./IMG/rede1.png" width="60px"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="./IMG/rede2.png" width="60px"></a>
            <a href="https://www.facebook.com" target="_blank"><img src="./IMG/rede3.png" width="60px"></a>
        </section>
    </footer>-->
</body>
</html>