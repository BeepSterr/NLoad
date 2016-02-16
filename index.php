<?php

	require("config.php"); // Import Config
	
	if(isset($_GET['m'])){
	$map = $_GET['m'];
	$id  = $_GET['id'];
	$NLoad_urlerror = 0;
	}
	else
	{
		
		$id = '76561198069771636';
		$map = 'gm_construct';
		$NLoad_urlerror = 1;
		
	}
	
	$apiurl = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$NLoad_apikey&steamids=$id";
	$userinfo = json_decode(file_get_contents($apiurl), true);

?>
<html>
	<head>
		<title><?php echo $NLoad_servername; ?></title>
		
<?php echo 
		'<link rel="stylesheet" type="text/css" href="themes/' . $NLoad_theme . '.css">'; ?>
		<link rel="stylesheet" type="text/css" href="themes/base.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="libs/script.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
	</head>
	<body>
		<div id="page">
		
		<?php if($NLoad_urlerror == 1){ echo '<div class="error">WARNING: Url not correct, Please use http://yoururl/index.php?m=%m&id=%s in your sv_loadingurl</div>'; }

		foreach (glob("modules/*.php") as $filename)
		{
			include $filename;
		}

?>
		</div>
	</body>
</html>