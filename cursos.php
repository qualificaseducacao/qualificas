<?php
    include("conexao.php");
    $consulta1 = "SELECT NOME_FANTASIA FROM instituicao WHERE IDINSTITUICAO = 1";
    $con = $conector->query($consulta1) or die ($conector->error);

    $consulta2 = "SELECT * FROM endereco WHERE IDENDERECO = 1";
    $con2 = $conector->query($consulta2) or die ($conector->error);

    $consulta3 = "SELECT * FROM contato WHERE IDCONTATO = 1";
    $con3 = $conector->query($consulta3) or die ($conector->error);

    $consulta4 = "SELECT * FROM contato WHERE IDCONTATO = 1";
    $con4 = $conector->query($consulta4) or die ($conector->error);

    $consulta5 = "SELECT * FROM curso WHERE IDCURSO = 1";
    $con5 = $conector->query($consulta5) or die ($conector->error);

    $consulta6 = "SELECT * FROM curso WHERE IDCURSO = 2";
    $con6 = $conector->query($consulta6) or die ($conector->error);
    
    $consulta7 = "SELECT * FROM curso WHERE IDCURSO = 3";
    $con7 = $conector->query($consulta7) or die ($conector->error);

    $consulta8 = "SELECT * FROM curso WHERE IDCURSO = 4";
    $con8 = $conector->query($consulta8) or die ($conector->error);

    $consulta9 = "SELECT * FROM curso WHERE IDCURSO = 5";
    $con9 = $conector->query($consulta9) or die ($conector->error);

    $consulta10 = "SELECT * FROM curso WHERE IDCURSO = 6";
    $con10 = $conector->query($consulta10) or die ($conector->error);

    $consulta11 = "SELECT * FROM curso WHERE IDCURSO = 7";
    $con11 = $conector->query($consulta11) or die ($conector->error);

    $consulta12 = "SELECT * FROM curso WHERE IDCURSO = 8";
    $con12 = $conector->query($consulta12) or die ($conector->error);

    $consulta13 = "SELECT NOME_FANTASIA FROM instituicao WHERE IDINSTITUICAO = 2";
    $con13 = $conector->query($consulta13) or die ($conector->error);

    $consulta14 = "SELECT * FROM endereco WHERE IDENDERECO = 2";
    $con14 = $conector->query($consulta14) or die ($conector->error);

    $consulta15 = "SELECT * FROM contato WHERE IDCONTATO = 2";
    $con15 = $conector->query($consulta15) or die ($conector->error);

    $consulta16 = "SELECT * FROM contato WHERE IDCONTATO = 2";
    $con16 = $conector->query($consulta16) or die ($conector->error);

    $consulta17 = "SELECT * FROM curso WHERE IDCURSO = 9";
    $con17 = $conector->query($consulta17) or die ($conector->error);

    $consulta18 = "SELECT * FROM curso WHERE IDCURSO = 10";
    $con18 = $conector->query($consulta17) or die ($conector->error);

    $consulta19 = "SELECT * FROM curso WHERE IDCURSO = 11";
    $con19 = $conector->query($consulta19) or die ($conector->error);

    $consulta20 = "SELECT NOME_FANTASIA FROM instituicao WHERE IDINSTITUICAO = 3";
    $con20 = $conector->query($consulta20) or die ($conector->error);

    $consulta21 = "SELECT * FROM endereco WHERE IDENDERECO = 3";
    $con21 = $conector->query($consulta21) or die ($conector->error);

    $consulta22 = "SELECT * FROM contato WHERE IDCONTATO = 3";
    $con22 = $conector->query($consulta22) or die ($conector->error);

    $consulta23 = "SELECT * FROM contato WHERE IDCONTATO = 3";
    $con23 = $conector->query($consulta23) or die ($conector->error);

    $consulta24 = "SELECT * FROM curso WHERE IDCURSO = 12";
    $con24 = $conector->query($consulta24) or die ($conector->error);

    $consulta25 = "SELECT * FROM curso WHERE IDCURSO = 13";
    $con25 = $conector->query($consulta25) or die ($conector->error);

    $consulta26 = "SELECT * FROM curso WHERE IDCURSO = 14";
    $con26 = $conector->query($consulta26) or die ($conector->error);

    $consulta27 = "SELECT * FROM curso WHERE IDCURSO = 15";
    $con27 = $conector->query($consulta27) or die ($conector->error);

    $consulta28 = "SELECT * FROM curso WHERE IDCURSO = 16";
    $con28 = $conector->query($consulta28) or die ($conector->error);

    $consulta29 = "SELECT * FROM curso WHERE IDCURSO = 17";
    $con29 = $conector->query($consulta29) or die ($conector->error);

    $consulta30 = "SELECT * FROM curso WHERE IDCURSO = 18";
    $con30 = $conector->query($consulta30) or die ($conector->error);

    $consulta31 = "SELECT * FROM curso WHERE IDCURSO = 19";
    $con31 = $conector->query($consulta31) or die ($conector->error);

    $consulta32 = "SELECT NOME_FANTASIA FROM instituicao WHERE IDINSTITUICAO = 4";
    $con32 = $conector->query($consulta32) or die ($conector->error);

    $consulta33 = "SELECT * FROM endereco WHERE IDENDERECO = 4";
    $con33 = $conector->query($consulta33) or die ($conector->error);

    $consulta34 = "SELECT * FROM contato WHERE IDCONTATO = 4";
    $con34 = $conector->query($consulta34) or die ($conector->error);

    $consulta35 = "SELECT * FROM contato WHERE IDCONTATO = 4";
    $con35 = $conector->query($consulta35) or die ($conector->error);

    $consulta36 = "SELECT * FROM curso WHERE IDCURSO = 20";
    $con36 = $conector->query($consulta36) or die ($conector->error);
?>    

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualificas</title>
    <link rel="stylesheet" href="./cursos.css">
</head>
<body>

    <header class="cabecalho"> <!--Aqui ficar?? a barra de navega????o do site-->
        <a href="index.php"><img id="cabecalho-imagem" src="./img/logotipo.png" width="80px" height="50px" alt="Logo da Qualificas"></a>
        <nav class="cabecalho-menu">
            <ul class="lista-menu">
                <li><a href="./#banner" class="cabecalho-menu-item">In??cio</a></li>
                <li><a href="./#team" class="cabecalho-menu-item">Quem somos?</a></li>
                <li><a href="./#cursos" class="cabecalho-menu-item">Cursos</a></li>
                <li><a href="./#contato" class="cabecalho-menu-item">Contato</a></li>
            </ul>
            <section class="mobile-menu-icon">
            <a href="index.php"><img id="logo-mobile" src="./img/logotipo.png" width="80px" height="50px" style="margin-left:-180px;" alt="Logo da Qualificas"></a>
                <button onclick="menuShow()"><img class="icon" src="./img/menu_white_36dp.svg"></button>
            </section>

            <section class="menu-mobile">
                <ul class="lista-menu-mobile">
                    <li><a href="#banner" class="mobile-item">In??cio</a></li>
                    <li><a href="#team" class="mobile-item">Quem somos?</a></li>
                    <li><a href="#cursos" class="mobile-item">Cursos</a></li>
                    <li><a href="#contato" class="mobile-item">Contato</a></li>
                </ul>
            </section>
        </nav>
    </header>
    <main>
        <section class="curso">
            <section class="instituicao">
                <section class="logo-instituicao">
                    <img src="./img/logo_inst1.png">
                </section>
                <section class="detalhe-instituicao">
                    <?php while ($dado = $con->fetch_array()){?>
                        <h3><?php echo $dado["NOME_FANTASIA"];?></h3>
                    <?php } ?>
                    <p>Hor??rio de Funcionamento Secretaria Geral: De segunda a sexta das 08:00 ??s 17:30</p>
                    <?php while ($dado2 = $con2->fetch_array()){?>
                        <p> Localiza????o: <?php echo $dado2["ENDERECO"]. ", " .$dado2["NUMERO"]. " - ".$dado2["BAIRRO"]. "/".$dado2["ESTADO"]." - ".$dado2["CEP"];?></p>
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
                    <p> O projeto ???Construindo Futuros??? ?? criado a partir da forma????o do Ita?? UNICEF ao Lar Jesus.
                    <br>O projeto atender?? em contraturno escolar adolescentes vulner??veis, com idade de 14 a 16 anos que 
                    necessitam de atividades dirigidas para o desenvolvimento integral, estimulando a conviv??ncia social, 
                    a participa????o cidad?? e uma forma????o geral para o mundo do trabalho.</p>
                </section>
                <section class="detalhe-curso">
                    <?php while ($dado5 = $con5->fetch_array()){?>
                        <h4><?php echo $dado5["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Atividades que forne??am subs??dios para melhorar as rela????es interpessoais; dicas de sele????o de emprego, forma????o e marketing pessoal etc.</p>
                </section>

                <section class="detalhe-curso">
                    <?php while ($dado6 = $con6->fetch_array()){?>
                        <h4><?php echo $dado6["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Atividades com no????es b??sicas de inform??tica, m??dias sociais, pesquisas, fotografia, edi????o b??sica de v??deos, acesso aos cursos do CIEE, comunica????o por e-mail e confec????o de curr??culo.</p>
                </section>

                <section class="detalhe-curso">
                    <?php while ($dado7 = $con7->fetch_array()){?>
                        <h4><?php echo $dado7["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Com pr??ticas pedag??gicas em artes c??nicas que alinhe a comunica????o e a linguagem corporal, atrav??s de temas escolhidos pela turma e do cotidiano (viol??ncia, racismo, entre outros) discutindo valores, sentimentos e rela????o interpessoal.</p>
                </section>
                <section class="imagem-curso">
                    <img src="./img/imagem_curso2.jpg" height="250px">
                </section>
                <section class="intruducao">
                <h3>Projeto costurando o futuro e empreendedorismo</h3>
                    <p> O projeto ???Costurando o Futuro??? consiste basicamente em transformar a realidade de jovens e adultos vulner??veis acima de 16 anos, atrav??s da costura.
                    <br><br>O projeto visa promover o desenvolvimento pessoal e social, estimulando a discuss??o da padroniza????o nos vestu??rios e os diversos estilos de moda, assim como autogest??o, coopera????o, solidariedade, respeito a natureza e criatividade; focando na emancipa????o do indiv??duo.</p>
                </section>
                <section class="detalhe-curso">
                    <?php while ($dado8 = $con8->fetch_array()){?>
                        <h4><?php echo $dado8["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>A oficina de sacolas tem como objetivo proporcionar um ambiente de aprendizado relacionando t??cnicas de corte e costura e o desenvolvimento econ??mico alternativo.
                        <br><br>
                        Atividade pr??tica de corte e costura de sacola.
                    </p>
                </section>
                <section class="detalhe-curso">
                    <?php while ($dado9 = $con9->fetch_array()){?>
                        <h4><?php echo $dado9["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Proporcionar?? o conhecimento sobre gastos, or??amentos e sustentabilidade.</p>
                </section>

                <section class="detalhe-curso">
                    <?php while ($dado10 = $con10->fetch_array()){?>
                        <h4><?php echo $dado10["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Desenvolver?? a moda de diversas formas e express??es.</p>
                </section>
                
                <section class="detalhe-curso">
                    <?php while ($dado11 = $con11->fetch_array()){?>
                        <h4><?php echo $dado11["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Estimular?? a percep????o de novas oportunidades no ??mbito dos neg??cios.</p>
                </section>
                <section class="imagem-curso">
                    <img src="./img/imagem_curso3.jpg" height="250px">
                </section>
                <section class="intruducao">
                <?php while ($dado12 = $con12->fetch_array()){?>
                <h3><?php echo $dado12["NOME_CURSO"];?></h3>
                <?php } ?>
                    <p> O Projeto ???Rob??tica Entre as Crian??as??? vem proporcionar ??s crian??as e adolescentes vulner??veis o contato direto com a tecnologia, suas ferramentas e possibilidades, com o intuito de gerar conhecimento, principalmente, mant??-los inseridos na realidade tecnol??gica.
                        <br><br>
                        Objetivo:</strong> Fomentar o interesse de crian??as e adolescentes pela tecnologia, sendo o ensino da rob??tica uma forte tend??ncia mundial.
                        <br><br>
                        Faixa et??ria de atendimento:</strong> Crian??as de 06 a 11 anos e adolescentes de 12 a 15 anos.
                        <br><br>
                        Benef??cios do projeto:</strong> Estimular o racioc??nio l??gico e promover o conhecimento, estimular a conviv??ncia social, a autonomia e uma forma????o geral para o mundo do trabalho.
                    </P>
                    
                </section>
            </section>
        <hr>
            <section class="instituicao">
                <section class="logo-instituicao">
                    <img src="./img/logo_inst2.png">
                </section>
                <section class="detalhe-instituicao">
                    <?php while ($dado13 = $con13->fetch_array()){?>
                        <h3><?php echo $dado13["NOME_FANTASIA"];?></h3>
                    <?php } ?>
                    <p>Visitas Presenciais: Quarta Feira das 08:00 ??s 17:00 S??bado das 08:00 ??s 12:00</p>
                    <?php while ($dado14 = $con14->fetch_array()){?>
                        <p> Localiza????o: <?php echo $dado14["ENDERECO"]. ", " .$dado14["NUMERO"]. " - ".$dado14["BAIRRO"]. "/".$dado14["ESTADO"]." - ".$dado14["CEP"];?></p>
                    <?php } ?>
                    <?php while ($dado15 = $con15->fetch_array()){?>
                        <p> Telefone Celular: <?php echo $dado15["TELEFONE_CELULAR"];?></p>
                    <?php } ?>
                    <section class="btn_site">
                        <?php while ($dado16 = $con16->fetch_array()){?>
                            <a href="<?php echo $dado16["SITE"];?>" target="_blank" ><button>Acesse o site oficial</button></a>
                        <?php } ?>
                    <section>
                </section>
                <section class="detalhe-curso">
                    <?php while ($dado17 = $con17->fetch_array()){?>
                        <h4><?php echo $dado17["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Objetivo: Promover o conhecimento b??sico da l??ngua Inglesa para inclus??o social.
                        <br><br>
                        P??blico: Crian??as, Jovens e Adultos.
                    </p>
                </section>

                <section class="detalhe-curso">
                    <?php while ($dado18 = $con18->fetch_array()){?>
                        <h4><?php echo $dado18["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Objetivo: Promover a inclus??o digital para conhecimentos iniciais b??sicos de inform??tica e pr??tico de uso das ferramentas da Microsoft.
                        <br><br>
                    P??blico: Crian??as, Jovens e Adultos
                    </p>
                </section>

                <section class="detalhe-curso">
                    <?php while ($dado19 = $con19->fetch_array()){?>
                        <h4><?php echo $dado19["NOME_CURSO"];?></h4>
                    <?php } ?>
                    <p>Atividades realizadas para atribuir um Novo Olhar em diversas tem??ticas e fomentar conhecimentos e pr??ticas nas quest??es relativas a crian??a e ao adolescente, Voluntariado, Soberania e Seguran??a Alimentar, Educa????o, Sa??de, Tecnologias, Terapias Hol??sticas, Cidadania e Cultura da Paz.
                        <br><br>
                        Com profissionais de qualidade acontecem ??s palestras, os di??logos O Novo Olhar ?? destinado para um p??blico formador de opini??es, que objetiva com os saberes adquiridos gerar impacto de mudan??as em suas ??reas de atua????o.
                    </p>
                </section>
            </section>
            <hr>
            <section class="instituicao">
                <section class="logo-instituicao">
                    <img src="./img/logo_inst3.png">
                </section>
                <section class="detalhe-instituicao">
                    <?php while ($dado20 = $con20->fetch_array()){?>
                        <h3><?php echo $dado20["NOME_FANTASIA"];?></h3>
                    <?php } ?>
                    <?php while ($dado21 = $con21->fetch_array()){?>
                        <p> Localiza????o: <?php echo $dado21["ENDERECO"]. ", " .$dado21["NUMERO"]. " - ".$dado21["BAIRRO"]. "/".$dado21["ESTADO"]." - ".$dado21["CEP"];?></p>
                    <?php } ?>
                    <?php while ($dado22 = $con22->fetch_array()){?>
                        <p> Telefone Fixo: <?php echo $dado22["TELEFONE_FIXO"]."<br>"."E-mail: ".$dado22["EMAIL"];?></p>
                    <?php } ?>
                    <section class="btn_site">
                        <?php while ($dado23 = $con23->fetch_array()){?>
                            <a href="<?php echo $dado23["SITE"];?>" target="_blank" ><button>Acesse o site oficial</button></a>
                        <?php } ?>
                    </section>
                    <section class="intruducao">
                        <h3>PROJETO EDUCANDO PARA A CIDADANIA</h3>
                    </section>    
                    <section class="detalhe-curso">
                        <?php while ($dado24 = $con24->fetch_array()){?>
                            <h4><?php echo $dado24["NOME_CURSO"];?></h4>
                        <?php } ?>
                        <p>?? um projeto de alfabetiza????o inovadora, que conta com o apoio de uma plataforma digital com conte??do, anima????es, jogos did??ticos, aulas de programa????o, xadrez e um banco de quest??es. 
                            <br><br>
                            Em parceria com a empresa Mentes Not??veis, tem o objetivo de proporcionar uma aprendizagem significativa para crian??as e adolescentes, de forma l??dica e gamificada. 
                            <br><br>
                            P??blico-alvo: Crian??as e adolescentes de 8 a 15 anos.
                            <br>
                            N??mero de benefici??rios: 30 por ano.
                        </p>
                    </section>
                    <section class="detalhe-curso">
                        <?php while ($dado25 = $con25->fetch_array()){?>
                            <h4><?php echo $dado25["NOME_CURSO"];?></h4>
                        <?php } ?>
                        <p>Para responder ??s demandas contempor??neas da educa????o e do trabalho, acreditamos que a tecnologia pode proporcionar o desenvolvimento do pensamento cr??tico, da l??gica e criatividade. Neste sentido, realizamos atividades formativas de Inform??tica, Game Designer e Rob??tica. 
                            <br><br>
                            P??blico-alvo: Crian??as e adolescentes de 8 a 15 anos.
                            <br>
                            N??mero de benefici??rios: 120 por ano.
                        </p>
                    </section>

                    <section class="detalhe-curso">
                        <?php while ($dado26 = $con26->fetch_array()){?>
                            <h4><?php echo $dado26["NOME_CURSO"];?></h4>
                        <?php } ?>
                        <p>A oficina esportiva utiliza as pr??ticas f??sico-esportivas como ferramenta de interven????o na promo????o da sa??de, qualidade de vida e constru????o da cidadania. 
                            <br><br>
                            P??blico-alvo: Crian??as e adolescentes de 8 a 15 anos.
                            <br>
                            N??mero de benefici??rios: 120 por ano.
                        </p>
                    </section>

                    <section class="detalhe-curso">
                        <?php while ($dado27 = $con27->fetch_array()){?>
                            <h4><?php echo $dado27["NOME_CURSO"];?></h4>
                        <?php } ?>
                        <p>O ensino musical motiva os participantes a conhecerem a diversidade das manifesta????es culturais, a desenvolver responsabilidade, resgatar valores sociais e aprimorar as no????es de movimento e dire????o.
                            <br><br>
                            P??blico-alvo: Crian??as e adolescentes de 8 a 15 anos.
                            <br>
                            N??mero de benefici??rios: 120 por ano.
                        </p>
                    </section>

                    <section class="detalhe-curso">
                        <?php while ($dado28 = $con28->fetch_array()){?>
                            <h3><?php echo $dado28["NOME_CURSO"];?></h3>
                        <?php } ?>
                        <p>Atrav??s de diferentes iniciativas, proporcionamos ao nosso p??blico a reflex??o cr??tica acerca dos desafios da sustentabilidade ??? ambiental, econ??mica e social. Juntos, dialogamos sobre a responsabilidade que temos na constru????o do futuro, aprendemos novos h??bitos, conhecemos conceitos importantes e projetamos formas de vida e trabalho mais sustent??veis, para as fam??lias e para as comunidades.   
                        </p>
                    </section>

                    <section class="detalhe-curso">
                        <?php while ($dado29 = $con29->fetch_array()){?>
                            <h3><?php echo $dado29["NOME_CURSO"];?></h3>
                        <?php } ?>
                        <p>Em parceria com o Instituto Stop Hunger, oferecemos forma????es sobre horta hidrop??nica ao longo do ano. Compartilhamos insumos e conhecimentos sobre o sistema de plantio em ??gua e monitoramos as hortas instaladas nas resid??ncias. Abordamos n??o s?? a quest??es de alimenta????o saud??vel nas fam??lias, mas tamb??m incentivamos o empreendedorismo.   
                        </p>
                    </section>

                    <section class="detalhe-curso">
                        <?php while ($dado30 = $con30->fetch_array()){?>
                            <h3><?php echo $dado30["NOME_CURSO"];?></h3>
                        <?php } ?>
                        <p>Al??m de conversar sobre as quest??es de sustentabilidade relacionadas ao universo da Moda e os desafios da ind??stria t??xtil, realizamos atividades de upcycling ??? uma t??cnica de customiza????o e reutiliza????o de tecidos. Transformamos as pe??as com defeito que recebemos de doa????o em produtos com qualidade e originalidade.   
                        </p>
                    </section>

                    <section class="detalhe-curso">
                        <?php while ($dado31 = $con31->fetch_array()){?>
                            <h3><?php echo $dado31["NOME_CURSO"];?></h3>
                        <?php } ?>
                        <p>Atrav??s de encontros peri??dicos, buscamos trazer ??s crian??as e adolescentes conhecimentos e aprendizados acerca de sustentabilidade e meio ambiente. Conversamos sobre temas importantes e ensinamos pr??ticas e atitudes que podem ser adotadas pelos educandos e suas fam??lias.   
                        </p>
                    </section>
                </section>
            </section>
            <hr>
            <section class="instituicao">
                <section class="logo-instituicao">
                    <img src="./img/logo_inst4.png">
                </section>
                <section class="detalhe-instituicao">
                    <?php while ($dado32 = $con32->fetch_array()){?>
                        <h3><?php echo $dado32["NOME_FANTASIA"];?></h3>
                    <?php } ?>
                    <p>Hor??rio de atendimento: De segunda a sexta-feira, das 8h ??s 17h</P>
                    <?php while ($dado33 = $con33->fetch_array()){?>
                        <p> Localiza????o: <?php echo $dado33["ENDERECO"]. ", " .$dado33["NUMERO"]. " - ".$dado33["BAIRRO"]. "/".$dado33["ESTADO"]." - ".$dado33["CEP"];?></p>
                    <?php } ?>
                    <?php while ($dado34 = $con34->fetch_array()){?>
                        <p> Telefone Fixo: <?php echo $dado34["TELEFONE_FIXO"]."<br>"."E-mail: ".$dado34["EMAIL"];?></p>
                    <?php } ?>
                    <section class="btn_site">
                        <?php while ($dado35 = $con35->fetch_array()){?>
                            <a href="<?php echo $dado35["SITE"];?>" target="_blank" ><button>Acesse o site oficial</button></a>
                        <?php } ?>
                    </section>
            </section>    
            <section class="detalhe-curso">
                        <?php while ($dado36 = $con36->fetch_array()){?>
                            <h4><?php echo $dado36["NOME_CURSO"];?></h4>
                        <?php } ?>
                        <p>Os cursos de aprendizagem s??o destinados ?? pessoas com defici??ncia intelectual, com mais de 18 anos de idade, e t??m dura????o de 1 ano. Por meio da aprendizagem, buscamos alternativas que permitam que as pessoas com defici??ncia intelectual possam ingressar no mercado de trabalho formal para gerar renda e assumir sua condi????o de cidad??s junto ?? fam??lia e ?? sociedade.
                        </p>
                    </section>    
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