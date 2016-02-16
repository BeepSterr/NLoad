<?php if($NLoad_music == true) { ?>

	<?php 
		$yt_stats = json_decode(file_get_contents('https://noembed.com/embed?url=https://www.youtube.com/watch?v=' . $NLoad_music_videoid), true);
	?>
		<iframe type='text/html' width='0' height='0' src='http://www.youtube.com/embed/<?php echo $NLoad_music_videoid ; ?>?autoplay=1&loop=1' frameborder=0></iframe>
		<div class="music">
		<h3><i class="material-icons">music_note</i></h3>
		<h2><?php echo $yt_stats['title']; ?></h2>
	</div>
<?php }