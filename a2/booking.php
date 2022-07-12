<html>
	
	<body>
	
	<img width="200px" height="auto" src="https://titan.csit.rmit.edu.au/~s3918372/media/now_show.png" alt="Now Showing" align="left"> <br><br><br><br><br>
	<iframe width="auto" height="auto" src="https://www.youtube.com/embed/F8XZTDnR4-4" title="Top Gun: Maverick" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="auto" height="auto" src="https://www.youtube.com/embed/EtcX0XUVPFc" title="Mrs Harris goes to Paris" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="auto" height="auto" src="https://www.youtube.com/embed/tjcrjrX9Nfo" title="Lightyear" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="auto" height="auto" src="https://www.youtube.com/embed/33-CQdPHyjw" title="Prithviraj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
	
	
	<div id="booking">		
		<div class="align_right">
			<form method="post">
			
				<div class="style2">
					<u>
						Book movie
					</u>
				</div>
			
			
				<div class="style1">
					Name : <input type="text" name="name" style="width: 192px; height: 22px;" required="required">
				</div>
				



				
				<div class="style1">
					Age : <input type="Number" name="age" style="width: 40px; height: 22px;" required="required">
					E-mail: <input type="text" name="email" style="width: 107px; height: 22px;" required="required"> <br>
					Phone: <input type="text" name="mobile" style="width: 192px; height: 22px;" required="required">
				</div>
				


				



				<div class="style1">
				
					<br><br>
				
					Movie:
					<select name="movie" style="width: 200px; height: 22px;" required="required">
						<option value="">Please select</option>
						<option value="ACT">Top Gun: Maverick</option>
						<option value="RMC">Mrs Harris goes to Paris</option>
						<option value="FAM">Lightyear</option>
						<option value="AHF">Prithviraj</option>
					</select> <br>
					
					Seat:
					<select name="seat" style="width: 200px; height: 22px;" required="required">
						<option value="">Please select</option>
						<option value="STA">Standard Adult ($20.50)</option>
						<option value="STP">Standard Concession ($18.00)</option>
						<option value="STC">Standard Child ($16.50)</option>
						<option value="FCA">First Class Adult ($30.00)</option>
						<option value="FCP">First Class Concession ($27.00)</option>
						<option value="FCC">First Class Child ($24.00)</option>					
					</select>
					
				</div>
				
				

				
				
				<div class="style1">
					Pick a date and time: <input type="datetime-local" name="time" style="width: 195px; height: 22px;" required="required">
				</div>
				
				
				
				<br>
				<p>
					<u>
						<b>
							Choose a time:
						</b>
					</u>
				</p>
				<input type="radio" id="radio1" name = "clock" value="Monday"> Anytime Monday (Discount up to 30%) </br>
				<input type="radio" id="radio1" name = "clock" value="12pm_Weekday"> 12:00 Weekday (Discount up to 30%) </br>
				<input type="radio" id="radio1" name = "clock" value="3pm"> 15:00 </br>
				<input type="radio" id="radio1" name = "clock" value="6pm"> 18:00 </br>
				<input type="radio" id="radio1" name = "clock" value="9pm" required="required"> 21:00 </br>

				

				
				<div class="style2">
					<br>
						<u>
							Billing Details
						</u>
				</div>
				
				
				<div class="style1">
					Name on card : <input type="text" name="bill_name" style="width: 192px; height: 22px;" required="required">
					<br>
					Street Address: <input type="text" name="address" style="width: 192px; height: 22px;" required="required">
				</div>
				

				
				<div class="style1">
					<br>
					Card Number: <input type="text" name="cd_num" style="width: 192px; height: 22px;" required="required">
					<br>
					CCV: <input type="text" name="ccv" style="width: 30px; height: 22px;" required="required">
					
					State:
					<select name="state" style="width: 105px; height: 22px;" required="required">
						<option value="state">Select a state</option>
						<option value="VIC">VIC</option>
						<option value="NSW">NSW</option>
						<option value="QLD">QLD</option>
						<option value="NT">NT</option>
						<option value="WA">WA</option>
						<option value="SA">SA</option>
						<option value="ACT">ACT</option>
						<option value="TAS">TAS</option>
					</select>
				
				
				</div>
			

				

				<input type="submit" name="Submit">
				

			</form>
		</div>
			
	</div>
	
	</div>			
				
			


	
	
	</body>
	
	
	</html>
	
	
	<?php
	error_reporting(0);
				  
		$name=$_POST['name']; 
		$age=$_POST['age'];
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
		$movie=$_POST['movie'];
		$seat=$_POST['seat'];
		$time=$_POST['time'];
		$clock=$_POST['clock'];
		$bill_name=$_POST['bill_name'];
		$addr=$_POST['address'];
		$cd_num=$_POST['cd_num'];
		$ccv=$_POST['ccv'];
		$stt=$_POST['state'];
		
		
		
		$fp = fopen('data.txt', 'a');

		fwrite($fp, $name);
		fwrite($fp, ",");
		fwrite($fp, $age);
		fwrite($fp, ",");
		fwrite($fp, $email);
		fwrite($fp, ",");
		fwrite($fp, $phone);
		fwrite($fp, ",");
		fwrite($fp, $movie);
		fwrite($fp, ",");
		fwrite($fp, $seat);
		fwrite($fp, ",");
		fwrite($fp, $time);
		fwrite($fp, ",");
		fwrite($fp, $bill_name);
		fwrite($fp, ",");
		fwrite($fp, $addr);
		fwrite($fp, ",");
		fwrite($fp, $cd_num);
		fwrite($fp, ",");
		fwrite($fp, $ccv);
		fwrite($fp, ",");
		fwrite($fp, $stt);
		fwrite($fp, "\n");
		
		
		fclose($fp);
		
		
	?>

