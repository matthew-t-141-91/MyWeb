<!DOCTYPE HTML>
	<html>
		<head>
			<title>MY HOMEPAGE</title>
			<style>
				#SidebarList{
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
					text-align: center;
					padding: 14px 16px;
				}
				li a:hover{
					background-color: #111;
				}
				div.Slashdot_Links{
					float: left;
				}
				div.Digg_Links{
					float: right;
				}
			</style>
		</head>
		<body>
			<div class="sidebar">
				<ul id="SidebarList">
					<li><a href="./home.php">Home</a></li>
					<li><a href="./about.html">About</a></li>
				</ul>
			</div>
			<div class="Digg_Links">
				<?php		
					require_once('./classes/rss.php');
					$digg_rss = new Rss('https://feeds.feedburner.com/digg/PGbI');
					$digg_rss->parse_feed();
					$titles = $digg_rss->getTitles();
					$links = $digg_rss->getLinks();
					$descriptions = $digg_rss->getDescriptions();
					echo "<h3>" . $titles[0] . "</h3>";
					for($i=1; $i < 6; $i++){
						echo "<p><a href=\"" . $links[$i] . "\">" . $titles[$i] . "</a></p>"; 
					}	
				?>
			</div>
			<div class="Slashdot_Links">
				<?php		
					require_once('./classes/rss.php');
					$slash_rss = new Rss('https://feeds.feedburner.com/slashdot/LcII');
					$slash_rss->parse_feed();
					$titles = $slash_rss->getTitles();
					$links = $slash_rss->getLinks();
					echo "<h3>" . $titles[0] . "</h3>";
					for($i=1; $i < 6; $i++){
						echo "<p><a href=\"" . $links[$i] . "\">" . $titles[$i] . "</a></p>"; 
					}	
				?>
			</div>
		</body>
	</html>