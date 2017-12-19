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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Grodata Solutions</a>
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

        
        
        
        <div class="card-body">
          <div class="table-responsive">
              
              
              
              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>Name</label>
                      <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                          </div>
              </div>
              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>Category</label>
                      <select name="dataTable_length" aria-controls="dataTable" class="form-control form-control-sm chosen-select" multiple>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                      </select>
                          
                          </div>
              </div>
              <div class="form-row">
              <div class="col-sm-6">
                  <label ></br>Organisation type</label>
                  <select name="dataTable_length" aria-controls="dataTable" class="form-control form-control-sm">
                      <option value="banks">Banks</option>
                      <option value="central government">Central Government</option>
                      <option value="charity/voluntary(philanthropic)">Charity/Voluntary(Philanthropic)</option>
                      <option value="courts of justice">Courts of Justice</option>
                      <option value="education-FE college">Education-FE College</option>
                      <option value="education-school">Education-School</option>
                      <option value="education-university">Education-University</option>
                      <option value="embassies and high commissions">Embassies and High Commissions</option>
                      <option value="fire service">Fire Service</option>
                      <option value="learned societies/worshipful guilds">Learned Societies/Worshipful Guilds</option>
                      <option value="local government">Local Government</option>
                      <option value="NHS body">NHS Body</option>
                      <option value="non education research institute">Non Education Research Institute</option>
                      <option value="other nonprofit">Other Nonprofit</option>
                      <option value="police">Police</option>
                      <option value="prisons">Prisons</option>
                      <option value="private(for profit)">Private(For Profit)</option>
                      <option value="probation and offender management">Probation and Offender Management</option>
                      <option value="regulator">Regulator</option>
                      <option value="social housing(associations)">Social Housing(Associations)</option>
                      <option value="trade association">Trade Association</option>
                      <option value="trade union">Trade Union</option>
                      <option value="utility company">Utility Company</option>
                  </select>
              </div>
              
          </div>

              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>Interests and Sector Areas</label>
                      <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                          </div>
                  </div>
              

            <div class="form-row">
                  
                  <div class="col-sm-4">
                      <label for="InputName"></br>Post Code</label>
                      <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp">
                          </div>
                  
                  <div class="col-sm-4">
                      <label ></br>Region</label>
                      <select name="dataTable_length" aria-controls="dataTable" class="form-control form-control-sm ">
                          <option value="east of england">East of England</option>
                          <option value="east midlands">East Midlands</option>
                          <option value="london">London</option>
                          <option value="norht west">Norht West</option>
                          <option value="north east">North East</option>
                          <option value="northern ireland">Northern Ireland</option>
                          <option value="scotland">Scotland</option>
                          <option value="south east">South East</option>
                          <option value="south west">South West</option>
                          <option value="wales - north">Wales - North</option>
                          <option value="wales - south">Wales - South</option>
                          <option value="west midlands">West Midlands</option>
                          <option value="yorkshire and the humber">Yorkshire and the Humber</option>
                          <option value="other">Other</option>
                     </select>
                    </div>
              
              <div class="col-sm-4">
                  <label for="InputName"></br>Country</label>
                  <input type="text" id="country" class="form-control form-control-sm" autocomplete="off" data-provide="typeahead" data-source='["Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Central African Republic (CAR)","Chad","Chile","China","Colombia","Comoros","Democratic Republic of the Congo","Republic of the Congo","Costa Rica","Cote d‘Ivoire",
                      "Croatia","Cuba","Cyprus","Czech Republic","Denmark", "Djibouti", "Dominica","Dominican Republic","Ecuador","Egypt","El Salvador",
                      "Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland",
                      "France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada",
                      "Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras",
                      "Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel",
                      "Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo",
                      "Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya",
                      "Liechtenstein","Lithuania","Luxembourg","Macedonia (FYROM)","Madagascar",
                      "Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova",
                      "Monaco","Mongolia","Montenegro","Morocco","Mozambique",
                      "Myanmar (Burma)","Namibia","Nauru","Nepal","Netherlands","New Zealand",
                      "Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan",
                      "Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda",
                      "Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines",
                      "Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal",
                      "Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia",
                      "Solomon Islands","Somalia","South Africa","South Korea","South Sudan",
                      "Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland",
                      "Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor-Leste","Togo",
                      "Tonga","Trinidad and Tobago","Tunisia","Turkey", "Turkmenistan","Tuvalu",
                      "Uganda","Ukraine","United Arab Emirates (UAE)","United Kingdom (UK)",
                      "United States of America (USA)","Uruguay","Uzbekistan","Vanuatu",
                      "Vatican City (Holy See)","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"]'>
                      </div>
              </div>
            <div class="form-row">
                <div class="col-sm-6">
                    <label for="InputName"></br>Twitter</label>
                    <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                        </div>
            </div>
              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>School Lower Age</label>
                      <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                          </div>
              </div>
              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>School Higher Age</label>
                      <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                          </div>
              </div>
              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>School URN or Similar</label>
                      <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp" >
                          </div>
              </div>

              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="InputName"></br>Notes</label>
                      <input class="form-control form-control-sm" id="InputName" type="text" aria-describedby="nameHelp">
                          </div>
              </div>
              
                             </div>
              </br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
              Submit
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
