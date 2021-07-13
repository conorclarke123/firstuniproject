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
        
    <p>
            
            
    </p>
    
    <div class="ui three column doubling grid">
  <div class="column">
      <div class="ui segment"><h3>Comedy @ Opera House</h3>
          <img src="img/comedyicon.png" width="300" height="200" alt=""/>
          <div class="ui buttons">
              <a class="ui red basic button" href="comedy.php">View</a></div>
    </div>
  </div>
  
  <div class="column">
    <div class="ui segment"><h3>Music @ Custom House Square</h3>
        <img src="img/musicicon.png" width="300" height="200" alt=""/>
        <div class="ui buttons">
            <a class="ui blue basic button" href="music.php"> View</a></div>
    </div>
  </div>
  
  <div class="column">
    <div class="ui segment"><h3>Art @ Belfast Museum </h3>
        <img src="img/articon.png" width="300" height="200" alt=""/>
        <div class="ui buttons">
            <a class="ui green basic button" href="art.php">View</a></div>
    </div>
  </div>
</div>
    

		


        
        
	</div>
</div>
</body>
</html>