<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
{


$name=$_POST['sname'];
$add=$_POST['address'];
$cont=$_POST['contact'];
$gen=$_POST['gender'];
$cla=$_POST['classs'];
$ema=$_POST['email'];


$sql="INSERT INTO student (name,classs,address,contact,gender,email,status)VALUES ('$name','$cla','$add','$cont','$gen','$ema','unconf')";

$res=$con->query($sql);

echo "<script>alert('Form Submited Successfully.');</script>";



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Login Page</title>
<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="chat.css">



<!-- Custom CSS -->
<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body style=" background:url('bg.jpg');background-size: cover;
">




<style type="text/css">
  
.login_signup_navbar{
    padding:20px;
    background: #fff;
    box-shadow: 0px 0px 21px rgba(0, 0, 0, 0.27);
}
.login_signup_navbarLinks{
    color: #7b7b7b;
    text-decoration: none;
    font-size: 16px;
    padding: 20px;
    border-bottom: 2px solid transparent;
    transition: border-bottom 0.3s;
}
.login_signup_navbarLinks:hover,.login_signup_navbarLinks:focus{
    color: #7b7b7b;
    text-decoration: none;
    border-bottom: 2px solid #1376d4;
}

.active{
     color: #1376d4;
    text-decoration: none;
    border-bottom: 2px solid #1376d4;
}


.login_signup_btn1{
    background: linear-gradient(320deg,#107bd6,#2d3ab5);
    padding: 8px 32px;
    color: #fff;
    text-decoration: none;
    outline: none;
    border:none;
    border-radius: 3px;
    box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.0);
    transition: box-shadow 0.3s;
}
.login_signup_btn1:hover,.login_signup_btn1:focus{
    color: #fff;
    text-decoration: none;
    box-shadow: 0px 3px 16px rgba(0, 0, 0, 0.53);
}
.login_signup_btn2{
    background: linear-gradient(320deg,#8910d6,#b52d94);
    padding: 8px 32px;
    color: #fff;
    text-decoration: none;
    outline: none;
    border:none;
    border-radius: 3px;
    box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.0);
    transition: box-shadow 0.3s;
}
.login_signup_btn2:hover,.login_signup_btn2:focus{
    color: #fff;
    text-decoration: none;
    box-shadow: 0px 3px 16px rgba(0, 0, 0, 0.53);
}
.page-title{
    color: #49d0f5;
    border:none;
}
  .panel-heading{
     /*   background: -webkit-linear-gradient(left, #3931af, #00c6ff);*/color:white;
      background:#49d0f5;
    }

</style>







<div class="login_signup_navbar fixed-top" style="margin:0px;">


<a href="#" class="login_signup_navbarLinks" style="    color: #49d0f5;font-size: 20px;">

</a>
<a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">


</a>



<a href="index.php" class="login_signup_navbarLinks "> Home</a>


<a href="form.php" class="login_signup_navbarLinks active">Addmission</a>


<a href="admin.php" class="login_signup_navbarLinks">Admin</a>




</div>



<style type="text/css">
    


/*============================
Form CSS
==============================*/

.section-title h3 {
    background: #563D7C;
    padding: 10px;
    color: #fff;
    font-size: 30px;
    text-align: center;
    margin-bottom: 25px;
}

h3#et {
    text-transform: inherit;
}

.section-title .col-md-12 {
    margin: 0;
    padding: 0;
}

form label {
    text-transform: capitalize;
    font-size: 16px;
    margin: 0;
    display: inline-block;
    color: white;
}

form {
    margin-bottom: 35px;
}

form input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #dddd;
    outline: none;
    border-radius: 10px;
    margin-bottom: 20px;
}

.left-side-form {
    margin-right: 25px;
}

.right-side-form {
    margin-left: 25px;
}

select {
    width: 25%;
    padding: 10px;
    border: 1px solid #dddd;
    text-transform: capitalize;
    border-radius: 10px;
    margin-bottom: 20px;
    outline: none;
}

input[type="radio"] {
    margin: 0 8px;
    margin-bottom: 70px;
}

input[type="submit"] {
    background: #563D7C;
    border: none;
    color: #fff;
    padding: 10px 50px;
    border-radius: 10px;
    outline: none;
}

h5 span.error,
span.error {
    font-size: 16px;
    color: #BE4B49;
    margin-left: 5%;
}

.errorMessage {
    display: block;
    color: #BE4B49;
    font-size: 18px;
    text-transform: capitalize;
    margin-bottom: 15px;
}

.successMessage {
    display: block;
    color: #00770D;
    font-size: 18px;
    text-transform: capitalize;
    margin-bottom: 15px;
}




</style>




<div class="container-fluid" style="background:rgba(11,11,11,0.6);height: 700px;">






<form action="" method="post">


<div class="section-title" style="width: 50%;margin-left: 25%;color: white;background: linear-gradient(90deg, #bdc3c7 , #2c3e50);padding: 20px;;margin-top: 150px;">
<h3>Addmission form</h3>
</div>



<div class="row shadow" style="width: 50%;margin-left: 25%;color: white;background: linear-gradient(90deg, #bdc3c7 , #2c3e50);padding: 20px;">




<div class="col-md-6">




<div class="left-side-form">



<h5><label for="sname">Student name</label>
<span class="error"></span></h5>
<p><input type="text" placeholder="Enter Name" name="sname" value=""></p>


<h5><label for="contact">contact</label><span class="error">
</span></h5>
<p><input type="text" name="contact" placeholder="Enter Contact" value=""></p>


<h5><label for="address">address</label><span class="error">
</span></h5>
<p><textarea name="address" placeholder="Enter Address"></textarea></p>
</div>
</div>



<div class="col-md-6">
<div class="right-side-form">


<label for="validationCustom03">Class</label>
<select class="form-control custom-select" name="classs" required>
<option selected="">Select Class </option>

<?php
$ret=mysqli_query($con,"select CategoryName from tblcategory");
while($row=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></option>
<?php } ?>


</select>









<h5><label for="email">email</label><span class="error">
</span></h5>
<p><input type="text" placeholder="Enter Email" name="email" value=""></p>





<h5><label for="gender">Gender</label></h5>
<input type="radio" name="gender" value="male"><span>Male</span>
<input type="radio" name="gender" value="female"><span>Female</span>
<input type="radio" name="gender" value="others"><span>Others</span>
<span class="error">
</span>



<p><input type="submit" name="submit" value="Submit"></p>
</div>




</div>
</div>




</form>






</div>








</div>

<!-- /Main Content -->



<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Owl JavaScript -->
<script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="dist/js/feather.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
<script src="dist/js/login-data.js"></script>










</body>

</html>