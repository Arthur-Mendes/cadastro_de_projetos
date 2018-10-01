<?php
session_start();
require 'Config/conexao.php';
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
                <h3>Demanda de Projetos</h3>
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
                    <table id="Tabela" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nº da VT</th>
                          <th>Processo</th>
                          <th>Ordem</th>
                          <th>Nome (Empreendimento)</th>
                          <th>Responsável Técnico</th>
                          <th>Interresado</th>
                          <th>Código Único</th>
                          <th>CPF/CNPJ</th>
                          <th>Cidade</th>
                          <th>Bairro</th>
                          <th>Coordenada X</th>
                          <th>Coordenada Y</th>
                          <th>Data de Entrada</th>
                          <th>Data Prevista</th>
                          <th>Potência</th>
                          <th>Demanda</th>
                          <th>Última Alteração</th>
                          <th>Status</th>
                          <th>Pasta</th>
                          <th>Atribuido</th>
                          <th>Observação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          
                          $querySelect = $link->query("SELECT * FROM projetos");
                          while($value = $querySelect->fetch_assoc()):
                              
                              $viabilidade_tecnica = $value['viabilidade_tecnica'];
                              $processo = $value['processo'];
                              $ordem = $value['ordem'];
                              $descricao = $value['descricao'];
                              $tecnico = $value['tecnico'];
                              $interessado = $value['interessado'];
                              $uc = $value['uc'];
                              $cpf = $value['cpf'];
                              $cidade = $value['cidade'];
                              $bairro = $value['bairro'];
                              $coordenada_x = $value['coordenada_x'];
                              $coordenada_y = $value['coordenada_y'];
                              $data_prevista = $value['data_prevista'];
                              $data_entrada = $value['data_entrada'];
                              $demanda_prevista = $value['demanda_prevista'];
                              $potencia_instalada = $value['potencia_instalada'];
                              $ultima_alteracao = $value['ultima_alteracao'];
                              $status = $value['status'];                              
                              $pasta = $value['pasta'];
                              $atribuido = $value['atribuido'];
                              $observacao = $value['observacao'];

                                  echo "<tr>";
                                  echo "<td>$viabilidade_tecnica</td><td>$processo</td><td>$ordem</td><td>$descricao</td><td>$tecnico</td><td>$interessado</td><td>$uc</td><td>$cpf</td><td>$cidade</td><td>$bairro</td><td>$coordenada_x</td><td>$coordenada_y</td><td>$data_prevista</td><td>$data_entrada</td><td>$demanda_prevista</td><td>$potencia_instalada</td><td>$ultima_alteracao</td><td>$status</td><td>$pasta</td><td>$atribuido</td><td>$observacao</td>";
                                echo "</tr>";
                          endwhile;
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nº da VT</th>
                          <th>Processo</th>
                          <th>Ordem</th>
                          <th>Nome (Empreendimento)</th>
                          <th>Responsável Técnico</th>
                          <th>Interresado</th>
                          <th>Código Único</th>
                          <th>CPF/CNPJ</th>
                          <th>Cidade</th>
                          <th>Bairro</th>
                          <th>Coordenada X</th>
                          <th>Coordenada Y</th>
                          <th>Data de Entrada</th>
                          <th>Data Prevista</th>
                          <th>Potência</th>
                          <th>Demanda</th>
                          <th>Última Alteração</th>
                          <th>Status</th>
                          <th>Pasta</th>
                          <th>Atribuido</th>
                          <th>Observação</th>
                        </tr>
                      </tfoot>
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
    <script src="../vendors/datatables.net/js/jquery.dataTables.js"></script>
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
    <script>

        $(document).ready(function() {
            var table = $('#Tabela').DataTable();
         
            $('#Tabela tbody').on( 'click', 'tr', function () {
                $(this).toggleClass('selected');
            } );
         
            $('#button').click( function () {
                alert( table.rows('.selected').data().length +' row(s) selected' );
            } );
        } );

  </script>
  <script>

    $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#Tabela tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" />' );
    } );
 
    // DataTable
    var table = $('#Tabela').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
            } );
        } );
    } );

  </script>

</html>