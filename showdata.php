<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$age=$_POST['age'];
$location=$_POST['location'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$skills=$_POST['userskill'];


$con=mysqli_connect("localhost", "root", "admin", "jobproject");


$query="SELECT * FROM `userdetail` where dateposted between date_sub(now(),INTERVAL 1 WEEK) and now()";
		$run= mysqli_query($con,$query);
		$total= mysqli_num_rows($run);
	if ($total!=0) 
	{
		?>
   <table border="1">
   <tr>
   	<th>id</th>
   	<th>fname</th>
   	<th>lname</th>
      <th>email</th>
      <th>age</th>
      <th>location</th>
      <th>gender</th>
      <th>education</th>
      <th>skills</th>
      <th>dateposted</th>
   	</tr>
   	<?php
   	while($row = mysqli_fetch_assoc($run))
   	 {
      echo "<tr><td>".$row['id']."</td>
         <td>".$row['fname']."</td>
           <td>".$row['lname']."</td>
             <td>".$row['email']."</td>
               <td>".$row['age']."</td>
                 <td>".$row['location']."</td>
                   <td>".$row['gender']."</td>
                     <td>".$row['education']."</td>
         <td>".$row['skills']."  </td>
         <td>".$row['dateposted']."  </td>";
        
   }
}
	else
	{
	echo "error";
	}
	
echo "Fetched data successfully\n";
?>
   </table>
