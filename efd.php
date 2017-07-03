<html>
	<head>
		<link rel="stylesheet" href="mainStyles.css">
		<title>Avionic</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet">
	</head>

	<body>
	
	<!-- ######################### Artificial Horizon ################################ -->
		<div id="ah">
			
			<!-- ****** AIR ****** -->
			<div id="ahAboveHorizon" class="horizon">
				
				<div class="ahMarkings ahAir">
					<div class="deg100 ahDeg"><span>60</span></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
				
					<div class="deg100 ahDeg"><span>50</span></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
				
					<div class="deg100 ahDeg"><span>40</span></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					
					<div class="deg100 ahDeg"><span>30</span></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					
					<div class="deg100 ahDeg"><span>20</span></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
				
					<div class="deg100 ahDeg"><span>10</span></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
				</div>
				
			</div>
			
			<!-- ****** GND ****** -->
			<div id="ahBelowHorizon" class="horizon">
			
				<div class="ahMarkings ahGnd">
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg100 ahDeg"><span>10</span></div>
					
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg100 ahDeg"><span>20</span></div>
					
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg100 ahDeg"><span>30</span></div>
					
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg100 ahDeg"><span>40</span></div>
					
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg100 ahDeg"><span>50</span></div>
					
					<div class="deg25 ahDeg"></div>
					<div class="deg50 ahDeg"></div>
					<div class="deg25 ahDeg"></div>
					<div class="deg100 ahDeg"><span>60</span></div>
				</div>
			
			</div>
			
		</div>
		
		<!-- ################################## AH END ###################################### -->
	
		<div class="SPACER"></div>
		
		<!-- ################################### GAUGES ##################################### -->
		
		<main id="avionicsWrapper">
		
			<!-- MARKER BEACON -->
			<div class="markerBeacon outer">O</div>
			<div class="markerBeacon middle">M</div>
			<div class="markerBeacon inner">I</div>

			<!-- AH CENTER -->
			<div id="ahCenterMarkings">
				<div class="ahLeftMarking ahMarkingLine"><div></div></div>
				<div class="ahCenterDot"></div>
				<div class="ahRightMarking ahMarkingLine"><div></div></div>
			</div>

			<!-- Flight Data -->
			<div id="bottomFlightData">

				<!-- GS -->
				<div class="flightDataCont">GS <span>0 kt</span></div>

				<!-- OAT -->
				<div class="flightDataCont">OAT <span>23°C</span></div>

				<!-- WND -->
				<div class="flightDataCont"><img src="img/arrowUpward.svg" class="windVector" alt="Wind Vector"><span>148°/16 kt</span></div>

				<div class="bottomFlightDataExt left">
					<div class="flightDataCont">TAS <span>134 kt</span></div>
				</div>

				<div class="bottomFlightDataExt right">
					<div class="flightDataCont qnh"><span>1014 hPa</span></div>
				</div>
			</div>

			<div id="pfd" class="mainScreen">
				
				<div id="pfdSpeed">
				<div id="pfdSpeedWrapper">
					<div class="speedNumber"><span>0</span></div>
					<div class="speedNumber"><span>10</span></div>
					<div class="speedNumber"><span>20</span></div>
					<div class="speedNumber"><span>30</span></div>
					<div class="speedNumber"><span>40</span></div>
					<div class="speedNumber"><span>50</span></div>
					<div class="speedNumber"><span>60</span></div>
					<div class="speedNumber"><span>70</span></div>
					<div class="speedNumber"><span>80</span></div>
					<div class="speedNumber"><span>90</span></div>
					<div class="speedNumber"><span>100</span></div>
					<div class="speedNumber"><span>110</span></div>
					<div class="speedNumber"><span>120</span></div>
					<div class="speedNumber"><span>130</span></div>
					<div class="speedNumber"><span>140</span></div>
					<div class="speedNumber"><span>150</span></div>
					<div class="speedNumber"><span>160</span></div>
					<div class="speedNumber"><span>170</span></div>
					<div class="speedNumber"><span>180</span></div>
					<div class="speedNumber"><span>190</span></div>
					<div class="speedNumber"><span>200</span></div>
					<div class="speedNumber"><span>210</span></div>
					<div class="speedNumber"><span>220</span></div>
					<div class="speedNumber"><span>230</span></div>
					<div class="speedNumber"><span>240</span></div>
					<div class="speedNumber"><span>250</span></div>
					<div class="speedNumber"><span>260</span></div>
					</div>
				</div>
				
				<div class="speedBox barBox">
					0
					<div class="speedBoxArrow boxArrow"></div>
				</div>
				
				<!-- ALT -->
				<div id="pfdAltitude">
				<div id="pfdAltWrapper">
				
					<?php 
					
						$start = -1000;
						
						for($x = 0; $x < 50; $x++) { // Up to 35.000 ft -> dev is 50
							
							for($i = 0; $i < 5; $i++) {
								if($i == 4) {
									$start += 100;
									print("<div class='pfdAlt alt100'><span>" . $start . "</span></div>");
									continue;
								}
								
								print("<div class='pfdAlt alt20'></div>");
							}
							
						}
					
					?>
				
					<!--<div class="pfdAlt alt100"><span>600</span></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt100"><span>500</span></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt100"><span>400</span></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt100"><span>300</span></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt100"><span>200</span></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt100"><span>100</span></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt20"></div>
					<div class="pfdAlt alt100"><span>0</span></div>-->
					</div>
				</div>
				
				<div class="altBox barBox"><span>0</span><div class="altBoxArrow boxArrow"></div></div>
				
			</div>
			
			<!--</div id="nd" class="mainScreen">
				ND
			</div>-->
		
		</main>
		
		<!-- ####################################### GAU END #################################### -->
		
		<!--<div class="background"></div>-->
		<div class="SPACER"></div>

	<script src="main.js" defer></script>
	<script src="conf.js" defer></script>
		
	</body>

</html>






































