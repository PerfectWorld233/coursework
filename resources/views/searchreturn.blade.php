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
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> Search Results</div>

       <form action="<?php echo url('/'); ?>/csv" method="post" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" >
       <input type="hidden" name="action" value="export" />
       <?php if ($table == 'contact') {?>
           <input type="hidden" name="table" value="contact" />
       <?php } ?>
       <?php if ($table == 'organisation') {?>
         <input type="hidden" name="table" value="organisation" />
       <?php } ?>
       @if(Session::has('message'))                                            
       <div class="alert alert-success">                                          
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           {{Session::get('message')}}
       </div>  
       @endif
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <?php if ($table == 'organisation') {?>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>orgType</th>
                            <th>interestSectorAreas</th>
                            <th>twitter</th>
                            <th>action</th>
                        </tr>
                    <?php }?>

                    <?php if ($table == 'contact') {?>
                        <tr>
                            <th>id</th>
                            <th>instruction</th>
                            <th>jobtitle</th>
                            <th>personType</th>
                            <th>organisation</th>
                            <th>region</th>
                            <th>country</th>
                            <th>action</th>
                        </tr>
                    <?php }?>
                </thead>
                <tbody>
                   <?php if ($table == 'organisation') {?>
                      <?php foreach($results as $res) { ?>
                            <tr>
                                <td>
                                   <?php echo $res->id; ?>
                                   <input type="hidden" name="id[]" value="<?php echo $res->id; ?>" />
                                </td>
                                <td>
                                   <?php echo $res->name; ?>
                                   <input type="hidden" name="name[]" value="<?php echo $res->name; ?>" />
                                   
                                </td>
                                <td>
                                   <?php echo $res->orgType; ?>
                                   <input type="hidden" name="orgType[]" value="<?php echo $res->orgType; ?>" />
                                   
                                </td>
                                <td>
                                    <?php echo $res->interestSectorAreas; ?>
                                   <input type="hidden" name="interestSectorAreas[]" value="<?php echo $res->interestSectorAreas; ?>" />
                                    
                                </td>
                                <td>
                                    <?php echo $res->twitter; ?>
                                   <input type="hidden" name="twitter[]" value="<?php echo $res->twitter; ?>" />
                                    
                               </td>
                                <td>
                                    <a id="edit" href="/edit_organisation?id=<?php echo $res->id; ?>" />
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a id="delete" href="/delete_organisation?id=<?php echo $res->id; ?>" />
                                        <i class="fa fa-trash-o offset-md-3" aria-hidden="true"></i></a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    Are you sure to delete this?
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>" >
                                                    <input type="hidden" id="del_id" value="<?php echo $res->id;?>" >
                                                    <button onclick="del_org()" type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                   <?php }?>
                   <?php if ($table == 'contact') {?>
                    <?php foreach($results as $res) { ?>
                          <tr>
                              <td>
                                 <?php echo $res->id; ?>
                                 <input type="hidden" name="id[]" value="<?php echo $res->id; ?>" />
                              </td>
                              <td>
                                 <?php echo $res->instruction; ?>
                                 <input type="hidden" name="instruction[]" value="<?php echo $res->instruction; ?>" />
                                 
                              </td>
                              <td>
                                 <?php echo $res->jobtitle; ?>
                                 <input type="hidden" name="jobtitle[]" value="<?php echo $res->jobtitle; ?>" />
                                 
                              </td>
                              <td>
                                  <?php echo $res->personType; ?>
                                 <input type="hidden" name="personType[]" value="<?php echo $res->personType; ?>" />
                                  
                              </td>
                              <td>
                                  <?php echo $res->organisation; ?>
                                  <input type="hidden" name="organisation[]" value="<?php echo $res->organisation; ?>" />
                             </td>
                             <td>
                                    <?php echo $res->region; ?>
                                    <input type="hidden" name="region[]" value="<?php echo $res->region; ?>" />
                             </td>
                             <td>
                                    <?php echo $res->country; ?>
                                    <input type="hidden" name="country[]" value="<?php echo $res->country; ?>" />
                             </td>
                              <td>
                                  <a id="edit" href="/edit_contact?id=<?php echo $res->id; ?>" />
                                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                  <a id="delete" href="/delete_contact?id=<?php echo $res->id; ?>" />
                                      <i class="fa fa-trash-o offset-md-3" aria-hidden="true"></i></a>
                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-body">
                                                  Are you sure to delete this?
                                              </div>
                                              <div class="modal-footer">
                                                  <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>" >
                                                  <input type="hidden" id="del_id" value="<?php echo $res->id;?>" >
                                                  <button onclick="del_contact()" type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </td>
                              </tr>
                          <?php } ?>
                      </tbody>
                 <?php }?>
               
               
                </table>
            </div>

            <div class="form-row">
                    <div class="col-md-6">
                        </br><button type="sumbmit" class="btn btn-primary" role="button">Export</a>
                    </div>
                </div>
            </div>
       </from>

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
     <script>
     function del_org() {
        var formData = new FormData();
            _token = $("#token").val();
        id = $(".modal-footer #del_id").val();
        formData.append("_token", _token);
        formData.append("id", id);
            console.log(id);
        $.ajax({
          url: "<?php echo url('/'); ?>/delete_organisation",
          type: "POST",
          data: formData,
          dataType: 'json',
          contentType: false,
          processData: false,
          timeout : 2000
        })
        .done(function (data) {
          // 请求成功后要做的工作
                //alert(data.msg);
                if (data.code==0){
                  console.log("success");
                  window.location.href="<?php echo url('/'); ?>/search_flush"; 
                }
        })
        .fail(function (xhr) {
          // 请求失败后要做的工作
          console.log('fail:' + JSON.stringify(xhr));
        })
        .error(function (xhr) {
          console.log('error:' + xhr.responseText);
        })
        .always(function () {
          // 不管成功或失败都要做的工作
          //console.log('complete');
        });
        return false;
        }

        function del_contact() {
            var formData = new FormData();
                _token = $("#token").val();
            id = $(".modal-footer #del_id").val();
            formData.append("_token", _token);
            formData.append("id", id);
                console.log(id);
            $.ajax({
              url: "<?php echo url('/'); ?>/delete_contact",
              type: "POST",
              data: formData,
              dataType: 'json',
              contentType: false,
              processData: false,
              timeout : 2000
            })
            .done(function (data) {
              // 请求成功后要做的工作
                    //alert(data.msg);
                    if (data.code==0){
                      console.log("success");
                      window.location.href="<?php echo url('/'); ?>/search_contact_flush"; 
                    }
            })
            .fail(function (xhr) {
              // 请求失败后要做的工作
              console.log('fail:' + JSON.stringify(xhr));
            })
            .error(function (xhr) {
              console.log('error:' + xhr.responseText);
            })
            .always(function () {
              // 不管成功或失败都要做的工作
              //console.log('complete');
            });
            return false;
            }
    </script>
  </div>
</body>

</html>
