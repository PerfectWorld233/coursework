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
      <!-- Example DataTables Card-->
      <div class="card mb-3" >
        <div class="card-header">
          <i class="fa fa-user"></i> Admin - Role
        </div>

        <?php
            if(Session::has('message')){
                echo Session::get('message');
            }
        ?>
        <div class="card-body">
             <div class="table-responsive">
                <div class="form-row" >
                        <div class="col-md-2">
                            <input type="hidden" id="id" value="<?php echo $role->id; ?>" >
                        </div>
                        </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label></br>Title</label>
                        </div>
                        <div class="col-md-6">
                            </br><input class="form-control" id="title" value="<?php echo $role->title; ?>" >
                                </div>
                        </div>
                    </div>
                <div class="form-row">
                    <div class="col-md-2">
                        <label></br>Rules</label>
                    </div>
                    <div class="col-md-6">
                        </br><input class="form-control" id="rules" value="<?php echo $role->rules; ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-2">
                        <label></br>Note</label>
                    </div>
                    <div class="col-md-6">
                        </br><input class="form-control" id="note" value="<?php echo $role->note; ?>">
                            </div>
                </div>
                
                <div class="form-row">
                    <div class="col-md-2">
                        </br><label>Status</label>
                    </div>
                    <div class="col-md-6">
                        </br><input type="checkbox" id="status" class="checkbox"  <?php if($role->status) {echo "checked";} else {echo "";} ?> ></label>
                    </div>
                </div>
                

         <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
         <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>" >
        <div class="form-row">
            <div class="col-md-1">
                </br><button onclick="update_role()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#save">
                    Save
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
    {{--  <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>  --}}
    <!-- Custom scripts for all pages-->
    {{--  <script src="js/sb-admin.min.js"></script>  --}}
    <!-- Custom scripts for this page-->
    {{--  <script src="js/sb-admin-datatables.min.js"></script>  --}}
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    
    <script>
     function update_role() {
		var formData = new FormData();
        _token = $("#token").val();
		id = $("#id").val();
		title = $("#title").val();
		rules = $("#rules").val();
		note = $("#note").val();
		status = $("#status").val();
        console.log(status);
        //status = $("input[name='status']").not("input:checked"); 
		formData.append("_token", _token);
       // console.log(_token);
		formData.append("id", id);
		formData.append("title", title);
		formData.append("rules", rules);
		formData.append("note", note);
		formData.append("status", status);
		$.ajax({
			url: "<?php echo url('/'); ?>/update_role",
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
               window.location.href="<?php echo url('/'); ?>/list_role"; 
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
