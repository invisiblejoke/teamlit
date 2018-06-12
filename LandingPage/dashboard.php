<?php
require_once "uq/auth.php";
auth_require();
include("functions.php");


$dbhandle = new mysqli('localhost','pma','Serene2metric&Bosom','Informative_Product');
echo $dbhandle->connect_error;

$query = "SELECT name, num FROM shareCounter";
$res = $dbhandle->query($query);
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">


	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Social Media Type', 'Total Shared'],

		<?php
		while($row=$res->fetch_assoc())
			{
			 echo "['".$row['name']."',".$row['num']."],";
			}
		        
		?>
        ]);

        var options = {
          title: 'Shared Social Network'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>




</head>
<body>
<div class="container">
		<!-- Navigation bar -->
		<div class="navbar">
				<h2> 
				<b>Welcome!</b>
				</h2>
				<br>
				<h2>One Search Library Dashboard</h2>
			
			<div class="menulist">
				<div class="menulistinner">
					<hr>
					<a href="#daily">
						<h3 id="menuitem">
						<b>Today's Summary</b>
						</h3>
					</a>
					<hr>
					<hr>
					<a href="#sub">
						<h3 id="menuitem">
						<b>View Subsribers</b>
						</h3>
					</a>
					<hr>
				</div>
			</div>
		</div>
				<div class="daily" id="daily">
					<div class="dailytop">
						<div class="dailytopleft">
							<h3 class="sectionTitle"><b>Today's Summary:</b></h3>
							<div style="margin-left:10%; margin-top: 30px;">
							
								<h7>Total Shared: <?php
								$tsvalue=getTotalSharedCounter();
								echo $tsvalue; ?>
								</h7>

								<br>

								<h7>Total Visitors:  <?php
								$tvvalue=getTotalViewerCount();
								echo $tvvalue; ?>
								</h7>

								<br>

								<h7>Today's Visitors: <?php
								$vvalue=getTodayViewerCount(); 
								echo $vvalue; ?></h7> 
								
							</div>
						</div>
						<div class="dailytopcenter">
							<div id="piechart" style="width: 700px; height: 500px;"></div>
						</div>
					</div>

				</div>

			<div class="sub" id="sub">
				<div class="subtop">
					<div class="subtopleft">
						<h2 class="sectionTitleSub"><b>View Subscribers:</b></h2>
					</div>
				</div>
				<div class="submid">
					<div class="submidtable">
						<!-- Subscriptions Table Here -->
						<table class="tg">
							<!-- <tr>
								<th class="tg-sd1">Number</th>
								<th class="tg-sd2">Date Subscribed</th>
								<th class="tg-sd3">Full Name</th>
								<th class="tg-sd4">E-mail</th>
							</tr> -->
							
						<tbody>
						<tr>
						<th class="tg-sd1">Number</th>
						<th class="tg-sd2">Date Subscribed</th>
						<th class="tg-sd3">Full Name</th>
						<th class="tg-sd4">E-mail</th>
						</tr>
						<?php

						$table = getSubscriber();
						echo $table;

						?>
						</tbody>
						</table>
					</div>
				</div>
				<div class="subbottom">
					<h3 id="totalsubscription">Total Subscribers: <?php
								$svalue=getTotalSubscriber();
								echo $svalue; ?></h3>
					<!-- <button type="button" class="btn btn-default" id="email"><strong>E-mail Subscribers</strong></button> -->
				</div>
			</div>
</div>

</body>
</html>
