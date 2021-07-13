<?php

    include("conn.php");
 
	
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

</head>
 
<body>
<div class="ui container"  >  
     
	<!-- nav -->
	<div class="ui grid stackable" style="background-color:greenyellow;">
              
		<div class="row">
                    
			<div class="four wide column ">
                            <img src='img/bigfestbelfastlogo.png'  width='30%'><a href="index.php"</a>
			</div>
                    <img src="img/BIG FEST BELFAST TITLE.png">
			<div class="ten wide column bottom aligned content">
                            <a class="large ui inverted basic button" href="register.php" > REGISTER</a>
                            <a class="large ui inverted basic button" href="genre.php"> GENRE
                                <a class="large ui inverted basic button" href="ticketshop.php">  TICKET SHOP </a>
                            <a class="large ui inverted basic button" href='readreviews.php'> REVIEWS </a>
                            <a class="large ui inverted basic button" href='admin/AdminLogInMenu.php'>LOGIN </a>
                            

			</div>
			
		</div>
	</div>
        <h1>Reserve Ticket</h1>
        
        
      
   
    <form 
         
         action="admin/ProcessTicketShop.php" method="POST">
         <p> <b>First Name:</b><br> <input type="varchar" name="firstname" size="35" value=""required> <i>required</i> </p> </br>
           <p> <b>Last Name:</b><br> <input type="varchar" name="lastname" size="35" value=""required> <i>required</i> </p> </br>
           <p><b>Act Name: </b><br> <input type="varchar" name="actname" size="35" value=""required> <i>IN CAPS</i> </p> </br>
             
           
           <p><b>Event Location: </b><br>
               
               
    <form action="/action_page.php">
  <select name="location">
    <option value='Custom House Square'>Custom House Square</option>
    <option value='Opera House'>Opera House</option>
    <option value='Belfast Museum'>Belfast Museum</option>
  </p><br>
  </br>
    
  
      <input type="submit" value="reserve ticket">
           
           
       </select>
       </form>
        
        
  
    
  
    <br><br></p>

		


        
        
	</div>
</div>
</body>
</html>