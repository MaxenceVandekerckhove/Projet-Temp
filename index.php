<?php

$bdd = new PDO('mysql:host=localhost;dbname=tempsdb','root','');
$selectall = $bdd->query('SELECT temps_value FROM tempsdata');
date_default_timezone_set('Europe/Paris');
$date = date('H:i', time());

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Interface</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="actuelle">

		<p>Il est actuellement <?php echo $date?> et la température extérieure est de

		<?php
			$heure = date('H');
			$heure = $heure .":00:00";

			$gettemp = $bdd->query('SELECT temps_value FROM tempsdata WHERE temps_time="'.$heure.'"');
			$tempHeureActuelle = $gettemp->fetch();
			echo $tempHeureActuelle['temps_value']."C°";
		?>

		</p>

	</div>

	<h2>Graphique affichant la température journalière :</h2>

	<div class="graphique">
		<canvas id="myChart"></canvas>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script>

	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
	    // The type of chart we want to create
	    type: 'line',

	    // The data for our dataset
	    data: {
	        labels: 
	        [
	         '1:00',
	         '2:00', 
	         '3:00', 
	         '4:00', 
	         '5:00', 
	         '6:00' , 
	         '7:00' , 
	         '8:00' , 
	         '9:00' , 
	         '10:00' , 
	         '11:00' , 
	         '12:00' , 
	         '13:00' , 
	         '14:00' , 
	         '15:00' , 
	         '16:00' , 
	         '17:00' , 
	         '18:00' , 
	         '19:00' , 
	         '20:00' , 
	         '21:00' , 
	         '22:00' , 
	         '23:00'],

	        datasets: [{
	            label: 'Température',
	            backgroundColor: 'rgb(172, 206, 230)',
	            borderColor: 'rgb(45, 129, 203)',
	            data: [
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 2');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 3');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 4');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 5');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 6');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 7');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 8');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 9');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 10');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 11');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 12');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 13');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 14');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 15');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 16');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 17');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 18');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 19');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 20');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 21');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 22');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 23');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>,
	            <?php 
	            $valeur = $bdd->query('SELECT temps_value FROM tempsdata WHERE id_temps = 24');
				$donnee = $valeur->fetch();
				echo $donnee['temps_value'];
	            ?>
	            ]
	        }]
	    },

	    // Configuration options go here
	    options: {}
	});

	</script>



</body>
</html>