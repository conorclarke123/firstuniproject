<?php
    include("../conn.php");
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
                            <img src='../img/bigfestbelfastlogo.png' width='30%'>
			</div>
			<img src="../img/BIG FEST BELFAST TITLE.png">
			
		</div>
	</div>
		


        <p>
            
            
        </p>
        <form action ="managersign.php" method="post">
          <p>
              <label>username:</label>
              <input name="userfield" type="text" required="required" value="" placeholder="username"><span id="help"> provide a valid username </span><br/>
              
         
          </p>
          <p>
              <label>password:</label></br>
              <input name ="passfield" type="password" required="required" value=""><span id="help"> provide a valid password</span><br/>
          </p>
          <p>
              <input id="but" name="submit" type="submit" value="login">
          </p>
      </form>
        
	</div>
</div>
</body>
</html>