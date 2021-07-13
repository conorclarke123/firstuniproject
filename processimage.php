<?php
   include('../conn.php');
   $editid=$_POST['changeid'];
   $filename=$_FILES['newimg']['name'];
   $filetemp=$_FILES['newimg']['tmp_name'];
   $descript= $conn-> real_escape_string ($_POST['txtdescript']);
   $errorflag = 0;
   
   if(empty($filename)){
       $errorflag = 1;
   }
   
   if($errorflag==1){
       
       $insertquery = "UPDATE galleryimagesbfb SET imgdescript='$descript' WHERE id='$editid'"; 
       
       //echo "<p>no image file</p>";
       
   }else{
       move_uploaded_file($filetemp, "../img/$filename");
       $insertquery = "UPDATE galleryimagesbfb SET imgname='$filename', imgdescript='$descript' WHERE id='$editid'";
   }
       $result = $conn->query($insertquery);
       
       if(!$result){
           echo $conn->error;
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
                <h3>Success!</h3>
                
                <?php
                if($errorflag==1){
                    echo "<p>image not edited.";
                    echo "<p>Description update: <strong> $descript<strong></p>";
                }else{
                    echo "<img src=../img/ echo $filename; ' width='50%'/>";
                    echo "<p>Description update:<strong>$descript<strong></p>";
                }
                ?>
                
            </div>
</div>
	</div>
</div>
</body>
</html>