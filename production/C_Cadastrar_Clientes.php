<?php
session_start();
require 'Config/Config.php';
require 'Config/Config2.php';

  if(strstr($_SESSION['setor'],'Comercial') !== false){

  }else{
    header("Location: login.php");
  }

  if(isset($_POST['nome'])) {
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $logradouro =  filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS);
  $bairro =  filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
  $cidade =  filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
  $fone1 =  filter_input(INPUT_POST, 'fone1', FILTER_SANITIZE_NUMBER_INT);
  $fone2 =  filter_input(INPUT_POST, 'fone2', FILTER_SANITIZE_NUMBER_INT);
  $crea =  filter_input(INPUT_POST, 'crea', FILTER_SANITIZE_NUMBER_INT);
  $email1 =  filter_input(INPUT_POST, 'email1', FILTER_SANITIZE_EMAIL);
  $email2 =  filter_input(INPUT_POST, 'email2', FILTER_SANITIZE_EMAIL);
  $cpf =  filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
  $login =  filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
  $senha =  md5($_POST ['txt_serial']);


  $sql = $pdo->prepare("INSERT INTO clientes (nome, logradouro, bairro, cidade, fone1, fone2, crea, email1, email2, cpf, login) VALUES (:nome, :logradouro, :bairro, :cidade, :fone1, :fone2, :crea, :email1, :email2, :cpf, :login)");

  $sql2 = $pdo->prepare("INSERT INTO usuarios (nome, login, senha) VALUES ('Cliente', :login, :senha)");


  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":logradouro", $logradouro);
  $sql->bindValue(":bairro", $bairro);
  $sql->bindValue(":cidade", $cidade);
  $sql->bindValue(":fone1", $fone1);
  $sql->bindValue(":fone2", $fone2);
  $sql->bindValue(":crea", $crea);
  $sql->bindValue(":email1", $email1);
  $sql->bindValue(":email2", $email2);
  $sql->bindValue(":cpf", $cpf);
  $sql->bindValue(":login", $login);
  $sql->execute();

  $sql2->bindValue(":login", $login);
  $sql2->bindValue(":senha", $senha);
  $sql2->execute();

  header("Location: C_Cadastrar_Clientes.php");
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
                <h3>Cadastrar Cliente</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informações do Cliente</h2>
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
                        <br/>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="nome" name="nome"  class="form-control col-md-7 col-xs-12" placeholder="Insira o nome do técnico...">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Logradouro
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="logradouro" name="logradouro" class="date-picker form-control col-md-7 col-xs-12" type="text" placeholder="Endereço completo...">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">CPF
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="cpf" name="cpf"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999.999.999-99'" placeholder="Campo Obrigatório">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">CREA
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="crea" name="crea"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999999999-9'" placeholder="Campo Obrigatório">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">Cidade
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <select name="cidade" class="form-control" id="cidade" placeholder="Campo Obrigatório">
                                <option></option>
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
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Bairro
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select id="bairro" name="bairro" class="form-control" placeholder="Campo Obrigatório">
                              <option></option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">Tel 1
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="fone1" name="fone1" class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'" placeholder="Campo Obrigatório">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Tel 2
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="fone2" name="fone2"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc">Email 1
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="email" id="email1" name="email1" class="form-control col-md-7 col-xs-12" placeholder="Campo Obrigatório">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Email 2
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="email" id="email2" name="email2" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12"> Login de acesso
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <input name="login" type="text" id="login" class="form-control col-md-7 col-xs-12">
                         </div>
                         <label class="control-label col-md-1 col-sm-1 col-xs-12">senha 
                        </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class="input-group">
                            <input type="text" class="form-control" value="" name="txt_serial" id="txt_serial">
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary" id="botao_serial">Gerar</button>
                            </span>
                          </div>
                         </div>
                       </div>

                        <br/>
                        <div class="x_panel">
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-7">
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

function geraSerial() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 8; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}
$(function(){
  $('#botao_serial').click(function(){
      $('#txt_serial').val(geraSerial());
  });
});
</script>

  </body>
</html>
