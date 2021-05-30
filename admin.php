<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['login']))
{
$adminuser=$_POST['username'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
$ret=mysqli_fetch_array($query);
if($ret>0){
$_SESSION['aid']=$ret['ID'];
header('location:add-category.php');
}
else{
echo "<script>alert('Invalid details. Please try again.');</script>";   
echo "<script>window.location.href='dashboard.php'</script>";
}
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

<body style=" 
background: linear-gradient(90deg, #bdc3c7 , #2c3e50">




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


<a href="form.php" class="login_signup_navbarLinks ">Addmission</a>




<a href="admin.php" class="login_signup_navbarLinks active">Admin</a>



</div>







<div class="container-fluid">












<div class="row">



<div class="col-xl-3 pa-0"  style="margin-top: 100px;">

</div>

<div class="col-xl-6 pa-0"  style="margin-top: 00px;">

    <center>
<h1 class="display-4  mb-10" style="color: white;">School Registration Management System
</h1>
</center>

<div style="width: 50%;margin-left: 160px;margin-top: 100px;">
    

<form method="post">
<h4 class="display-4 mb-10" style="color: white;">Admin Login
</h4>

<div class="form-group">
<input class="form-control" placeholder="Username" type="text" name="username" required="true">
</div>

<div class="form-group">
<div class="input-group">
<input class="form-control" placeholder="Password" type="password" name="password" required="true">
<div class="input-group-append">
<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
</div>
</div>
</div>

<button class="btn btn-success btn-block" type="submit" name="login">Login</button>


</form>



</div>







</div>



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




<script type="text/javascript">
  


const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");


function  fetch()
{





var input=$('.msger-input').val();
appendMessage("You", PERSON_IMG, "right", input);








  $.ajax({
  
  url:"chat_back.php",
  method:"POST",
 data:{action:'fetch',que:input},
  success:function(data)
  {

  var res=JSON.parse(data);
var ans=res.ans;

var status=res.status;
  console.log(status);
  console.log(res);

const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const BOT_NAME = "BOT";
const PERSON_NAME = "Sajad";




if(status =="ok")
{

appendMessage(BOT_NAME,BOT_IMG, "left", ans);

}else{

appendMessage(BOT_NAME, BOT_IMG, "left", "Ohh... I can't understand what you trying to say. Sorry!");


}


  }
  });

}





const BOT_MSGS = [
  "Hi, how are you?",
  "Ohh... I can't understand what you trying to say. Sorry!",
  "I like to play games... But I don't know how to play!",
  "Sorry if my answers are not relevant. :))",
  "I feel sleepy! :("
];

// Icons made by Freepik from www.flaticon.com
const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const BOT_NAME = "BOT";
const PERSON_NAME = "Sajad";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  //appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
  msgerInput.value = "";

  //botResponse();
});

function appendMessage(name, img, side, text) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="msg ${side}-msg">
  

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time"></div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}

function botResponse() {
  const r = random(0, BOT_MSGS.length - 1);
  const msgText = BOT_MSGS[r];
  const delay = msgText.split(" ").length * 100;

  setTimeout(() => {
    appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
  }, delay);
}

// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}



</script>








</body>

</html>