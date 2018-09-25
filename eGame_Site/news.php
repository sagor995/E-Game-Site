
<!DOCTYPE html>
<?php
session_start();

?>

<head>
	<Title> Pc Game | Download Game</Title>
	<link rel="stylesheet" href="styles/style.css" media="all">
<head>
<body>


	<?php
	include("functions/functions.php");
	include("functions/functions2.php");
	?>

	<!--Main Container Starts From Here -->
	<div class="main_wrapper">
			
			<!--Header Starts From Here -->
			<div class="header_wrapper">

				<a href="index.php"><img id="header_logo" src="images/<?php getHeaderImg(); ?>"/></a>
				<img id="header_banner" src="images/<?php getCoverAdsImg(); ?>"/>
			</div>
			<!--Header Ends Here -->
			<?php getCart();?>
			<!--shopping cart starts -->
			<div id="shopping_cart">

					<span style="float: right; font-size: 18px; padding: 5px; line-height: 30px;">
					<?php
						if (isset($_SESSION['customer_email'])){
							echo "<b>Welcome:<b/>".$_SESSION['customer_email'];
						}
					?>
				</span>

			</div>
			<!--shoppung carts Ends Here -->

			<!--Menubar starts -->
			<div class="menubar">

					<div id="form">
						
						<form method="get" action="results.php" enctype="multipart/form-data">
								<input type="text" name="user_query" placeholder="Search..." />
								<input type="submit" name="search" value="Search" />

						</form>

					</div>


					<ul id="menu">
						<li><a href="all_games.php">All Games</a></li>
						<li><a href="my_account.php">MyAccount</a></li>
						<li><a href="cart.php">Shopping Cart</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="support.php">FAQ</a></li>
						<li>
							<?php
					if (!isset($_SESSION['customer_email'])) {

						echo "<b><a href='checkout.php' style='text-decoration: none;color: orange'>Login</a></b>";

					}else{
						echo "<b><a href='logout.php' style='text-decoration: none;color:orange'>Logout</a></b>";

					}
					?>
						</li>
					</ul>
			</div>
				
				<!--Content Area starts -->
				<div id="content_area">
						<div id ="products_box">
								<h2>Online Game Store</h2>  
								  <h4>NEWS</h4>
								 <hr/>
							      <h1><center>NEWS Portal</h1>
								<div id="news"><h2 style="color: #ffa500;">ASPAHLT 8: AIRBORNE</h2>
										<img src="images\news_image\Asphalt8.jpg" height="300" width="300"/>
										<p>Asphalt 8: Airborne is already exceptional, but its 25th update truly secures its position as the best mobile racing game.
										The highlights of this are a story mode starring the Fall Out Boy members, special rewards, and three tracks from the group's new album added to Asphalt 8.</p>
								        <p>That’s not all though, an Honorable Mention should go to the Luna New Year event and there is also the Irresistible draw of the Mardi Gras event.
										So, if you are not playing this Golden game yet, then you should Start Today.</p>
										<p>There are also six new rides coming! Among these are the luxurious Buick 2014 Riviera and the Vanda Electric Dendrobium, electric hypercar. You can be sure any race you undertake 
										in these speed machines will be Short, Fast, and Loud (well, the electric car may be quieter).</p>
										<p>Jump into Asphalt 8 with the One and Only Fall Out Boy members now. Download it on iOS, Android, and Windows. Head over to Facebook, Instagram, YouTube, and Twitter to keep up with all 
										the latest news and talk to our community of high-speed enthusiasts.</p>

   							</div>
								<div id="news"><h2 style="color: #ffa500;">MARCH OF EMPIRES</h2>
										<img src="images\news_image\best-military-strategy-games-2.jpg" height="300" width="300"/>
											<p>February is here and I have already broken all of my New Year's Resolutions… so my 2018 is truly underway. But if you are doing better than me with your promises of self-improvement,
											   then March of Empires' first update of the year is here to help. Alongside a plethora of refinements, designed to ensure MoE is among the best military strategy games, there is also a Realm Rivalry event and a Mentoring Program.</p>
											   <h5>HELP TO MAKE EVERYONE STRONGER</h5> 
											   <p>If you consider yourself a skilled player, and you want to be kinder in 2018, then consider the Mentoring Program. Once you reach Castle level 15 this option unlocks and is accessible from the Champion screen. You can invite any level 1-14 players from your realm to become your students. 
											   Teach others what you have learned on your journey to prevent them making the same mistakes.</p>
											   <p>Of course, Students of this program can also fulfill their 2018 resolution to become better at March of Empires. By studying under a Mentor they can learn from these experienced players to improve their play-style.</p>
											   <p>Students receive special missions. These include building and training units, resource gathering from the world map, and more. Best of all, when these are completed, both sides of the Mentor Program receive rewards that range from boosts to gold!A RIVALRY IN YOUR REALM</p>

    						</div>
								<div id="news"><h2 style="color: #ffa500;">MARCH OF EMPIRES</h2>
												<img src="images\news_image\honor.jpg" height="300" width="300"/>
												 <p>Online Gmae Stote is partnering with Huawei to bring you the HONOR MCVS International Series. Powered by the Honor View10, this mobile eSport contest pits teams from six territories against each other as they fight to prove themselves the world’s greatest players of this next-gen mobile FPS.</p>
												   <p>Is your squad good enough to conquer your country and go to Paris to compete for €10,000 in the Grand Finals? Then find out how to enter below!</p>
												   <h5>NATIONAL HONOR</h5>
												   <p>National Finals mark the second stage of the Series. With the best teams from each of the nations decided in the first phase, this round is set to see the mobile eSport competition intensify when it takes place on March 3rd.</p>
												   <p>You can follow the National Final results on the event's ESL page, where they will be updated live. Be sure to check it out to see which teams are going to the third stage, the Grand Finals.</p>

    						</div>
    						<div id="news"><h2 style="color: #ffa500;">DUNGEON HUNTER 5</h2>
										<img src="images\news_image\chinese-new-year-mod.jpg" height="300" width="300"/>
										<p>Dungeon Hunter 5 is heralding the arrival of the Chinese Year of the Dog. This event takes place under a new theme based on one of the Four Great Works of Chinese literature, Journey to the West. With six new Legendary Weapons and Armors, a redesigned player base, and two special Chests - this update is one worth celebrating.</p>
									     <h5>PLAY LIKE MONKEY...</h5>
									   <p>Take part in exclusive Chinese New Year activities in the latest DH5 update. Become a part of legend by earning five exclusive pieces of Legendary Armor and Legendary Weapons.</p>
									   <p>Inspired by the epic tale, Journey to the West, these items draw on Chinese mythology and folklore to create a unique look - whatever your elemental affinity or weapon preference! So, unlock these incredible items to fight looking like Pigsy or even the heroic Monkey King himself.</p>
									   <p>You can earn these incredible Armors and Weapons from unique chests. These Journey to the West Chests can be easily recognized by Monkey’s face, which adorns their front.</p>


   							</div>
								<div id="news"><h2 style="color: #ffa500;">SNIPER FURY</h2>
										<img src="images\news_image\mod-sniper-fury-update-9.jpg" height="300" width="300"/>
											<p>Online Gmae Stote casual shooter, Sniper Fury, has its sights on a new target, Steam. Now available on Valve's PC gaming platform, you can this download this free-to-play title now to begin your battle against A.I. enemies of freedom and other players online. Join Clans, fight others in PvP, and take on more than 130 single player missions.</p>
										   <h5>FIGHT FOR JUSTICE</h5>
										   <p>The Steam release of Sniper Fury brings this battle for justice to even more players. You'll have to take down enemy fighters, specific targets, armored vehicles, and even air units in this battle against the forces of evil. Eliminate foes with accuracy to enjoy sensational slow-mo effects, making those head-shots even more satisfying.</p>
										   <p>Fighting around the globe, this shooter has you taking aim at enemies in a vast variety of locations. This adds nature to your list of challenges, as blizzards, rain storms, and other atmospheric events make your shots increasingly difficult.</p>
										   <p>Use sniper and assault rifles, rail guns, rocket launchers, and top secret weapons in your battle. You can upgrade your arsenal by collecting component parts - increase their power to beat Sniper Fury’s more difficult scenarios.</p>
										   <p>To further help with this, you can also upgrade and customize your sniper. Alter their head, helmet, armor, arms, and legs. Not only does this give you a unique fighter to show off in PvP, it can also provide different stat boosts, like increased XP.</p>

    						</div>
								<div id="news"><h2 style="color: #ffa500;">WAR PLANET ONLINE</h2>
												<img src="images\news_image\steam-mod-1.jpg" height="300" width="300"/>
												<p>Online Gmae Stote real-time multiplayer strategy title War Planet Online is now available on Valve’s Steam. While the game was previously available to play on PC via the Windows Store, the WPO team are incredibly happy to now have the game available on the platform many PC gamers call home.</p>
											   <p>Global conquest is coming to an even larger audience!</p>
											   <h5>DISCOVER THE POWER TO CONQUER</h5> 
											   <p>New players coming to War Planet Online through Steam have much to learn about the game’s war torn world. Here, only the boldest Generals can rise to the top to guide their people to victory. Build and fortify your base with advanced structures, expand your forces with new powerful technology, and strike at other players in real-time around an accurate world map to conquer every nation.</p>
											   <p>Building your army you must elect Commanders to lead your troops on missions. From striking at your foes’ Headquarters or armies in PvP battles, to engaging in raids for resources - each of these leaders offers different bonuses and advantages.</p>
											   <p>But even skilled leaders cannot conquer and rule alone. So, in this MMO strategy game, you must also gather powerful player-Generals to your side. Form Factions and work together against larger enemies and exchange resources to grow your bases. Call in reinforcements from your allies in real-time to get the edge on your enemies and turn the tide of battle when it is most needed.</p>
											   <p>Make the right tactical choices both before you enter combat, and during conflicts to emerge as the most powerful faction in your Province, and then the Globe.

											</p>

    						</div>
						</div>

				</div>
				<!--Content Area starts -->
			
			<!--Footer starts -->
			<div class="footer_wrapper">
					<center><h3>&copy;2017 Pc Game. All rights reserved.<b> | </b><a href="contact_us.php" id="contact_us">Contact Us</a></center>
			</div>

			<!--Footer Ends -->

	</div>
	<!--Main Container Ends Here -->

<body>

</html>
