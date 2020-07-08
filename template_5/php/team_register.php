<?php 
	include('connect.php');
	
	$college_name = $_POST['college_name'];
	$college_address = $_POST['college_addr'];
	$coding_participant_name = $_POST['coding_participant_name'];
	$coding_participant_no = $_POST['coding_participant_no'];
	$webdesign_participant_name = $_POST['webdesign_participant_name'];
	$webdesign_participant_no = $_POST['webdesign_participant_no'];
	$quiz_participant_name = $_POST['quiz_participant_name'];
	$quiz_participant_no = $_POST['quiz_participant_no'];
	$itparliament_participant_name = $_POST['itparliament_participant_name'];
	$itparliament_participant_no = $_POST['itparliament_participant_no'];
	$treasurehunter_participant_name_1 = $_POST['treasurehunter_participant_name_1'];
	$treasurehunter_participant_no_1 = $_POST['treasurehunter_participant_no_1'];
	$treasurehunter_participant_name_2 = $_POST['treasurehunter_participant_name_2'];
	$treasurehunter_participant_no_2 = $_POST['treasurehunter_participant_no_2'];
	$appdesign_participant_name = $_POST['appdesign_participant_name'];
	$appdesign_participant_no = $_POST['appdesign_participant_no'];
	$bestitmanager_participant_name = $_POST['bestitmanager_participant_name'];
	$bestitmanager_participant_no = $_POST['bestitmanager_participant_no'];
	$ittechhost_participant_name = $_POST['ittechhost_participant_name'];
	$ittechhost_participant_no = $_POST['ittechhost_participant_no'];
	$megaevent_participant_name = $_POST['megaevent_participant_name'];
	$megaevent_participant_no = $_POST['megaevent_participant_no'];
	$team_accomodation = $_POST['team_accomodation'];
	$registration_date = date("Y/m/d");
	
	// insert into register table
	mysql_query("INSERT INTO college_registered(college_name, college_address, accomodation_request, registration_date) VALUES 
	('$college_name','$college_address','$team_accomodation','$registration_date')")or die(mysql_error());
		
	// coding
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$coding_participant_name','$coding_participant_no','$college_name','CODING')")or die(mysql_error());
		
	// web design
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$webdesign_participant_name','$webdesign_participant_no','$college_name','WEB DESIGN')")or die(mysql_error());
		
	// it quiz
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$quiz_participant_name','$quiz_participant_no','$college_name','IT QUIZ')")or die(mysql_error());
		
	// it parliament
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$itparliament_participant_name','$itparliament_participant_no','$college_name','TOGGLE TALK')")or die(mysql_error());

	// treasureHunter1
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$treasurehunter_participant_name_1','$treasurehunter_participant_no_1','$college_name','TREASURE HUNTER')")or die(mysql_error());

	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$treasurehunter_participant_name_2','$treasurehunter_participant_no_2','$college_name','TREASURE HUNTER')")or die(mysql_error());
		
	// app design
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$appdesign_participant_name','$appdesign_participant_no','$college_name','APP DEVELOPMENT')")or die(mysql_error());
		
	// best it manager
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$bestitmanager_participant_name','$bestitmanager_participant_no','$college_name','BEST IT MANAGER')")or die(mysql_error());
		
	// it tech host
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$ittechhost_participant_name','$ittechhost_participant_no','$college_name','IT TECH HOST')")or die(mysql_error());	
		
	// mega event
	mysql_query("INSERT INTO participant(
		participant_name,participant_mobile,participant_college,participant_event) 
		VALUES ('$megaevent_participant_name','$megaevent_participant_no','$college_name','MEGA EVENT')")or die(mysql_error());		
?>

<html>
<head>
	<title>Joshiana 7.0 printout</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body>
	<div id="print_out">
		<div class="col-md-12 text-center title">
			<div class="col-md-12" style="text-align:center;">
				<h2><b>JOSHIANA 7.0</b></h3>
				<h4>AN INTER COLLEGE IT FEST ORGANISED BY DEPARTMENT OF MCA</h4>
			</div>  
						
			<div class="col-md-12" style="text-align:center; padding-top: 40px; padding-bottom: 20px;">
				<h4><b>COLLEGE NAME</b></h4>
				<h4><?php echo $college_name; ?></h4>
			</div> 
			
			<div class="col-md-12" style="text-align:center;">
				<table class="table table-striped table-bordered table-reflow">
					<thead class="thead-inverse">
						<tr>
							<th>NO</th>
							<th>EVENT</th>
							<th>PARTICIPANT NAME</th>
							<th>MOBILE</th>
							<th>SIGNATURE</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>CODING</td>
							<td><?php echo $coding_participant_name; ?></td>
							<td><?php echo $coding_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>WEB DESIGN</td>
							<td><?php echo $webdesign_participant_name; ?></td>
							<td><?php echo $webdesign_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>IT QUIZ</td>
							<td><?php echo $quiz_participant_name; ?></td>
							<td><?php echo $quiz_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>4</td>
							<td>APP DEVELOPMENT</td>
							<td><?php echo $appdesign_participant_name; ?></td>
							<td><?php echo $appdesign_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>5</td>
							<td>TREASURE HUNTER [ male ]</td>
							<td><?php echo $treasurehunter_participant_name_1; ?></td>
							<td><?php echo $treasurehunter_participant_no_1; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>5</td>
							<td>TREASURE HUNTER [ female ]</td>
							<td><?php echo $treasurehunter_participant_name_2; ?></td>
							<td><?php echo $treasurehunter_participant_no_2; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>6</td>
							<td>IT QUIZ</td>
							<td><?php echo $appdesign_participant_name; ?></td>
							<td><?php echo $appdesign_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>7</td>
							<td>IT TECH HOST</td>
							<td><?php echo $ittechhost_participant_name; ?></td>
							<td><?php echo $ittechhost_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>8</td>
							<td>MEGA EVENT</td>
							<td><?php echo $megaevent_participant_name; ?></td>
							<td><?php echo $megaevent_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>9</td>
							<td>BEST MANAGER</td>
							<td><?php echo $bestitmanager_participant_name; ?></td>
							<td><?php echo $bestitmanager_participant_no; ?></td>
							<td></td>
						</tr>
						
						<tr>
							<td>10</td>
							<td>CULTURALS</td>
							<td></td>
							<td >ALL PARTICIPANTS</td>
							<td></td>
						</tr>
						
					</tbody>
				</table>
			</div> 
		</div>
		
		<div class="col-md-12 text-center title" style="padding:30px;">
			<h4><b>VENUE</b><br>ST JOSEPH ENGINEERING COLLEGE, MANGALURU</h4>
			<br>
			<h4><b>DATE & TIME</b><br>SEPTEMBER 27 & 28, 9:00 AM</h4>
		</div>
		
		<div class="col-md-12 text-center title" style="padding:30px;">
			<div class="alert-success" role="alert"><b>NOTE : </b>Please bring this printed sheet to joshiana 7.0 without fail!</div>
		</div>
	</div>
	
	<br><br><br>
	
	<div class="col-md-12 title" style="padding:30px;">
		<div class="col-md-12 title" style="padding:30px;">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><b>Rules and regulations</b></div>
				<div class="panel-body">
					<p>1. Open for MCA, MSc, MTech and BE(CS & IS) student only</p>
					<p>2. Maximum number of participants per team: 11</p>
					<p>3. Registration fee is 1100/- per team</p>
					<p>4. Any numbre of team can participant from a college</p>
					<p>5. Team can be formed by combining the students from the above specified departments</p>
					<p>6. The institution reserves the right to take any action in case of misconduct</p>
					<p>7. Possession of college ID cards and permission letter from the college is mandatory</p>
					<p>8. Accomodation can be availed on prior intimidation(1 week)</p>
					<p>9. Judges decision will be the final verdict</p>
					<p>10. No travel allowance will be given</p>
					<p>11. Participants need to participate in all the 10 events to achieve overall champions</p>
					<p>12. All participants must be present in the campus on both the days, as a surprise may awaiting them</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
