<?php
session_start();
require 'Config/Config.php';
  if(strstr($_SESSION['setor'],'Projeto') !== false){

  }else{
    header("Location: login.php");
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
          require_once("Menu/PJ_Menu.php");
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
                <h3>Reportar Erro</h3>
              </div>
            </div>

            <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Informações pessoais</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="descricao">Nome
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" id="descricao" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div><label class="control-label col-md-2 col-sm-2 col-xs-12" for="descricao">Sobrenome
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" id="descricao" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Setor
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control">
                              <option>Selecione a opção...</option>
                              <option>Comercial</option>
                              <option>Projetos</option>
                              <option>Viabilidade técnica</option>
                              <option>Visitante</option>
                            </select>
                          </div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="descricao">Email
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" id="descricao" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Motivo</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-md-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_content">
                              <br />
                              <form class="form-horizontal form-label-left input_mask">

                              <p>
                                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="#" required class="flat" style="margin-left: 25%;"/> Reportar algum erro/bug

                                <br />

                                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="#" required class="flat" style="margin-left: 25%;"/> Aprersentar sugestão de melhoria
                                <br />

                                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="#" required class="flat" style="margin-left: 25%;"/> Acrescentar alguma informação
                                <br />

                                </p>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_content">
                              <br />
                              <form class="form-horizontal form-label-left input_mask">

                              <p>
                                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="#" required class="flat" style="margin-left: 25%;"/> Apresentar sugestão de modificação

                                <br />

                                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="#" required class="flat" style="margin-left: 25%;"/> Auxiliar na produção do software
                                <br />

                                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="#" required class="flat" style="margin-left: 25%;"/> Outro (Especificar na mensagem)
                                <br />

                                </p>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="x_panel">
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Descreva a sua mensagem</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <div id="alerts"></div>
                          <div id="editor-one" class="editor-wrapper"></div>
                          <textarea name="descr" id="descr" style="display:none;"></textarea> 
                          <br />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                      <button type="button" class="btn btn-primary">Cancelar</button>
                      <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                  </div>
                  <br />
                  <div class="ln_solid"></div>
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
    <script src="js/FullScreen.js"></script>    <!-- Custom Theme Scripts -->
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
  </body>
</html>
