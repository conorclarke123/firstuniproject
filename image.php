<?php
    include("../conn.php");

    $theid=$_GET['id'];
    
    $queryimage = "SELECT * FROM galleryimagesbfb WHERE id='$theid'";
    
    $result2 = $conn->query($queryimage);
    
    if(!$result2){
        echo $conn->error;
    }
    
    while($row2 = mysqli_fetch_assoc($result2)){
        
        $galimg = $row2["imgname"];
        
        $galdes = $row2["imgdescript"];
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
			<h2>Big Fest Belfast</h2> 
			<div class="ten wide column bottom aligned content">
                            <a class="large ui inverted basic button" href="index.php"> HOME </a>
                            <a class="large ui inverted basic button"> UPCOMING EVENTS </a>
                            <a class="large ui inverted basic button"> SHOP </a>
                            <a class="large ui inverted basic button" href='login.php'> LOGIN </a>

			</div>
			
		</div>
	</div>
		


        <p>
            
            
        </p>
        
        <div id='container'
             <h3>Edit image</h3>
            
            <div class='box edit'>
                <form enctype="multipart/form-data" action="processimage.php" method='POST'>
                    <img src='../img/<?php echo $galimg; ?>' width='75%'/>
                      
                      </br>
                    <label for='frontimg'> Select a file </label>
                    <input type='hidden' value='<?php echo $theid; ?>' name='changeid'/>
                    <input name='newimg' type="file"/>
                    </br>
                    <p>Description:
                        <textarea name="txtdescript" cols="50"><?php echo $galdes; ?> </textarea>
                    </p>
                    <div id='sub'><input name='submit' type='submit' value='update image'/></div>
                </form>
            </div>
</div>
	</div>
</div>
</body>
</html>