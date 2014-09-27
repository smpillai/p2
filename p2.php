<?php
error_reporting(E_ALL & ~E_NOTICE);  # Report all errors except E_NOTICE
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
<?php include 'logic.php';?>
	<title>Second Project: XKCD Password generator</title>
	
		
</head>

	<body>
    
       <form action="p2.php" method="POST">
          
            Number of words: <input type="number" name="word_count" min="1" max="5">
           <br>
            Include Numbers: <input type='checkbox' name='add_number' id='add_number' > 
           <br>
           Include Special Characters: <input type='checkbox' name='add_symbol' id='add_symbol' >
           <br>
           <input type="submit" name="generate" value="Generate password">
           
           
        </form> 

      <?php error_reporting(0); echo $generated_mixed; ?>


	
</body>
</html>