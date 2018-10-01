<?php
session_start();
require 'Config/Config.php';

  if(strstr($_SESSION['setor'],'Cliente') !== false){

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
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
                <h3>Demanda de Geração Distribuída</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projetos</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a href='PJ_Editar_Projetos.php?key=$key'></a>
                    <table id="Tabela" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>

                          <th></th>
                          <th></th>
                          <th>Protocolo</th>
                          <th>Nome (Empreendimento)</th>
                          <th>Status</th>
                          <th>Prazo de Análise</th>
                          <th>Prazo de Fiscalização</th>
                          <th>Última Alteração</th>
                          <th>Técnico</th>
                          <th>Cidade</th>
                          <th>kWpico</th>
                          <th>Data de Entrada</th>
                          <th>UC</th>
                          <th>Atribuído</th>
                          <th>Observação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          
                              $usuario = $_SESSION['usuario'];

                          $sql = $pdo->prepare("SELECT * FROM geracao_distribuida WHERE login = '$usuario' ");
                          $sql->execute();
                          
                          if($sql->rowCount() > 0) {
                            foreach ($sql->fetchAll() as $value) {

                              $protocolo = $value['protocolo'];
                              $nome = $value['nome'];
                              $status = $value['status'];
                              $prazo_analise = $value['prazo_analise'];
                              $prazo_fiscalizacao = $value['prazo_fiscalizacao'];
                              $ultima_alteracao = $value['ultima_alteracao'];
                              $tecnico = $value['tecnico'];
                              $cidade = $value['cidade'];
                              $kwpico = $value['kwpico'];
                              $data_entrada = $value['data_entrada'];
                              $uc = $value['uc'];
                              $atribuido = $value['atribuido'];
                              $observacao = $value['observacao'];

                              echo "<tr>";

                                  echo "<td><a href='CL_Chat.php?de=$usuario&para=$protocolo'><span class='fa fa-comments-o' ></span></a></td>";
                                  echo "<td><a href='Config/geracao_distribuida/updateValidacao.php?processo=$protocolo'><span class='fa fa-cloud-upload' ></span></a></td>";
                                  echo "<td>$protocolo</td>";
                                  echo "<td>$nome</td>";
                                  echo "<td>$status</td>";
                                  echo "<td>$prazo_analise</td>";
                                  echo "<td>$prazo_fiscalizacao</td>";
                                  echo "<td>$ultima_alteracao</td>";
                                  echo "<td>$tecnico</td>";
                                  echo "<td>$cidade</td>";
                                  echo "<td>$kwpico</td>";
                                  echo "<td>$data_entrada</td>";
                                  echo "<td>$uc</td>";
                                  echo "<td>$atribuido</td>";
                                  echo "<td>$observacao</td>";
                                  
                                echo "</tr>";

                            }
                          }
                        ?>
                      </tbody>
                    </table>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- FullScreen -->
    <script src="js/FullScreen.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>

      <script>

        $(document).ready(function() {

            $('#Tabela').DataTable( {
                select: {
                    items: 'row',
                    style: 'api'
                },
                "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"] ],
                "pageLength": 5,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ projetos por página",
                    "zeroRecords": "Nenhum projeto encontrado - desculpe",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum dado encontrado",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search":         "Pesquisar:",
                    "paginate": {
                        "first":      "Primeira",
                        "last":       "Última",
                        "next":       "Próxima",
                        "previous":   "Anterior"
                    },
                    "loadingRecords": "Carregando...",
                    "processing":     "Processando..."

                }

                

            } );
        } );

    </script>

</html>

