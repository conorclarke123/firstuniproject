<?php
    include("conn.php");
    
    $id=$_GET['id'];
    
    $query= "DELETE FROM bfb_news WHERE id='$id'";
    
    $result2= $conn->query($query);
    
    if(!$result2){
        echo $conn->error;
    }else{
        echo "Succesfully Deleted";
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
                            <img src='../img/bigfestbelfastlogo.png' width='30%'>
			</div>
                    <img src="../img/BIG FEST BELFAST TITLE.png">
			<div class="ten wide column bottom aligned content">
                            <a class="large ui inverted basic button" href="index.php"> HOME </a>
                            <a class="large ui inverted basic button"> UPCOMING EVENTS </a>
                            <a class="large ui inverted basic button"> SHOP </a>
                            <a class="large ui inverted basic button" href='gallery.php'> GALLERY </a>
                            <a class="large ui inverted basic button" href='admin/AdminLogInMenu.php'> ADMIN LOGIN </a>
                            <a class="large ui inverted basic button" href='login.php'> LOGIN </a>

			</div>
			
		</div>
	</div>
        
      
    <p>
            
            
    </p>
    
	</div>
</div>
</body>
</html>