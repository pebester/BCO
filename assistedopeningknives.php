<?php

define('INCLUDE_CHECK',1);
require "connect.php";

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>BCO</title>
    <!--<link rel="stylesheet" href="text/css" href="css/header.css">-->
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!--<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
	
	
	<script src="js/modernizr.custom.js"></script>
	

</head>

<body>

	<div id="pageContainer">
	
			<div class="header">
				<?php 
					require 'demo.php';
				?>
				
				<h1>header</h1>
			</div>
						
			<!-- Main Menu -->
			<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li>
							<a href="#">Knives &amp; Tools</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Knives</h4>
										<ul>
											<li><a href="assistedopeningknives.php">Assisted Opening Knives</a></li>
											<li><a href="#">Automatic Knives</a></li>
											<li><a href="#">Fantasy</a></li>
											<li><a href="#">Fixed Blade Knives</a></li>
											<li><a href="#">Folding Knives</a></li>
											<li><a href="#">Knife Accessories</a></li>
											<li><a href="#">Multi-Blade Knives</a></li>
											<li><a href="#">Restricted Items</a></li>
											<li><a href="#">Throwing Knives</a></li>
											<li><a href="#">Training Knives</a></li>
										</ul>
									</div>
									<div>
										<h4>Sharperner Products</h4>
										<ul>
											<li><a href="#">Sharpener Kites</a></li>
											<li><a href="#">Sharpeners</a></li>
										</ul>									
										<h4>Swords</h4>
										<ul>
											<li><a href="#">Sword Accessories</a></li>
											<li><a href="#">Swords</a></li>
										</ul>
									</div>
									<div>
										<h4>Tools</h4>
										<ul>
											<li><a href="#">Axes &amp; Hatchets</a></li>
											<li><a href="#">Machetes</a></li>
											<li><a href="#">Multi-Tool Accessories</a></li>
											<li><a href="#">Multi-Tools</a></li>
											<li><a href="#">Saws</a></li>
											<li><a href="#">Scissors</a></li>
											<li><a href="#">Shovels</a></li>
											<li><a href="#">Spears</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Public Safety</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div>
										<h4>Batons &amp; Accessories</h4>
										<ul>
											<li><a href="#">Baton Accessories</a></li>
											<li><a href="#">Batons</a></li>
										</ul>
										<h4>Belts &amp; Pouches</h4>
										<ul>
											<li><a href="#">Belts</a></li>
											<li><a href="#">Duty Belt Accessories</a></li>
											<li><a href="#">Pouches</a></li>
										</ul>
										<h4>Gear &amp; Bags</h4>
										<ul>
											<li><a href="#">Gear Bags</a></li>
											<li><a href="#">Hard Cases</a></li>
											<li><a href="#">Tactical Backpacks</a></li>
											<li><a href="#">Tactical Hydration Systems</a></li>
										</ul>
									</div>
									<div>
										<h4>Hadcuffs &amp; Accessories</h4>
										<ul>
											<li><a href="#">Handcuff Accessories</a></li>
											<li><a href="#">Handcuffs</a></li>
										</ul>
										<h4>Holsters</h4>
										<ul>
											<li><a href="#">Concealment Holsters</a></li>
											<li><a href="#">Duty Holsters</a></li>
											<li><a href="#">Tactical Holsters</a></li>
											<li><a href="#">Tigh Rigs</a></li>
										</ul>
										<h4>Law Enforcement Products</h4>
										<ul>
											<li><a href="#">Clibming &amp; Safety Gear</a></li>
											<li><a href="#">Forensic</a></li>
											<li><a href="#">Law Enforcement Accessories</a></li>
											<li><a href="#">Load Bearing Platform</a></li>
											<li><a href="#">Tactical Entry Tool</a></li>
											<li><a href="#">Training Products</a></li>
										</ul>
									</div>
									<div>
										<h4>Personal Protection</h4>
										<ul>
											<li><a href="#">Body Armor</a></li>
											<li><a href="#">Emergency Preparedness</a></li>
											<li><a href="#">Gloves</a></li>
											<li><a href="#">Hearing Protection</a></li>
											<li><a href="#">Prepper Spray</a></li>
											<li><a href="#">Personal Defense</a></li>
											<li><a href="#">Protective Gear</a></li>
										</ul>
									</div>
									<div>
										<h4>Weapon Accessories</h4>
										<ul>
											<li><a href="#">10 Rnd Magazines</a></li>
											<li><a href="#">30 Rnd Magazines</a></li>
											<li><a href="#">Gun Safes &amp; Storage</a></li>
											<li><a href="#">Handgun Accessories</a></li>
											<li><a href="#">Long Gun Accessories</a></li>
											<li><a href="#">Stocks</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Lights</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Batteries</h4>
										<ul>
											<li><a href="#">Batteries</a></li>
										</ul>
										<h4>Flashlights</h4>
										<ul>
											<li><a href="#">Area Lights</a></li>
											<li><a href="#">Dive Lights</a></li>
											<li><a href="#">Flashlight Accessories</a></li>
											<li><a href="#">Handheld Flashlights</a></li>
											<li><a href="#">Headlamps</a></li>
											<li><a href="#">Keychain Lights</a></li>
											<li><a href="#">Weapon Lights</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Apperal</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Clothing</h4>
										<ul>
											<li><a href="#">Headwear</a></li>
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Pants</a></li>
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Shorts</a></li>
											<li><a href="#">Under Garmets</a></li>
										</ul>
										<h4>Eyewear</h4>
										<ul>
											<li><a href="#">Goggles</a></li>
											<li><a href="#">Sunglasses</a></li>
										</ul>
									</div>
									<div>
										<h4>Footwear Products</h4>
										<ul>
											<li><a href="#">Footwear</a></li>
											<li><a href="#">Footwear Accessories</a></li>
										</ul>
										<h4>Watch Products</h4>
										<ul>
											<li><a href="#">Watches</a></li>
											<li><a href="#">Watches Accessories</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Outdoor</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Utilities</h4>
										<ul>
											<li><a href="#">Green Tree Pro</a></li>
											<li><a href="#">Wobbler 3.0</a></li>
											<li><a href="#">Coolkid</a></li>
										</ul>
										<h4>Education</h4>
										<ul>
											<li><a href="#">Learn Thai</a></li>
											<li><a href="#">Math Genius</a></li>
											<li><a href="#">Chemokid</a></li>
										</ul>
									</div>
									<div>
										<h4>Professionals</h4>
										<ul>
											<li><a href="#">Success 1.0</a></li>
											<li><a href="#">Moneymaker</a></li>
										</ul>
									</div>
									<div>
										<h4>Learning &amp; Games</h4>
										<ul>
											<li><a href="#">Catch the Bullet</a></li>
											<li><a href="#">Snoopydoo</a></li>
											<li><a href="#">Fallen Angel</a></li>
											<li><a href="#">Sui Maker</a></li>
											<li><a href="#">Wave Master</a></li>
											<li><a href="#">Golf Pro</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Kitchen Cutlery</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Utilities</h4>
										<ul>
											<li><a href="#">Green Tree Pro</a></li>
											<li><a href="#">Wobbler 3.0</a></li>
											<li><a href="#">Coolkid</a></li>
										</ul>
										<h4>Education</h4>
										<ul>
											<li><a href="#">Learn Thai</a></li>
											<li><a href="#">Math Genius</a></li>
											<li><a href="#">Chemokid</a></li>
										</ul>
									</div>
									<div>
										<h4>Professionals</h4>
										<ul>
											<li><a href="#">Success 1.0</a></li>
											<li><a href="#">Moneymaker</a></li>
										</ul>
									</div>
									<div>
										<h4>Learning &amp; Games</h4>
										<ul>
											<li><a href="#">Catch the Bullet</a></li>
											<li><a href="#">Snoopydoo</a></li>
											<li><a href="#">Fallen Angel</a></li>
											<li><a href="#">Sui Maker</a></li>
											<li><a href="#">Wave Master</a></li>
											<li><a href="#">Golf Pro</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->					
						</li>
						<li>
							<a href="#">Gifts &amp; Accessories</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Utilities</h4>
										<ul>
											<li><a href="#">Green Tree Pro</a></li>
											<li><a href="#">Wobbler 3.0</a></li>
											<li><a href="#">Coolkid</a></li>
										</ul>
										<h4>Education</h4>
										<ul>
											<li><a href="#">Learn Thai</a></li>
											<li><a href="#">Math Genius</a></li>
											<li><a href="#">Chemokid</a></li>
										</ul>
									</div>
									<div>
										<h4>Professionals</h4>
										<ul>
											<li><a href="#">Success 1.0</a></li>
											<li><a href="#">Moneymaker</a></li>
										</ul>
									</div>
									<div>
										<h4>Learning &amp; Games</h4>
										<ul>
											<li><a href="#">Catch the Bullet</a></li>
											<li><a href="#">Snoopydoo</a></li>
											<li><a href="#">Fallen Angel</a></li>
											<li><a href="#">Sui Maker</a></li>
											<li><a href="#">Wave Master</a></li>
											<li><a href="#">Golf Pro</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->					
						</li>
						<li>
							<a href="#">Shop By Brand</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Utilities</h4>
										<ul>
											<li><a href="#">Green Tree Pro</a></li>
											<li><a href="#">Wobbler 3.0</a></li>
											<li><a href="#">Coolkid</a></li>
										</ul>
										<h4>Education</h4>
										<ul>
											<li><a href="#">Learn Thai</a></li>
											<li><a href="#">Math Genius</a></li>
											<li><a href="#">Chemokid</a></li>
										</ul>
									</div>
									<div>
										<h4>Professionals</h4>
										<ul>
											<li><a href="#">Success 1.0</a></li>
											<li><a href="#">Moneymaker</a></li>
										</ul>
									</div>
									<div>
										<h4>Learning &amp; Games</h4>
										<ul>
											<li><a href="#">Catch the Bullet</a></li>
											<li><a href="#">Snoopydoo</a></li>
											<li><a href="#">Fallen Angel</a></li>
											<li><a href="#">Sui Maker</a></li>
											<li><a href="#">Wave Master</a></li>
											<li><a href="#">Golf Pro</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->					
						</li>
					</ul>
				</nav>
			
		
		<!-- End Main Menu -->
		
			<script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script type="text/javascript"src="js/cbpHorizontalMenu.min.js"></script>
			<script>
				$(function() {
					cbpHorizontalMenu.init();
				});
			</script> 
		
		<div id="maincontainer">
			<div id="leftcontainer">
				<nav id="LeftNav">
					<?php

				$result = mysql_query("SELECT * FROM products");
				while($row=mysql_fetch_assoc($result))
				{
					
					echo '<div class="product"><img src="image/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="128" height="128" class="pngfix" />';
					echo '<class="product"><p><strong>'.$row['name'].'</strong></p>';
					echo '<p class="descr">'.$row['description'].'</p>';
					echo '<p><strong>price: $'.$row['price'].'</strong></p></div>';
					
				}

			?>
				</nav>
			</div>
			
			<div id="rightcontainer">
				<section id="pageSection">
					<header id="sectionHeader">
						<p>Assisted Opening Knives</p>
					</header>
				
					<article id="sectionArticle">
					
					<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
					<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					<script type="text/javascript" src="js/jquery.simpletip-1.3.1.pack.js"></script>
					<script type="text/javascript" src="js/tipscript.js"></script>
		
			<?php

				$result = mysql_query("SELECT * FROM products");
				while($row=mysql_fetch_assoc($result))
				{
					
					echo '<div class="product"><img src="image/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="128" height="128" class="pngfix" />';
					echo '<class="product"><p><strong>'.$row['name'].'</strong></p>';
					echo '<p class="descr">'.$row['description'].'</p>';
					echo '<p><strong>price: $'.$row['price'].'</strong></p></div>';
					
				}

			?>
					</article>
				</section>
			</div>
 		</div>
					<div id="subfooter">
						<h3></h3>
					</div>
		</div>
		</div>		
	
		<footer class="footer">
			<ul>
				<li>
					<p class="home">Home</p>
					<a class="logo" href="#">Company Name <i>&copy; 2013</i></a>
				</li>
				<li>
					<p class="services">Services</p>

					<ul>
						<li><a href="#">3D modeling</a></li>
						<li><a href="#">Web development</a></li>
						<li><a href="#">Mobile development</a></li>
						<li><a href="#">Web &amp; Print Design</a></li>
					</ul>
				</li>
				<li>
					<p class="reachus">Reach us</p>

					<ul>
						<li><a href="#">Email</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li>555-123456789</li>
					</ul>
				</li>
				<li>
					<p class="clients">Clients</p>

					<ul>
						<li><a href="#">Login Area</a></li>
						<li><a href="#">Support Center</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</li>
			</ul>
		</footer>
	</div>
		</div>
</body>