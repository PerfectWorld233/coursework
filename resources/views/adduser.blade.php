<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Grodata Solutions</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @extends('header')
  <div class="content-wrapper">
        <form action="<?php echo url('/'); ?>/add_user" method="post">
            <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3" >
                <div class="card-header">
                <i class="fa fa-user"></i> Admin - User
                </div>
            
                <div class="card-body">
                    <div class="table-responsive">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <label></br>Email/Uname</label>
                                </div>
                                <div class="col-md-6">
                                    </br><input name="email" class="form-control" id="InputName" type="text" aria-describedby="nameHelp" >
                                        </div>
                                </div>
                            </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label></br>First Name</label>
                        </div>
                        <div class="col-md-6">
                            </br><input name="fname"  class="form-control" id="InputName" type="text" aria-describedby="nameHelp" >
                                </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2">
                        <label></br>Last Name</label>
                    </div>
                    <div class="col-md-6">
                        </br><input name="lname" class="form-control" id="InputName" type="text" aria-describedby="nameHelp" >
                            </div>
                
            </div>
                <div class="form-row">
                    <div class="col-md-2">
                        </br><label>User Level</label>
                    </div>
                    <div class="col-md-6">
                        </br>
                         <select name="userlevel" aria-controls="dataTable" class="form-control form-control-sm">
                          <option value="0">User</option>
                          <option value="1">Admin</option>
                          <option value="2">SuperAdmin</option>
                      </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2">
                        </br><label>Password</label>
                    </div>
                    <div class="col-md-6">
                        </br><input name="password" class="form-control" id="InputName" type="text" aria-describedby="nameHelp" />
                    </div>
                </div><div class="form-row">
                    <div class="col-md-2">
                        </br><label>Active</label>
                    </div>
                    <div class="col-md-6">
                            </br><input name="active" type="checkbox" id="checkbox" class="checkbox" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2">
                       <?php echo method_field('POST'); ?>
                       <?php echo csrf_field(); ?>
                        </br><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#save" />
                            Save 
                        </button>
                        </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </form>
 </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    {{--  <script src="vendor/datatables/jquery.dataTables.js"></script>  --}}
    {{--  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>  --}}
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    {{--  <script src="js/sb-admin-datatables.min.js"></script>  --}}
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    
    
    {{--  <script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            
            autoclose: true,
            };
            date_input.datepicker(options)({
            orientation:"bottom right",
            });
        })
    </script>  --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  </div>
</body>

</html>
