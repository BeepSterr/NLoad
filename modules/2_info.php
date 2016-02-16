<?php if($NLoad_info2 == true){ ?>

	<div class="spacer"></div>
	<div class="box" id="module_info">
		<p>	
			<i class="material-icons">person</i> <?php echo $PlyOnline; ?> / <i id="maxplayers">??</i><br/>
			<i class="material-icons">play_arrow</i> <i id="gamemode">Unknown</i>
		</p>
	</div>
<?php }
if($NLoad_info == true){ ?>
	<div class="spacer"></div>

		<div class="box" id="module_info">
			<img id="avatar_pic" src="<?php echo $userinfo["response"]["players"][0]["avatarfull"];?>" />	
			<h6><b>Welcome back<b/></h6>		
			<h3> <span class="f1"> <?php echo $userinfo["response"]["players"][0]["personaname"]; ?></span></h3>
		</div>
		

		
	
<?php }