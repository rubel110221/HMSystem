<?php 	
										mysql_connect('localhost','root','') or die(mysql_error());
     									mysql_select_db("square_database" );

     									$query = "SELECT * FROM physicians";
     									$result = mysql_query($query);

     									$oddEven=0;
     									while($row = mysql_fetch_array($result))
     									{
     										if($oddEven%2==0)
     										{
     											echo "<tr class='odd'>";
 
     											echo "<td>".'<img src="data:image/jpeg;base64,' . base64_encode($row['picture_data']) . '" width="55" height="65">'."</td>";
     											$title=$row['name'];
												echo "<td>"."<a href='' title='$title'>".$row['name']. "</a>"."</td>";
												echo "<td>".$row['designation']."</td>";
												echo "<td>".$row['department']."</td>";
												echo "</tr>";
												$oddEven++;
     										}
     										else
     										{
     											echo "<tr class='even'>";
     											echo "<td>".'<img src="data:image/jpeg;base64,' . base64_encode($row['picture_data']) . '" width="65" height="65">'."</td>";
     											$title=$row['name'];
												echo "<td>"."<a href='' title='$title'>".$row['name']. "</a>"."</td>";
												echo "<td>".$row['designation']."</td>";
												echo "<td>".$row['department']."</td>";
												echo "</tr>";
												$oddEven++;
     										}
     									}

     									?>