<?php
session_start();
require 'Config/Config.php';
  if(strstr($_SESSION['setor'],'Planejamento') !== false){

  }else{
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Departamento de Projetos</title>

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
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-pie-chart"></i> <span>Eletrobras</span></a>
            </div>

            <div class="clearfix"></div>

                        <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/Eletrobras.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Usuário</span>
                <h2><?php echo $_SESSION['usuario'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->

            <?php
              require_once("Menu/Menu_P.php");
            ?>
            
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <?php
              require_once("Menu/Menu_inf_PL.php");
            ?>

            <!-- /menu footer buttons -->
          </div>
        </div>

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
                <h3>Upload de Arquivos Digitalizados</h3>
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
                    <h2>Área de Upload</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p>Arraste vários arquivos para a caixa abaixo para o upload múltiplo ou clique para selecionar arquivos.</p>
                    <form action="transfer.php" class="dropzone" method="POST" enctype="multipart/form-data"></form>
                    <br />
                    <br />

                    <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                      <form method="POST">
                      <button type="button" class="btn btn-primary">Cancelar</button>
                      <button type="submit" class="btn btn-success">Enviar</button>
                      </form>
                    </div>
                    </div>
                    <br />
                    <div class="ln_solid"></div>
                  </div>
                </div>                  
              </div>
            </div>
          </div>
        </div>


          

        <!-- /page content -->

       <!-- footer content -->
        <footer>
          <div class="pull-right">
              Arthur Mendes - Programa de Cadastro de Projetos - <a href="http://eletrobrasalagoas.com/">Eletrobras distribuição Alagoas</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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
  </body>
</html>