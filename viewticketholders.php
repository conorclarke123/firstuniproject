<?php
session_start();
if(!isset($_SESSION["Manager_40228221"]))
{
    header("Location: managerlogin.php");
}
    include("conn.php");
    
    $queryread = "SELECT * FROM bfb_tickets";
        $resultread = $conn -> query($queryread);
        
        if(!$resultread){
            echo $conn-> error;
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

</head>
 
<body>
<div class="ui container"  >  
     
	<!-- nav -->
	<div class="ui grid stackable" style="background-color:greenyellow;">
              
		<div class="row">
                    
			<div class="four wide column ">
                            <img src='../img/bigfestbelfastlogo.png' width='30%'>
			</div>
                    <img src="../img/BIG FEST BELFAST TITLE.png">
			<div class="ten wide column bottom aligned content">
                            <a class="large ui inverted basic button" href="managerhome.php">MANAGER HOME </a>
                            

			</div>
			
		</div>
	</div>
        <h1>Ticket Holders</h1>
        
        <?php
             
             while($row2 = $resultread->fetch_assoc()){
                 
                 $orderid = $row2["id"];
                 $firstname = $row2["firstname"];
                 $lastname = $row2["lastname"];
                 $actname = $row2["act_name"];
                 $eventlocation = $row2["event_location"];
                
                 echo"
        <div class='ui middle aligned stackable grid container'>
      <div class='row'>
        <div class='eight wide column'>
          <h3 class='ui header'>Order ID: $orderid</h3>
          <p>First Name: $firstname</p>
          <p>Last Name: $lastname</p>
          <p>Act Name: $actname</p>
          <p>Location: $eventlocation</p>
          <br>
         </br>
        </div>";
        //<a href='editnews.php?id=$newsid'> Edit </a>"
            
        
             }
             ?>
      
    <p>
            
            
    </p>
    
    

		


        
        
	</div>
</div>
</body>
</html>