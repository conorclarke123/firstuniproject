<?php
session_start();
if(!isset($_SESSION["Admin_40228221"]))
{
    header("Location: adminlogin.php");
}
    include("conn.php");
    
    $theid=$_GET['id'];
    
    $query= "SELECT * FROM bfb_customer WHERE id='$theid'";
    
    $result2= $conn->query($query);
    
    if(!$result2){
        echo $conn->error;
    }
    while($row2=mysqli_fetch_assoc($result2)){
        
        $username = $row2["username"];
        $email = $row2["email"];
        $password = $row2["password"];
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
    
    <a href='deletecust.php?id=<?php echo "$theid'"?>> Delete </a>
        <div class="box edit">
        <form enctype="multipart/form-data" action="processcust.php" method="POST">
           
       <input type="hidden" value="<?php echo $theid;?>" name="changeid"/>
            </br>
            <p>Username:
                <textarea name="username" cols="30"><?php echo $username; ?> </textarea>
            </p>
            </br>
            <p>Email:
                <textarea name="email" cols="30"><?php echo $email; ?> </textarea>
            </p>
            </br>
            <p>Password:
                <textarea name="password" cols="30"><?php echo $password; ?> </textarea>
            </p>
            </br>
            <input name="submit" type="submit" value="update customer"/>
            </div>
    
        </form>
    

		


        
        
	</div>
</div>
</body>
</html>