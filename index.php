<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Digital Clock Using JavaScript</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script>
		function currentTime(){
			let date = new Date();
			let hour = date.getHours();
			let min = date.getMinutes();
			let sec = date.getSeconds();
			let mid = "AM";
			mid = hour >=12 ? "PM" : "AM";
			hour = hour == 0 ? 12 : hour > 12 ? hour - 12 : hour;

			hour = updateTime(hour);
			min = updateTime(min);
			sec = updateTime(sec);
			document.querySelector("#time").innerHTML = `${hour}:${min}`;
			document.querySelector("#sec").innerHTML = `${sec}`;
			document.querySelector("#mid").innerHTML = `${mid}`;

			let curr_date = date.getDate();
			let day = date.getDay();
			let month = date.getMonth();
			let year = date.getFullYear();
			let month_name = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

			let showDay = document.querySelectorAll(".day_wrapper span");
			document.querySelector("#showDate")
			.innerHTML = `${month_name[month]} ${curr_date} ${year}`
			showDay[day].style.opacity = "1";
		}

		function updateTime(e){
			if(e < 10)
				return "0" + e;
			else
				return e;
		}

		setInterval(currentTime, 1000);
	</script>
</head>
<body>
	<!-- date -->
	<div class="badan">
		<div class="container">
			<div class="time_wrapper">
				<span id="time"></span>
				<span id="sec"></span>
				<span id="mid"></span>
			</div>

			<div class="day_wrapper">
				<span class="text_color">SUN</span>
				<span class="text_color">MON</span>
				<span class="text_color">TUE</span>
				<span class="text_color">WED</span>
				<span class="text_color">THU</span>
				<span class="text_color">FRI</span>
				<span class="text_color">SAT</span>
			</div>

			<span id="showDate"></span>
		</div>

		<!-- batas -->
		<div class="box"></div>

		<!-- nama -->
		<div class="weather-app">
			<div class="container">
				<h3>Electrical Engineering</h3>
			</div>
		</div>
	</div>

	<!-- batas -->		
	<div class="menu">
		<div>
			<a href="http://localhost/SKRIPSI_Monitor_1/">
				<span class="material-icons">
					power
				</span>
				<h3>ROOM 1</h3>
			</a>
		</div>

		<div>
			<a href="http://localhost/SKRIPSI_Monitor_2/">
				<span class="material-icons">
					power
				</span>
				<h3>ROOM 2</h3>
			</a>
		</div>

		<div>
			<a href="http://localhost/SKRIPSI_Jadwal_1/">
				<span class="material-icons">
					event
				</span>
				<h3>ROOM 1</h3>
			</a>
		</div>

		<div>
			<a href="http://localhost/SKRIPSI_Jadwal_2/">
				<span class="material-icons">
					event
				</span>
				<h3>ROOM 2</h3>
			</a>
		</div>
	</div>
</body>
</html>