
		<div id="appoinment_list">
			
			<p><h3>Patient List</h3></p>
		            
					<?php 	

						mysql_connect('localhost','root','') or die(mysql_error());
				     	mysql_select_db("square_database" );
				     	$query = "SELECT * FROM appointment ";
				     	$result = mysql_query($query);
				     	while($row = mysql_fetch_array($result))
     				   		{
     		
     			     		echo "<div>";
								echo "<ul id='appointment_border'>";
								echo"<li>";
								echo "Patient Name: ".$row['name'];
								echo "</li>";
								echo"<li>";
								echo "Mobile No: ".$row['mobile'];
								echo"</li>";
								echo"<li>";
								echo "Age: ".$row['age'];
								echo"</li>";
								echo"<li>";
								echo "Email ID: ".$row['email'];
								echo"</li>";
								echo"<li>";
								echo "Doctor: ".$row['doctor'];
								echo"</li>";
								echo"<li>";
								echo "Schedule Time: ".$row['schedule_time'];
								echo"</li>";
								echo "</ul>";
							echo "</div>";
     			    
     				}

				?>
        </div>
	
