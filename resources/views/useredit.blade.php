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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/index">Grodata Solutions</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="/index">
                  <i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Dashboard</span>
              </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Entry">
              <a class="nav-link " href="/dataentry" >
                  <i class="fa fa-fw fa-table"></i>
                  <span class="nav-link-text">Data Entry</span>
              </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Search">
              <a class="nav-link " href="/datasearch">
                  <i class="fa fa-fw fa-file"></i>
                  <span class="nav-link-text">Data Search</span>
              </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAdmin" >
                  <i class="fa fa-fw fa-user"></i>
                  <span class="nav-link-text">Admin</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseAdmin">
                  <li>
                      <a href="/adminuser">Users</a>
                  </li>
                  <li>
                      <a href="/dataupload">Data Upload</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseReport" >
                  <i class="fa fa-fw fa-list"></i>
                  <span class="nav-link-text">Report</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseReport">
                  <li>
                      <a href="/dailyreport">Daily Report</a>
                  </li>
                  <li>
                      <a href="/targetreport">Target Report</a>
                  </li>
              </ul>
          </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3" >
        <div class="card-header">
          <i class="fa fa-user"></i> Admin - User
        </div>
        <div class="card-body">
            <div class="table-responsive">
                
                
                
                <?php
                    if(Session::has('message')){
                        echo Session::get('message');
                    }
                ?>
                    <div class="form-row" >
                        <div class="col-md-6">
                            <label>ID</label>
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="<?php echo $user->user_id; ?>" >
                        </div>
                        </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label></br>Email/Username</label>
                        </div>
                        <div class="col-md-6">
                            </br><input class="form-control" id="InputName" type="email" value="<?php echo $user->user_email; ?>" >
                                </div>
                        </div>
                    </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label></br>First Name</label>
                </div>
                <div class="col-md-6">
                    </br><input class="form-control" id="InputName" type="fname" value="<?php echo $user->user_fname; ?>">
                        </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <label></br>Last Name</label>
            </div>
            <div class="col-md-6">
                </br><input class="form-control" id="InputName" type="lname" value="<?php echo $user->user_lname; ?>">
                    </div>
        
      </div>
        <div class="form-row">
            <div class="col-md-6">
                </br><label>User Level</label>
            </div>
            <div class="col-md-6">
                </br><input type="hidden" name="id" value="<?php echo $user->user_id; ?>" >                    </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                </br><label>Reset Password</label>
            </div>
            <div class="col-md-6">
                </br><input class="form-control" id="InputName" type="password" value="<?php echo $user->user_password; ?>" >
            </div>
        </div><div class="form-row">
            <div class="col-md-6">
                </br><label>Active</label>
            </div>
            <div class="col-md-6">
                    </br><input type="checkbox" id="checkbox" class="checkbox" checked>
                        </label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-1">
                </br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#save">
                    Save
                </button>
                </div>
                <div class="col-md-1">
                    </br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancel">
                        Cancel
                    </button>
                </div>
            </div>




            </div>
        </div>
        </div>
      </div>
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    
    
        </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  </div>
</body>

</html>
