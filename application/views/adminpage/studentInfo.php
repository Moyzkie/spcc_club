<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Table</title>
    <link href="<?= base_url('assets/css/preloader.css')?>"rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template -->
    <link href="<?=base_url('assets/css/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?=base_url('assets/css/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
    <style>
        tbody
        {
            text-align: center;
        }
        
        .removeRow
        {
          background-color: #FF0000;
          color:#FFFFFF;
        }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul style="background-color: rgb(25, 115, 250); color: white;" class="navbar-nav sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="spccDashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="sidebar-brand-text mx-3 r-7">Spcc Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="spccDashboard.php">
                    
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-comments"></i>
                    <span>Message &amp; Announ..</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Message &amp; Announ..:</h6>
                        <a class="collapse-item" href="buttons.html">Create Message</a>
                        <a class="collapse-item" href="cards.html">Create Announcement</a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" >
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item fas fa-user-plus" href="addstudent.php">Add Student</a>
                    <a class="collapse-item fas fa-user-plus" href="addteachers.php">Add Teachers</a>
                    <a class="collapse-item fas fa-user-plus" data-toggle="modal" data-target="#admin">Add-User-Admin</a>
                    <a class="collapse-item fas fa-clipboard-list" href="Addclub.php">Add club</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="DashboardTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Student Information Table</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="DashboardTable1.php">
                    <i class="fas fa-user"></i>
                    <span>Teachers Information Table</span></a>
            </li>
           
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>User Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" >
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">All User Page</h6>
                        <a class="collapse-item" href="club_page.html">Club Page</a>
                        <a class="collapse-item" href="index.php">Home Page</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
        </ul>

        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </li>

    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                        problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
                    <div class="status-indicator"></div>
                </div>
                <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                        would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                    <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
        <img class="img-profile rounded-circle" src="image/admin_profile/">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>
</ul>
</nav>
 <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div style="background-color: white; " class="card-header py-3">
                           <button class="btn btn-outline-primary " data-toggle="modal" data-target="#addStdInfo">Add</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="StdInfoTbl" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                           <th width="5%"><button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-xs">Delete</button></th>
                                            <th>Student Number</th>
                                            <th>First Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="text-dark">System Plus Computer College &copy;2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <button class="btn btn-secondary " >Cancel</button>
                    <a class="btn btn-primary" href="logout-user.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
     <!-- Add-User-Admin Modal HTML -->
 <div id="" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form action="crud.php" METHOD="POST" enctype="multipart/form-data">
     <div class="modal-header">      
      <h4 class="modal-title">Edit Club</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Admin FullName</label>
       <input  type="text" name="fullname" class="form-control"  required>
      </div>
      <div class="form-group">
       <label>Username</label>
       <input type="text"name="username"   class="form-control" required>
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="text" name="password"   class="form-control" required>
      </div>
      <div class="form-group">
       <label>Profile</label>
       <input type="file" name="profile"  class="form-control">
      </div>  
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-success"  name="admin_save" value="Save">
     </div>
    </form>
   </div>
  </div>
 </div>
    <!-- Edit Modal HTML -->
 <div id="editmodal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form action="crud.php" METHOD="POST">
     <div  style="" class="modal-header">      
      <h4 class="modal-title text-black">Edit Student Info</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body row">     
        <input type="text" id="id" name="id" hidden>
      <div class="form-group col-md-6">
       <label>Student Number</label>
       <input type="text"id="studentnum" name="studentnum" class="form-control" readonly>
      </div>
      <div class="form-group col-md-6">
       <label>First Name</label>
       <input type="text" id="fname" name="fname"   class="form-control" required>
      </div>
      <div class="form-group col-md-6">
       <label>Age</label>
       <input type="number" id="age" name="age"  class="form-control" required>
      </div>    
      <div class="form-group col-md-6">
       <label>Gender</label>
       <select class="form-control" id="gender"  name="gender" required>
          <option value="Male" >Male</option>
          <option value="Female">Female</option>
        </select>
      </div> 
      <div class="form-group col-md-12">
         <label>Email</label>
       <input type="email" id="email" name="email"  class="form-control" required>
      </div>    
     </div>
     <div  style="" class="modal-footer">
      <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      <button type="submit" name="edit" class="btn btn-primary" >Update</button>
     </div>
    </form>
   </div>
  </div>
 </div>

  <!-- add Modal HTML -->
  <div id="addStdInfo" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form action="" METHOD="POST">
     <div  style="" class="modal-header">      
      <h4 class="modal-title text-black">Add Student Info</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body row">     
      <div class="form-group col-md-6">
       <label>Student Number</label>
       <input type="number" id="add_studentnum"  class="form-control" value="">
       <span id ="error_stdno" class="alert-danger"></span>
    </div>
      <div class="form-group col-md-6">
       <label>FullName</label>
       <input type="text" id="add_fname" name="add_fname"   class="form-control"  value="" required>
       <span id ="error_fname" class="alert-danger"></span>
     </div>
      <div class="form-group col-md-6">
       <label>Age</label>
       <input type="number" id="add_age" name="add_age"  class="form-control" value="" required>
       <span id ="error_age" class="alert-danger"></span>
     </div>    
      <div class="form-group col-md-6">
       <label>Gender</label>
       <select class="form-control" id="add_gender"  name="add_gender" required>
          <option value="Male" >Male</option>
          <option value="Female">Female</option>
        </select>
        <span id ="error_gender" class="alert-danger"></span>
      </div> 
      <div class="form-group col-md-12">
         <label>Email</label>
         <input type="email" id="add_email" name="add_email"  class="form-control" required>
         <span id ="error_email" class="alert-danger"></span>
        </div>    
     </div>
     <div  style="" class="modal-footer">
      <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      <button type="button"  onclick="addStdInfo()"  class="btn btn-primary" >Save</button>
     </div>
    </form>
   </div>
  </div>
 </div>
   <div id="preloader" class="preloader">
   <div id="loader">
   </div>
   </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/css/jquery/jquery.min.js')?>"> </script>
    <script src="<?=base_url('assets/css/bootstrap/js/bootstrap.bundle.min.js')?>"> </script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/css/jquery-easing/jquery.easing.min.js')?>"> </script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/css/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('assets/css/jquery.dataTables.min.js')?>"> </script>
    <script src="<?=base_url('assets/css/dataTables.bootstrap4.min.js')?>"> </script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/css/demo/datatables-demo.js')?>"></script>
   


<script>
 $(document).ready(function(){
  
    $('.delete_checkbox').on("click",function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });
      displayStdInfo();
 });


function delete_selected(){
    $('.delete_checkbox').on("click",function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });
}
 
   
 
function displayStdInfo(){
    $('#StdInfoTbl').DataTable({
      destroy: true,
      ajax:"<?=base_url('My_controller/displayStdInfo')?>",
      columns:[
          {data: null, "render": function (item) { return '<input type="checkbox" class="delete_checkbox" onclick="delete_selected()" id="delete_checkbox" value="'+item.id+'" />' } },
          {data:"studentNo"},
          {data:"fullname"},
          {data:"gender"},
          {data:"age"},
          {data:"email"},
          {data: null, title: 'Action', wrap: true, "render": function (item) { return '<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action</button><div class="dropdown-menu"> <a class="dropdown-item" onclick="getStdInfo('+item.id+')" href="" data-toggle="modal" data-target="#editmodal">EDIT</a> <a class="dropdown-item" href="#"  onclick="deleteStdInfo('+item.id+')">DELETE</a></div>' } }
      ]
    });
}

function getStdInfo(id){

  $.post("<?=base_url('My_controller/getStdInfo')?>",{
     id:id
   },function(data,status){
     var StdInfo = JSON.parse(data);
     $('#studentnum').val(StdInfo.studentNo);
     $('#fname').val(StdInfo.fullname);
     $('#age').val(StdInfo.age);
     $('#gender').val(StdInfo.gender)
     $('#email').val(StdInfo.email);
    });
     $('#editModal').modal('show');
}

function addStdInfo(){
      var studentNo = $('#add_studentnum').val();
      var fname = $('#add_fname').val();
      var email = $('#add_email').val();
      var gender = $('#add_gender').val();
      var age = $('#add_age').val();
      $.ajax({
          url:"<?=base_url('My_controller/addStdInfo')?>",
          type:"POST",
          data:
          {
             studentNo:studentNo,
             fname:fname,
             email:email,
             gender:gender,
             age:age
          },
          success:function(data,status){
            displayStdInfo();
            $('#add_studentnum').val(null);
            $('#add_fname').val(null);
            $('#add_email').val(null);
            $('#add_gender').val(null);
            $('#add_age').val(null);
            var error = JSON.parse(data);
            //seterror
            var studentNo_error = error.studentNo;
            var fname_error = error.fname;
            var email_error = error.email;
            var gender_error = error.gender;
            var age_error = error.age;
            //setvalue
            var setvalue_studentNo = error.setstudentNo;
            var setvalue_fname = error.setfname;
            var setvalue_email = error.setemail;
            var setvalue_gender = error.setgender;
            var setvalue_age = error.setage;
            //display_seterror
            $('#error_fname').html(fname_error);
            $('#error_email').html(email_error);
            $('#error_age').html(age_error);
            $('#error_gender').html(gender_error);
            $('#error_stdno').html(studentNo_error);
            //display_setvalue
            $('#add_studentnum').val(setvalue_studentNo);
            $('#add_fname').val(setvalue_fname);
            $('#add_email').val(setvalue_email);
            $('#add_gender').val(setvalue_gender);
            $('#add_age').val(setvalue_age);
            //remove error in 3 second
            setTimeout(()=>$('p').remove(),5000);
            setTimeout(()=>$('p').remove(),5000);
          }
      });

      
}

function deleteStdInfo(id){
    var con = confirm("Are you sure do you want to delete!");
    if(con == true){
        $.ajax({
        url:"<?=base_url('My_controller/deleteStdInfo')?>",
        type:"POST",
        data: {id:id},
        success:function(data,status){
            displayStdInfo();
        }
     });
    }
      
}

$(window).on("load",function(){
 $(".preloader").fadeOut("slow");
});
</script>    
<!-- <script>
     $(document).ready(function(){
         $(document).on('click','.editbtn',function(){
      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function(){
      return $(this).text();
      }).get();
     
      $('#studentnum').val(data[0]);
      $('#fname').val(data[1]);
      $('#age').val(data[2]); 
      $('#gender').val(data[3])
      $('#email').val(data[4]);
      $('#id').val(data[6]); 
     });
     });
     
</script> -->
</body>
</html>