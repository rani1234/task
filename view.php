<?php
include 'connection.php';




?>
<html>
<head>
</head>
<body>
<table border="1" >
<tr><th>VIEWS</th><th>USERS</th><th>SALES</th><th>PRODUCTS</th><th>INFO</th></tr>
<?php 
$sql="select * from view_tb ";
$result=mysql_query($sql);
while ($row=mysql_fetch_array($result))
{	
?>
<tr><td><?php echo $row['id']?></td><td><?php echo $row['views']?></td><td><?php echo $row['users']?></td><td><?php echo $row['sales']?></td><td><?php echo $row['products']?></td><td><?php echo $row['info']?></td></tr>
<?php } ?>
</table>

</body>
<html>
