<?php
session_start();
require 'Config/Config.php';
require 'Config/conexao.php';


  if(strstr($_SESSION['setor'],'Projeto') !== false){

    $processo = filter_input(INPUT_GET, 'processo', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['processo'] = $processo;
    $querySelect = $link->query("SELECT * FROM projetos WHERE processo LIKE '%$processo'");

    while($registros = $querySelect->fetch_assoc()):
      $viabilidade_tecnica = $registros['viabilidade_tecnica'];
      $ordem = $registros['ordem'];
      $descricao = $registros['descricao'];
      $interessado = $registros['interessado'];
      $tecnico = $registros['tecnico'];
      $uc = $registros['uc'];
      $cpf = $registros['cpf'];
      $cidade = $registros['cidade'];
      $bairro = $registros['bairro'];
      $coordenada_x = $registros['coordenada_x'];
      $coordenada_y = $registros['coordenada_y'];
      $data_prevista = $registros['data_prevista'];
      $data_entrada = $registros['data_entrada'];
      $demanda_prevista = $registros['demanda_prevista'];
      $potencia_instalada = $registros['potencia_instalada'];
      $ultima_alteracao = $registros['ultima_alteracao'];
      $status = $registros['status'];
      $pasta = $registros['pasta'];
      $atribuido = $registros['atribuido'];
      $observacao = $registros['observacao'];

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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


        <!-- menu profile quick info -->
        <?php
          require_once("Menu/Menu_usuario.php");
        ?>
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>Geral</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Menu.php">Programações e Atividades</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-search"></i> Pesquisa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Pesquisa.php">Pesquisa Simples</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-group (alias)"></i> Técnicos <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

                  <li><a href="PJ_Pesquisar_Tecnicos.php">Pesquisar Técnicos</a></li>
                  <li><a href="PJ_Cadastrar_Tecnicos.php">Cadastrar Técnico</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-file-text-o"></i>  Projetos <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="PJ_Cadastrar_Projetos.php">Cadastrar Projetos</a></li>
                  <li><a href="PJ_Alterar_Projetos.php">Editar Projetos</a></li>
                  <li><a href="PJ_Modificacao_Projetos.php">Modificação de Projetos</a></li>
                  <li><a href="PJ_Cadastrar_Historico.php">Cadastrar Histórico</a></li>
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
                <h3>Editar Projetos</h3>
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
                    <h2>Dados do Projeto <small>Classe do projeto</small></h2>
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



                    <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="Config/update_projetos2.php">

                      <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="processo">Nº do Processo
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" name="processo" id="processo" class="form-control col-md-7 col-xs-12" value="<?php echo $processo ?>">
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
                            <input type="text" id="descricao" value="<?php echo $descricao ?>" name="descricao" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tecnico" class="control-label col-md-2 col-sm-2s col-xs-12">Técnico</label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <select name="tecnico" class="form-control" id="tecnico" placeholder="Campo Obrigatório">
                              <option><?php echo $tecnico ?></option>
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
                            <input id="interessado" name="interessado" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $interessado ?>" >
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Cadastro Único
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" name="uc" id="uc" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999'" value="<?php echo $uc ?>" >
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="uc">CPF/CNPJ
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" name="cpf" id="cpf" class="form-control col-md-7 col-xs-12" value="<?php echo $cpf ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Cidade
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="cidade" class="form-control" id="cidade">
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
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Bairro
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="bairro" class="form-control" id="bairro">
                              <option><?php echo $bairro ?></option>
                            </select>
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Coordenada X
                        </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <input name="coordenada_x" type="text" id="coordenada_x" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999,99'" value="<?php echo $coordenada_x ?>">
                         </div>
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc">Coordenada Y
                         </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <input name="coordenada_y" type="text" id="coordenada_y" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999,99'" value="<?php echo $coordenada_y ?>">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">Data de Entrada
                         </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class='input-group date' id='myDatepicker1'>
                             <input name="data_entrada" id="data_entrada" type='text' class="form-control" value="<?php echo $data_entrada ?>">
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>

                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="uc2">Data Prevista
                         </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class='input-group date' id='myDatepicker2'>
                             <input name="data_prevista" id="data_prevista" type='text' class="form-control" value="<?php echo $data_prevista ?>">
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>
                       </div>

                        <br/>
                        <h2>Status do Projeto <small>Situação atual do Projeto</small></h2>
                        <div class="ln_solid"></div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Demanda</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input name="demanda_prevista" id="demanda_prevista" type="text" class="form-control" value="<?php echo $demanda_prevista ?>">
                          </div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Potência Instalada</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input name="potencia_instalada" id="potencia_instalada" type="text" class="form-control" value="<?php echo $potencia_instalada ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Status</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <select name="status" id="status" class="form-control">
                              <option><?php echo $status ?></option>
                                <?php
                                  $selectOrdem= $pdo->prepare("SELECT * FROM status ORDER BY nome ASC");
                                  $selectOrdem->execute();
                                  $fetchAll = $selectOrdem->fetchAll();
                                  foreach($fetchAll as $statusLista)
                                    {
                                      echo '<option value="'.$statusLista['nome'].'">'.$statusLista['nome'].'</option>';
                                    }
                                ?>
                            </select>
                          </div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Última Alteração</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class='input-group date' id='myDatepicker3'>
                             <input name="ultima_alteracao" id="ultima_alteracao" type='text' class="form-control" value="<?php echo date('d/m/Y');?>"">
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                          </div>
                        </div>
                      </div>

                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Pasta</label>
                          <div class="col-md-1 col-sm-1 col-xs-12">
                            <input name="pasta" id="pasta" type="text" class="form-control" value="<?php echo $pasta ?>">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Atribuido</label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input name="atribuido" id="atribuido" type="text" class="form-control" value="<?php echo $_SESSION['usuario'] ?>">
                          </div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-12">Viabilidade</label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input name="viabilidade_tecnica" id="viabilidade_tecnica" type="text" class="form-control" value="<?php echo $viabilidade_tecnica ?>">
                          </div> 
                        </div>

                        <br/>
                        <h2>Observações <small>Sobre o projeto</small></h2>
                        <div class="ln_solid"></div>

                        <div class="x_content">
                        <textarea id="observacao" class="form-control" name="observacao" rows="5" cols="5" data-parsley-trigger="keyup" data-parsley-validation-threshold="10" ><?php echo $observacao ?></textarea> 
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
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>
    <!-- FullScreen -->
    <script src="js/FullScreen.js"></script>
    
    <!-- Initialize datetimepicker -->
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