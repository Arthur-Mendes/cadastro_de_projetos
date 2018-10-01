<?php
session_start();
require 'Config/Config.php';
require 'Config/conexao.php';

  $id_de = $_SESSION['usuario'];
  $protocolo = $_GET['para']; 
  $id_para = $protocolo;

  if(strstr($_SESSION['setor'],'Comercial') !== false){

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
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Custom Theme Style Chat -->
    <link rel="stylesheet" type="text/css" href="css/chat.css">

    <!-- Chat Script -->
    <script src="js/Chat.js"></script>

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
                <li><a><i class="fa fa-file-text-o"></i>  Cadastro <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="C_Menu.php">Cadastrar Projeto</a></li>
                        <li><a href="C_Cadastrar_Viabilidade.php">Cadastrar Viabilidade</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-table"></i>Demanda <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="C_Demanda_PJ.php">Demanda Projetos</a></li>
                        <li><a href="C_Demanda_VT.php">Demanda Viabilidades</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Relatório <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="C_Balanco_Geral.php">Gestão de Relatórios</a></li>
                      <li><a href="C_Historico.php">Histórico</a></li>
                    </ul>
                  </li>
            </ul>
            <h3>Geração Distribuida</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-file-text-o"></i>  Cadastro <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="C_Cadastrar_Clientes.php">Cadastrar Cliente</a></li>
                        <li><a href="C_Demanda_GD.php">Demanda de Clientes</a></li>
                        <li><a href="C_Chat.php">Chat</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-group (alias)"></i>  Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="C_Lista_Clientes.php">Lista de Clientes</a></li>
                    </ul>
                </li>
            </ul>
            <h3>Contatos</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-comments-o"></i>Reportar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="C_Contato.php">Reportar Erro</a></li>
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
                <h3>Chat</h3>
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
                  <div class="row" style="background-color: #AAA">
                    <div class="col-md-6 col-md-offset-3" style="background-color: #AAA">
                      <div id="content">
                        <div id="lista">
                        </div>
                        <hr/>
                          <?php
                            include("Menu/Chat.php");
                          ?>
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
    <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>
    <!-- FullScreen -->
    <script src="js/FullScreen.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

<script>
  
$(document).ready(function(){
    comeca();
})

    var timerI = null;
    var timerR = false;

    function para(){
      if (timerR)
        clearTimeout(timeI);
        timerR = false;
    }

    function comeca(){
      para();
      lista();
    }

    function lista(){
      $.ajax({
          url:"Menu/Lista.php",
          success: function(textStatus){
            $("#lista").html(textStatus);
          }
        })
      timerI = setTimeout("lista()", 3000);
      timerR = true;
    }

</script>

  </body>
</html>