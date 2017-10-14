<?php require_once('Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nama'])) {
  $loginUsername=$_POST['nama'];
  $password=$_POST['passwd'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "fail.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_koneksi, $koneksi);
  
  $LoginRS__query=sprintf("SELECT username, password FROM tbl_user WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $koneksi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="image_src" type="image/jpeg" href="/images/logo.png" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- Site Properities -->
    <meta name="generator" content="Visual Studio" />
    <title>Sign Up | Vrace Registration</title>
    <meta name="description" content="Golgi Admin Theme" />
    <meta name="keywords" content="html5, ,semantic,ui, library, framework, javascript,jquery,admin,theme" />
    <link href="dist/semantic.min.css" rel="stylesheet" />
    
    <link href="css/main.min.css" rel="stylesheet" />
   
   <link href="plugins/lobibox/css/lobibox.css" rel="stylesheet" />
    <link href="plugins/pacejs/pace.css" rel="stylesheet" />
    <script src="js/jquery-2.1.4.min.js"></script>
    <style>
	.belakang {
  background: #E4E4E4;
  width: 100%;
  min-height: 100%;
  overflow: hidden;
  padding-top:10%;
  
}
	</style>
    
   
</head>
<body class="belakang">
    <div class="ui container">
      
                                <div class="ui equal width center aligned padded grid stackable">
            <div class="row">
                <div class="five wide column">
                    <div class="ui segments">
                                    
                                        <div class="ui segment no-padding">
                <h5 class="ui top attached center aligned blueli inverted header">
                  
                    Login Page
                </h5>
            </div>
                                
                                                 
              <form ACTION="<?php echo $loginFormAction; ?>" method="POST" name="form" class="ui form segment form5">
              <div class="content">
         <br>
     Masukkan Username dan Password anda
<br>
         
              
                                            <br>
                             
                          
                            <div class="ui input fluid">
                            
                                <input type="text"  name="nama" placeholder="Username Anda..." required>
                            </div>
                           
                            <div class="ui input fluid">
                          
                                <input type="password" name="passwd" placeholder="Password Anda..." required>
                            </div>
<br>
                        
                            
                            <button class="ui primary fluid submit button">
                                <i class="key icon"></i>
                                Sign In
                            </button>
                            <br>
                    
                                           
                                  
                                     
                                    </div>
                                    </form>
                                </div>
                            </div>
                            
                       
   
    
    
<div class="ui hidden">
    
    <button name="tombol" id="tombol" class="ui button not" data-icon="warning icon" data-animation="" data-type="error" data-size="normal" data-message="Your emai or password is wrong">
                                          
                                        </button>

    </div>
    

    
    
<script src='plugins/nicescrool/jquery.nicescroll.min.js'></script>
    <script src="dist/semantic.min.js"></script>
    <script data-pace-options='{ "ajax": false }' src="plugins/pacejs/pace.js"></script>
    <script src="js/app.min.js"></script>
    
    <script src="plugins/lobibox/js/notifications.js"></script>
  
   

<script>
$(document).ready(function () {
   document.getElementById("tombol").click();
});
</script>

  
   
</body>
</html>