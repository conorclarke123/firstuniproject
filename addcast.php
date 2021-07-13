<?php
session_start();
if(!isset($_SESSION['40228221_userid'])){
	header("location: ../login.php");
}
?>
 
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>my films</title>
		<!-- links to load UI framework CSS-->	 
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous">
	</script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
</head>
 
<body>

	 <div class="ui container"> 
	  	
		<!-- nav -->
		<div class="ui grid stackable" style="background-color:black;">
			<div class="row">
				<div class="four wide column ">
					<img src='../img/logo.jpg' width='30%'>
				</div>
				<div class="eight wide column bottom aligned content ">
				 </div>
				 
				<div class="two wide column bottom aligned content ">
					<a class="large ui inverted basic button" > LOG OUT</a>

			    </div>
				
			</div>
		</div>
		
		<!--content-->	
	<form action='addcast.php' method='POST' enctype="multipart/form-data">
		<div class="ui grid ">
			<div class="row">		
				<div class="ui form">
				  <div class="field">
					<label>name of film: </label>
                                        <select name="filmid">
                                        <?php
                                          include("../conn.php");
                                          $readfilms = "SELECT * FROM 18film_posters";
                                          $resultfilm = $conn->query($readfilms);
                                          
                                          while($frow = $resultfilm -> fetch_assoc()){
                                              $filmname = $frow["name"];
                                              $filmid = $frow["id"];
                                              
                                              echo "<option value='$filmid'>$filmname</option>";
                                          }
                                                  
                                        ?>
                                        </select>
				  </div>
				</div>
			</div>
			<div class="row">	
				<div class="ui form">
				  <div class="field">
					<label>name of actor: </label>
					 <select name="actorid">
                                        <?php
                                          include("../conn.php");
                                          $readcast = "SELECT * FROM 18film_actor";
                                          $resultcast = $conn->query($readcast);
                                          
                                          while($arow = $resultcast -> fetch_assoc()){
                                              $actname = $arow["actor_name"];
                                              $actid = $arow["id"];
                                              
                                              echo "<option value='$actid'>$actname</option>";
                                          }
                                                  
                                        ?>
                                        </select>
				  </div>
				</div>
			</div>
			<input class="ui button" type="submit" value="Add Actor to Film" name="updatecast">	
			</div>
		
	 </form>
	 
	 <?php
		
		if(isset($_POST['updatecast'])){
			
			$actordata = $_POST['actorid'];
                        $filmdata = $_POST['filmid'];
		  
		  $insert = "INSERT INTO 18film_junction (film_id, actor_id) 
				VALUES ('$filmdata','$actordata') ";
		  
		  $result = $conn->query($insert);
		  
		  if(!$result){
			  echo $conn->error;
		  }else{
			  echo "<p>cast member added</p>";
		  }
		  
		  
		  
		}//closing of posted data
	 
	 ?>
	 
	</div>
</body>
</html>