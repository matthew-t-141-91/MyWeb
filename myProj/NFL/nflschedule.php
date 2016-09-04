<!DOCTYPE HTML>
<?php
	class game{
		private $team1;
		private $team2;
		private $time;
		private $day;
		
		function __construct($team1_, $team2_, $time_, $day_){
			$this->team1 = $team1_;
			$this->team2 = $team2_;
			$this->time = $time_;
			$this->day = $day_;
		}
		
		public function getTeam1(){
			return $this->team1;
		}
		public function getTime(){
			return $this->time;
		}
		public function getDay(){
			return $this->day;
		}
		public function getTeam2(){
			return $this->team2;
		}
	}
	
	$game1 = new game("Carolina", "Denver", "8:30","09/08");
	$game2 = new game("Tampa Bay", "Atlanta", "1:00", "09/11");
	$game3 = new game("Buffalo", "Baltimore", "1:00", "09/11");
	$game4 = new game("Chicago", "Houston", "1:00", "09/11");
	$game5 = new game("Green Bay", "Jacksonville", "1:00", "09/11");
	$game6 = new game("San Diego", "Kansas City", "1:00", "09/11");
	$game7 = new game("Oakland", "New Orleans", "1:00", "09/11");
	$game8 = new game("Cincinatti", "New York Jets", "1:00", "09/11");
	$game9 = new game("Cleveland", "Philadelphia", "1:00", "09/11");
	$game10 = new game("Minnesota", "Tennessee", "1:00", "09/11");
	$game11 = new game("Miami", "Seattle", "4:05", "09/11");
	$game12 = new game("New York Giants", "Dallas", "4:25", "09/11");
	$game13 = new game("Detroit", "Indiannapolis", "4:25", "09/11");
	$game14 = new game("New England", "Arizona", "8:30", "09/11");
	$game15 = new game("Pittsburgh", "Washington", "7:10", "09/12");
	$game16 = new game("Los Angeles", "San Francisco", "10:20", "09/12");
	
	$games = array($game1, $game2, $game3, $game4, $game5, $game6, $game7,
				   $game8, $game9, $game10, $game11, $game12, $game13, $game14,
				   $game15, $game16
				   );
?>

<html>
	<head>
		<title>NFL season schedule</title>
		<style>
			body{
				background-color: white;
			}
			img{
				width: 300px;
				height: auto;
				float: left;
			}
			.Schedule, th, td{
				border: 1px solid black;
				padding: 5px;
			}
			.Schedule{
				width: auto;
				height: auto;
			}
			ul{
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #111;
			}
			li{
				float: right;
			}
			li a{
				display: inline-block;
				color: white;
				text-align: ceneter;
				padding: 14px 16px;
			}
			li a:hover{
				background-color: #111;
			}
		</style>
	</head>
	<body>
		<div id="Container">
			<div id="SideBar">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#politics">Politics</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#about">About</a></li>
				</ul>
			</div>
			<div id="Schedule_Div">
				<img src="trophy.jpg" alt="The Prize" align="middle">
				<h3 align="left">Schedule</h3>
				 <table id="Schedule">
					<th>Week 1</th>
					<tr>
						<th>Teams</th>
						<th>Time</th>
						<th>Day</th>
					</tr>
					<?php
						for($i = 0; $i < 16; $i++){
							echo "<tr>";
							echo "<td>";
							echo $games[$i]->getTeam1() . " at " . $games[$i]->getTeam2();
							echo "</td>";
							echo "<td>";
							echo $games[$i]->getTime();
							echo "</td>";
							echo "<td>";
							echo $games[$i]->getDay();
							echo "</td>";
							echo "</tr>";
						}
					?>
				 </table>
			</div>
		</div>
	</body>
</html>;
