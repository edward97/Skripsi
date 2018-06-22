function timedMsg() {
	var t = setInterval("change_time();", 1000);
}

function change_time() {
	var d = new Date();
	var curr_hour = d.getHours();
	var curr_min = d.getMinutes();
	var curr_sec = d.getSeconds();

	document.getElementById('hour').innerHTML = curr_hour+' :';
	document.getElementById('min').innerHTML = curr_min+' :';
	document.getElementById('sec').innerHTML = curr_sec;
}

timedMsg();