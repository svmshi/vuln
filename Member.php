<?php
    session_start();
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

</style>
</head>
<body> 


<div id="main">
   <div class="header-dark">
<nav class="navbar navbar navbar-expand-md navigation-clean-search">
    <div class="container"><a class="navbar-brand" href="test.php">Welcome to the store</a> 
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
             <li class="nav-item" ><a class="nav-link" href="Books.php">Books</a></li>
             <li class="nav-item" ><a class="nav-link" href="Forum.php">Forum</a></li>
            </ul>
            <form class="form-inline mr-auto"  action="test.php" method="POST">
                <div class="form-group">
                   <label for="search-field"><i class="fa fa-search" style="color:black"></i></label>
                   <input class="form-control search-field" type="search" name="search" id="search-field">
                </div>
            </form>
            <a class="btn  action-button" role="button"  href="SignOut.php">Sign Out</a>
        </div>
    </div>
</nav>
<hr/>
</div>
</div>
<?php if (isset($_POST['search'])) echo $_POST['search'] ; ?>

<div id="footer">
     <?php require('Templates/footer.php');  echo'</div>'; ?>
</div>
</div>
</body>
</html>