<!DOCTYPE html>
<html>
<head>
	<title>Tic Tac Toe</title>
	<h1>Tic Tac Toe</h1><br>
	<h2>Joueur 1 : X <br>IA : O</h2>
	
	<style>
			body {
				background-color: blue;
				text-align: center;
				}		
			#ip{
		text-align: center;
				}
	</style>
</head>
<body>

<?php
$gagnant = 'n';
$box = array('','','','','','','','','');
if (isset($_POST["gobtn"]))
	{
		$box[0] = $_POST["box0"];
		$box[1] = $_POST["box1"];
		$box[2] = $_POST["box2"];
		$box[3] = $_POST["box3"];
		$box[4] = $_POST["box4"];
		$box[5] = $_POST["box5"];
		$box[6] = $_POST["box6"];
		$box[7] = $_POST["box7"];
		$box[8] = $_POST["box8"];
		
		//Attributions de valeur a chaque box

		if(($box[0] == 'x' && $box[1] == 'x' && $box[2] == 'x')  || ($box[3] == 'x' && $box[4] == 'x' && $box[5] == 'x') || ($box[6] == 'x' && $box[7] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[3] == 'x' && $box[6] == 'x')  || ($box[1] == 'x' && $box[4] == 'x' && $box[7] == 'x') || ($box[2] == 'x' && $box[5] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[4] == 'x' && $box[8] == 'x') || ($box[2] == 'x' && $box[4] == 'x' && $box[6] == 'x') ) //Combinaisons/Conditions de victoire X
		{
			$gagnant = 'x';
			Print "<h1>X Gagne!</h1>"; //Victoire X
		}

		$blank = 0;
		for ($i = 0; $i <= 8 ; $i++)
		{
			if($box[$i] == '')
			{
				$blank = 1;
			}
		}
		if($blank == 1)
		{
			$i = rand() % 8;
			while($box[$i] != '')
			{
				$i = rand() % 8;
			}
			$box[$i] = 'o'; //Génére une valeur aléatoire et insert O a cette valeur si disponible.
			if(($box[0] == 'o' && $box[1] == 'o' && $box[2] == 'o')  || ($box[3] == 'o' && $box[4] == 'o' && $box[5] == 'o') || ($box[6] == 'o' && $box[7] == 'o' && $box[8] == 'o') || ($box[0] == 'o' && $box[3] == 'o' && $box[6] == 'o')  || ($box[1] == 'o' && $box[4] == 'o' && $box[7] == 'o') || ($box[2] == 'o' && $box[5] == 'o' && $box[8] == 'o') || ($box[0] == 'o' && $box[4] == 'o' && $box[8] == 'o') || ($box[2] == 'o' && $box[4] == 'o' && $box[6] == 'o') ) //Combinaisons/Conditions de victoire O
			{
				$gagnant = 'o';
				Print "<h1>O Gagne!</h1>"; //Victoire O 
			}
			
		}
		else if ($gagnant == 'n')
		{
			$gagnant = 't';
			Print "<h1>Égalité!</h1>"; //égalité
		}
	}
?>
	<style>
			body {
				background-color: brown;
				text-align: center;
				}		
			#ip{
		text-align: center;
				}
	</style>
</head>
<body>
	<form name = "ticktactoe" method = "post" action = "index.php">
		<?php
			for($i = 0; $i <=8; $i++)
			{
				printf('<input type = "text" id = "ip" name = "box%s" value = "%s" maxlength="1" autocomplete="off">', $i, $box[$i]); //Seul une lettre, aucun autocomplete.
				if ($i == 2 || $i == 5 || $i == 8){
				print("<br>");
				}
			}
			if($gagnant == 'n')
			{
				print('<br><input type = "submit" name = "gobtn" value = "Prochain Tour" id = "go">');
			}
			else
			{
				print('<input type = "button" name = "newgamebtn" value = "Rejouer" id = "go" onclick = "window.location.href=\'index.php\'">'); //Si victoire, propositions de rejouer.
			}
	
		?>
	</form>
	</div>
</body>
</html>
