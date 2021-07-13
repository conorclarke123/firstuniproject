<?php
    include("conn.php");
    
    $queryread = "SELECT * FROM bfb_news";
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
        <h1>News</h1>
        
        <?php
             
             while($row2 = $resultread->fetch_assoc()){
                 
                 $newsid = $row2["id"];
                 $newsheadline = $row2["headline"];
                 $newscontent = $row2["content"];
                 $newsimg = $row2["img"];
                
                 echo"
        <div class='ui middle aligned stackable grid container'>
      <div class='row'>
        <div class='eight wide column'>
          <h3 class='ui header'>$newsheadline</h3>
          <p>$newscontent</p>
          
        </div>
        <div class='six wide right floated column'>
          <img src='img/$newsimg' class='ui large bordered rounded image' width='75%'>
        </div>
        </div>
      </div>";
             }
             ?>
      <div class='row'>
        <div class='center aligned column'>
            <a class='ui huge button' href="ticketshop.php">Reserve Tickets</a>
        </div>
      </div>
    </div>
    <p>
            
            
    </p>
    
    

		


        
        
	</div>
</div>
</body>
</html>