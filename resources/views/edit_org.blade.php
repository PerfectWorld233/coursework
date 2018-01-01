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
  <link href="css/chosen.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
   @extends('header')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Entry</div>
        
        
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/dataentry">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/organisation">Organisation</a>
            </li>
        </ul>

      <form action="<?php echo url('/'); ?>/update_organisation" method="post">
       <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden"  name="id" value="<?php echo $org->id; ?>" >
        <div class="card-body">
          <div class="table-responsive">
              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>Name</label>
                      <input name="name" value="<?php echo $org->name; ?>" class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                 </div>
              </div>
        
              <div class="form-row">
                <div class="col-sm-6">
                    <label ></br>Organisation type</label>
                    <input name="orgType" value="<?php echo $org->orgType; ?>" class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                </div>
              </div>
            

              <div class="form-row">
                <div class="col-sm-6">
                    <label ></br>interestSectorAreas</label>
                    <input name="interestSectorAreas" value="<?php echo $org->interestSectorAreas; ?>" class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                </div>
              </div>
              

              <div class="form-row">
                <div class="col-sm-6">
                    <label ></br>twitter</label>
                    <input name="twitter" value="<?php echo $org->twitter; ?>" class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                </div> 
              </div>
              
              </div>
              </br>
             <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                Submit
             </button>
          
          <!-- Modal -->
          <!--<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-body">
                          Submitted Successfully
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                      </div>
                  </div>
               </div>
          </div>-->
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
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="js/chosen.jquery.js"></script>
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
    <script src="https://cdn.bootcss.com/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script>
        $('.chosen-select').chosen();
    </script>
  </div>
</body>

</html>
