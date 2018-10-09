<?php
session_start();
require 'Config/Config.php';


  if(strstr($_SESSION['setor'],'Comercial') !== false){

  }else{
    header("Location: login.php");
  }

  if(isset($_POST['nome'])) {
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $data_nascimento =  filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
  $logradouro =  filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS);
  $sexo =  filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
  $cidade =  filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
  $bairro =  filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
  $cep =  filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
  $cpf =  filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
  $rg =  filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
  $crea =  filter_input(INPUT_POST, 'crea', FILTER_SANITIZE_NUMBER_INT);
  $formacao =  filter_input(INPUT_POST, 'formacao', FILTER_SANITIZE_SPECIAL_CHARS);
  $telefone =  filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
  $celular =  filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);
  $empresa =  filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS);
  $cnpj =  filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);
  $visto =  filter_input(INPUT_POST, 'visto', FILTER_SANITIZE_SPECIAL_CHARS);
  $email_pessoal =  filter_input(INPUT_POST, 'email_pessoal', FILTER_SANITIZE_EMAIL);
  $email_empresa =  filter_input(INPUT_POST, 'email_empresa', FILTER_SANITIZE_EMAIL);
  $login =  filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
  $senha =  md5($_POST ['txt_serial']);    
  $anuidade =  filter_input(INPUT_POST, 'anuidade', FILTER_SANITIZE_SPECIAL_CHARS);  
  $atribuido =  filter_input(INPUT_POST, 'atribuido', FILTER_SANITIZE_SPECIAL_CHARS);  
  $ultima_alteracao =  filter_input(INPUT_POST, 'ultima_alteracao', FILTER_SANITIZE_SPECIAL_CHARS);  


  $sql = $pdo->prepare("INSERT INTO clientes (nome, data_nascimento, logradouro, sexo, cidade, bairro, cep, cpf, rg, cre, formacao, telefone, celular, empresa, cnpj, visto, email_pessoal, email_empresa, login, anuidade, atribuido, ultima_alteracao) VALUES (:nome, :data_nascimento, :logradouro, :sexo, :cidade, :bairro, :cep, :cpf, :rg, :cre, :formacao, :telefone, :celular, :empresa, :cnpj, :visto, :email_pessoal, :email_empresa, :login, :anuidade, :atribuido, :ultima_alteracao)");


  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":data_nascimento", $data_nascimento);  
  $sql->bindValue(":logradouro", $logradouro);
  $sql->bindValue(":sexo", $sexo);
  $sql->bindValue(":cidade", $cidade);
  $sql->bindValue(":bairro", $bairro);
  $sql->bindValue(":cep", $cep);
  $sql->bindValue(":cpf", $cpf);
  $sql->bindValue(":rg", $rg);  
  $sql->bindValue(":crea", $crea);
  $sql->bindValue(":formacao", $formacao);
  $sql->bindValue(":telefone", $telefone);
  $sql->bindValue(":celular", $celular);
  $sql->bindValue(":empresa", $empresa); 
  $sql->bindValue(":cnpj", $cnpj);
  $sql->bindValue(":visto", $visto);  
  $sql->bindValue(":email_pessoal", $email_pessoal);
  $sql->bindValue(":email_empresa", $email_empresa);
  $sql->bindValue(":login", $login);
  $sql->bindValue(":senha", $senha);
  $sql->bindValue(":anuidade", $anuidade);
  $sql->bindValue(":atribuido", $atribuido);
  $sql->bindValue(":ultima_alteracao", $ultima_alteracao);
  $sql->execute();


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
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">


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
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Nome
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" id="nome" name="nome"  class="form-control col-md-7 col-xs-12" placeholder="Insira o nome do técnico...">
                            <input type="hidden" id="atribuido" name="atribuido" value="<?php echo $_SESSION['usuario'] ?>">
                          </div>
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">Data de nascimento
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <div class='input-group date' id='myDatepicker1'>
                             <input name="data_nascimento" id="data_nascimento" value="<?php echo date('d/m/Y');?>"  type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                             <div class='input-group date' id='myDatepicker2'>
                             <input name="ultima_alteracao" id="ultima_alteracao" value="<?php echo date('d/m/Y');?>"  type='hidden' />
                           </div>
                           </div>
                         </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Logradouro
                          </label>
                          <div class="col-md-5 col-sm-5 col-xs-12">
                            <input id="logradouro" name="logradouro" class="date-picker form-control col-md-7 col-xs-12" type="text" placeholder="Endereço completo...">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="nome">Sexo
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <select name="sexo" class="form-control" id="sexo">
                              <option>Selecione uma opção...</option>
                              <option>Feminino</option>
                              <option>Masculino</option>
                              <option>Outro</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Cidade
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
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <select id="bairro" name="bairro" class="form-control" placeholder="Campo Obrigatório">
                              <option></option>
                            </select>
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">CEP
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input id="cep" name="cep" class="date-picker form-control col-md-7 col-xs-12" type="text" placeholder="Endereço completo...">
                          </div>

                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">CPF
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="cpf" name="cpf"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999.999.999-99'" placeholder="Campo Obrigatório">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">RG
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="rg" name="rg"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999-9'" placeholder="Campo Obrigatório">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">CREA Nº
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="email" id="crea" name="crea" class="form-control col-md-7 col-xs-12" placeholder="Campo Obrigatório">
                          </div>

                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Formação Profissional
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <select name="formacao" class="form-control" id="formacao">
                              <option>Selecione uma opção...</option>
                              <option>Engenheiro Eletricista</option>
                              <option>Eletrotécnico</option>
                            </select>
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Telefone 
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="telefone" name="telefone"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Celular 
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="celular" name="celular"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '(99) 99999-9999'">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Empresa
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="empresa" name="empresa" class="form-control col-md-7 col-xs-12">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">CNPJ
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="cnpj" name="cnpj" class="form-control col-md-7 col-xs-12">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">Visto
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="visto" name="visto" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Email Pessoal
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="email" id="email_pessoal" name="email_pessoal" class="form-control col-md-7 col-xs-12">
                          </div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Email Empresa
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="email" id="email_empresa" name="email_empresa" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                       <div class="ln_solid"></div>                                
                       <h2>Dados de acesso</h2>
                       <div class="ln_solid"></div>

                       <div class="form-group">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12"> Login de acesso
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <input name="login" type="text" id="login" class="form-control col-md-7 col-xs-12">
                         </div>
                         <label class="control-label col-md-1 col-sm-1 col-xs-12">Senha 
                        </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <div class="input-group">
                            <input type="text" class="form-control" value="" name="txt_serial" id="txt_serial">
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary" id="botao_serial">Gerar</button>
                            </span>
                          </div>
                         </div>
                         <label class="control-label col-md-1 col-sm-1 col-xs-12">Anuidade
                         </label>
                         <div class="col-md-2 col-sm-2 col-xs-12">
                           <div class='input-group date' id='myDatepicker3'>
                             <input name="anuidade" id="anuidade" value="<?php echo date('d/m/Y');?>"  type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>
                       </div>

                        <br/>

                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-7">
                              <button type="reset" class="btn btn-primary">Limpar</button>
                              <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                          </div>
                          <br />
                          <div class="ln_solid"></div>
                        </div>
                        <br/>
                      </form>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Cópia da Carteira do CREA</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <form action="PHPUploads/up_crea.php" class="dropzone" id="dropzone">
                          <div class="fallback">
                            <input type="file" name="file" id="arquivos">
                          </div>
                        </form>
                        <script type="text/javascript">
                          var dropzone = new Dropzone("#arquivos", {
                            url: 'PHPUploads/up_crea.php'
                          })
                        </script>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Comprovante de anuidade</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <form action="PHPUploads/up_anuidade.php" class="dropzone" id="dropzone">
                          <div class="fallback">
                            <input type="file" name="file" multiple id="arquivos">
                          </div>
                        </form>
                        <script type="text/javascript">
                          var dropzone = new Dropzone("#arquivos", {
                            url: 'PHPUploads/up_anuidade.php'
                          })
                        </script>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Comprovante de Residência</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <form action="PHPUploads/up_cdr.php" class="dropzone" id="dropzone">
                          <div class="fallback">
                            <input type="file" name="file" multiple id="arquivos">
                          </div>
                        </form>
                        <script type="text/javascript">
                          var dropzone = new Dropzone("#arquivos", {
                            url: 'PHPUploads/up_cdr.php'
                          })
                        </script>
                        </div>
                      </div>
                    </div>

                    </div>
                    <br/>
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
    <!-- Dropzone.js -->
    <script src="PHPUploads/dropzone.js"></script>

<script>

    $('#myDatepicker1').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'DD.MM.YYYY'
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

  for (var i = 0; i < 6; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}
$(function(){
  $('#botao_serial').click(function(){
      $('#txt_serial').val(geraSerial());
  });
});
</script>

<script>

function teste(file) {
 return 'olá';
}
</script>

  </body>
</html>
