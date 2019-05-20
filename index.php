<?php

   include("login.php");

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>My Secret Diary</title>


    <style>

      .heroImage {

        background-image: url("img/bg.jpg");
        height: 100vh;
        border-radius: 0;
        background-size: cover;
        margin-bottom: 0;

      }

      .footer-height{

        padding-top: 150px;
        height: 550px;
        margin-bottom: 0;

      }

      #appStoreImg {

        width: 200px;

      }

    </style>

  </head>
  <body>

    <nav class="navbar navbar-expand-xl navbar-light bg-light">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id="navbarCollapse">

        <a href="#" class="navbar-brand">My Secret Diary</a>
    
    </div>
    
    <div class="navbar-form navbar-right">

        <form class="form-inline" method="post">

            <div class="form-group">
            
                <input class="form-control mr-2" type="email" name="loginemail" placeholder="Email" value="<?php echo addslashes($_POST['loginemail'])?>" />
                
            </div>
            
            <div class="form-group">
            
                <input class="form-control mr-2 " type="password" name="loginpassword" placeholder="Password" value="<?php echo addslashes($_POST['loginpassword'])?>" />
                
            </div>
                <input type="submit" name="submit" class="btn btn-success" value="Log In" />
            
        </form>

    </div>

    </nav>



    <div class="jumbotron heroImage text-center">

      <h1 class="display-4 text-light">My Secret Diary</h1>

      <p class="lead text-dark">You can write your daily life in this secret diary.</p>
      
      <?php 
      
        if ($error) {
            
            echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
            
        }
        
        if ($message) {
            
            echo '<div class="alert alert-success">'.addslashes($message).'</div>';
            
        }
        
      ?>

      <p class="lead text-light">Sign Up or Log in to record your life.</p>
      
      <form method="post">

      <div class="form-group col-md-7 mx-auto">

        <div>
        
          <label for="email">Email Address</label>
          
          <input type="email" name="email" placeholder="Your email" class="form-control" value="<?php echo addslashes($_POST['email']);?>" />
          
        </div>
        
        <div>
        
          <label for="password">Password</label>
          
          <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['password']);?>" />
          
        </div>

        
      </div>

      <div class="mt-3">

        <input type="submit" name="submit" class="btn btn-success" value="Sign Up" />

      </div>
      
      </form>
      
      

    </div>



    
    
