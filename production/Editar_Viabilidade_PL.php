<?php
session_start();
require 'Config/Config.php';
  if(strstr($_SESSION['setor'],'Planejamento') !== false){

  }else{
    header("Location: login.php");
  }

  if(isset($_POST['processo'])) {
  $processo = $_POST['processo'];
  $ordem = $_POST['ordem'];
  $descricao = $_POST['descricao'];
  $tecnico = $_POST['tecnico'];
  $interessado = $_POST['interessado'];
  $uc = $_POST['uc'];
  $cpf = $_POST['cpf'];
  $cidade = $_POST['cidade'];
  $bairro = $_POST['bairro'];
  $coordenada_x = $_POST['coordenada_x'];
  $coordenada_y = $_POST['coordenada_y'];
  $data_entrada = $_POST['data_entrada'];
  $data_prevista = $_POST['data_prevista'];
  $posto = $_POST['posto'];
  $alimentador = $_POST['alimentador'];
  $subestacao = $_POST['subestacao'];
  $pmw = $_POST['pmw'];
  $bitola = $_POST['bitola'];
  $imax = $_POST['imax'];
  $imed = $_POST['imed'];
  $iacre = $_POST['iacre'];
  $demanda_prevista = $_POST['demanda_prevista'];
  $potencia_instalada = $_POST['potencia_instalada'];
  $situacao = $_POST['situacao'];
  $status = $_POST['status'];
  $pasta = $_POST['pasta'];
  $atribuido = $_POST['atribuido'];
  $observacao = $_POST['observacao'];

  $sql = $pdo->prepare("INSERT INTO viabilidade (processo, ordem, descricao, tecnico, interessado, uc, cpf, cidade, bairro, coordenada_x, coordenada_y, data_entrada, data_prevista, posto, alimentador, subestacao, pmw, bitola, imax, imed, iacre, demanda_prevista, potencia_instalada, situacao, status, pasta, atribuido, observacao) VALUES (:processo, :ordem, :descricao, :tecnico, :interessado, :uc, :cpf, :cidade, :bairro, :coordenada_x, :coordenada_y, :data_entrada, :data_prevista, :posto, :alimentador, :subestacao, :pmw, :bitola, :imax, :imed, :iacre, :demanda_prevista, :potencia_instalada, :situacao, :status, :pasta, :atribuido, :observacao)");


  $sql->bindValue(":processo", $processo);
  $sql->bindValue(":ordem", $ordem);
  $sql->bindValue(":descricao", $descricao);
  $sql->bindValue(":tecnico", $tecnico);
  $sql->bindValue(":interessado", $interessado);
  $sql->bindValue(":uc", $uc);
  $sql->bindValue(":cpf", $cpf);
  $sql->bindValue(":cidade", $cidade);
  $sql->bindValue(":bairro", $bairro);
  $sql->bindValue(":coordenada_x", $coordenada_x);
  $sql->bindValue(":coordenada_y", $coordenada_y);
  $sql->bindValue(":data_entrada", $data_entrada);
  $sql->bindValue(":data_prevista", $data_prevista);
  $sql->bindValue(":posto", $posto);
  $sql->bindValue(":alimentador", $alimentador);
  $sql->bindValue(":subestacao", $subestacao);
  $sql->bindValue(":pmw", $pmw);
  $sql->bindValue(":bitola", $bitola);
  $sql->bindValue(":imax", $imax);
  $sql->bindValue(":imed", $imed);
  $sql->bindValue(":iacre", $iacre);
  $sql->bindValue(":demanda_prevista", $demanda_prevista);
  $sql->bindValue(":potencia_instalada", $potencia_instalada);
  $sql->bindValue(":situacao", $situacao);
  $sql->bindValue(":status", $status);
  $sql->bindValue(":pasta", $pasta);
  $sql->bindValue(":atribuido", $atribuido);
  $sql->bindValue(":observacao", $observacao);
  $sql->execute();

  header("Location: Editar_Projetos.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Cadastro de Projetos | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


  </head>

   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-pie-chart"></i> <span>Eletrobras</span></a>
            </div>

            <div class="clearfix"></div>

                        <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/Eletrobras.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Usuário</span>
                <h2><?php echo $_SESSION['usuario'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->

            <?php
              require_once("Menu/Menu_P.php");
            ?>
            
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <?php
              require_once("Menu/Menu_inf_PL.php");
            ?>

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
            <?php
              require_once("Menu/Menu_top.php");
            ?>
        <!-- top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Editar Viabilidade</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar projeto...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dados da Viabilidade <small>Classe da Viabilidade</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />



                    <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="processo">Nº do Processo
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" name="processo" class="form-control col-md-7 col-xs-12">
                          </div>

                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="ordem">Especificação da Obra
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <select name="ordem" class="form-control">
                              <option></option>
                              <option>69KV-ELETROMECÂNICO</option>
                              <option>69KV-LINHA DE DISTRIBUIÇÃO</option>
                              <option>69KV-MEDIÇÃO</option>
                              <option>69KV-PROTEÇÃO E AUTOMAÇÃO</option>
                              <option>69KV-REALOCAÇÃO DE LINHA</option>
                              <option>AUMENTO DA SUBESTAÇÃO</option>
                              <option>AUMENTO DE DEMANDA</option>
                              <option>COMERCIAL</option>
                              <option>COMPARTILHAMENTO DE INFRAESTRUTURA</option>
                              <option>CONSULTA DE ACESSO</option>
                              <option>CONSULTA DE ACESSO - DAL</option>
                              <option>ILUMINAÇÃO PÚBLICA</option>
                              <option>INDUSTRIAL</option>
                              <option>LOTEAMENTOS - RESIDENCIAIS - COHAB</option>
                              <option>OUTROS</option>
                              <option>PRÉDIOS HABBITACIONAIS</option>
                              <option>PROJETO DE PARALELISMO MOMENTÂNEO</option>
                              <option>REDUÇÃO DE CAPACIDADE</option>
                              <option>RURAL - SÍTIOS - FAZENDAS</option>
                              <option>SERVIÇO PÚBLICO</option>
                              <option>SOLICITAÇÃO DE ACESSO - VT</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="descricao">Descrição
                          </label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="descricao" name="descricao" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tecnico" class="control-label col-md-2 col-sm-2s col-xs-12">Técnico</label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <select name="tecnico" class="form-control">
                              <option></option>
                              <option>ACÁCIO DE OLIVEIRA SERAFIM</option>
                              <option>ADEIRLEY SILVA DOS SANTOS</option>
                              <option>ADRIANO GALINDO CASTOR</option>
                              <option>AIRLES VEIGA PESSOA</option>
                              <option>AISLAN LOPES DE OLIVEIRA</option>
                              <option>ALBERTO JORGE DA MOTA SILVEIRA</option>
                              <option>ALBERTO LINS LEITE</option>
                              <option>ALBERTO TORRES BARRETO</option>
                              <option>ALEXANDRE CAVALCANTE DE ALMEIDA</option>
                              <option>ALFREDO GUTTENBERG DE MENDONÇA</option>
                              <option>ALISSON GOMES RODRIGUES</option>
                              <option>ALOISIO ERNANI TORRES DE OLIVEIRA</option>
                              <option>ALVANIR TORRES DE ARAÚJO FILHO</option>
                              <option>ALVARO LYRA CINTRA ESEQUIEL</option>
                              <option>ÁLVARO OTÁVIO VIEIRA MACHADO</option>
                              <option>AMANDA COUTO PIMENTEL</option>
                              <option>AMANFRINNI DE MELO QUEIROZ</option>
                              <option>ANDERSON KENNEDY DA SILVA BOLEVARD</option>
                              <option>ANDERSON TAVARES MOREIRA</option>
                              <option>ANDRE GRAÇA GENEROSO PEREIRA</option>
                              <option>ANTÔNIO CARLOS CHAGAS</option>
                              <option>ANTONIO OLAVO FALCÃO LIMA</option>
                              <option>ARISTEDES FARIAS NETO</option>
                              <option>ARLUZENILDO BARROS</option>
                              <option>ARMANDO MONTEIRO DE LIMA JUNIOR</option>
                              <option>ARTHUR SEBASTIÃO BARBOSA AMARAL</option>
                              <option>ATAHUALPA BASTOS LELIS</option>
                              <option>ATONIO CARLOS CHARGAS</option>
                              <option>AVELAR DE OLIVEIRA LOPES LOBO</option>
                              <option>BRUNO DE AGUIAR AMARAL</option>
                              <option>BRUNO LUIZ LOPES DÓRIA</option>
                              <option>BRUNO PEIXOTO</option>
                              <option>BRUNO XAVIER PINHEIRO GALVÃO</option>
                              <option>BUFFET SIMIÃO GOMES FERREIRA</option>
                              <option>CARLOS ALBERTO DA SILVA</option>
                              <option>CARLOS AUGUSTO DE CARVALHO FERREIRA</option>
                              <option>CARLOS EUGÊNIO C. SILVA</option>
                              <option>CARLOS HENRIQUE DE LIRA</option>
                              <option>CARLOS HENRIQUE FIGUEIREDO LOPES LIMA</option>
                              <option>CARLOS MANASSÉS DA SILVA</option>
                              <option>CARLOS SHIGUESHI IMAMURA</option>
                              <option>CÉLIO ROBERTO DE MELO</option>
                              <option>CELSO ANTÔNIO MAJCHROVICZ</option>
                              <option>CEZAR DE OLIVEIRA PEREIRA</option>
                              <option>CÍCERO ARAÚJO SILVA</option>
                              <option>CLAYDSON INOCÊNCIO VASCONCELOS</option>
                              <option>CLÉBER MÁRIO BORGES</option>
                              <option>CLEITON VANDERLEI SANDES</option>
                              <option>CLEONILTON DE MELO</option>
                              <option>DANIEL MACIEL DE BARROS LEITE</option>
                              <option>DANIEL PINTO NASCIMENTO</option>
                              <option>DAVID MARLON MONTEIRO MARCOLAN</option>
                              <option>DERALDO LOPES CAMERINO JÚNIOR</option>
                              <option>DIEGO AURÉLIO DA SILVA PONTES</option>
                              <option>DIEGO CORREIA HOLANDA</option>
                              <option>DIEGO DOS SANTOS BATISTA</option>
                              <option>DIEGO JOSÉ LIMA ROCHA</option>
                              <option>DIEGO JOSÉ UCHÔA QUINTELA</option>
                              <option>DIOGO JOSÉ LIMA ROCHA</option>
                              <option>D'SOLARES</option>
                              <option>EDERALDO GEOVANE SILVA</option>
                              <option>EDERALDO PEREIRA SANTOS</option>
                              <option>EDGARD JOSÉ FERNANDES</option>
                              <option>EDIBERTO TAVARES DE LIMA</option>
                              <option>EDIS DE OLIVEIRA BESSA JUNIOR</option>
                              <option>EDMUNDO SPÍNOLA JUNIOR</option>
                              <option>EDNALDO GEOVANE</option>
                              <option>EDNALDO GEOVANE SILVA</option>
                              <option>EDNEY MIKAEL VIEIRA DE ALBUQUERQUE</option>
                              <option>EDSON ANTONIO DE ARAÚJO</option>
                              <option>EDSON TENÓRIO DO NASCIMENTO</option>
                              <option>EDSON TENÓRIO NASCIMENTO</option>
                              <option>EDUARDO DIAZ DE LA CRUZ</option>
                              <option>EDUARDO FERREIRA ROCHA</option>
                              <option>EDUARDO FREIRE ROCHA</option>
                              <option>EDUARDO RODRIGO GUEDES E SILVA</option>
                              <option>ELTON FERRAZ CABRAL</option>
                              <option>ERIK SAZIO MACHADO MORAIS MÁRCIO</option>
                              <option>ERLANDSON LEMOS DOS SANTOS</option>
                              <option>ESDRAS MANOEL SANTOS FERREIRA DA SILVA</option>
                              <option>ESDRAS PEIXOTO MOREIRA DE FARIAS</option>
                              <option>EUCLIDES PACHECO NETO</option>
                              <option>EUDES GONÇALVES DE ARAÚJO</option>
                              <option>EURICO KIYOHARA</option>
                              <option>EVERALDO ALBUQUERQUE ALVES</option>
                              <option>FABIANO FUCK</option>
                              <option>FABIANO PASSOS BASTOS</option>
                              <option>FÁBIO AUGUSTO A. DE LUCENA</option>
                              <option>FÁBIO FERREIRA DE LIMA</option>
                              <option>FÁBIO MACHADO NOBRE</option>
                              <option>FELIPE JUNIO BRANDÃO SILVA</option>
                              <option>FERNANDA DE BRITO PEREIRA</option>
                              <option>FERNANDO JUVENAL SILVA VASCONCELOS</option>
                              <option>FERNANDO SIMÃO GOMES FERREIRA</option>
                              <option>FIRMINO TELES VIEIRA FILHO</option>
                              <option>FLÁVIO BISPO DA ROCHA</option>
                              <option>FRANCISCO MARCÍLIO DE PONTES CONFESSOR</option>
                              <option>GABRIEL AUGUSTO BUSS</option>
                              <option>GABRIEL DE OLIVEIRA BRANDÃO E GOMES</option>
                              <option>GEILSON CAVALCANTE ALVES</option>
                              <option>GERALDO RICARTE DE ARAÚJO FILHO</option>
                              <option>GEREMIAS P. LIMA</option>
                              <option>GILBERTO BEZERRA DE OLIVEIRA</option>
                              <option>GILBERTO MANTANI</option>
                              <option>GISELLE CRISTINA LEITE RAPOSO</option>
                              <option>GRAZIELLY DORNELAS DO VALE</option>
                              <option>GUSTAVO DE ALENCAR FREITAS</option>
                              <option>GUSTAVO HALBREICH</option>
                              <option>HAMILTO GODINHO</option>
                              <option>HELDER AMARAL ARAÚJO</option>
                              <option>ISAIAS CORREIA LIMA</option>
                              <option>ÍTALO PINHEIRO DE LEMOS</option>
                              <option>IURY  MONTEIRO BEZERRA</option>
                              <option>IVAN REINALDO DA SILVA TORRES</option>
                              <option>JAIRO PACHECO</option>
                              <option>JAMERSON CALVOCANTE DE LIMA</option>
                              <option>JAMES RODRIGUES DOS SANTOS</option>
                              <option>JAYME CARNEIRO JUNIOR</option>
                              <option>JAYME DE MIRANDA FAHUR</option>
                              <option>JEFFERSON DE LIMA ARAÚJO FILHO</option>
                              <option>JELZAIR ANDRADE DE SANTANA</option>
                              <option>JOÃO EVERALDO MALCHER GALVÃO</option>
                              <option>JOÃO GALVÃO DA SILVA</option>
                              <option>JOÃO MEDEIROS ROCHA</option>
                              <option>JOÃO OSVALDO DA CRUS</option>
                              <option>JOÃO PAULO DE OMENA DA ANDRADE</option>
                              <option>JOEMIR GENTIL MOCELLIN</option>
                              <option>JORGE ALMEIDA</option>
                              <option>JORGE ALMEIDA DOS SANTOS JUNIOR</option>
                              <option>JOSÉ AUGUSTO GOMES DA CUNHA</option>
                              <option>JOSÉ CARLOS DA SILVA</option>
                              <option>JOSÉ CÍCERO FERNANDES TENÓRIO</option>
                              <option>JOSÉ CLÓVIS SILVA DE ALCÂNTARA</option>
                              <option>JOSÉ DELCIO JATOBÁ CORCINO</option>
                              <option>JOSÉ DILTON DE MEDEIROS RODRIGUES</option>
                              <option>JOSÉ FERNANDO FERREIRA DOS SANTOS</option>
                              <option>JOSÉ FERREIRA FERREIRA DOS SANTOS</option>
                              <option>JOSÉ GALVÃO DA SILVA</option>
                              <option>JOSÉ LUCIANO GOMES DA SILVA</option>
                              <option>JOSÉ LUIZ DE SOUZA SOARES</option>
                              <option>JOSÉ ROBERTO MARTINS BARBOSA JÚNIOR</option>
                              <option>JOSE RONALDO ERALDO CAVALCANTE</option>
                              <option>JOSÉ RONALDO MALCHER GALVÃO</option>
                              <option>JOSENILSON FELIX DE ARAÚJO</option>
                              <option>JOSIAS ZEFERINO DE MUNIZ</option>
                              <option>JOZILDO TAVARES DOS SANTOS</option>
                              <option>JUAREZ MEIRA GALVÃO</option>
                              <option>JUCÉLIO PEREIRA FÉLIX</option>
                              <option>JULIANA TIMÓTEO LOPES CHAGAS</option>
                              <option>JÚLIO CÉSAR PEREIRA</option>
                              <option>JÚLIO DE ANDRADE BELO NETO</option>
                              <option>KLAYSON FERNANDO MORAES PEDROSA DA COSTA</option>
                              <option>LEONARDO FONTES ANDION</option>
                              <option>LEOPOLDO BARACHO MACENA</option>
                              <option>LUCÉLIA NASCIMENTO LUZ</option>
                              <option>LUCIANA FONSECA MAIA</option>
                              <option>LUCIANO JÚLIO DOS SANTOS</option>
                              <option>LUCIVAN  DE BRITO MACÁRIO</option>
                              <option>LUIZ ANTÔNIO DOS SANTOS GUEDES</option>
                              <option>LUIZ CARLOS COSTA FILHO</option>
                              <option>LUIZ EDUARDO NUNES FILHO</option>
                              <option>LUIZ EDUARDO VASCONCELOS SANTOS</option>
                              <option>LUIZ GUSTAVO GUIMARÃES SANTOS</option>
                              <option>LUIZ JORGE NETO</option>
                              <option>LUIZA BRENNAND QUEIROZ CAMPOS</option>
                              <option>MACIUS BELTRÃO SIQUEIRA</option>
                              <option>MANFRINNI DE MELO QUEIROZ</option>
                              <option>MARCELO RAPOSO RAMIRES SALDANHA</option>
                              <option>MARCIO BOURBON DA LUZ</option>
                              <option>MARCIO CESAR DE MORAES CORREIA</option>
                              <option>MÁRCIO DE CARVALHO GOBBIRCIO LOPES</option>
                              <option>MARCIO JOSÉ MELO MONTEIRO DA ROCHA</option>
                              <option>MÁRCIO LOPES DOS SANTOS</option>
                              <option>MÁRCIO MONTEIRO DA ROCHA</option>
                              <option>MARCIO SOARES RODRIGUES</option>
                              <option>MARCIO TÚLIO FERNANDES SILVA SANTOS DE AGUIAR</option>
                              <option>MARCO ANTONIO NEVES GANDARA</option>
                              <option>MARCOS ANTONIO CERUTTI</option>
                              <option>MARCOS ANTÔNIO GONÇALVES DOS SANTOS</option>
                              <option>MARCOS ANTONIO MACHADO DIAS</option>
                              <option>MARCOS ANTÔNIO ROSA DA COSTA</option>
                              <option>MARCOS EXPEDITO DO NASCIMENTO</option>
                              <option>MARCOS GERALDO LEITE</option>
                              <option>MARIA APARECIDA ALVES PEREIRA</option>
                              <option>MARIO LYCIO SEVE DE ABREU E LIMA</option>
                              <option>MATHEUS DIAS ALMEIDA</option>
                              <option>MAURÍCIO LEITE TENÓRIO COSTA</option>
                              <option>MAURICIO TULIO FERNANDES AGUIAR</option>
                              <option>MAURO AZEVEDO DE BORBA DELGADO</option>
                              <option>MICHEL EDMOND LE CAMPION</option>
                              <option>MICHELE MENDES LIMA LISBOA</option>
                              <option>MICHELLE CALADO PALLADINO</option>
                              <option>MIGUEL ORSOLETE FILHO</option>
                              <option>MIGUEL ORSOLETE NETO</option>
                              <option>MOISES DA SILVA FERREIRA</option>
                              <option>MÔNICA RAFAELA DA SILVA</option>
                              <option>PAULO ANDRÉ DOS SANTOS ARAÚJO ALVES </option>
                              <option>PAULO DUÉ</option>
                              <option>PAULO JACINTO DO NASCIMENTO NETO</option>
                              <option>PAULO ROGÉRIO CERQUEIRA</option>
                              <option>PETRÚCIO MANOEL JUSTINO</option>
                              <option>PIERLORENZO MARIMPIETRI</option>
                              <option>PLINIO JOSÉ ALVES DE ALBUQUERQUE</option>
                              <option>RAULINO SILVA</option>
                              <option>RENATA BARBOSA CAVALCANTE</option>
                              <option>REYLON FEIJÓ COSTA</option>
                              <option>RICARDO DE JESUS ALMEIDA</option>
                              <option>RICARDO PEREIRA FEITOSA</option>
                              <option>ROBERTO DA SILVA</option>
                              <option>RODOLPHO WONG</option>
                              <option>ROGÉRIO GONDIM DA ROSA OITICICA</option>
                              <option>ROSA MARIA RIBEIRO DE ALBUQUERQUE</option>
                              <option>ROSEVALDO PEREIRA DE MELO JÚNIOR</option>
                              <option>ROSIVALDO CAMILO DA PAIXÃO</option>
                              <option>RUITHER DOS SANTOS</option>
                              <option>SAMUEL DO NASCIMENTO SILVA</option>
                              <option>SHYRDNEZ DE AZEVEDO FARIAS</option>
                              <option>SONIVAL DA SILVA SANTOS JÚNIOR</option>
                              <option>SWYTZ JOSÉ SILVA TAVARES</option>
                              <option>TAIS DE ALMEIDA</option>
                              <option>TALES AUGUSTO COSTA GOMES</option>
                              <option>TERCIO LUIZ DA SILVA JUNIOR</option>
                              <option>THAGO JORGE BARROS BEZERRA</option>
                              <option>THIAGO BITTENCOURT DE CARVALHO</option>
                              <option>THIAGO DELGADO DUARTE</option>
                              <option>THIAGO JORGE DE BARROS BEZERRA</option>
                              <option>UURY MONTEIRO BEZERRA</option>
                              <option>VAGNER EDIELSON DE ARAÚJO PAIVA</option>
                              <option>VAGNER EDÍLSON DE ARAÚJO PAIVA</option>
                              <option>VALTER HIDEYUKI OKUBO</option>
                              <option>VALTER LEANDRO DA SILVA FILHO</option>
                              <option>VICENTE PAULO CAVALCANTE MATOS FILHO</option>
                              <option>VIRGÍLIO VILAR BRASILEIRO</option>
                              <option>VITOR ROCHA GOIS DA SILVA</option>
                              <option>WAGNER TENÓRIO DA SILVA</option>
                              <option>WALTER ANTONIO NOGUEIRA JUNIOR</option>
                              <option>WALTER HIDEYUKI OKUBO</option>
                              <option>WALTER SANTOS LUGO JUNIOR</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Interessado
                          </label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="birthday" name="interessado" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Cadastro Único
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" name="uc" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999'">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">CPF/CNPJ
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" name="cpf" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99.999.999/9999-99'">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Cidade
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="cidade" class="form-control" id="cidade">
                              <?php
                                $select = $pdo->prepare("SELECT * FROM cidade ORDER BY nome ASC");
                                $select->execute();
                                $fetchAll = $select->fetchAll();
                                foreach($fetchAll as $cidade)
                                {
                                  echo '<option value="'.$cidade['id'].'">'.$cidade['nome'].'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Bairro
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="bairro" class="form-control" id="bairro">

                            </select>
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Coordenada X
                        </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <input name="coordenada_x" type="text" id="uc" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999,99'">
                         </div>
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Coordenada Y
                         </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <input name="coordenada_y" type="text" id="uc" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999,99'">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc1">Data de Entrada
                         </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class='input-group date' id='myDatepicker2'>
                             <input name="data_entrada" type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>

                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc2">Data Prevista
                         </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class='input-group date' id='myDatepicker3'>
                             <input name="data_prevista" type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>
                       </div>

                       <br/>
                       <h2>Dados Técnicos <small>Informações especificas do Projeto</small></h2>
                       <div class="ln_solid"></div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Posto</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="posto" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Alimentador</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="alimentador" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Subestação</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="subestacao" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">P(MW)</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="pmw" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Bitola</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="bitola" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">I máx Alim</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="imax" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">I méd máx</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="imed" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Acréc/I</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="iacre" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">% Alim</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" data-inputmask="'mask': '#%'">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-primary">Atual</button>
                              </span>
                            </div>
                          </div>
                        </div>

                        <br/>
                        <h2>Status do Projeto <small>Situação atual da Viabilidade</small></h2>
                        <div class="ln_solid"></div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Demanda</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input name="demanda_prevista" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Potência Instalada</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input name="potencia_instalada" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Situação</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="situacao" class="form-control">
                              <option></option>
                              <option>NÃO INICIADO</option>
                              <option>PROJETO EM ANÁLISE</option>
                              <option>PROJETO DEVOLVIDO</option>
                              <option>PROJETO LIBERADO ORÇAMENTO</option>
                              <option>PROJETO EM ORÇAMENTAÇÃO</option>
                              <option>PROJETO CADASTRADO SGO</option>
                              <option>PROJETO AUTORIZADO</option>
                              <option>OBRA FISCALIZADA</option>
                              <option>OBRA DESPACHADA COMERCIAL</option>
                              <option>OBRA FECHADA</option>
                            </select>
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Status</label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input name="status" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Pasta</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input name="pasta" type="text" class="form-control">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Atribuido</label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <select name="atribuido" class="form-control">
                              <option></option>
                              <option>ANA CAVALCANTE</option>
                              <option>CARLA RODRIGUES</option>
                              <option>CÁSSIO NATAN</option>
                              <option>DOUGLAS FERREIRA</option>
                              <option>ESTAGIÁRIO</option>
                            </select>
                          </div> 
                        </div>

                        <br/>
                        <h2>Observações <small>Sobre a Viabilidade</small></h2>
                        <div class="ln_solid"></div>

                        <div class="x_content">
                        <textarea id="message" class="form-control" name="observacao" rows="5" data-parsley-trigger="keyup" data-parsley-validation-threshold="10"></textarea> 
                        <br />
                        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						              <button class="btn btn-primary" type="reset">Limpar</button>
                          <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
              Arthur Mendes - Programa de Cadastro de Projetos - <a href="http://eletrobrasalagoas.com/">Eletrobras distribuição Alagoas</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>
    <!-- FullScreen -->
    <script src="js/FullScreen.js"></script>
    
    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>

<script>
  $("#cidade").on("change",function(){
    var idCidade = $("#cidade").val();
    $.ajax({
        url: 'ComboBox/transf_bairro.php',
        type: 'POST',
        data: {idBairro:idCidade},
        beforeSend: function(){
              $("#bairro").css({'display':'block'});
              $("#bairro").html("Carregando...");
        },
        success: function(data)
        {
              $("#bairro").css({'display':'block'});
              $("#bairro").html(data);
        },
        error: function(data)
        {
              $("#bairro").css({'display':'block'});
              $("#bairro").html("Houve um erro!");
        },
    });
  });
</script>

  </body>
</html>