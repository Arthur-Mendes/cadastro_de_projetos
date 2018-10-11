<!-- MICROGERAÇÃO DISTRIBUÍDA COM POTÊNCIA IGUAL OU INFERIOR A 10kW -->

<?php
session_start();
require 'Config/Config.php';
  if(strstr($_SESSION['setor'],'Cliente') !== false){

  }else{
    header("Location: login.php");
  }

 
  if(isset($_POST['codigo_uc'])) {
  $codigo_uc =  $_POST['codigo_uc'];
  $classe =  $_POST['classe'];
  $titular_uc =  $_POST['titular_uc'];
  $logradouro =  $_POST['logradouro'];
  $numero =  $_POST['numero'];
  $cep =  $_POST['cep'];
  $cidade =  $_POST['cidade'];
  $bairro =  $_POST['bairro'];
  $email =  $_POST['email'];
  $fone1 =  $_POST['fone1'];
  $fone2 =  $_POST['fone2'];
  $cpf =  $_POST['cpf'];
  $latitude =  $_POST['latitude'];
  $longitude =  $_POST['longitude'];
  $poten_inst =  $_POST['poten_inst'];
  $tensao_aten =  $_POST['tensao_aten'];
  $tipo_conexao =  $_POST['tipo_conexao'];
  $trans_part =  $_POST['trans_part'];
  $tipo_instal =  $_POST['tipo_instal'];
  $tipo_liga =  $_POST['tipo_liga'];
  $impedancia =  $_POST['impedancia'];
  $tipo_ramal =  $_POST['tipo_ramal'];
  $poten_geracao =  $_POST['poten_geracao'];
  $tipo_fonte =  $_POST['tipo_fonte'];
  $empresa =  $_POST['empresa'];
  $end_empresa =  $_POST['end_empresa'];
  $cont_empresa =  $_POST['cont_empresa'];
  $email_emp =  $_POST['email_emp'];
  $email_emp =  $_POST['n_crea'];
  $resp_tec =  $_POST['resp_tec'];
  $end_resp_tec =  $_POST['end_resp_tec'];
  $cont_resp_tec =  $_POST['cont_resp_tec'];
  $email_resp_tec =  $_POST['email_resp_tec'];
  $poten_nom1 =  $_POST['poten_nom1'];
  $fabricante1 =  $_POST['fabricante1'];
  $modelo1 =  $_POST['modelo1'];
  $quant1 =  $_POST['quant1'];
  $poten_nom2 =  $_POST['poten_nom2'];
  $fabricante2 =  $_POST['fabricante2'];
  $modelo2 =  $_POST['modelo2'];
  $quant2 =  $_POST['quant2'];
  $area_ocup2 =  $_POST['area_ocup2'];
  $atribuido =  filter_input(INPUT_POST, 'atribuido', FILTER_SANITIZE_SPECIAL_CHARS);  
  $ultima_alteracao =  filter_input(INPUT_POST, 'ultima_alteracao', FILTER_SANITIZE_SPECIAL_CHARS); 

  $sql = $pdo->prepare("INSERT INTO geracao_distribuida (codigo_uc, classe, titular_uc, logradouro, numero, cep, cidade, bairro, email, fone1, fone2, cpf, latitude, longitude, poten_inst, tensao_aten, tipo_conexao, trans_part, tipo_instal, tipo_liga, impedancia, tipo_ramal, poten_geracao, tipo_fonte, empresa, end_empresa, cont_empresa, email_emp, n_crea, resp_tec, end_resp_tec, cont_resp_tec, email_resp_tec, poten_nom1, fabricante1, modelo1, quant1, poten_nom2, fabricante2, modelo2, quant2, area_ocup2, atribuido, ultima_alteracao) VALUES (:codigo_uc, :classe, :titular_uc, :logradouro, :numero, :cep, :cidade, :bairro, :email, :fone1, :fone2, :cpf, :latitude, :longitude, :poten_inst, :tensao_aten, :tipo_conexao, :trans_part, :tipo_instal, :tipo_liga, :impedancia, :tipo_ramal, :poten_geracao, :tipo_fonte, :empresa, :end_empresa, :cont_empresa, :email_emp, :n_crea, :resp_tec, :end_resp_tec, :cont_resp_tec, :email_resp_tec, :poten_nom1, :fabricante1, :modelo1, :quant1, :poten_nom2, :fabricante2, :modelo2, :quant2, :area_ocup2, :atribuido, :ultima_alteracao");


  $sql->bindValue(":codigo_uc", $codigo_uc);
  $sql->bindValue(":classe", $classe);
  $sql->bindValue(":titular_uc", $titular_uc);
  $sql->bindValue(":logradouro", $logradouro);
  $sql->bindValue(":numero", $numero);
  $sql->bindValue(":cep", $cep);
  $sql->bindValue(":cidade", $cidade);
  $sql->bindValue(":bairro", $bairro);
  $sql->bindValue(":fone1", $fone1);
  $sql->bindValue(":fone2", $fone2);
  $sql->bindValue(":cpf", $cpf);
  $sql->bindValue(":latitude", $latitude);
  $sql->bindValue(":longitude", $longitude);
  $sql->bindValue(":poten_inst", $poten_inst);
  $sql->bindValue(":tensao_aten", $tensao_aten);
  $sql->bindValue(":trans_part", $trans_part);
  $sql->bindValue(":tipo_instal", $tipo_instal);
  $sql->bindValue(":tipo_liga", $tipo_liga);
  $sql->bindValue(":impedancia", $impedancia);
  $sql->bindValue(":tipo_ramal", $tipo_ramal);
  $sql->bindValue(":poten_geracao", $poten_geracao);
  $sql->bindValue(":tipo_fonte", $tipo_fonte);
  $sql->bindValue(":empresa", $empresa);
  $sql->bindValue(":end_empresa", $end_empresa);
  $sql->bindValue(":cont_empresa", $cont_empresa);
  $sql->bindValue(":email_emp", $email_emp);
  $sql->bindValue(":n_crea", $n_crea);
  $sql->bindValue(":resp_tec", $resp_tec);
  $sql->bindValue(":end_resp_tec", $end_resp_tec);
  $sql->bindValue(":cont_resp_tec", $cont_resp_tec);
  $sql->bindValue(":email_resp_tec", $email_resp_tec);
  $sql->bindValue(":poten_nom1", $poten_nom1);
  $sql->bindValue(":fabricante1", $fabricante1);
  $sql->bindValue(":modelo1", $modelo1);
  $sql->bindValue(":fquant1", $quant1);
  $sql->bindValue(":poten_nom2", $poten_nom2);
  $sql->bindValue(":fabricante2", $fabricante2);
  $sql->bindValue(":modelo2", $modelo2);
  $sql->bindValue(":quant2", $quant2);
  $sql->bindValue(":area_ocup2", $area_ocup2);
  $sql->bindValue(":atribuido", $atribuido);
  $sql->bindValue(":ultima_alteracao", $ultima_alteracao);
  $sql->execute();

  header("Location: CL_Criacao_Projeto.php");
    exit;
}
?>

        <!-- menu head -->
        <?php
          require_once("Menu/Menu_head.php");
        ?>
        <!-- /menu head -->

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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

        <!-- menu profile quick info -->
        <?php
          require_once("Menu/Menu_usuario.php");
        ?>
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
        <?php
          require_once("Menu/CL_Menu.php");
        ?>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <?php
          require_once("Menu/Menu_inf.php");
        ?>
        <!-- /menu footer buttons -->
          
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
                <h3>Cadastrar Projeto - Microgeração com Potência Igual ou Inferior a 10kW</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">



                      <div class="form-group">
                      <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                        <h2>Indentificação da Unidade Consumidora - UC</h2>

                        <div class="ln_solid"></div>

                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Código da UC
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="number" id="codigo_uc" name="codigo_uc"  class="form-control col-md-7 col-xs-12">
                          </div>

                           <label class="control-label col-md-1 col-sm-1 col-xs-12">Classe
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input id="classe" name="classe" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                          </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Titular da UC
                          </label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="titular_uc" name="titular_uc"  class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Logradouro
                          </label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input id="logradouro" name="logradouro" class="date-picker form-control col-md-7 col-xs-12" type="text" placeholder="Endereço completo...">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Número
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="number" id="numero" name="numero"  class="form-control col-md-7 col-xs-12">
                          </div>

                           <label class="control-label col-md-1 col-sm-1 col-xs-12">CEP
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input id="cep" name="cep" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>
                          </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Cidade
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="cidade" class="form-control" id="cidade" placeholder="Campo Obrigatório">
                                <option>Selecione uma Cidade...</option>
                              <?php
                                $selectCidade = $pdo->prepare("SELECT * FROM cidade ORDER BY nome ASC");
                                $selectCidade->execute();
                                $fetchAll = $selectCidade->fetchAll();
                                foreach($fetchAll as $cidade)
                                {
                                  echo '<option value="'.$cidade['id'].'">'.$cidade['nome'].'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Bairro
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select id="bairro" name="bairro" class="form-control" placeholder="Campo Obrigatório">
                              <option></option>
                            </select>
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Email 
                          </label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12" placeholder="Campo Obrigatório">
                          </div>
                          </div>

                         <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">Telefone
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="fone1" name="fone1" class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'" placeholder="Campo Obrigatório">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Celular
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="fone2" name="fone2"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">CNPJ/CPF
                          </label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="cpf" name="cpf"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999.999.999-99'" placeholder="Campo Obrigatório">
                          </div>
                        </div>

                        <div class="ln_solid"></div>
                        <h2>2- Dados da Unidade Consumidora</h2>
                        <div class="ln_solid"></div>


                        <h5>Localização em coordenadas:</h5>

                        <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Potência instalada (kW):
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input id="poten_inst" name="poten_inst" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>

                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Tensão de atendimento (V):
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input id="tensao_aten" name="tensao_aten" class="form-control col-md-7 col-xs-12" type="number">
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Conexão</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                              <select name="tipo_conexao" class="form-control" id="tipo_conexao" placeholder="Campo Obrigatório">
                                <option>Monofásica</option>
                                <option>Bifásica</option>
                                <option>Trifásica</option>
                            </select>
                            </div>
                            </div>

  
                            <div class="ln_solid"></div>
                        <h2>3- Dados da Geração</h2>
                        <div class="ln_solid"></div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">kW instalada de geração:
                          </label>
                          <div class="col-md-1 col-sm-1 col-xs-12">
                            <input id="poten_geracao" name="poten_geracao" class="form-control col-md-7 col-xs-12" type="text">
                          </div>

                           <label class="control-label col-md-2 col-sm-2 col-xs-12">Tipo da fonte:
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                             <select name="tipo_fonte" class="form-control" id="tipo_fonte" placeholder="Campo Obrigatório" onblur="liberar3()">
                                <option>Hidráulica</option>
                                <option>Solar</option>
                                 <option>Eólica</option>
                                  <option>Biomassa</option>
                                   <option>Cogeração Qualificada</option>
                                   <option value = "Outra">Outra</option>
                            </select>
                          </div>

                          <div class="col-md-2 col-sm-2 col-xs-12">
                           <input style.visibility="hidden" name="especifique" type="text" id="especifique" placeholder="Especifique..." class="form-control col-md-7 col-xs-12">
                         </div>
                          </div>

                           <div class="ln_solid"></div>
                        <h2>4- Dados do(a) Responsável pelo Projeto e Execução </h2>
                        <div class="ln_solid"></div>

                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Empresa
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="empresa" name="empresa" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Endereço da Empresa
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="end_empresa" name="end_empresa" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Contato da Empresa
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="cont_empresa" name="cont_empresa" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Email da Empresa
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="email_emp" name="email_emp" class="date-picker form-control col-md-7 col-xs-12" type="email">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Responsável Técnico
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="resp_tec" name="resp_tec" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Endereço do Responsável Técnico
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="end_resp_tec" name="end_resp_tec" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Contato do Responsável Técnico
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="cont_resp_tec" name="cont_resp_tec" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Email
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="email_resp_tec" name="email_resp_tec" class="date-picker form-control col-md-7 col-xs-12" type="email">
                          </div>
                           </div>
                            <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Crea nº
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="n_crea" name="n_crea" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>
                           </div>

                           <div class="ln_solid"></div>
                        <h2>5- Dados Técnicos </h2>
                        <div class="ln_solid"></div>

                        <h4 align="center"> Inversor </h4>

                        <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Potência Nominal
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="poten_nom1" name="poten_nom1" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Fabricante
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fabricante1" name="fabricante1" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="modelo1" name="modelo1" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantidade
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="quant1" name="quant1" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>
                           </div>

                           <br></br>
                           <h4 align="center"> Módulos Geradores </h4>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Potência Nominal
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="poten_nom2" name="poten_nom2" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Fabricante
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fabricante2" name="fabricante2" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="modelo2" name="modelo2" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantidade
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="quant2" name="quant2" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Área total de ocupação
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="area_ocup2" name="area_ocup2" class="date-picker form-control col-md-7 col-xs-12" type="number">
                          </div>
                           </div>

                           <div class="ln_solid"></div>
                             <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistema de Compensação</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                              <select name="sis_comp" class="form-control" id="sis_comp">
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            </div>
                        <br/>
                        <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-8">
                              <button type="reset" class="btn btn-primary">Limpar</button>
                              <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                          </div>
                          <br />
                          <div class="ln_solid"></div>
                        </div>
                      </form>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php
          require_once("Menu/Menu_footer.php");
        ?>
        <!-- /footer content -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>
    <!-- FullScreen -->
    <script src="js/FullScreen.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
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

    $.ajax({
        url: 'ComboBox/transf_bairro.php',
        type: 'POST',
        data: {idBairro:$("#cidade").val()},
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


<script>
  
  window.onload = function(){
  liberar3(1); 
  }
</script>

<script>
function liberar3(){

  var newOutra = document.getElementById("tipo_fonte").value; 

if(newOutra == 'Outra'){
  document.getElementById('especifique').style.visibility='visible'
}

else{
  document.getElementById('especifique').style.visibility='hidden'
}
}
</script>

<script>
  function sistemacomp (){
   if (document.getElementById('sis_comp').value == 2)
  {
    window.location.href='CL_Pesquisa.php';
  }
  else if (document.getElementById('sis_comp').value == 1)
    {
    window.location.href='CL_Criacao_Projeto_Compensacao.php';
  }
}
</script>  

  </body>
</html>
