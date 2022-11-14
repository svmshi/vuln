<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="DesignOuPas/style.css">
    

</head>
<body> 

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db= "the_store" ;
  try {
    $conn = new PDO("mysql:host=$servername;dbname=the_store","$username","");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
   // echo "Connection failed: " . $e->getMessage();
  }
  $error=" ";
  ?> 
<?php
$errors=array();
if (isset($_POST['submit']))
{
 $email = $_POST['email'];
 $password= $_POST['password'];

 $sql="SELECT * FROM users WHERE Email='$email' and Password='$password' LIMIT 1";

 $stmt = $conn->prepare($sql);
 $stmt->execute();
 $user = $stmt->fetch();
  
  if ($user) { // if user exists
   session_start();
   $_SESSION['active']=1; 
  header("Location:test.php");
 
  } 
  else 
  {  
    ?> <script>alert('Identifiants incorrectes!'); </script> <?php
  }
} 
?>
<div id="main">
<section class="vh-100" style=" background: #2E4053 ;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="DesignOuPas/Images/Login.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
           
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="LogIn.php" method="POST" >

                  <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fa fa-sign-out" style="font-size:36px"></i>
                  
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" placeholder="Email address"  />
                   
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" placeholder="Password" />
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="submit" />
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                   
                
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>
