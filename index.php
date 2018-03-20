
<!DOCTYPE HTML>

<?php
	include('db_login.php');
	session_start();
	$connection = new mysqli($db_host, $db_username, $db_password);
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysql_error());
	}
	mysqli_select_db($connection,'book');
	
	if(isset($_POST['aa']))
{

    $s=$_POST['from'];
    $d=$_POST['to'];
    
    echo $s,$d;
} 
    
   /* $query = "UPDATE seat SET feedback = '".$feed."' where 	PNR = '".$pnr."'";
    $result= mysqli_query($conn,$query);
              $echo = 'Submitted Succesfully';
              echo "<script type='text/javascript'>alert('$echo');</script>"; 
              } */
?>

<HTML>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 50px 150px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 12px 3px;
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

</style>

	<HEAD>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bus Ticket Booking</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/datepicker.css" />
	</HEAD>
	<div style =" width:1400px; height:100px; margin-left:px; background-color:black; position:relative; top:0px;"><center>
    <center><br><font color = white><H1>WELCOME TO DECCAN ROADWAYS</H1></div></font></center>
	<BODY>
	  
		<br>
		<div class="container">
				<div class="span10">
					<form action="seat.php" method="POST">
						<center>
						    <div style =" width:400px; height:300px; float:left; background-color: #FFE4B5;">
						    <br><label>From</Label><div> 
							<select name="from" required>
							<option value="Delhi">Delhi</option>
							<option value="Lucknow">Lucknow</option>
							</select>
						    </div>
						    <label>To</Label><div><value="" name="to" required>
						    <select name="to" required>
							<option value="Delhi">Delhi</option>
							<option value="Lucknow">Lucknow</option>
							</select>
						    </div>
							<label>Date of Journey</label>
							<div data-date-format="yyyy-mm-dd" data-date="document.write(date())" class="input-append date myDatepicker">
							    <input type="text" value="" name="doj" size="16" class="span2" required>
							
							    <span class="add-on"><i class="icon-calendar"></i></span>
							</div>

                  
							<!--<input type="date" class="span2" name="doj" placeholder="YYYY-MM-DD" required/>-->
							<br><br>
							<button type="submit" class="btn btn-info" name="aa">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
							<a href="./login.php" class="btn btn-danger"><i class="icon-remove icon-white"></i> Cancel Ticket </a>
						</center>
					</form>
				</div>
			</div>
		</div>
          <div style =" width:767px; height:300px; margin-left:535px; background-image:url('img/bus.jpg'); background-position:center;background-repeat:no-repeat; position:relative; top:-300px;"></div>
          <div style =" width:1175px; height:30px; margin-left:127px; background-color:#E6FF99; position:relative; bottom:290px;"><marquee>Buses from Delhi to Chandigarh are not running due to strike</marquee></div>
		  <div style =" width:767px; height:300px; margin-left:127px; background-color:#fffc6d; position:relative; bottom:290px;"><h4><center>
		  <br><font color = #e81b1b>FREQUENTLY ASKED QUESTION</font></center></h4>
		  <b>&emsp;What are the advantages of purchasing a bus ticket with Deccan Travels</b><br>
          &emsp;Deccan Roadways is India's largest bus tickets company and therefore, you will find the largest option of bus seats on the <br>&emsp;site.<br>&emsp;Some of the advantages of dealing with us are:<br> 

&emsp;-    You can choose your seat
<br>&emsp;-    You can book your bus tickets online, by phone, or in person
<br>&emsp;-    You can choose from over 1500+ bus operators
<br>&emsp;-    You can choose from buses based on boarding points, timing and bus type<br>

<b><br>&emsp;Do I need to register to use redBus?</b>

<br>&emsp;No, redBus does not require its customers to go through a registration process		  
		  </div>
		  <div style =" width:400px; height:300px; margin-left:900px; background-color:white; position:relative; bottom:600px;"><h4><center>
		  <button class="button button1"  onclick="window.open('feedback.php')">FEEDBACKS</button>
          <button class="button button2" onclick="window.open('Complaints.php')">C0MPLAINT</button>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<script>
			$('.myDatepicker').each(function() {
			    var minDate = new Date();
			    minDate.setHours(0);
			    minDate.setMinutes(0);
			    minDate.setSeconds(0,0);
			    
			    var $picker = $(this);
			    $picker.datepicker();
			    
			    var pickerObject = $picker.data('datepicker');
			    
			    $picker.on('changeDate', function(ev){
			        if (ev.date.valueOf() < minDate.valueOf()){
			            
			            // Handle previous date
			            alert('You can not select past date.');
			            pickerObject.setValue(minDate);
			            
			            // And this for later versions (in case)
			            ev.preventDefault();
			            return false;
			        }
			    });
			});					
		</script>
	</BODY>
	<footer margin-bottom: 0px;>
	 <div style =" width:1400px; height:100px; margin-left:-945px; background-color:black; position:relative; top:25px; "><center>
  <p><br><font color="white">Copyright @deccan_roadways_2017</p>
  <p>Contact information: <a href="mailto:admin@deccan.com">
  admin@deccan.com</a>.</font></p></div>
</footer>
</HTML>