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
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #2E4053 ;
    height: auto;
    width: 100vw;
    padding-top: 10px;
    color: #fff;
    margin-top : auto;
    padding-bottom:0px;
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

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
</style>
</head>
<body> 


<div id="main">
<div id="header">
<div id="header">
   <?php 
   if (isset($_SESSION['active']))
   {  
    require('Templates/HeaderConnect.php');  }
     else  require('Templates/header.php');?>
</div>



<?php if (isset($_POST['search'])) echo $_POST['search'] ; ?>
<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
  <a href="Order.php?subject=book1"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>
  <a href="Order.php?subject=book2"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>
    
    
  </div>
  <div class="column">
  <a href="Order.php?subject=book3"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>
  <a href="Order.php?subject=book4"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>
    
  </div>  
  <div class="column">
  <a href="Order.php?subject=book5"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>
  <a href="Order.php?subject=book6"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>

  </div>
  <div class="column">
  <a href="Order.php?subject=book7"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>
  <a href="Order.php?subject=book8"><img src="DesignOuPas/Images/BookStore.png" alt="HTML tutorial" style="width:100%"></a>
  </div>
</div>
</div>

<div id="footer">
     <?php require('Templates/footer.php');  echo'</div>'; ?>
</div>
</div>
</body>
</html>
