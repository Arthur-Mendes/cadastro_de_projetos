<?php
session_start();
require 'Config/Config.php';


  if(strstr($_SESSION['setor'],'Cliente') !== false){

  }else{
    header("Location: login.php");
  }

 if(isset($_POST['titular_uc'])) {
  $titular_uc =  $_POST['titular_uc'];
  $logradouro =  $_POST['logradouro'];
  $cpf =  $_POST['cpf'];
  $codigo_uc =  $_POST['codigo_uc'];
  $tipo_conexao =  $_POST['porcentagem_uc'];


 $sql = $pdo->prepare("INSERT INTO consumidor_beneficiario (titular_uc, logradouro, cpf, codigo_uc, porcentagem_uc) VALUES (:titular_uc, :logradouro, :cpf, :codigo_uc, :porcentagem_uc");

  $sql->bindValue(":titular_uc", $titular_uc);
   $sql->bindValue(":logradouro", $logradouro);
    $sql->bindValue(":cpf", $cpf);
     $sql->bindValue(":codigo_uc", $codigo_uc);
      $sql->bindValue(":porcentagem_uc", $porcentagem_uc);


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
                <h3>Dados da(s) Unidade(s) Consumidora(s) Beneficiária(s)</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
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
                        
                        <?php

                          $n = $_POST['numero'];

                          for($i=1;$i<=$n;$i++)
                          {
                        ?>

                        <input type="hidden" name="num" value="<?php echo $n; ?>" />

                       <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome do Titular da UC
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input id="titular_uc" name="titular_uc" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                           
                           
                           <label class="control-label col-md-1 col-sm-1 col-xs-12">Endereço
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input id="logradouro" name="logradouro" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                          </div>
                        
                          <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12">CPF/CNPJ do Titular da UC
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input id="cpf" name="cpf" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                          
                           <label class="control-label col-md-2 col-sm-2 col-xs-12">UC Beneficiária
                          </label>
                          <div class="col-md-1 col-sm-1 col-xs-12">
                            <input id="codigo_uc" name="codigo_uc" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>

                           <label class="control-label col-md-3 col-sm-3 col-xs-12">(%) do excedente de geração destinada à UC
                          </label>
                          <div class="col-md-1 col-sm-1 col-xs-12">
                            <input id="porcentagem_uc" name="porcentagem_uc" class="date-picker form-control col-md-7 col-xs-12" type="text">
                          </div>
                            </div>
                        <div class="ln_solid"></div>


                    <?php } ?>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-8">
                          <button type="button" onclick="history.back();" class="btn btn-primary" >Voltar</button>
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



  </body>
</html>