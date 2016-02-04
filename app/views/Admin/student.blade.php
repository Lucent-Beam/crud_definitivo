@extends('layout.default')
@section('content')

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->

            <li class="dropdown user user-menu">

              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Layout Options</span>
              <span class="label label-primary pull-right">4</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
              <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
              <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
              <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
            </ul>
          </li>
          <li>
            <a href="../widgets.html">
              <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Charts</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
              <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
              <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
              <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
            </ul>
          </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Register
          <small>For new users</small>
        </h1>

      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Insert</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <div class='row'>
  <h2 class='subheader'>Formulario de registro con ajax en laravel 4</h2>
         <div class='small-12 columns'>
            <!--pintamos el formulario haciendo uso de la clase form de laravel-->
            <div class='form'>

                  {{ Form::open(array('url' => '/', 'class' => 'register_ajax')) }}

                  {{ Form::label('email', 'Email') }}

                  {{ Form::email('email', Input::old('email')) }}

                  {{ Form::label('username', 'Nick') }}

                  {{ Form::text('username', Input::old('username')) }}

                  {{ Form::label('password', 'Password') }}

                  {{ Form::password('password') }}

          {{ Form::label('password_confirmation', 'Confirm password') }}

                  {{ Form::password('password_confirmation') }}

                  <br />
                  {{ Form::submit('Regístrarme', array('class' => 'button expand round')) }}

                  {{ Form::close() }}
              </div>
              <!--en este div mostramos el preloader-->
              <div style='margin: 10px 0px 0px 300px' class='before'></div>
              <!--en este los errores del formulario-->
              <div class='errors_form'></div>
              <!--en este el mensaje de registro correcto-->
              <div style='display: none' class='success_message alert-box success'></div>


<!--              <form role="form" class="register_ajax" action="/" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nick</label>
                    <input type="text" class="form-control" id="nick" placeholder="Enter Nick">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                  </div>
                -->
                </div><!-- /.box-body -->

                <div class="box-footer">
                <!--  <button type="submit" class="btn btn-primary button">Submit</button>-->
                </div>
              </form>
            </div><!-- /.box -->
          </div><!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div><!--/.col (right) -->
        </div>   <!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.0
      </div>
      <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->

      <!-- Tab panes -->
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.4 -->
<!--  <script src="./../plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
  <!-- Bootstrap 3.3.5 -->
  <script src="js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="js/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="js/demo.js"></script>




 @stop
