</head> 
  <body class="nav-md" onLoad="liberar();"">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-pie-chart"></i> <span>Eletrobras</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/Eletrobras.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Usuário</span>
                <h2><?php echo $_SESSION['usuario'] ?></h2>
              </div>
            </div>
            <br />