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


        <!-- menu profile quick info -->
        <?php
          require_once("Menu/Menu_usuario.php");
        ?>
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
        <?php
          require_once("Menu/PL_Menu.php");
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
                            <select name="ordem" id="ordem" class="form-control" placeholder="Campo Obrigatório">
                              <option><?php echo $ordem ?></option>
                                <?php
                                  $selectOrdem= $pdo->prepare("SELECT * FROM ordem ORDER BY nome ASC");
                                  $selectOrdem->execute();
                                  $fetchAll = $selectOrdem->fetchAll();
                                  foreach($fetchAll as $ordemLista)
                                    {
                                      echo '<option value="'.$ordemLista['nome'].'">'.$ordemLista['nome'].'</option>';
                                    }
                                ?>
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
                            <select name="tecnico" class="form-control" id="tecnico" placeholder="Campo Obrigatório">
                              <option><?php echo $ordem ?></option>
                                <?php
                                  $selectTecnico = $pdo->prepare("SELECT * FROM tecnicos ORDER BY nome ASC");
                                  $selectTecnico->execute();
                                  $fetchAll = $selectTecnico->fetchAll();
                                  foreach($fetchAll as $tecnico)
                                    {
                                      echo '<option value="'.$tecnico['nome'].'">'.$tecnico['nome'].'</option>';
                                    }
                                ?>
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