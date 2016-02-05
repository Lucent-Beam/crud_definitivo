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
            <p>Luis Charres</p>
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
            <a href="/">
              <i class="fa fa-dashboard"></i> <span>New User</span> <i class="fa fa-angle-left pull-right"></i>
            </a>

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
                    <h3 class="box-title">Insert Data</h3>
                  </div><!-- /.box-header -->
                  <!-- form start -->

                  <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="studentname" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <!--<input type="text" class="form-control" id="gender" placeholder="Gender"> -->
                    <select class="form-control" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone1">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                  </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary saverecord">Save Record</button>
                  <!--<button type="submit" class="btn btn-primary updaterecord">Update Record</button> -->

                </div>
              </form>
              <input type="hidden" id="id">

                </div><!-- /.box -->

                <!-- Form Element sizes -->



              </div><!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Students</h3>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                  <div class="box-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="load_ajax">

              </tbody>
              <tfoot>

              </tfoot>
            </table>
          </div><!-- /.box-body -->


                </div><!-- /.box -->
                <!-- general form elements disabled -->
              </div><!--/.col (right) -->
            </div>   <!-- /.row -->
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Actualizar Record</h4>
                  </div>
                  <div class="modal-body">
                <input type="hidden" id="id_m">

              <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="studentname_m" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gender</label>
                      <!--<input type="text" class="form-control" id="gender" placeholder="Gender"> -->
                      <select class="form-control" id="gender_m">
                          <option>Male</option>
                          <option>Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPhone1">Phone</label>
                      <input type="text" class="form-control" id="phone_m" placeholder="Phone">
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  <!--  <button type="submit" class="btn btn-primary updaterecord">Update Record</button> -->

                  </div>
                </form>
              <label for="" class="alert">Registro acutalizado</label>

              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary updaterecord">Grabar cambios</button>
                  </div>
                </div>
              </div>
            </div>


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
  <script type="text/javascript" src="js/jquery.js"> </script>

  <script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
      $('.btn-default').focus()
})
  </script>


  <script type="text/javascript">
  $(function(){

          displaydata();

          $('body').delegate('.edit', 'click', function(){
            $(".alert").hide();
            var id=  $(this).data('id');
              $.ajax({
                  url : "<?= URL::to('editrow') ?>",
                  type : "POST",
                  async : false,
                  data: {
                      'id' : id
                  },
                  success : function(e){
                      $('#id_m').val(e.id);
                      $('#studentname_m').val(e.student_name);
                      $('#gender_m').val(e.gender);
                      $('#phone_m').val(e.phone);
                        }


              });

          });



          $('body').delegate('.delete', 'click', function(){
            var id=  $(this).data('id');
              $.ajax({
                  url : "<?= URL::to('deleterow') ?>",
                  type : "POST",
                  async : false,
                  data: {
                      'id' : id
                  },
                  success : function(d){

                        if (d==0)
                        {
                          alert('delete success');
                          displaydata();
                        }
                        else {
                          alert('error');
                        }

                        }


              });

          });

          $('.updaterecord').click(function(){
              var id          =$('#id_m').val();
              var studentname = $('#studentname_m').val();
              var gender = $('#gender_m').val();
              var phone = $('#phone_m').val();

              $.ajax({
                  url : "<?= URL::to('update'); ?>",
                  type : "POST",
                  async : false,
                  data : {
                      'id'        : id,
                      'studentname' : studentname,
                      'gender': gender,
                      'phone' : phone,
                 },

                  success: function(re){
                      if ( re == 0){
                        $(".alert").show();
                        displaydata();
                         $('#myModal').modal('hide');


                      }
                      else {
                        alert('Error al actualizar registro');
                      }

                  }

              });

          });

          $('.saverecord').click(function(){
              var studentname = $('#studentname').val();
              var gender = $('#gender').val();
              var phone = $('#phone').val();

              $.ajax({
                  url : "<?= URL::to('save'); ?>",
                  type : "POST",
                  async : false,
                  data : {
                      'studentname' : studentname,
                      'gender': gender,
                      'phone' : phone,
                 },

                  success: function(re){
                      if ( re == 0){
                        alert('Registro insertado');
                        displaydata();

                      }
                      else {
                        alert('Error al insertar registro');
                      }

                  }

              });

          });


      });



  </script>

  <script type="text/javascript">
  function displaydata(){

    $.ajax({
     type: 'POST',
     url:  "<?= URL::to('showdata'); ?>",

     success: function (data) {
       //$('.preload_users').html('');
       $('.load_ajax').html(students)
       var students = '';
         for(datos in data.students){
             students += '<tr><td>'+ data.students[datos].id + '</td>';
             students += '<td>' + data.students[datos].student_name + '</td>';
             students += '<td>' + data.students[datos].gender + '</td>';
             students += '<td>' + data.students[datos].phone + '</td>';
             students += '<td><a data-id='+data.students[datos].id+' href="#" class="edit" data-toggle="modal" data-target="#myModal">Edit</a> | <a data-id='+data.students[datos].id+' href="#" class="delete">Delete</a></td></tr>';

         }
         $('.load_ajax').html(students)
        }
   });

  }

  </script>

 @stop
