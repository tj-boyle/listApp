<header class='container'>
		<!--img src='assets/images/cog.svg' id='cog'-->
		<?php
		//There has GOT to be a better way of doing this....
		if($page == 'main'){
			echo(
				"<div class='sixteen columns'>
					<a href='settings.php'><svg viewBox='0 0 24 24' width='56px' height='56px' class='left title'>
						<path d='M9.387,17.548l0.371,1.482C9.891,19.563,10.45,20,11,20h1c0.55,0,1.109-0.437,1.242-0.97l0.371-1.482  c0.133-0.533,0.675-0.846,1.203-0.694l1.467,0.42c0.529,0.151,1.188-0.114,1.462-0.591l0.5-0.867  c0.274-0.477,0.177-1.179-0.219-1.562l-1.098-1.061c-0.396-0.383-0.396-1.008,0.001-1.39l1.096-1.061  c0.396-0.382,0.494-1.084,0.22-1.561l-0.501-0.867c-0.275-0.477-0.933-0.742-1.461-0.591l-1.467,0.42  c-0.529,0.151-1.07-0.161-1.204-0.694l-0.37-1.48C13.109,5.437,12.55,5,12,5h-1c-0.55,0-1.109,0.437-1.242,0.97l-0.37,1.48  C9.254,7.983,8.713,8.296,8.184,8.145l-1.467-0.42C6.188,7.573,5.529,7.839,5.255,8.315l-0.5,0.867  c-0.274,0.477-0.177,1.179,0.22,1.562l1.096,1.059c0.395,0.383,0.395,1.008,0,1.391l-1.098,1.061  c-0.395,0.383-0.494,1.085-0.219,1.562l0.501,0.867c0.274,0.477,0.933,0.742,1.462,0.591l1.467-0.42  C8.712,16.702,9.254,17.015,9.387,17.548z M11.5,10.5c1.104,0,2,0.895,2,2c0,1.104-0.896,2-2,2s-2-0.896-2-2  C9.5,11.395,10.396,10.5,11.5,10.5z'/>
					</svg></a>
					<h2>listApp</h2>
					<a href='newList.php'><img src='assets/images/plus.png' class='right title'></a>
					</div>"
				);
		}
		elseif ($page == "list") {

			$headerText = "<div class='sixteen columns'>
					<!--img src='assets/images/cog.svg' id='cog'-->
					<h4 class='left title'><a href='index.php'><</a></h4>
					<h2 id='list-name'> ";

			$headerText .= ISSET($_GET['list_id']) ? "List " . $_GET['list_id'] : "N/A";
			
			$headerText .= "</h2>
					<h4 class='right title'><a href='#' id='edit'>Edit</a></h4>
				</div>
				<div class='sixteen columns' id='notifications'>
					<h3 class='left'>Notifications</h3>
					<h3 class='right'>I/O</h3>
				</div>";
			
			echo $headerText;
		}
		elseif ($page == "newList"){
			echo("
				<div class='sixteen columns'>
					<!--img src='assets/images/cog.svg' id='cog'-->
					<a href='index.php'><h4 class='left title'>Back</h4></a>
					</svg></a>
					<h2>New List</h2>
					<a href='#' onclick='createList();'><h4 class='right title'>Done</h4></a>
				</div>"
			);
		}
		elseif ($page == "settings"){
			echo("
				<div class='sixteen columns'>
					<!--img src='assets/images/cog.svg' id='cog'-->
					<h4 class='left title'><a href='index.php'><</a></h4>
					<h2>Settings</h2>
				</div>"
			);
		}

		?>
</header>