<?php
        
   session_start();
   include("login.php");
   
   include("connection.php");
   
   $query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
   
   $result = mysqli_query($link, $query);
   
   $row = mysqli_fetch_array($result);
   
   $diary = $row['diary'];

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
     <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
    

    


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

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container">

        <div class="navbar-header">

        <a class="navbar-brand" href="#">My Secret Diary</a>
    
         </div>
    
         <div>
    
           <ul class="navbar-nav nav">
            
            <li>
                 <a href="index.php?logout=1" >Log Out</a>
            </li>
        
          </ul>
    
          </div>

    </div>

    
    </nav>
    

    <div class="jumbotron heroImage text-center">

        <div class="contentContainer container">
        
            <textarea class="form-control"><?php echo $diary; ?></textarea>
      

        </div>
    </div>

<script>

    $("textarea").css("min-height", $(window).height()*0.8);
    
    $("textarea").keyup(function() {
    
        $.post("updatedairy.php", {diary:$("textarea").val()});
    
    });
    
</script>

</body>
</html>


