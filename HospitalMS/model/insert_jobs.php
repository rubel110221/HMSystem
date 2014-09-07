<?php 	
										mysql_connect('localhost','root','') or die(mysql_error());
     									mysql_select_db("square_database" );

     									$query = "SELECT * FROM career";
     									$result = mysql_query($query);

     									$count=0;
     									while($row = mysql_fetch_array($result))
     									{
     			
     										{
     											echo "<tr class='career_td'>";
												echo "<td>"."<a href=''>".$row['title']. "</a>"."</td>";
												echo "</tr>";
												$count++;
     										}
     										
     									}

     									?>