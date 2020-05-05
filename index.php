<?php
require "backend/index_ctrl.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Covid19 Updates</title>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/util.css">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link href="css/addons/flag.min.css" rel="stylesheet">
  
</head>
<body>
<div class="entire-wrapper">
<!-----------------------BODY TEXT---------------------------------------->
 <div class="body-wrapper">
	 <div class="body-content">
		 <div class="covid-cases">
			<h3>Coronavirus Cases</h3>
			<span class="number"> <?php echo number_format($global->TotalConfirmed)?></span> <br>
			<!-- <a href="">view by country</a> <br> <br> -->
			<h3>Deaths:</h3>
			<span class="number deaths"> <?php echo number_format($global->TotalDeaths)?></span> <br> <br>
			<h3 >Recovered:</h3>
			<span class="number recovered"> <?php echo number_format($global->TotalRecovered)?></span>
		 </div>
		 <!-- <div class="cases-holder">
			<div class="active-cases">
				<h3>Active Cases</h3>
				<span class="number">2,077,963</span>
				<p class="p">Currently Infected Patients</p>
				<div class="patients">
					
				<span class="blue-fig">2,026,605 <span class="txt">(98%)</span> 
				<p class="txt">in Mild Condition</p>	</span>	

			<span class="other">51,358 <span class="txt">(2%)</span> 
				<p class="txt">Serious or Critical</p>	 </span>		
				</div>
			</div> -->
		
<!-- 			
			<div class="closed-cases">
			
				<h3>Closed Cases</h3>
				<span class="number">1,323,431</span>
				<p class="p">Cases which had an outcome:</p>
				<div class="patients">
					
				<span class="green-fig">1,083,816 <span class="txt">(82%)</span> 
				<p class="txt">Recovered/Discharged</p>	</span>	

			<span class="val">251,358 <span class="txt">(18%)</span> 
				<p class="txt">Deaths</p>	 </span>		
				</div></div> -->
			</div>
			</div>
		</div>



<!-- ------------------------TABLE CONTENT----------------------------- -->

  
<div style="overflow-x:auto;">
	<table>
	  <tr>
		<th>Country Other</th>
		<th>Total Cases</th>
		<th>New Cases</th>
		<th>Total Deaths</th>
		<th>New Deaths</th>
		<th>Total Recovered</th>
		<!-- <th>Active Cases</th>
		<th>Serious Critical</th>
		<th>Total Tests</th> -->
		
	  </tr>

	  <?php 
		foreach ($countries as $c) {
	  ?>
	  <tr>
		<td><?php echo getFlag($c->CountryCode) ?> <?php echo $c->Country ?></td>
		<td id="totalCases"><?php echo $c->TotalConfirmed ?></td>
		<td id="NewCases"><?php echo $c->NewConfirmed  ?></td>
		<td id="TotalDeaths"><?php echo $c->TotalDeaths ?></td>
		<td id="NewDeaths"><?php echo  $c->NewDeaths ?></td>
		<td id="TotalRecovered"><?php echo $c->TotalRecovered ?></td>
		<!-- <td id="ActiveCases">50</td>
		<td id="SeriousCritical">50</td>
		<td id="TotalTests">50</td> -->
	  </tr>


		<?php } ?>


	  
	  
	</table>



  </div>



  <footer class="footer-container">
			  <span>Designed By @dheuglygram</span>
		  </div>
	  </footer>

	</div>


	 </div>

 









<!--------------------------END OF TABLE------------------------------------->
	

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
