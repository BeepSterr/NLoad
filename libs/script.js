	var dl = 0
	var dlt = 0
	var percent = 0

function DownloadingFile( fileName ) {

	dl++
	document.getElementById("dltext").innerHTML = fileName;
	
	
	percent = (100 / dlt) * dl;
	percent = Math.round(percent)
	
	document.getElementById("module_download_progressbar").style.width=percent + "%";
	document.getElementById("dlp").innerHTML = percent;
	
	return dl + " & " + percent
				
}

function SetStatusChanged( status ) {
	
	if(status == "Sending client info..."){
		
		document.getElementById("dl").innerHTML = status;
		
	}
	else{
		document.getElementById("dltext").innerHTML = status;
	}
}
function SetFilesTotal( total ) {
	
	dlt = total;
	
	return total
	
}
function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
	document.getElementById("maxplayers").innerHTML = maxplayers;
	document.getElementById("gamemode").innerHTML = gamemode;
}