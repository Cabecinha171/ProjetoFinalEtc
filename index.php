<?php
session_start();

$idUsuario = "";
if (isset($_SESSION["idUsuario"])) {
    $idUsuario = $_SESSION["idUsuario"];
    $nomeUsuario = $_SESSION["nomeUsuario"];
    $fotoUsuario = $_SESSION["fotoUsuario"];
    $emailUsuario = $_SESSION["emailUsuario"];
    $situacaoUsuario = $_SESSION["situacaoUsuario"];
    $perfil_idPerfil = $_SESSION["perfil_idPerfil"];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fonticon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/modal.css">
    <!link rel="stylesheet" href="css/login.css">
    
    <title>EXPERT CONCURSOS</title>
</head>

<body>






    <!--DOBRA CABEÇALHO-->

    <header class="main_header">
        <div class="main_header_content">
            <a href="#" class="logo">
                <img src="img/expert.png" alt="Bem vindo ao site News Concursos"
                    title="Bem vindo ao site News Concursos" height="125px" width="125px"></a>

            <nav class="main_header_content_menu">
                <ul>
                   <?php

                    if (!$idUsuario) {
                        include_once "View/menuInicial.php";
                    } else {
                        if ($perfil_idPerfil == 1) {
                            include_once "View/menuAdm.php";
                        }
                        
                        if ($perfil_idPerfil == 2) {
                            include_once "View/menuUsuario.php";
                        }
                       
                        if ($perfil_idPerfil >= 3) {
                            include_once "View/menuUsuario.php";
                        }
                      echo" <br>"; echo '<li style="color: #1763f1" >Olá, '.$nomeUsuario."</li>";
                    }

                    ?> 
                </ul>
            </nav>
        </div>
    </header>
    <!--FIM DOBRA CABEÇA-->
    <!-- POP LOGIN -->
    <div class="overlay"></div>
    <div class="modal">
        <div class="div_login">
            <form action="login.php" method="get">
                <h1>Login</h1>
                <br>
                <input type="text" placeholder="Nome" class="input">
                <br><br>
                <input type="password" placeholder="Senha" class="input">
                <br><br>
                <button class="button">Enviar</button>
            </form>
        </div>
    </div>
    <!-- FIM POP LOGIN -->



    <!--DOBRA PALCO PRINCIPAL-->

    <!--1ª DOBRA-->
    <main>
        <div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Aqui você encontra os melhores concursos<br> e os professores mais especializados
                        </h1>
                    </header>
                    <p>Se prepare para conquistar seus objetivos</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
        <!--FIM 1ª DOBRA-->

        <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
        <section class="main_blog">
            <header class="main_blog_header">
                <h1 class="icon-blog">Concursos mais acessados</h1>
                <p>Escolha o concurso que deseja fazer</p>
            </header>

            <article>
                <a href="portifolio.html">
                    <img src="img/concursopf.jpg" height="200" width="200" alt="Imagem post" title="Imagem Post">
                    
                </a>
                <p><a href="" class="text">Concurso PF</a></p>
                <h2><a href="" class="title">O concurso da Polícia Federal (PF) é uma oportunidade para ingressar em uma carreira de destaque na segurança pública. Com vagas para diferentes cargos, como delegado, agente, escrivão e perito, o certame atrai candidatos determinados a contribuir para a proteção da sociedade e o combate ao crime.</a></h2>
            </article>
        
            <article>
                <a href="#">
                    <img src="img/concursoprf.jpg" height="200"  width="200" alt="Imagem post" title="Imagem Post">
                </a>
                <p><a href="" class="text">Concurso PRF</a></p>
                <h2><a href="" class="title">O concurso da Polícia Rodoviária Federal (PRF) oferece uma oportunidade única para aqueles que buscam uma carreira na área de segurança pública. Com vagas para o cargo de policial rodoviário federal, o certame atrai candidatos comprometidos</a></h2>
            </article>
        
            <article>
                <a href="#">
                    <img src="img/concorreios.jpg" height="200" width="200" alt="Imagem post" title="Imagem Post">
                </a>
                <p><p><a href="" class="text">Concurso Correios</a></p>
                <h2><a href="" class="title">O concurso dos Correios representa uma oportunidade valiosa para aqueles que desejam uma carreira sólida e com impacto social. Com vagas para diferentes áreas e níveis de escolaridade, como carteiro, atendente comercial, operador de triagem e transbordo</a></h2>
            </article>
        
            <article>
                <a href="#">
                    <img src="img/conagu.jpg" height="200" width="200" alt="Imagem post" title="Imagem Post">
                </a>
                <p><a href="" class="text">Concurso CONAGU</a></p>
                <h2><a href="" class="title">A CONAGU (Conferência Nacional de Governadores) é uma instância importante no cenário político brasileiro, composta pelos governadores dos 26 estados brasileiros e do Distrito Federal.</a></h2>
            </article>
        
            <article>
                <a href="#">
                    <img src="img/conbb.png" width="" alt="Imagem post" title="Imagem Post">
                </a>
                <p><a href="" class="text">Concurso BRB</a></p>
                <h2><a href="" class="title">O certame foi composto de provas objetiva e discursiva. 
                    A prova objetiva foi composta de 60 questões, de múltipla escolha, com cinco alternativas em cada questão, para escolha de uma única resposta correta.</a></h2>
            </article>
        
            <article>
                <a href="#">
                    <img src="img/brb.PNG" width="" alt="Imagem post" title="Imagem Post">
                </a>
                <p><a href="" class="text">Concurso BRB</a></p>
                <h2><a href="" class="title">O concurso do Banco de Brasília (BRB) é uma oportunidade única para aqueles que desejam ingressar em uma das instituições financeiras mais importantes do país. Com vagas para diversos cargos e níveis de escolaridade</a></h2>
            </article>
        
            <article>
                <a href="#">
                    <img src="img/camaradeputados.PNG" width="" alt="Imagem post" title="Imagem Post">
                </a>
                <p><a href="" class="text">Camera dos Deputados - Técnico Legislativo</a></p>
                <h2><a href="" class="title">A Câmara dos Deputados está promovendo concurso público, por intermédio da Fundação Getúlio Vargas (FGV), 
                    para preencher vagas e formar cadastro de reserva na instituição. O cargo é de Analista Legislativo, com diferentes atribuições.</a></h2>
            </article>
        
            <article>
                <a href="#">
                    <img src="img/inss.PNG" width="" alt="Imagem post" title="Imagem Post">
                </a>
                <p><a href="" class="text">Concurso INSS </a></p>
                <h2><a href="" class="title">O concurso do Instituto Nacional do Seguro Social (INSS) é uma porta de entrada para uma carreira sólida e significativa no serviço público. Com vagas para cargos como técnico do seguro social e analista do seguro social, o certame atrai milhares de candidatos. </a></h2>
            </article>
        </section>

        <!--FIM SESSÃO SESSÃO DE ARTIGOS-->

        <!--INICIO SESSÃO OPTIN-->
        
        <article class="opt_in">
            <div class="opt_in_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe o seu nome e e-mail no campo ao lado e clique em Ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu email">
                    <button type="submit">Ok</button>
                </form>
            </div>
        </article> 

        <!--FIM SESSÃO OPTIN-->

        <INICIO SESSÃO DOBRA  CURSOS-->
        
        <<section class="main_course">
            <header class="main_course_header">
                <img src="img/expert.png" alt="img" title="img" width="400px" height="400px">
                <h1 class="icon-books">Expert Concursos</h1>
                <p>Busque aqui os concursos.</p>
            </header>
            <div class="main_course_content">
                <article>
                    <header>
                        <h2>Aulas 100% Online</h2>
                        <p>Todas as aulas são gravadas em estúdio profissional para que você tenha a máxima qualidade de
                            imagem e video</p>
                    </header>
                </article>
                <article>
                    <header>
                        <h2>Suporte Especializado</h2>
                        <p>Este sistema possui suporte diretamente com um profissional da nossa equipe oficial</p>
                    </header>
                </article>
                <article>
                    <header>
                        <h2>Materiais diponibilizados por professores<h2>
                                <p>Tenha acesso aos melhores materiais e aulas 100% online</p>
                    </header>
                </article>
                <article>
                    <header>
                        <h2>Assinaturas online</h2>
                        <p>As assinaturas são 100% online e feita de forma mais ágil</p>
                    </header>
                </article>
            </div> 
            
            <!-- FIM SESSÃO DOBRA  CURSOS-->

            <!--INICIO DOBRA REVIEWS-->
             <div class="main_course_fullwidth" id="ancora">
                <div class="main_course_ratting_content">
                    <article class="main_course_rating_title">
                        <header>
                            <h2>Site considerado 5 estrelas por mais de 200 usuários</h2>
                        </header>
                        <img src="img/star.png" alt="Estrela" title="Estrela">
                        <img src="img/star.png" alt="Estrela" title="Estrela">
                        <img src="img/star.png" alt="Estrela" title="Estrela">
                        <img src="img/star.png" alt="Estrela" title="Estrela">
                        <img src="img/star.png" alt="Estrela" title="Estrela">
                    </article>

                    <section class="main_course_ratting_content_comment">
                        <header>
                            <h2>Veja o que estão falando sobre o site</h2>
                        </header>
                        <article>
                            <header>
                                <h3> Suporte</h3>
                                <p>03/03/2023</p>
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                            </header>
                            <p>Pedi ajuda para o suporte e me responderam de forma rápida e clara. Não fiquei com
                                nenhuma dúvida em relação ao site</p>
                        </article>

                        <article>
                            <header>
                                <h3> Professores</h3>
                                <p>03/03/2023</p>
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                            </header>
                            <p>A forma que explicão a materia é sensacional. Os materiais passados são muito
                                colaborativo e esclarecedor</p>
                        </article>

                        <article>
                            <header>
                                <h3> Sobre o site</h3>
                                <p>03/03/2023</p>
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                            </header>
                            <p>
                                O layout do site é bem explicativo e a acessibilidade é impacável, não tive problema
                                algum para navegar pelo site
                            </p>
                        </article>

                        <article>
                            <header>
                                <h3> Concursos</h3>
                                <p>03/03/2023</p>
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                            </header>
                            <p>Achei os concursos que eu queria participar, e consegui ter acesso para o edital sem
                                dificuldades nenhuma.</p>
                        </article>

                        <article>
                            <header>
                                <h3> News Concursos</h3>
                                <p>03/03/2023</p>
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                            </header>
                            <p>Como demorei para encontrar esse site? O melhor que já acessei. Super indico para meus
                                conhecidos.</p>
                        </article>

                        <article>
                            <header>
                                <h3> News Concursos</h3>
                                <p>03/03/2023</p>
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                                <img src="img/star.png" alt="Imagem" title="Imagem">
                            </header>
                            <p>Melhor site para encontrar concursos e ter materiais do mais alto nível.</p>
                        </article>
                    </section>
                </div>
            </div> 
        </section>
        <!--DOBRA A ESCOLA-->
        <div class="main_school">
            <section class="main_school_content">
                <header class="main_school_header">
                    <h1>Bem vindo a Expert Concursos</h1>
                    <p>O site que vai mudar sua vida profissional</p>
                </header>
                <div class="main_school_content_left">
                    <article class="main_school_content_left_content">
                        <header>
                            <p>
                                <span class="icon-facebook"><a href="#">Facebook</a>&nbsp;</span><span
                                    class="icon-google-plus2"><a href="#">Google+</a></span>&nbsp;<span
                                    class="icon-twitter"><a href="#">Twitter</a></span>
                            </p>
                            <h2>Tudo o que você precisa saber sobre a Expert Concursos</h2>
                        </header>
                        <p>Desde 2023 - Quando a Expert Concursos foi criada. E desde então vem mudandom vidas de diversas
                            pessoas que querem passar nos concursos públicos. E vai muito além de concurseiros, a Expert
                            Concursos ajuda na divulgação de concursos.</p>
                        <p>Venha fazer parte dos "sortudos" também. Já são mais de 500 alunos aprovados nos melhores
                            concursos do Brasil.</p>
                    </article>


                    <<section class="main_school_list">
                        <header>
                            <h2>Confira nossos prêmios</h2>
                        </header>
                        <article>
                            <header>
                                <h3 class="icon-trophy">Qualidade e Excelência - Master Pesquisas</h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3 class="icon-trophy">Qualidade e Atendimento - Master Pesquisas</h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3 class="icon-trophy">Prêmio Diamante - Master Pesquisas</h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3 class="icon-trophy">Estrela do Sul - Master Pesquisas</h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3 class="icon-trophy">Medalha de Ouro a Excelência - LAQ</h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3 class="icon-trophy">Brazil Quality Certification - LAQI</h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3 class="icon-trophy">Melhor Plataforma EAD - Digital Awards</h3>
                            </header>
                        </article>
                    </section>
                </div>
                <div class="main_school_content_right">
                    <img src="img/expert.png" height="200" width="200" height="200" alt="Imagem" title="Imagem">
                </div>
                
            </section>
        </div>
        <!-- FIM DOBRA A ESCOLA -->
<br><br>
        <!-- INICIO DOBRA TUTOR -->
        <section class="main_tutor">
            <div class="main_tutor_content">
                

                <section class="main_tutor_social_network">
                    <header>
                        <h2>Me siga nas redes sociais</h2>
                    </header>
                    <article>
                        <header>
                            <h3><a href="#" class="icon-facebook">Meu Facebook</a></h3>
                        </header>
                        <article>
                            <header>
                                <h3><a href="#" class="icon-facebook2">Minha Fan Page</a></h3>
                            </header>
                        </article>
                        <article>
                            <header>
                                <h3><a href="#" class="icon-instagram">Meu Instagram</a></h3>
                            </header>
                        </article>
                        <article>
                            <header>
                                <h3><a href="#" class="icon-google-plus2">Meu Google+</a></h3>
                            </header>
                        </article>

                    </article>
                </section>
            </div>
            
        </section>

        <!--FIM DOBRA PALCO PRINCIPAL-->
    </main>
<article class="main_school_adress">
                    <header>
                        <h2 class="icon-map2">Nos Encontre</h2>
                    </header>
                    <p>St. N, Área Especial QNN 14 - Ceilândia, Brasília - DF</p>
                </article>
    <!-- INICIO DOBRA RODAPÉ -->
    
    <section class="main_footer">
        
        <header>
            <h1>Quer saber mais?</h1>
        </header>

        <article class="main_footer_our_pages">
            <header>
                <h2>Nossas Páginas</h2>
            </header>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">A Escola</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </article>

        <article class="main_footer_links">
            <header>
                <h2>Links Úteis</h2>
            </header>
            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Aviso Legal</a></li>
                <li><a href="#">Termos de Uso</a></li>
            </ul>
        </article>

        <article class="main_footer_about">
            <header>
                <h2>Sobre o Projeto</h2>
            </header>
            <p>A Espert contem o melhor suporte pre editais</p>
        </article>
    </section>
    <footer class="main_footer_rights">
        <p>L.A.P.I - Todos os direitos reservados.</p>
    </footer>

    <!-- FIM DOBRA RODAPÉ -->
</body>
<script>
    // Seleciona o link e a janela modal
    var link = document.querySelector('.modal-link');
    var modal = document.querySelector('.modal');
    var overlay = document.querySelector('.overlay');

    // Adiciona um listener de evento para o link
    link.addEventListener('click', function (event) {
        event.preventDefault(); // previne o comportamento padrão do link (navegar para outra página)

        overlay.style.display = 'block'; // exibe a camada escura
        modal.style.display = 'block'; // exibe a janela modal
    });

    // Adiciona um listener de evento para a camada escura
    overlay.addEventListener('click', function () {
        overlay.style.display = 'none'; // oculta a camada escura
        modal.style.display = 'none'; // oculta a janela modal
    });
</script>

</html>