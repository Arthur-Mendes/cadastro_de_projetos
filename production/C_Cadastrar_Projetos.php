<?php
session_start();
require 'Config/Config.php';
require 'Config/Config2.php';

  if(strstr($_SESSION['setor'],'Comercial') !== false){

  }else{
    header("Location: login.php");
  }

  if(isset($_POST['protocolo'])) {

  $protocolo = filter_input(INPUT_POST, 'protocolo', FILTER_SANITIZE_SPECIAL_CHARS);
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $status = filter_input(INPUT_POST, 'status');
  $prazo_analise = filter_input(INPUT_POST, 'prazo_analise', FILTER_SANITIZE_SPECIAL_CHARS);
  $prazo_fiscalizacao = filter_input(INPUT_POST, 'prazo_fiscalizacao', FILTER_SANITIZE_SPECIAL_CHARS);
  $ultima_alteracao = filter_input(INPUT_POST, 'ultima_alteracao', FILTER_SANITIZE_SPECIAL_CHARS);
  $tecnico = filter_input(INPUT_POST, 'tecnico', FILTER_SANITIZE_SPECIAL_CHARS);
  $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
  $kwpico = filter_input(INPUT_POST, 'kwpico', FILTER_SANITIZE_NUMBER_INT);
  $data_entrada = filter_input(INPUT_POST, 'data_entrada', FILTER_SANITIZE_SPECIAL_CHARS);
  $uc = filter_input(INPUT_POST, 'uc', FILTER_SANITIZE_NUMBER_INT);
  $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);
  $atribuido = filter_input(INPUT_POST, 'atribuido', FILTER_SANITIZE_SPECIAL_CHARS);





  $sql = $pdo->prepare("INSERT INTO geracao_distribuida (protocolo, nome, status, prazo_analise, prazo_fiscalizacao, ultima_alteracao, tecnico, cidade, kwpico, data_entrada, uc, observacao, atribuido, login) VALUES (:protocolo, :nome, :status, :prazo_analise, :prazo_fiscalizacao, :ultima_alteracao, :tecnico, :cidade, :kwpico, :data_entrada, :uc, :observacao, :atribuido, 'Arthur Mendes')");

  $sql2 = $pdo->prepare("INSERT INTO historico_geracao (processo, status, atribuido, setor, data) VALUES (:protocolo, :status, :atribuido, 'Comercial', :ultima_alteracao)");


  $sql->bindValue(":protocolo", $protocolo);
  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":status", $status);
  $sql->bindValue(":prazo_analise", $prazo_analise);
  $sql->bindValue(":prazo_fiscalizacao", $prazo_fiscalizacao);
  $sql->bindValue(":ultima_alteracao", $ultima_alteracao);
  $sql->bindValue(":tecnico", $tecnico);
  $sql->bindValue(":cidade", $cidade);
  $sql->bindValue(":kwpico", $kwpico);
  $sql->bindValue(":data_entrada", $data_entrada);
  $sql->bindValue(":uc", $uc);
  $sql->bindValue(":observacao", $observacao);
  $sql->bindValue(":atribuido", $atribuido);
  $sql->execute();

  $sql2->bindValue(":protocolo", $protocolo);
  $sql2->bindValue(":status", $status);
  $sql2->bindValue(":atribuido", $atribuido);
  $sql2->bindValue(":ultima_alteracao", $ultima_alteracao);
  $sql2->execute();


  header("Location: C_Cadastrar_Projetos.php");

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
          require_once("Menu/C_Menu.php");
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
                <h3>Cadastrar Clientes</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastrar Novo Cliente</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      <li class="dropdown">
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">



                    <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nº de Protocolo
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" name="protocolo" id="protocolo" class="form-control col-md-7 col-xs-12" value="GD-___-2018">
                          </div>

                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Status
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="status" name="status" class="form-control col-md-7 col-xs-12" value="Triagem">

                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome do Cliente
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="nome" name="nome" class="form-control col-md-7 col-xs-12" placeholder="Campo Obrigatório">
                          </div>
                        </div>

                        <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12"> Prazo de Análise
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <div class='input-group date' id='myDatepicker1'>
                             <input name="prazo_analise" id="prazo_analise" value="<?php echo date('d/m/Y');?>"  type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>

                         <label class="control-label col-md-2 col-sm-2 col-xs-12">Prazo de Fiscalização
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <div class='input-group date' id='myDatepicker2'>
                             <input name="prazo_fiscalizacao" id="prazo_fiscalizacao" value="<?php echo date('d/m/Y', strtotime("+30 days"));?>" type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>
                       </div>

                        <div class="form-group">
                          <label for="tecnico" class="control-label col-md-3 col-sm-3 col-xs-12">Cidade</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                              <select name="cidade" class="form-control" id="cidade" placeholder="Campo Obrigatório">
                                <option>Selecione uma Cidade...</option>
                              <?php
                                $selectCidade = $pdo->prepare("SELECT * FROM cidade ORDER BY nome ASC");
                                $selectCidade->execute();
                                $fetchAll = $selectCidade->fetchAll();
                                foreach($fetchAll as $cidade)
                                {
                                  echo '<option value="'.$cidade['nome'].'">'.$cidade['nome'].'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Atribuido
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" name="atribuido" id="atribuido" class="form-control col-md-7 col-xs-12" value="<?php echo $_SESSION['usuario'] ?>"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Cliente
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="tecnico" class="form-control" id="tecnico" placeholder="Campo Obrigatório">
                              <option>Selecione um Cliente...</option>
                                <?php
                                  $selectTecnico = $pdo->prepare("SELECT * FROM clientes ORDER BY nome ASC");
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
                         <label class="control-label col-md-3 col-sm-3 col-xs-12"> UC
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <input name="uc" type="text" id="uc" class="form-control col-md-7 col-xs-12">
                         </div>
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">kWatts pico
                        </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <input name="kwpico" type="text" id="kwpico" class="form-control col-md-7 col-xs-12">
                         </div>
                       </div>


                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Entrada
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <div class='input-group date' id='myDatepicker3'>
                             <input name="data_entrada" id="data_entrada" value="<?php echo date('d/m/Y');?>"  type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>

                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc2">Última Alteração
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <div class='input-group date' id='myDatepicker4'>
                             <input name="ultima_alteracao" id="ultima_alteracao" value="<?php echo date('d/m/Y', strtotime("+30 days"));?>" type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>
                       </div>

                        <br/>
                        <h2>Observações <small>Sobre o projeto</small></h2>
                        <div class="ln_solid"></div>

                        <div class="x_content">
                        <textarea id="observacao" class="form-control" name="observacao" rows="5" data-parsley-trigger="keyup" data-parsley-validation-threshold="6"></textarea> 
                        <br />
                        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-8">
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
    <!-- FullScreen -->
    <script src="js/FullScreen.js"></script>

    
    <!-- Initialize datetimepicker -->
<script>

    $('#myDatepicker1').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#myDatepicker4').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
</script>

<script>
  $("#tecnico").on("change",function(){

    $.ajax({
        url: 'ComboBox/atualizar_login.php',
        type: 'POST',
        data: {idLogin:$("#tecnico").val()},
        beforeSend: function(){
              $("#login").css({'display':'block'});
              $("#login").html("Carregando...");
        },
        success: function(data)
        {
              $("#login").css({'display':'block'});
              $("#login").html(data);
        },
        error: function(data)
        {
              $("#login").css({'display':'block'});
              $("#login").html("Houve um erro!");
        },
    });
  });
</script>

  </body>
</html>