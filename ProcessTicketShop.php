<?php

    include("conn.php");
    
$sentFirstName = $_POST['firstname'];
$sentLastName = $_POST['lastname'];
$sentActName = $_POST['actname'];
$sentLocation = $_POST['location'];

$insertquery = "INSERT INTO bfb_tickets (firstname, lastname, act_name, event_location) VALUES ('$sentFirstName', '$sentLastName', '$sentActName', '$sentLocation')";
	
$insert = $conn -> query($insertquery);
            
            if(!$insert){
                echo $conn->error;
            
            }
?>
 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>BIG FEST BELFAST</title>
		<!-- links to load UI framework CSS-->	 
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"> </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
 
<body>
<div class="ui container"  >  
     
	<!-- nav -->
	<div class="ui grid stackable" style="background-color:greenyellow;">
              
		<div class="row">
                    
			<div class="four wide column ">
                            <img src='img/bigfestbelfastlogo.png' href="index.php" width='30%'>
			</div>
                    <img src="img/BIG FEST BELFAST TITLE.png">
			<div class="ten wide column bottom aligned content">
                            <a class="large ui inverted basic button" href="register.php" > REGISTER</a>
                            <a class="large ui inverted basic button" href="genre.php"> GENRE
                            <a class="large ui inverted basic button">  TICKET SHOP </a>
                            <a class="large ui inverted basic button" href='gallery.php'> GALLERY </a>
                            <a class="large ui inverted basic button" href='admin/AdminLogInMenu.php'>LOGIN </a>
                            

			</div>
			
		</div>
	</div>
        <h1>Reserve Ticket</h1>
        
      
             
            <?php
        $username = $_POST['firstname'];
        
        echo "Thank you $username we can't wait to see you at BIG FEST BELFAST!!!"
           
        ?>
             <?php
             
             $readquery = "SELECT * FROM bfb_tickets";
             
             $read = $conn -> query($readquery);
            
            if(!$read){
                echo $conn->error;
            
            }
            
            while($row2 = $read->fetch_assoc()){
                 
                 $id = $row2["id"];
                 
                
             }
      echo"<b>Your reservation number is $id</b>";
   ?>
    
    <br><br></p>

		


        
        
	</div>
</div>
</body>
</html>