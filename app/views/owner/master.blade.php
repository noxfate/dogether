<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DoGether - Owner Back End - SKTNB</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::to('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ URL::to('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style-responsive.css')}}" rel="stylesheet">

    <!-- cdn for modernizr, if you haven't included it already -->
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
    <!-- polyfiller file to detect and load polyfills -->
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
    <script>
      webshims.setOptions('waitReady', false);
      webshims.setOptions('forms-ext', {types: 'date'});
      webshims.polyfill('forms forms-ext');
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/owner" class="logo"><b>OWNER DASHBOARD</b></a>
            <!--logo end-->
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/logout">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="/owner"><img src="{{ URL::to('assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
                  <h5 class="centered"></h5>
                    
                  <li class="mt">
                      <a href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <!-- <a href="javascript:;" > -->
                      <a href="/owner/create">
                          <i class="fa fa-desktop"></i>
                          <span>Promotion</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="/owner" >
                          <i class="fa fa-cogs"></i>
                          <span>Edit Profile</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="/changepwd" >
                          <i class="glyphicon glyphicon-lock"></i>
                          <span>Change Password</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">

            @yield('content')
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Software Engineering IT KMITL SKTNB
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::to('assets/js/jquery.js')}}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::to('assets/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <script src="{{ URL::to('assets/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ URL::to('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{ URL::to('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ URL::to('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="{{ URL::to('assets/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
