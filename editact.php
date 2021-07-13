<?php
    include("conn.php");
    
    $theid=$_GET['id'];
    
    $query= "SELECT * FROM bfb_acts WHERE id='$theid'";
    
    $result2= $conn->query($query);
    
    if(!$result2){
        echo $conn->error;
    }
    while($row2=mysqli_fetch_assoc($result2)){
        
        $actname = $row2["act_name"];
        $actdetails = $row2["act_details"];
        $date = $row2["dateofperformance"];
        $genre = $row2["genre"];
        $img = $row2["img"];
        $venue = $row2["venue"];
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
			
			
		</div>
	</div>
        
      
    <p>
            
            
    </p>
    <a href="addact.php">Add New Act</a><br/>
    <a href='deleteact.php?id=<?php echo "$theid'"?>> Delete </a>
        <div class="box edit">
        <form enctype="multipart/form-data" action="processact.php" method="POST">
            <img src="../img/<?php echo $img; ?>" width="75%"/>
            
            </br>
            <label for="frontimg"> Select a file </label>
            
            <input type="hidden" value="<?php echo $theid;?>" name="changeid"/>
            
            <input name="newimg" type="file"/>
            </br>
            <p>Act Name:
                <textarea name="txtactname" cols="30"><?php echo $actname; ?> </textarea>
            </p>
            </br>
            <p>Act Details:
                <textarea name="txtactdetails" cols="30"><?php echo $actdetails; ?> </textarea>
            </p>
            </br>
            <p>Date:
                <textarea name="txtdate" cols="30"><?php echo $date; ?> </textarea>
            </p>
            </br>
            <p>Genre:
                <textarea name="txtgenre" cols="30"><?php echo $genre; ?> </textarea>
            </p>
            </br>
            <p>Venue:
                <textarea name="txtvenue" cols="30"><?php echo $venue; ?> </textarea>
            </p>
            </br>
            <input name="submit" type="submit" value="update act"/>
            </div>
    
        </form>
    

		


        
        
	</div>
</div>
</body>
</html>