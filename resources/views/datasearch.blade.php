<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Grodata Solutions</title>
  
  
  
  <link href="css/bootstrap-dropselect.css" rel="stylesheet">
      <script src="js/bootstrap-dropselect.js"></script>
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
          <i class="fa fa-file"></i> Data Search</div>
        
        
        
        
        
        
        <div class="card-body">
            <div class="table-responsive">
                
          
                
                
                
                <div class="form-row col-md-12">
                    <label class="col-md-2 ">
                        <h6>Field</h6>
                    </label>
                    <label class="col-md-1">
                        <h6>Contact</h6>
                    </label>
                    <label class="col-md-2">
                        <h6>Organisation</h6>
                    </label>
                    <label class="col-md-2 offset-md-1">
                        <h6>Entry</h6>
                    </label>
                    <lable class="col-md-2 offset-md-1 ">
                        <h6>Not Entry</h6>
                    </label>
                </div>
                
                
                
                <div class="form-row">
                    <label class="col-sm-2">
                        </br></br>Record Type
                    </label>
                    <label class="text-center col-sm-1">
                        </br></br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="recordtype">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                    </br></br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                    </div>
                    <div class="col-sm-2 offset-sm-1 text-center">
                        </br></br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                    </div>
                    <div class="col-sm-2 text-center">
                        </br></br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Instruction
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="instruction">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                    </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                    </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>

                </div>
                <div class="form-row ">
                    <div class="col-sm-2">
                    <label>
                        </br>Record Status
                    </label>
                    </div>
                    <div class=" text-center col-sm-1">
                    <label >
                        </br>
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="recordstatus">
                    </label>
                    </div>
                    <div class="col-sm-3 offset-sm-1 ">
                        </br>
                            <select name="recordstatus" class="chosen-select " multiple>
                            <option value="deceased">Deceased</option>
                            <option value="left-retired">Left-Retired</option>
                            <option value="left-other">Left-Other</option>
                            <option value="delete-requested removal">Delete-Requested Removal</option>
                            <option value="delete-other">Delete-Other</option>
                            <option value="delete-other">IT Person</option>
                        </select>
                    </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                    </div>
                    <div class="col-sm-2  text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Job Title
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="jobtitle">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2  text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Person Type
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="persontype">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                        </br><select class="offset-sm-4 form-control form-control-sm col-sm-12 chosen-select" multiple>
                            
                            <option value="academic - lecturer">Academic - Lecturer</option>
                            <option value="academic - researcher">Academic - Researcher</option>
                            <option value="academic - senior management">Academic - Senior Management</option>
                            <option value="account manager">Account Manager</option>
                            <option value="accountant">Accountant</option>
                            <option value="administration">Administration</option>
                            <option value="business/management consultant">Business/Management Consultant</option>
                            <option value="catering">Catering</option>
                            <option value="communications">Communications</option>
                            <option value="economist">Economist</option>
                            <option value="editor">Editor</option>
                            <option value="elected official - councillor">Elected Official - Councillor</option>
                            <option value="elected official - councillor - mayor">Elected Official - Councillor - Mayor</option>
                            <option value="elected official - directly elected mayor">Elected Official - Directly Elected Mayor</option>
                            <option value="elected official - MEP">Elected Official - MEP</option>
                            <option value="elected official - MP">Elected Official - MP</option>
                            <option value="elected official - police and crime commissioner">Elected Official - Police and Crime Commissioner</option>
                            <option value="engineer">Engineer</option>
                            <option value="facilities management">Facilities Management</option>
                            <option value="finance">Finance</option>
                            <option value="financial analyst">Financial Analyst</option>
                            <option value="firefighter">Firefighter</option>
                            <option value="health - allied health professional">Health - Allied Health Professional</option>
                            <option value="health - care worker (other)">Health - Care Worker (Other)</option>
                            <option value="health - medical doctor">Health - Medical Doctor</option>
                            <option value="health - nurse">Health - Nurse</option>
                            <option value="health and safety">Health and Safety</option>
                            <option value="human resources">Human Resources</option>
                            <option value="it/systems admin">IT/Systems Admin</option>
                            <option value="journalist">Journalist</option>
                            <option value="lawyer - barrister">Lawyer - Barrister</option>
                            <option value="lawyer - in house">Lawyer - In House</option>
                            <option value="lawyer - other">Lawyer - Other</option>
                            <option value="lawyer - solicitor">Lawyer - Solicitor</option>
                            <option value="lawyer - trade mark patent attorney">Lawyer - Trade Mark Patent Attorney</option>
                            <option value="public-local">Librarian</option>
                            <option value="public-local">Marketing</option>
                            <option value="other - legal">Other - Legal</option>
                            <option value="personal/executive assistant">Personal/Executive Assistant</option>
                            <option value="planning officer">Planning Officer</option>
                            <option value="police officer">Police Officer</option>
                            <option value="policy">Policy</option>
                            <option value="procurement officer">Procurement Officer</option>
                            <option value="property/building surveyor">Property/Building Surveyor</option>
                            <option value="public affairs">Public Affairs</option>
                            <option value="public relations">Public Relations</option>
                            <option value="sales">Sales</option>
                            <option value="scientist">Scientist</option>
                            <option value="secretary">Secretary</option>
                            <option value="senior management">Senior Management</option>
                            <option value="social worker(social services)">Social Worker(Social Services)</option>
                            <option value="teacher">Teacher</option>
                            <option value="technician">Technician</option>
                        </select>

                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Professional Interests
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="professionalinterests">
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option3">
                    </label>
                    <div class="col-sm-3 ">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Organisation
                    </label>
                    <label class=" text-center col-sm-1 offset-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="organisation">
                    </label>
                    <div class="col-sm-3 ">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Department Level 1
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="departmentlevel1">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Department Level 2
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="departmentlevel2">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Org Type
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="orgtype">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                        </br><select name="dataTable_length" class="form-control form-control-sm offset-sm-3 chosen-select" multiple>
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
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Country
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="country">
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="country">
                    </label>
                    <div class="col-sm-3 ">
                        </br><input type="text" id="country" class="form-control form-control-sm offset-sm-3" autocomplete="off" data-provide="typeahead" data-source='["Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Central African Republic (CAR)","Chad","Chile","China","Colombia","Comoros","Democratic Republic of the Congo","Republic of the Congo","Costa Rica","Cote d‘Ivoire",
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
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Region
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="region">
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="region">
                    </label>
                    <div class="col-sm-3 ">
                        </br><select name="dataTable_length" aria-controls="dataTable" class="form-control form-control-sm chosen-select" multiple>
                            <option value="east of england">England</option>
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
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Biography
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="biography">
                    </label>
                    <div class="col-sm-3 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>Notes
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="notes">
                    </label>
                    <label class=" text-center col-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="notes">
                    </label>
                    <div class="col-sm-3 ">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>School Lower Age
                    </label>
                    <label class=" text-center col-sm-1 offset-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="schoollowerage">
                    </label>
                    <div class="col-sm-3 ">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>School Higher Age
                    </label>
                    <label class=" text-center col-sm-1 offset-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="schoolhigherage">
                    </label>
                    <div class="col-sm-3 ">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-2">
                        </br>School URN
                    </label>
                    <label class=" text-center col-sm-1 offset-sm-1">
                        </br><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="schoolURN">
                    </label>
                    <div class="col-sm-3 ">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-3">
                            </div>
                    <div class="col-sm-2 offset-sm-1">
                        </br><input  class="form-control form-control-sm col-sm-12 offset-sm-2">
                            </div>
                    <div class="col-sm-2 text-center">
                        </br><select name="dataTable_length" aria-controls="dataTable">
                            <option value="exact">exact</option>
                            <option value="like">like</option>
                            <option value="not">not</option>
                        </select>
                    </div>
                </div>





            






            <div class="form-row">
                <div class="col-md-6">
            </br><a href="/searchreturn" class="btn btn-primary" role="button">Search</a>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    </br><a href="" class="btn btn-primary" role="button">Export</a>
                </div>
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
        $('.chosen-select').chosen({width:"100%"} );
        </script>
    
    
  </div>
</body>

</html>
