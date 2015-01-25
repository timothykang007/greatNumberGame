<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Great # Game</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<div id="container">
		<div id="top">
			<h2>Welcome to the Great # Game</h2>
			<h3>I am thinking of a number between 1 and 3</h3>
			<h4>Take a guess!</h4>
		</div>

		<div class="boxes">
<?php		if(isset($_SESSION['low']))
			{
				echo $_SESSION['low'];
				unset($_SESSION['low']);
	        }
?>
		</div>

<?php   if(!isset($_SESSION['correct']))
		{
?> 		
			<div class="boxes">
				<form action='process.php' method='post'>
					<input type="text" name="guess">
					<input type="submit" value="Submit">
				</form>
			</div>
<?php			
		}
	  	else
		{
			echo $_SESSION['correct'];
			$_SESSION['number'] = rand(1,3);
			unset($_SESSION['correct']);	
		}
?>
		<div class="boxes">
<?php   	if(isset($_SESSION['high']))
			{
				echo $_SESSION['high'];
				unset($_SESSION['high']);
			}
?>
		</div>

	</div>
</body>
</html>