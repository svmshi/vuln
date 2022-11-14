<?php
   if (session_status() == PHP_SESSION_NONE) {
      session_start();
  } ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="DesignOuPas/style.css">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
        body{
    background: #fcfcfc;
    font-family: sans-serif;
}
body, html{height:100%;}

#main{

max-width:1280px;

min-height:100%;

margin:0 auto;

position:relative;

}
 
#footer{

    background: #2E4053 ;
    height: auto;
    width: 100vw;
    padding-top: 10px;
    color: #fff;
    margin-top : auto;
    padding-bottom:0px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}

.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 1rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 2px;
    border-radius: 50%;

}
.container a{
    text-decoration: none;
    color: #000;
    border: 1.1px solid white;
    padding: 5px;
    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;
    transition: color .4s ease;

}
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.order-form .container {
      color: #4c4c4c;
      padding: 20px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
    }

    .order-form-label {
      margin: 8px 0 0 0;
      font-size: 14px;
      font-weight: bold;
    }

    .order-form-input {
      width: 100%;
      padding: 8px 8px;
      border-width: 1px !important;
      border-style: solid !important;
      border-radius: 3px !important;
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;
      font-weight: normal;
      font-style: normal;
      line-height: 1.2em;
      background-color: transparent;
      border-color: #cccccc;
    }

    .btn-submit:hover {
      background-color: #090909 !important;
    }
   
textarea {
  width: 100%;
  height: 100px;
  padding: 12px ;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  /*background-color: #f8f8f8;*/
  font-size: 16px;
  resize: none;
}


</style>


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
  ?>  

<div id="main">
<div id="header">
<?php 
   
   if (isset($_SESSION['active']))
   {  
    require('Templates/HeaderConnect.php');  }
     else  require('Templates/header.php');?>

</div>

<?php if(isset($_POST['btnSubmit'])) 
{ $Comment=$_POST["Comment"];
  $sql = "INSERT INTO posts (Content)
  VALUES (:Comment)";
$data = [
'Comment' => $Comment,
];
$stmt= $conn->prepare($sql);
$stmt->execute($data); 
//header("Location:Books.php");
}
?>

<div class="container">
 
  <br>
  <?php 
$sql="SELECT * FROM posts";

$stmt = $conn->prepare($sql);
$stmt->execute();

while ($post= $stmt->fetch())
{

?>

  <!-- Left-aligned media object -->
  <div class="media">
    <div class="media-left">
    <i class='far fa-comment' style='font-size:60px' class="media-object"> </i> 
    </div>
    <div class="media-body">
      <h4 class="media-heading">Posted</h4>
      <p>  <?php echo $post['Content']; ?> </p>
    </div>
  </div>
  <hr>
  <?php } ?>
  
  <br>
  <form action="Forum.php" method="POST">
  <fieldset>
  <legend><i class='fas fa-comment' style='font-size:60px;'></i></legend>
  <textarea id="w3review" name="Comment" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
  <br>
  <input type="submit" value="Submit" name="btnSubmit">
</fieldset>
</form>

</div>

<div id="footer">
     <?php require('Templates/footer.php');  echo'</div>'; ?>
</div>
</div>
</body>
</html>
