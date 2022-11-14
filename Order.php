<?php
   if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
?>
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
     else  require('Templates/header.php'); 
     ?>
    
</div>
<?php if(isset($_POST['btnSubmit'])) 
{ $Fname=$_POST["Fname"];
  $Lname=$_POST["Lname"];
  $Date=$_POST["Date"];
  $City=$_POST["City"];
  
  $sql = "INSERT INTO orders (Fname , Lname, Date, City)
  VALUES (:Fname, :Lname, :Date,:City)";

$data = [
'Fname' => $Fname,
'Lname' => $Lname,
'Date' => $Date,
'City' => $City,
];

$stmt= $conn->prepare($sql);
$stmt->execute($data); 
header("Location:Books.php");
}
?>

<form action="Order.php?subject= " method="POST">

<section class="order-form my-4 mx-4">
    <div class="container pt-4">
    <input type="hidden" name="Book" value="<?php echo $_GET["subject"]; ?>" >
                
      <div class="row">
        <div class="col-12">
          <h1>You can see my Order Form</h1>
          
          <span>with some explanation below</span>
          <hr class="mt-1">
        </div>
        <div class="col-12">
     
          <div class="row mx-4">
            <div class="col-12 mb-2">
              <label class="order-form-label">Name</label>
            </div>
            <div class="col-12 col-sm-6">
              <input class="order-form-input" placeholder="First" name="Fname">
            </div>
            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
              <input class="order-form-input" placeholder="Last" name="Lname">
            </div>
          </div>


          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label" for="date-picker-example">Date</label>
            </div>
            <div class="col-12">
              <input class="order-form-input datepicker" placeholder="Selected date" type="date"
                id="date-picker-example" name="Date">
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Adress</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" placeholder="Street Address" name="Address">
            </div>

            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="City" name="City">
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Region" name="Region">
            </div>
            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="Postal / Zip Code" name="Zip">
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Country" name="Country">
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="validation" id="validation" value="1">
                <label for="validation" class="form-check-label">I know what I need to know</label>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-12">
              
              <input type="submit" name="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit" value="submit">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</form>
</div>

<div id="footer">
     <?php require('Templates/footer.php');  echo'</div>'; ?>
</div>

</div>
</body>
</html>
