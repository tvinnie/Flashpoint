<?php
// Create connection
$con = new mysqli('localhost','root','50651995','style') or die("connection error");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="news.css">
	</head>
<body>
<?php
 //inserts data to the order table
	if(isset($_POST ['sub'])){
		$na=$_POST['name'];
		$lo=$_POST['email'];
		$su=$_POST['telephone'];
		$ca=$_POST['variety'];
		
	
	$sql="INSERT INTO flash(name,email,telephone,variety) VALUES('$na','$lo','$su','$ca')";
	if($con->query($sql)===TRUE)
		
	{
		echo "ORDER SUBMITTED | THANK YOU FOR CHOOSING FLASH~PIZZA";
	}else{
	
		echo "Error: ".$sql . "\n" .$con->error;
	}
}
?></br>
<br>
<a style="align:center; font-size:40px;"href="order.html">TAKE NEW ORDER</a>
<table style="width:50%; float:center; margin-top:15px;">
  <tr align="center">
    <th>ID</th>
     <th>NAME</th>
	  <th>EMAIL</th>
	   <th>TELEPHONE</th>
	    <th>VARIETY</th>
  </tr>
 
  <?php
  $select="SELECT * FROM flash";
  $run= mysqli_query($con,$select);
  while($row = mysqli_fetch_array($run)){
	   $uid=$row['id'];
	  $name=$row['name'];
	   $mail=$row['email'];
	    $tel=$row['telephone'];
		 $var=$row['variety'];
  }
  ?>
  <tr style="float:center; text-align:center;">
   <td><?php echo $uid ?></td>
   <td><?php echo $name?></td>
    <td><?php echo $mail?></td>
	 <td><?php echo $tel?></td>
	  <td><?php echo $var?></td>
  </tr>
</table>
<?php
//inserts data into the contact table
if(isset($_POST ['subs'])){
		$a=$_POST['name'];
		$o=$_POST['email'];
		$u=$_POST['telephone'];
		$wa=$_POST['message'];
		
	
	$sql="INSERT INTO styl(name,email,telephone,message) VALUES('$a','$o','$u','$wa')";
	if($con->query($sql)===TRUE)
		
	{
		echo "ORDER SUBMITTED | THANK YOU FOR CHOOSING FLASH~PIZZA";
	}else{
	
		echo "Error: ".$sql . "\n" .$con->error;
	}
}
?>
</body>
</html>