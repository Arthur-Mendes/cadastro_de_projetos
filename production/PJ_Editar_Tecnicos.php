<?php
session_start();
require 'Config/Config.php';
require 'Config/conexao.php';


  if(strstr($_SESSION['setor'],'Projeto') !== false){

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;
    $querySelect = $link->query("SELECT * FROM tecnicos WHERE id=$id");

    while($registros = $querySelect->fetch_assoc()):
      $nome = $registros['nome'];
      $logradouro = $registros['logradouro'];
      $cpf = $registros['cpf'];
      $crea = $registros['crea'];
      $fone1 = $registros['fone1'];
      $fone2 = $registros['fone2'];
      $email1 = $registros['email1'];
      $email2 = $registros['email2'];
      $cidade = $registros['cidade'];
      $bairro = $registros['bairro'];
    endwhile;
  
    
}else{
  header("Location: login.php");
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
       

        <!-- menu profile quick info -->
        <?php
          require_once("Menu/Menu_usuario.php");
        ?>
        <!-- /menu profile quick info -->

            <br />

        <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>Geral</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Menu_Projeto.php">Programações e Atividades</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-search"></i> Pesquisa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Pesquisa.php">Pesquisa Simples</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-group (alias)"></i> Técnicos <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Editar_Tecnicos.php">Editar Técnicos</a></li>
                  <li><a href="PJ_Pesquisar_Tecnicos.php">Pesquisar Técnicos</a></li>
                  <li><a href="PJ_Cadastrar_Tecnicos.php">Cadastrar Técnico</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-file-text-o"></i>  Projetos <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Cadastrar_Projetos.php">Cadastrar Projetos</a></li>

                </ul>
              </li>
              <li><a><i class="fa fa-table"></i> Demanda <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Demanda.php">Visualizar Demanda</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-bar-chart-o"></i> Relatório <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Balanco_Geral.php">Gestão de Relatórios</a></li>
                  <li><a href="PJ_Historico.php">Histórico</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-clone"></i>Arquivos <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Upload_Arquivos.php">Upload de Arquivos</a></li>
                  <li><a href="#">Download de Arquivos</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-comments-o"></i>Reportar <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Contato.php">Reportar Erro</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
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
                <h3>Editar Técnicos</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informações do Técnico</h2>
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

                      <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="Config/update_tecnicos.php">

                        <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome
                          </label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="nome" name="nome" class="form-control col-md-7 col-xs-12" value="<?php echo $nome ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Logradouro
                          </label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input id="logradouro" name="logradouro" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $logradouro ?>" type="text">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">CPF
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" name="cpf" id="cpf" class="form-control col-md-7 col-xs-12" value="<?php echo $cpf ?>">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">CREA
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="crea" name="crea" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999999999-9'" value="<?php echo $crea ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">Cidade
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="cidade" class="form-control" id="cidade" value="<?php echo $cidade ?>">
                              <option><?php echo $cidade ?></option>
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
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Bairro
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="bairro" class="form-control" id="bairro">
                                <option><?php echo $bairro ?></option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">Tel 1
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="fone1" name="fone1" class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'" value="<?php echo $fone1 ?>">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Tel 2
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="fone2" name="fone2"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'" value="<?php echo $fone2 ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">Email 1
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="email" id="email1" name="email1" class="form-control col-md-7 col-xs-12" value="<?php echo $email1 ?>">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Email 2
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="email" id="email2" name="email2" class="form-control col-md-7 col-xs-12" value="<?php echo $email2 ?>">
                          </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-7">
                            <button type="button" class="btn btn-primary">Cancelar</button>
                            <button type="reset" class="btn btn-primary">Limpar</button>
                            <button type="submit" class="btn btn-success">Enviar</button>
                          </div>
                        </div>

                        </div>
                      </form>
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