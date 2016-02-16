<?php
	if(count(get_included_files()) ==1) exit("Direct access not permitted."); // Disallow direct access.

	// NLoad loading screen
	// Version: 1.1
	
	//Steam
	$NLoad_apikey     = 'XXXXXXXXXXXXXXXXXXXXXXXX'; // your Steam API key. get yours at: https://steamcommunity.com/dev/apikey
	
	//Basic Settings
	$NLoad_servername = 'My Cool Server'; // Server Name
	$NLoad_serverip   = "111.22.333.44"; //The server IP address, Without port
	$NLoad_port       = "27015"; // The server port.
	$NLoad_theme      = 'dark'; //Theme, Choose from light, dark or candy


	//Modules
	$NLoad_header     = true; //Show a header with server name and current map
	$NLoad_info       = true; //Show player info
	$NLoad_info2      = false; //Show server info, This does not work on all hosts. If things aren't loading this might be the problem.
	$NLoad_download   = true; // Show the current downloading file?
	$NLoad_msg_enable = true; //Enable random messages?
	$NLoad_music      = true; //Enable Background music?
	$NLoad_bgimage    = true; //Enable custom background images
	
	// Below here are the configs for modules. If you have disabled a module just ignore it
	//Backgroud Image
	$NLoad_bgimg = "http://nioxed.space/Nload_default.jpg"; // Path to the image. like http://urllel.com/images/.../lol.png or a local path as ../resources/background/default.jpg
	
	//Music
			  
	$NLoad_music_videoid = "fe33G8DdRyc"; //Video ID for background music
	
	// Random Messages
	
	$Nload_msg_list = array(
	
						"Welcome to our server!",
						"Please read the rules!",
						"Visit our website!",
						"Please do not RDM!"
						
	);
	
?>

