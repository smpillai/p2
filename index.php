<?php
error_reporting(E_ALL & ~E_NOTICE);  # Report all errors except E_NOTICE
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link type="text/css" rel=stylesheet href="bootstrap/css/bootstrap.css"/>
    
    <link type="text/css" rel=stylesheet href="bootstrap/css/bootstrap-theme.css"/>
    <link type="text/css" rel=stylesheet href="bootstrap/theme/theme.css"/>
<meta name="viewport" content="width=1030, maximum-scale=1.0"/>
	<title>Second Project: XKCD Password generator</title>
	
		
</head>

<body>
     <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">XKCD Password Generator</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://p1.dwa15-practice.me">Project 1</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    
    
    
    
          <div class="jumbotron">
              
       <center><span style= "font-family: Avenir;
    font-size: 35px;">Sharath's XKCD Password Generator &#174;</span></center>
              
       <form action="index.php" method="POST">
          
            Number of <span class="badge">words:</span> <input type="number" name="word_count" min="1" max="10">
           <br><br>
            Include <span class="badge">Numbers:</span> <input type='checkbox' name='add_number' id='add_number' > 
           <br><br>
           Include <span class="badge">Special Characters:</span> <input type='checkbox' name='add_symbol' id='add_symbol' >
           <br><br>
          <center> <input type="submit" class="btn btn-primary btn-lg" name="generate" value="Generate password"></center>
           
           
        </form> 
        
           
   <center> <h1><span class="label label-info"><?php include 'logic.php';?></span></h1></center>
        
      </div>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <center> <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="..."></center>
      
    </div>
    <div class="item">
     <center> <img src="http://losingit.me.uk/wordpress/wp-content/uploads/2011/08/xkcd_-Password-Strength.png" alt=""></center>
      
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
      

      

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>


