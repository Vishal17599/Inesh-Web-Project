<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Change Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


 <?php
 @session_start();
 include("connect.php");
 if(isset($_SESSION['email']) && isset($_SESSION['user_id']))
 {
 include("headertop.php")
 
 ?>
 <script>
document.getElementById("chngpswrd").className = "active treeview";
</script>
 
  <script>
 function verifypass(x)
 {
	 id1 = document.getElementById("curpass").value
	 id2 = document.getElementById("concurpass").value;
	 id3 = document.getElementById("chanpass").value
	 if(id1 !== "" && id2 !== "" && id3 !== "" )
	 {
	 if(id1 !== id2)
	 {
		 alert("Passwords don't Match")
	 return false ;
	 }
	 else if(id1 === id2)
	 {
		x.submit() ; 
	 }
	 }
	 else
	 {
		 alert("Please Enter the Password Field correctly")
		 return false;
	 }
 }
   </script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
	<div class="container-fluid">

    <div class="row" align="center">
<h3>Change Password</h3>
<?php
$sql = "SELECT * FROM login_user where id = '$user_id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$password = $row['password'];
if(!empty($_POST['curpass']) && !empty($_POST['chanpass']) && !empty($_POST['concurpass']))
	{
		$password1 = $_POST['chanpass'];
		$curpass= $_POST['curpass'];
		$concurpass= $_POST['concurpass'];
		if($password1 == $password && $concurpass == $curpass)
		{
			$sql1 = "UPDATE login_user SET password='$curpass' where id = '$user_id'";
			mysqli_query($con,$sql1);
			?>
            <div class="col-xs-12">
            <br /><br />
            <p style="text-align:center;font-size:20px;color:red">Your Password has been Reset</p>
            
            </div>
            <?php
		}
		else
		{
			?>
            <div class="col-xs-12">
            <br /><br />
            <p style="text-align:center;font-size:20px;color:red">You Entered your old password Incorrectly</p>
            
            </div>
            <?php
		}
	}

?>
<div class="col-xs-12">
<br /><br />
<div class="col-xs-3">
</div>
<div class="col-xs-6" >
<form role="form" action="<?php echo $_SERVER["PHP_SELF"];?>#no-back" method="post">

<div class="form-group">
<input type="password" class="form-control" placeholder=" Old Password" name="chanpass" id="chanpass" required="required">
<br /><br />
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Enter New Password" name="curpass" id="curpass" required="required">
<br /><br />
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Confirm New Password" name="concurpass" id="concurpass" required="required">
<br /><br />
</div>
<div class="col-xs-12" align="center">
<input type="button" onclick="verifypass(this.form)" class="btn btn-primary" name="subdet"  value="Update Password" />
</div>
</form>

</div>
<div class="col-xs-3">
</div>
</div>
</div>
      <!-- /.row -->
	  <div class="container-fluid">
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<?php
 }
 else
 {
	 ?>
	 <script>
	 document.location = "logout.php"
	 </script>
	 <?php
 }
?>
</div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->

</body>
</html>
