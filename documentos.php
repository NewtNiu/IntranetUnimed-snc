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
    <title>Documentos</title>
    <link rel="stylesheet" href="documentos_styles.css">
</head>

<body draggable="false">
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
            <li id="nav"><a href="siglario_Sig.php">Siglário</a></li>
            <hr>
            <li id="nav" class="pgatual"><a accesskey="t" href="documentos.php">Documentos</a></li>
        </ul>
    </nav>
<!--Documentos Header-->
    <section name="boxHeaderDocumentos" id="" class="boxHeaderDocumentos">
        <p>DOCUMENTOS</p>
    </section>

<!--Documentos-->
        
    <section id="sectionDoc">
        <div class="containerDoc">
            <div class="div-estilizada" onclick="toggleLinks(1)">Documentos para Consulta</div>

            <div id="links1" class="links">

            <ul class="uldocsConsulta">
                
                <li><a href="/intranet/index/download?arquivo=PLI.GOV.0005-02_Politica_de_Seguranca_da_Informacao_e_Privacidade_de_Dados_Pessoais.pdf" title="Política de Segurança da Informação e Privacidade de Dados Pessoais" target="_new">Política de Segurança da Informação e Privacidade de Dados Pessoais</a></li>
                
                <li><a href="/intranet/index/download?arquivo=CBHPM.pdf" title="CBHPM" target="_new">CBHPM</a></li>
                
                <li><a href="/intranet/index/download?arquivo=Painel Ponto.jpg" title="Descrição de Lançamentos do Ponto no Painel" target="_new">Descrição de Lançamentos do Ponto no Painel</a></li>

                <li><a href="/intranet/index/download?arquivo=Guia_Medico_Edicao_57.pdf" title="Guia Médico" target="_new">Guia Médico</a></li>

                <li><a href="/intranet/index/download?arquivo=Acordo_Coletivo_de_Trabalho_Gratificacao_Assiduidade_Vale_Alimentacao_2021_2022.pdf" title="Gratificação Vale Alimentação" target="_new">Gratificação Vale Alimentação</a></li>

                <li><a href="/intranet/index/download?arquivo=MOD.DES.0003-01_Lista_de_Presenca.xls" title="Lista de Presença - Padrão Unimed" target="_new">Lista de Presença - Padrão Unimed</a></li>

                <li><a href="/intranet/index/download?arquivo=Relatorio_Procedimentos_DUT.pdf" title="Lista Exames com DUT" target="_new">Lista Exames com DUT</a></li>

                <li><a href="/intranet/index/download?arquivo=ITT.NQS.0003-00_Localizacao_de_documentos_padronizados.pdf" title="Instrução Técnica Localização de documentos padronizados" target="_new">Instrução Técnica Localização de documentos padronizados</a></li>

                <li><a href="/intranet/index/download?local=so&amp;arquivo=MAN.INS.0001-02_Manual_de_gestao_e_preparacao_para_emergencias_e_desastres.pdf" title="Manual de gestão e preparação para emergências e desastres" target="_new">Manual de gestão e preparação para emergências e desastres</a></li>

                <li><a href="/intranet/index/download?arquivo=Norma_interna_n_001_ 2014_Cursos_alterada_em_09_06_2021.pdf" title="Norma interna nº 001_ 2014 - Cursos (alterada em 09.06.2021)" target="new">Norma interna nº 001 2014 - Cursos (alterada em 09.06.2021)</a></li>

                <li><a href="/intranet/index/download?arquivo=plano_cargos_salarios.pdf" title="Plano de Cargos e Salários" target="_new">Plano de Cargos e Salários</a></li>

                <li><a href="/intranet/index/download?arquivo=PLI.INSA.0006-02_Politica_de_Comunicacao.pdf" title="Política de Comunicação" target="_new">Política de Comunicação</a></li>

                <li><a href="/intranet/index/download?arquivo=PLI.GEP.0002-12_Politica_de_gestao_de_pessoas.pdf" title="Política de gestão de pessoas" target="_new">Política de Gestão de Pessoas</a></li>

                <li><a href="/intranet/index/download?arquivo=PLI.INS.0004-00_Medida_Disciplinar.pdf" title="Política de Medida Disciplinar" target="_new">Politica de Medida Disciplinar</a></li>

                <li><a href="/intranet/index/download?arquivo=PLI.OUV.0001-02_Política_de_Ouvidoria_Unimed_Chapecó.pdf" title="Política de Ouvidoria" target="_new">Política de Ouvidoria</a></li>

                <li><a href="/intranet/index/download?arquivo=PLI.GEP.0001-16_Politica_institucional_de_Recrutamento_e_Selecao.pdf" title="Política de Recrutamento e Seleção" target="_new">Política de Recrutamento e Seleção</a></li>

                <li><a href="/intranet/index/download?arquivo=PLI.INSA.0005-04_Politica_de_Saude_Integral_do_colaborador.pdf" title="Política de Saúde Integral do colaborador" target="_new">Política de Saúde Integral do colaborador</a></li>

                <li><a href="/intranet/index/download?arquivo=PLI.SUP.0001-09_Política_institucional_para_contratação_e_qualificação_de_fornecedores.pdf" title="Política institucional para contratação e qualificação de fornecedores" target="_new">Política institucional para contratação e qualificação de fornecedores</a></li>

                <li><a href="/intranet/index/download?arquivo=Regulamento_PPR_2023.pdf" title="PPR 2023" target="_new">PPR 2023</a></li>

                <li><a href="/intranet/index/download?arquivo=FLU.INS.0027-10_Procedimentos_de_resposta_para_emergências_internas.pdf" title="Procedimentos de resposta para emergências internas" target="_new">Procedimentos de resposta para emergências internas</a></li>

                <li><a href="/intranet/index/download?arquivo=PRG.INS.0001-00 Programa Ciclos de uma Trajetória.pdf" title="Programa Ciclos de uma Trajetória" target="_new">Programa Ciclos de uma Trajetória</a></li>

                <li><a href="/intranet/index/download?arquivo=PRG.INSA.0003-07_Programa_de_Desenvolvimento_de_Pessoas_da_Unimed_Chapeco.pdf" title="Programa de Desenvolvimento de Pessoas da Unimed Chapecó" target="_new">Programa de Desenvolvimento de Pessoas da Unimed Chapecó</a></li>

                <li><a href="/intranet/index/download?arquivo=PRG.INSA.0005-02_Programa_de_Integracao_Unimed_Chapeco.pdf" title="Programa de Integração Unimed Chapecó" target="_new">Programa de Integração Unimed Chapecó</a></li>

                <li><a href="/intranet/index/download?arquivo=PRG.INSA.0002-04_Programa_de_Sucessao_da_Unimed_Chapeco.pdf" title="Programa de Sucessão da Unimed Chapecó" target="_new">Programa de Sucessão da Unimed Chapecó</a></li>

                <li><a href="/intranet/index/download?arquivo=relatorio_sustentabilidade_2020_2021.pdf" title="Relatório de Sustentabilidade 2020 e 2021 GRI" target="_new">Relatório de Sustentabilidade 2020 e 2021 GRI</a></li>

                <li><a href="/intranet/index/download?arquivo=Regulamento_Bolsa_de_Estudos_Vigente.pdf" title="Regulamento Bolsa de Estudos" target="_new">Regulamento Bolsa de Estudos</a></li>

                <li><a href="/intranet/index/download?arquivo=Regulamento_Plano_de_Saude.pdf" title="Regulamento Plano de Saúde" target="_new">Regulamento Plano de Saúde</a></li>

                <li><a href="/intranet/index/download?local=covid/files&amp;arquivo=TER.GEA.0004-01_Obrigatoriedade_do_uso_de_mascara.pdf" title="TER.GEA.0004-01 Obrigatoriedade do uso de máscara" target="_new">TER.GEA.0004-01 Obrigatoriedade do uso de máscara</a></li>

                <li><a href="/intranet/index/download?arquivo=tutorial_navegacao_RUBI_WEB.pdf" title="Tutorial de Acesso ao RUBIWEB" target="_new">Tutorial de Acesso ao RUBIWEB</a></li>
            </ul>
        </div>

        </div>
        <div class="containerDoc">
        <div class="div-estilizada" onclick="toggleLinks(2)">Programas de Gerenciamento Medicina Preventiva</div>
        <div id="links2" class="links">
            <p>Complexos</p><br>
            <ul>
                <li><a href="/intranet/index/download?local=univida&amp;arquivo=PLI.EVB.0001-01.pdf" title="Política PGCC/SAD" target="_new">Política PGCC/SAD</a></li>

                <li><a href="/intranet/index/download?local=univida&amp;arquivo=FOR.EVB.0020-02 PGCC Encaminhamento ao Programa de Gerenciamento de Casos Complexos.pdf" title="Encaminhamento Médico/Multi Hospital PGCC" target="_new">Encaminhamento Médico/Multi Hospital PGCC</a></li>

                <li><a href="/intranet/index/download?local=univida&amp;arquivo=FOR.EVB.0002-03_PGCC_Encaminhamento_medico_ao_PGCC.pdf" title="Encaminhamento Médico Consultório PGCC " target="_new">Encaminhamento Médico Consultório PGCC </a></li>

                <li><a href="/intranet/index/download?local=univida&amp;arquivo=FOR.EVB.0003-02 PGCC Indicação.pdf" title="Indicação ao PGCC " target="_new">Indicação ao PGCC </a></li>
            </ul>
                <br><p>Crônicos</p><br>
            <ul>
                <li><a href="/intranet/index/download?local=univida&amp;arquivo=MAN.EVB.0004-10_programa_de_gerenciamento_de_saude.pdf" title="Manual PGS - Gerenciamento de Saúde" target="_new">Manual PGS - Gerenciamento de Saúde</a></li>

                <li><a href="/intranet/index/download?local=univida&amp;arquivo=FOR.EVB.0008-02 PGDC Encaminhamento médico.pdf" title="Encaminhamento médico PGDC" target="_new">Encaminhamento médico PGDC</a></li>

                <li><a href="/intranet/index/download?local=univida&amp;arquivo=FOR.EVB.0009-02 PGDC Indicação.pdf" title="Indicação ao PGDC" target="_new">Indicação ao PGDC</a></li>

                <li><a href="/intranet/index/download?local=univida&amp;arquivo=FOR.EVB.0007-02 PGDC Autoindicação.pdf" title="Autoindicação ao PGDC" target="_new">Autoindicação ao PGDC</a></li>
            </ul>

        </div>
        </div>
        <div class="containerDoc">
        <div class="div-estilizada" onclick="toggleLinks(3)">Programa de Melhoria da Qualidade - PMQ</div>
        <div id="links3" class="links">
            <ul>
                <li><a href="/intranet/index/download?arquivo=doc_estrategicos/News_resultado_rn507.jpg" title="Resultado Acreditação da Operadora do Plano de Saúde - RN 507" target="_new">Resultado Acreditação da Operadora do Plano de Saúde - RN 507</a></li>

                <li><a href="/intranet/index/download?arquivo=Certificacao_RN_506.png" title="Resultado da 1ª Supervisão da Certificação em APS - RN 506" target="_new">Resultado da 1ª Supervisão da Certificação em APS - RN 506</a></li>
            </ul>
        </div>
        </div>
        <div class="containerDoc">
            <div class="div-estilizada" onclick="toggleLinks(4)">Planejamento Estratégico</div>
            <div id="links4" class="links">
                <ul>
                    <li><a href="/intranet/index/download?arquivo=cadeia_de_valor_hospital_unimed_chapeco.pdf" title="Cadeira de valor - Hospital Unimed Chapecó" target="_new">Cadeia de valor - Hospital Unimed Chapecó</a></li>

                    <li><a href="/intranet/index/download?arquivo=cadeia_de_valor_operadora_plano_de_saude.pdf" title="Cadeia de valor - Operadora plano de saúde" target="_new">Cadeia de valor - Operadora plano de saúde</a></li>

                    <li><a href="/intranet/index/download?arquivo=divulgacao_identidade_organizacional.mp4" title="Divulgação Identidade Organizacional" target="_new">Divulgação Identidade Organizacional</a></li>

                    <li><a href="/intranet/index/download?arquivo=identidade_organizacional.pdf" title="Identidade organizacional" target="_new">Identidade organizacional</a></li>

                    <li><a href="/intranet/index/download?arquivo=mapa_estrategico_2023-2024.pdf" title="Mapa estratégico 2023 - 2024" target="_new">Mapa estratégico 2023 - 2024 </a></li>

                    <li><a href="/intranet/index/download?arquivo=temas_prioritarios_2023-2024.pdf" title="Temas prioritários 2023 - 2024" target="_new">Planejamento estratégico</a></li>
                </ul>
            </div>
        </div>
        <div class="containerDoc">
            <div class="div-estilizada" onclick="toggleLinks(5)">Captações Instituto Unimed</div>
            <div id="links5" class="links">
                <ul>
                    <li><a href="/intranet/index/download?local=instituto-unimed&amp;arquivo=video1.mp4" target="_new">Vídeo Instituto Unimed</a></li>

                    <li><a href="/intranet/index/download?local=instituto-unimed&amp;arquivo=video2.mp4" target="_new">Vídeo Captação Movimento Saúde e Ação</a></li>

                    <li><a href="/intranet/index/download?local=instituto-unimed&amp;arquivo=captação_intranet.pptx" target="_new">Slide Movimento Saúde e Ação</a></li>
                </ul>
            </div>
        </div>
        <div class="containerDoc">
            <div class="div-estilizada" onclick="toggleLinks(6)">Núcleo de Governança Corporativa (NGC)</div>
            <div id="links6" class="links">
                <ul>
                    <li><a href="/intranet/index/download?arquivo=PLI.GOV.0005-02_Politica_de_Seguranca_da_Informacao_e_Privacidade_de_Dados_Pessoais.pdf" title="Política de Segurança da Informação e Privacidade de Dados Pessoais" target="_new">Política de Segurança da Informação e Privacidade de Dados Pessoais</a></li>

                    <li><a href="/intranet/index/download?arquivo=Codigo_de_etica_e_conduta.pdf" title="Código de Ética e Conduta" target="_new">Código de Ética e Conduta</a></li>

                    <li><a href="/intranet/index/download?arquivo=Codigo_de_Etica_e_Conduta_aos_Fornecedores_e_Prestadores_de_Servico.pdf" title="Código de Ética e Conduta aos Fornecedores e Prestadores de Serviço" target="_new">Código de Ética e Conduta aos Fornecedores e Prestadores de Serviço</a></li>

                    <li><a href="/intranet/index/download?arquivo=TERMO DE ADESÃO AO CÓDIGO DE ÉTICA.pdf" title="Termo de Adesão ao Código de Ética e Conduta aos Fornecedores e Prestadores de Serviço" target="_new">Termo de Adesão ao Código de Ética e Conduta aos Fornecedores e Prestadores de Serviço</a></li>

                    <li><a href="/intranet/index/download?arquivo=PRG.GOV.0001-02_Programa_de_Governanca_em_Privacidade_e_Seguranca.pdf" title="Programa de Governança em Privacidade e Segurança" target="_new">Programa de Governança em Privacidade e Segurança</a></li>

                    <li><a href="/intranet/index/download?arquivo=MAN.GOV.0003-01_Diretrizes_para_classificacao_e_acesso_das_informacoes_da_instituicao.pdf" title="Diretrizes para classificação e acesso das informações da instituição" target="_new">Diretrizes para classificação e acesso das informações da instituição</a></li>

                    <li><a href="/intranet/index/download?arquivo=MAN.GOV.0004-02_Manual_de_Controles_de_Seguranca_da_Informacao_e_de_Privacidade_de_dados_Pessoais.pdf" title="Manual de Controles de Segurança da Informação e de Privacidade de dados Pessoais" target="_new">Manual de Controles de Segurança da Informação e de Privacidade de dados Pessoais</a></li>

                    <li><a href="/intranet/index/download?arquivo=PRG.GOV.0002-02_Programa_de_Integridade.pdf" title="Programa de Integridade" target="_new">Programa de Integridade</a></li>

                    <li><a href="/intranet/index/download?arquivo=Cartilha Gestão de Riscos Corporativos.pdf" title="Cartilha Gestão de Riscos Corporativos" target="_new">Cartilha Gestão de Riscos Corporativos</a></li>

                    <li><a href="/intranet/index/download?arquivo=Cartilha LGPD Unimed Chapecó.pdf" title="Cartilha LGPD Unimed Chapecó" target="_new">Cartilha LGPD Unimed Chapecó</a></li>

                    <li><a href="https://contatoseguro.com.br/unimedchapeco" target="_new">Canal de Denúncias</a></li>

                </ul>
            </div>
        </div>
        <div class="containerDoc">
            <div class="div-estilizada" onclick="toggleLinks(7)">Unimed Personal (NAPS)</div>
            <div id="links7" class="links">
                <ul>
                    <li><a href="/intranet/index/download?arquivo=Cartilha NAPS.pdf" title="Cartilha Unimed Personal" target="_new">Cartilha Unimed Personal</a></li>
                    
                    <li><a href="/intranet/index/download?arquivo=FLU.NAP.0005-02 Encaminhamento para especialistas e retorno para NAPS - Referência e Contra Ref .pdf" title="Referência e Contra referência" target="_new">Referência e Contra referência</a></li>

                    <li><a href="/intranet/index/download?arquivo=TAB.NAP.0002-00_Rol_procedimentos_odonto_Unimed_Personal.pdf" title="ROL DE PROCEDIMENTOS SAÚDE BUCAL UNIMED PERSONAL" target="_new">ROL DE PROCEDIMENTOS SAÚDE BUCAL UNIMED PERSONAL</a></li>

                    <li><a href="/intranet/index/download?arquivo=Layout_News_Unimed_Personal_2022-1.png" title="News Odonto Unimed Personal" target="_new">News Odonto Unimed Personal</a></li>
                </ul>
            </div>
        </div>
        <div class="containerDoc">
            <div class="div-estilizada" onclick="toggleLinks(8)">COMEDI</div>
            <div id="links8" class="links">
                <ul>
                    <li><a href="https://plataforma.astenassinatura.com.br/link/3QUQMFNsMan897l" title="Solicitação de despadronização de Medicamentos" target="_new">Solicitação de padronização de Medicamentos</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/0T4D0C0x9ttgM45" title="Solicitação de despadronização de Medicamentos" target="_new">Solicitação de despadronização de Medicamentos</a></li>
                </ul>
            </div>
        </div>
        <div class="containerDoc">
            <div class="div-estilizada" onclick="toggleLinks(9)">Tecnologia da Informação</div>
            <div id="links9" class="links">
                <p>Termos VPN</p>
                <ul>
                    <li><a href="https://plataforma.astenassinatura.com.br/link/7r9gs9NWf9BhiiT" title="Termo de Acesso a Rede VPN - DR. Mário Goto" target="_blank">Termo de Acesso a Rede VPN - DR. Mário Goto</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/P0iJ00i2FHldRdj" title="Termo de Acesso a Rede VPN - DR. Rovani" target="_blank">Termo de Acesso a Rede VPN - DR. Rovani</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/z09S6n870h1tifw" title="Termo de Acesso a Rede VPN - Evaldo" target="_blank">Termo de Acesso a Rede VPN - Evaldo</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/5N2P4wi74FMx8P8" title="Termo de Acesso a Rede VPN - Maicon" target="_blank">Termo de Acesso a Rede VPN - Maicon</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/1z2IXv886KoN9Lz" title="Termo de Acesso a Rede VPN - Mario" target="_blank">Termo de Acesso a Rede VPN - Mario</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/FjRN2ay4MCI9Zq7" title="Termo de Acesso a Rede VPN - Michele" target="_blank">Termo de Acesso a Rede VPN - Michele</a></li>

                    <p>Termos Drivers</p>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/Q309516z6tU6v2H" title="Termo de ciência e responsabilidade - Dispositivos Externos - DR. Mário Goto" target="_blank">Termo de ciência e responsabilidade - Dispositivos Externos - DR. Mário Goto</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/REoRLEvi0SW5ZTp" title="Termo de ciência e responsabilidade - Dispositivos Externos - DR. Rovani" target="_blank">Termo de ciência e responsabilidade - Dispositivos Externos - DR. Rovani</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/cS9187E2ESKj042" title="Termo de ciência e responsabilidade - Dispositivos Externos - Evaldo" target="_blank">Termo de ciência e responsabilidade - Dispositivos Externos - Evaldo</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/1bW3o8Uqw40M5L0" title="Termo de ciência e responsabilidade - Dispositivos Externos - Maicon" target="_blank">Termo de ciência e responsabilidade - Dispositivos Externos - Maicon</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/Jjd54b3t9fQt4Ok" title="Termo de ciência e responsabilidade - Dispositivos Externos - Mario" target="_blank">Termo de ciência e responsabilidade - Dispositivos Externos - Mario</a></li>

                    <li><a href="https://plataforma.astenassinatura.com.br/link/IR980Gq1UzXVWmo" title="Termo de ciência e responsabilidade - Dispositivos Externos - Michele" target="_blank">Termo de ciência e responsabilidade - Dispositivos Externos - Michele</a></li>

                    <p>Formulários</p>

                    <li><a href="/intranet/index/download?arquivo=FOR.TI.0002-01_Solicitacao_de_obras_reformas_manutencao_TI.xlsx" title="Solicitação de Obras/Reformas Manutenção e TI" target="_new">Solicitação de Obras/Reformas Manutenção e TI</a></li>
                </ul>
            </div>
        </div>
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