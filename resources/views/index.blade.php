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
    {{--<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
@extends('header')
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
             <div class="col-lg-12">
                   <section class="panel">
                        <div class="panel-body">
                              <table class="table table-striped table-advance table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center w-10p"><i class="fa fa-list"></i> UserName </th>
                                            <th class="text-center"><i class="fa fa-user"></i> First Name </th>
                                            <th class="text-center"><i class="fa fa-user"></i> Last Name </th>
                                            <th class="text-center w-20p"><i class="fa fa-clock-o"></i> EntryTime </th>
                                            <th class="text-center"><i class="fa fa-laptop"></i> IP </th>
                                           <!-- <th class="text-center w-20p"><i class="fa fa-calendar-o"></i> 操作描述 </th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $user->email; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $user->fname; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $user->lname; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $user->entry_time; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $_SERVER["REMOTE_ADDR"]; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                       </div>
                   </section>
             </div>
        </div>
        <!-- Breadcrumbs-->
        <!-- Example DataTables Card-->
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
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
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Page level plugin JavaScript-->
        <!--<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>-->
        <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <!--<script src="js/sb-admin.min.js')}}"></script>-->
        <!-- Custom scripts for this page-->
        <script src="{{asset('js/sb-admin-datatables.min.js')}}"></script>
        <!--<script src="js/sb-admin-charts.min.js')}}"></script>-->
    </div>
</div>
</body>

</html>
