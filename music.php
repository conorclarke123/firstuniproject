<?php
session_start();
if(isset($_SESSION['success'])){
    $uname = $_SESSION['success'];
}else{
    $uname = "guest";
}

    include("conn.php");
    
    $queryread = "SELECT * FROM bfb_acts WHERE genre = 'music'";
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
        
    <p>
            
            
    </p>
    <?php
             
             while($row2 = $resultread->fetch_assoc()){
                 
                 $actid = $row2["id"];
                 $actname = $row2["act_name"];
                 $actdetails = $row2["act_details"];
                 $date = $row2["dateofperformance"];
                 $genre = $row2["genre"];
                 $venue = $row2["venue"];
                 $img = $row2["img"];
                 
                 
    echo"
        <div class='ui middle aligned stackable grid container'>
      <div class='row'>
        <div class='eight wide column'>
          <h3 class='ui header'>$actname</h3>
          <p>$actdetails</p>
          <p>$date</p>
          <p>$venue</p>
          
        </div>
        <div class='six wide right floated column'>
          <img src='img/$img' class='ui large bordered rounded image'>
        </div>
      </div>";
    
    if($uname!=="guest"){
                 echo "<form action='insertreview.php' method= 'POST'>
                     <class='grid-x'>
                     <div class='small-10 cell'>
                     <textarea name = 'sentreview' style='height:100px'></textarea>
                     <input type ='hidden' value='$actid' name='actid'>
                     </div>
                     <div class='small-2-cell'>
                     <input type='submit' class='button secondary' value='Submit Review'>
                     </div>
                                          </div>"
                      ;
    
     }
             }
             ?>
     	


        
       
<h3>LOG IN TO MAKE A REVIEW</h3>
<p>
    
</p>

<h4>Previous Reviews</h4>
    
    <?php
    
      $query = "SELECT bfb_acts.img, bfb_acts.id, bfb_acts.act_name, bfb_acts.genre, bfb_reviews.comment FROM bfb_acts INNER JOIN bfb_reviews ON bfb_acts.id=bfb_reviews.act_id WHERE genre='music'";
        
    $read = $conn -> query($query);
        
        if(!$resultread){
            echo $conn-> error;
        }
    
        while($row = $read->fetch_assoc()){
                 
                 $reviewid = $row["id"];
                 $actname = $row["act_name"];
                 $comment = $row["comment"];
                 $img = $row["img"];
                 $genre = $row["genre"];
           echo" 
    <div class='ui card'>
  <div class='image'>
    <img src='img/$img'>
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
      Logged in User
    </a>
  </div>
</br>";
        }
    ?>
</body>
</html>