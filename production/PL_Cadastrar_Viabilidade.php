<?php
session_start();
require 'Config/Config.php';
require 'Config/Config2.php';
require 'Config/Config3.php';
require 'Config/Config4.php';

		if(strstr($_SESSION['setor'],'Planejamento') !== false){

		}else{
				header("Location: login.php");
		}

		if(isset($_POST['processo'])) {

		$processo = ($_POST['processo']);
		$descricao = ($_POST['descricao']);
		$tecnico = ($_POST['tecnico']);
		$interessado = ($_POST['interessado']);
		$uc = ($_POST['uc']);
		$cpf = ($_POST['cpf']);
		$cidade = ($_POST['cidade']);
		$coordenada_x = ($_POST['coordenada_x']);
		$coordenada_y = ($_POST['coordenada_y']);
		$demanda_prevista = ($_POST['demanda_prevista']);
		$potencia_instalada = ($_POST['potencia_instalada']);
		$observacao = ($_POST['observacao']);
		$data_entrada = ($_POST['data_entrada']);
		$atribuido = ($_POST['atribuido']);



		$sql = $pdo->prepare("INSERT INTO viabilidades (processo, descricao, tecnico, interessado, uc, cpf, cidade, coordenada_x, coordenada_y, demanda_prevista, potencia_instalada, observacao, status) VALUES (:processo, :descricao, :tecnico, :interessado, :uc, :cpf, :cidade, :coordenada_x, :coordenada_y, :demanda_prevista, :potencia_instalada, :observacao, 'Em Análise')");

		$sql2 = $pdo2->prepare("INSERT INTO demanda_viabilidades (processo, descricao, tecnico, interessado, uc, cpf, cidade, coordenada_x, coordenada_y, demanda_prevista, potencia_instalada, observacao, status) VALUES (:processo, :descricao, :tecnico, :interessado, :uc, :cpf, :cidade, :coordenada_x, :coordenada_y, :demanda_prevista, :potencia_instalada, :observacao, 'Em Análise')");

		$sql3 = $pdo3->prepare("INSERT INTO geral (processo, descricao, tecnico, interessado, uc, cpf, cidade, coordenada_x, coordenada_y, demanda_prevista, potencia_instalada, observacao, status) VALUES (:processo, :descricao, :tecnico, :interessado, :uc, :cpf, :cidade, :coordenada_x, :coordenada_y, :demanda_prevista, :potencia_instalada, :observacao, 'Em Análise')");	

  	$sql4 = $pdo4->prepare("INSERT INTO historico (processo, setor, atribuido, status, data) VALUES (:processo, 'Comercial', :atribuido, 'Em Análise', :data_entrada)");

		$sql->bindValue(":processo", $processo);
		$sql->bindValue(":descricao", $descricao);
		$sql->bindValue(":tecnico", $tecnico);
		$sql->bindValue(":interessado", $interessado);
		$sql->bindValue(":uc", $uc);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":coordenada_x", $coordenada_x);
		$sql->bindValue(":coordenada_y", $coordenada_y);
		$sql->bindValue(":demanda_prevista", $demanda_prevista);
		$sql->bindValue(":potencia_instalada", $potencia_instalada);
		$sql->bindValue(":observacao", $observacao);
		$sql->execute();

		$sql2->bindValue(":processo", $processo);
		$sql2->bindValue(":descricao", $descricao);
		$sql2->bindValue(":tecnico", $tecnico);
		$sql2->bindValue(":interessado", $interessado);
		$sql2->bindValue(":uc", $uc);
		$sql2->bindValue(":cpf", $cpf);
		$sql2->bindValue(":cidade", $cidade);
		$sql2->bindValue(":coordenada_x", $coordenada_x);
		$sql2->bindValue(":coordenada_y", $coordenada_y);
		$sql2->bindValue(":demanda_prevista", $demanda_prevista);
		$sql2->bindValue(":potencia_instalada", $potencia_instalada);
		$sql2->bindValue(":observacao", $observacao);
		$sql2->execute();

		$sql3->bindValue(":processo", $processo);
		$sql3->bindValue(":descricao", $descricao);
		$sql3->bindValue(":tecnico", $tecnico);
		$sql3->bindValue(":interessado", $interessado);
		$sql3->bindValue(":uc", $uc);
		$sql3->bindValue(":cpf", $cpf);
		$sql3->bindValue(":cidade", $cidade);
		$sql3->bindValue(":coordenada_x", $coordenada_x);
		$sql3->bindValue(":coordenada_y", $coordenada_y);
		$sql3->bindValue(":demanda_prevista", $demanda_prevista);
		$sql3->bindValue(":potencia_instalada", $potencia_instalada);
		$sql3->bindValue(":observacao", $observacao);
		$sql3->execute();

		$sql4->bindValue(":processo", $processo);
  		$sql4->bindValue(":data_entrada", $data_entrada);
  		$sql4->bindValue(":atribuido", $atribuido);
  		$sql4->execute();

		header("Location: PL_Cadastrar_Viabilidade.php");

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
                <h3>Cadastrar Viabilidade</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informações da Viabilidade</h2>
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
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="processo">Nº do Processo
											</label>
											<div class="col-md-3 col-sm-3 col-xs-12">
														<input type="text" id="processo" name="processo" class="form-control col-md-7 col-xs-12" value="VT-___-2018">
											</div>

											<label class="control-label col-md-1 col-sm-1 col-xs-12" for="processo">Cidade
											</label>
											<div class="col-md-3 col-sm-3 col-xs-12">
															<select name="cidade" class="form-control" id="cidade">
															<option>Selecione a cidade...</option>
															<?php
																		$select = $pdo->prepare("SELECT * FROM cidade ORDER BY nome ASC");
																		$select->execute();
																		$fetchAll = $select->fetchAll();
																		foreach($fetchAll as $cidade)
																		{
																					echo '<option value="'.$cidade['nome'].'">'.$cidade['nome'].'</option>';
																		}
															?>
															</select>
												</div>
												</div>

												<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12" for="processo">Descrição
														</label>
														<div class="col-md-7 col-sm-7 col-xs-12">
																<input type="text" id="descricao" name="descricao" class="form-control col-md-7 col-xs-12" placeholder="Campo Obrigatório">
														</div>
												</div>

												<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12" for="processo">Interessado
														</label>
														<div class="col-md-7 col-sm-7 col-xs-12">
																<input type="text" id="interessado" name="interessado" class="form-control col-md-7 col-xs-12" placeholder="Campo Obrigatório">
														</div>
												</div>

												<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12" for="processo">Técnico
														</label>
														<div class="col-md-7 col-sm-7 col-xs-12">
																<select name="tecnico" class="form-control" id="tecnico" >
																				<option>Selecione o técnico...</option>
																		<?php
																				$select = $pdo->prepare("SELECT * FROM tecnicos ORDER BY nome ASC");
																				$select->execute();
																				$fetchAll = $select->fetchAll();
																				foreach($fetchAll as $cidade)
																				{
																						echo '<option value="'.$cidade['nome'].'">'.$cidade['nome'].'</option>';
																				}
																		?>
																</select>
														</div>
												</div>

												<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12" for="processo">Potência Prevista (KVA)
														</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
																<input type="text" id="demanda_prevista" name="demanda_prevista" class="form-control col-md-7 col-xs-12">
														</div>

														<label class="control-label col-md-2 col-sm-2 col-xs-12" for="processo">Potência Atual
														</label>
														<div class="col-md-2 col-sm-2 col-xs-12">
																<input type="text" id="potencia_instalada" name="potencia_instalada" class="form-control col-md-7 col-xs-12">
							 							</div>
												</div>

												<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12" for="processo">Coord. X
														</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
																<input name="coordenada_x" type="text" id="coordenada_x" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999,99'" placeholder="_________,_">
														</div>

														<label class="control-label col-md-1 col-sm-1 col-xs-12" for="processo">Coord. Y
														</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
																<input name="coordenada_y" type="text" id="coordenada_y" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999,99'" placeholder="_________,_">
														</div>
												</div>

												<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12" for="processo">Cadastro Único
														</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
																<input type="text" id="uc" name="uc" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999'" placeholder="__________">
														</div>

														<label class="control-label col-md-1 col-sm-1 col-xs-12" for="processo">CPF/CNPJ
														</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
																<input type="text" id="cpf" name="cpf" class="form-control col-md-7 col-xs-12" placeholder="___.___.___-__" data-inputmask="'mask': '999.999.999-99'">
														</div>
												</div>

												<div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uc1">Data de Entrada
                         </label>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class='input-group date' id='myDatepicker1'>
                             <input name="data_entrada" id="data_entrada" value="<?php echo date('d/m/Y');?>"  type='text' class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                           </div>
                         </div>

                         <label class="control-label col-md-1 col-sm-1 col-xs-12" for="processo">Atribuído
														</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
																<input type="text" id="atribuido" name="atribuido" class="form-control col-md-7 col-xs-12" value="<?php echo $_SESSION['usuario'] ?>">
														</div>
                       </div>

                        <br/>
                        <h2>Observações <small>Sobre a Viabilidade</small></h2>
                        <div class="ln_solid"></div>

                        <div class="x_content">
                        <textarea id="observacao" class="form-control" name="observacao" rows="5" data-parsley-trigger="keyup" data-parsley-validation-threshold="10"></textarea> 
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

    <script>

    $('#myDatepicker1').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
		</script>
    
		</body>
</html>