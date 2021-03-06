<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';
    
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "is stuck on the ground";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>";    

		echo Bird::$instance_count . "</br>";
		echo YellowBelliedFlyCatcher::$instance_count . "</br>";
		echo Kiwi::$instance_count . "</br>";

		$b1 = Bird::create();
		$b2 = YellowBelliedFlyCatcher::create();
		$b3 = Kiwi::create();
		
		echo Bird::$instance_count . "</br>";
		echo YellowBelliedFlyCatcher::$instance_count . "</br>";
		echo Kiwi::$instance_count . "</br>";
?>
    </body>
</html>

