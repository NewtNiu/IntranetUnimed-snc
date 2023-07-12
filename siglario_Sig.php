<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon_unimed.png" type="image/x-icon">
    <title>Siglario por Siglas</title>
    <link rel="stylesheet" href="siglario_Sig.css">
</head>

<body>
<!--HEADER-->
<header>
        <div>
            <a href="https://www.unimed.coop.br/site/web/chapeco"><img draggable="false" name="" id="" class="headerImgLogo" src="img/logo_unimed.png" alt=""></a>

        
            <div class="form">
                <input type="text" name="barraDePesquisa" id="search-input" class="headerBarraDePesquisa" accesskey="p" placeholder="🔍Faça a sua Pesquisa..." type="search">
                <button class="searchbtn" onclick="searchText()">Pesquisar</button>
            </div>
            
            <div name="usuario" id="usuario" class="usuario">
                <h1 name="nomeUsuario" id="nomeusuario" class="headerNomeUsuario">
                    <?php
                        print $_SESSION["nome"];
                    ?>
                </h1>

                <img draggable="false" name="imgUsuario" id="imgusuario" class="headerImgUsuario" src="img/perfil.png" alt="">

                <?php
                    print "<button accesskey='s' class='btnSair'><a href='logout.php'>Sair</a></button>";
                ?>
            </div>

            
        </div> 
   </header>
<!--CONTEUDO-->
<div name="conteudo" id="conteudo" class="conteudo">
<!--navegação-->
    <nav name="navegacao" id="" class="navegacao">
        <ul class="nav-list">
            <li id="nav"><a accesskey="a" href="#" onmouseover="showModal()" onmouseout="hideModal()">Acessibilidade</a>
            <div id="modal" class="modal">
                                <div name="internoModel" class="internoModel">
                                    <section name="infoAcessibilidade" class="infoAcessibilidade">
                                        <div name="txtAcessibilidade" class="txtAcessibilidade">
                                            <p>
                                            Para aumentar ou diminuir a visualização do conteúdo, segure a tecla "ctrl" e pressione + ou - no seu teclado.
                                            </p>
                                        </div>
                                        <hr class="divisaoInfoAcessibilidade">
                                        <div name="txtcomoUsar" class="txtcomoUsar">
                                            <h3>
                                            Se preferir, use as teclas de atalho (acesskeys) para facilitar sua navegação:
                                            </h3>
                                            <br>
                                            <p>
                                            No Internet Explorer segure "ALT" mais a tecla desejada; Em outros navegadores, segure "ALT + SHIFT" e a tecla correspondente.
                                            </p>
                                        </div>
                                    </section>
                                    <hr class="divisaoAcessibilidade">
                                    <section name="boxAtalhos" class="boxAtalhos">
                                        <div name="linha1Acessibilidade" class="linhaAcessibilidade">
                                            <div class="botaoAcessibilidade">ALT</div>
                                            <p class="txtbotaoAcessibilidade">+</p>
                                            <div class="botaoAcessibilidade">T</div>
                                            <p class="txtbotaoAcessibilidade">=</p>
                                            <p class="txtbotaoAcessibilidade">TOPO</p>
                                        </div>
                                        <div name="linha2Assecibilidade" class="linhaAcessibilidade">
                                            <div class="botaoAcessibilidade">ALT</div>
                                            <p class="txtbotaoAcessibilidade">+</p>
                                            <div class="botaoAcessibilidade">S</div>
                                            <p class="txtbotaoAcessibilidade">=</p>
                                            <p class="txtbotaoAcessibilidade">SAIR</p>
                                        </div>
                                        <div name="linha3Assecibilidade" class="linhaAcessibilidade">
                                            <div class="botaoAcessibilidade">ALT</div>
                                            <p class="txtbotaoAcessibilidade">+</p>
                                            <div class="botaoAcessibilidade">A</div>
                                            <p class="txtbotaoAcessibilidade">=</p>
                                            <p class="txtbotaoAcessibilidade">ACESSIBILIDADE</p>
                                        </div>
                                        <div name="linha4Assecibilidade" class="linhaAcessibilidade">
                                            <div class="botaoAcessibilidade">ALT</div>
                                            <p class="txtbotaoAcessibilidade">+</p>
                                            <div class="botaoAcessibilidade">P</div>
                                            <p class="txtbotaoAcessibilidade">=</p>
                                            <p class="txtbotaoAcessibilidade">PESQUISAR</p>
                                        </div>
                                    </section>
                                </div>
                            </div>
            </li>
            <hr>
            <li id="nav"><a href="intranet.php" class="pg">Intranet</a></li>
            <hr>
            <li id="nav"><a href="agendaTel_Int.php">Agenda Telefônica</a></li>
            <hr>
            <li id="nav" class="pgatual"><a accesskey="t" href="siglario_Sig.php">Siglário</a></li>
            <hr>
            <li id="nav"><a href="documentos.php">Documentos</a></li>
        </ul>
    </nav>
<!--pesquisa siglario-->
    <section name="boxSiglas" id="" class="boxSiglas">
        <div name="boxTiposSigSen" id="" class="boxTiposSigSen">
            <div name="boxSiglas49" id="" class="boxSiglas49">
                <div name="" id="" class="paginaPesquisarPorSiglas">
                    <a href="#" title="Pesquisar por Siglas">
                        Pesquisar por Siglas
                    </a>
                </div>
            </div>
            <hr class="divisaoSiglasSentenças">
            <div name="boxSentenças49" id="" class="boxSentenças49">
                <div name="" id="" class="paginaPesquisarPorSentenças">
                    <a href="siglario_Sen.php" title="Pesquisar por Sentenças">
                        Pesquisar por Sentenças
                    </a>
                </div>
            </div>
        </div>
        <hr class="divisaoTiposProcurar">
        <div name="boxProcurarPor" id="" class="boxProcurarPor">
            <div name="pesquisarPorSentenças" id="" class="pesquisarPorSentenças">Pesquisar por Siglas:</div>
            <input name="searchSentenças" id="searchSentenças" class="searchSentenças" type="search" placeholder="🔍Buscar">
        </div>
    </section>

    <section name="boxsiglario" id="" class="boxsiglario">
        <section name="headerSiglario" id="" class="headerSiglario">
            <div name="infoSiglarioHeader" id="" class="infoSiglarioHeader">SIGLAS</div>
            <hr class="divisaoHeaderSiglario">
            <div name="descricao" id="" class="descricaoHeader">DESCRIÇÂO</div>
            <hr class="divisaoHeaderSiglario">
            <div name="usar" id="" class="usarHeader">USAR</div>
        </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">TDAH</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">Transtorno do déficit de atenção com hiperatividade</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">SIM</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">sigla</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">descrição</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">NÃO</div>
         </section>

    </section>

    <section name="boxPaginasAgenda" id="" class="boxPaginasAgenda">
            <input value="" title="pgEsquerda" name="botaoPassarPgEsquerda" id="" class="botaoPassarPgEsquerda" type="button" placeholder="oi" >
            <hr class="divisaoPaginacao">
            <div name="pg1" id="" class="paginasAgendaAtual">1</div>
            <hr class="divisaoPaginacao">
            <div name="pg2" id="" class="paginasAgenda">2</div>
            <hr class="divisaoPaginacao">
            <div name="pg3" id="" class="paginasAgenda">3</div>
            <hr class="divisaoPaginacao">
            <div name="pg4" id="" class="paginasAgenda">4</div>
            <hr class="divisaoPaginacao">
            <div name="pg5" id="" class="paginasAgenda">5</div>
            <hr class="divisaoPaginacao">
            <input value="" title="pgDireita" name="botaoPassarPgDireita" id="" class="botaoPassarPgDireita" type="button" placeholder="d">
    </section>

</div>
<!--FOOTER-->
    <footer>
        <div name="footercenter" id="" class="footercenter">
        <section name="localizacaoUnimed" id="" class="localizacaoUnimed">
                <div name="iconLocUnimed" id="" class="iconLocUnimed">
                    <img draggable="false" src="img/iconloc.png" alt="iconLoc">
                </div>
                <div name="txtLocalizacao" id="" class="txtLocalizacao">
                <a target="_blank" href="https://www.google.com/maps/dir//Estacionamento+UNIMED+-+Centro,+Chapec%C3%B3+-+SC,+89814-480/@-27.1038315,-52.6878714,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94e4b5c0993b2dc9:0x4c46fa0631db9e03!2m2!1d-52.6178311!2d-27.1038489?entry=ttu" rel="noopener">
                    <P>Unimed Chapecó Av. Porto Alegre 243E</P>
                    <p>Chapecó - SC</p>
                    <p>CEP: 89802-130</p>
                </a>
                </div>
        </section>
        <section name="boxContatos" id="" class="boxContatos">
                <p name="txtContatos" id="" class="txtContatos">Siga nossas redes sociais:</p>
                <section name="iconsContatos" id="" class="iconsContatos">
                        <div name="iconsredessociais" id="" class="iconsRedesSociais"><a href="https://www.facebook.com/unimed.chapeco" title="facebook" target="_new"><img draggable="false" src="img/facebook_logo.png" alt="iconfacebook"></a></div>
                        <div name="iconsRedesSociais" id="" class="iconsRedesSociais"><a href="https://www.instagram.com/unimed.chapeco/" title="instagram" target="_new"><img draggable="false" src="img/instagram_logo.png" alt="iconintagram"></a></div>
                        <div name="iconsredessociais" id="" class="iconsRedesSociais"><a href="https://www.youtube.com/channel/UCGeen4o2xuq4eAakeyv8LyA" title="youtube" target="_new"><img draggable="false" src="img/youtube_logo.png" alt="iconyoutube"></a></div>
                        <div name="iconsredessociais" id="" class="iconsRedesSociais"><a href="https://br.linkedin.com/company/unimed-chapeco" title="linkedin" target="_new"><img draggable="false" src="img/linkedin_logo.png" alt="iconlikedin"></a></div>
                </section>
        </section>
        </div>
        <section name="copyright" class="copyright">
            <a href="#" title="Política de utilização da rede" target="_new"><p name="politicaderede">Política de utilização da rede</p></a>
            <p>|</p>
            <p name="2023copyright">2023 Copyright - Todos os direitos reservados.</p>
        </section>
    </footer>
    <script src="main.js"></script>
</body>
</html>