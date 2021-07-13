<?php
session_start();
if(!isset($_SESSION["Manager_40228221"]))
{
    header("Location: managerlogin.php");
}
    include("conn.php");
    	
    $queryread = "SELECT bfb_acts.img, bfb_acts.id, bfb_acts.act_name, bfb_reviews.comment FROM bfb_acts INNER JOIN bfb_reviews ON bfb_acts.id=bfb_reviews.act_id";
        
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
			
			
		</div>
	</div>
        <h1>Reviews</h1>
        
      
      
    <p>
            
            
    </p>
   
    <?php
             
             while($row2 = $resultread->fetch_assoc()){
                 
                 $reviewid = $row2["id"];
                 $actname = $row2["act_name"];
                 $comment = $row2["comment"];
                 $img = $row2["img"];
           echo" <div class='ui text container'>
  <div class='ui segments>
    <div class='ui segment'>
    <div class='ui card'>
  <div class='image'>
    <img src='../img/$img'>
  </div>
  <div class='content'>
    <a class='header'>$actname</a>
    <div class='meta'>
      <span class='date'></span>
    </div>
    <div class='description'>
      $comment
    </div>
  </div>
  <div class='extra content'>
    <a>
      <i class='user icon'></i>
      
    </a>
  </div>
</div>


</div>
    
</div>
        
             
    ";
             }
?>
		


        
        
	</div>
</div>
</body>
</html>