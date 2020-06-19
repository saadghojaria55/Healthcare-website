<?php include '../include/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table>
<?php
$sql = "SELECT * FROM form order by id asc";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) { ?>

    	<h3>Form Database</h3>
        <tr>
	
        <th>ID</th>
        <th>User</th>
        <th>Email</th>
        <th>Company</th>
        <th>Number</th>
        <th>Interest</th>
        <th>Message</th>
        
    </tr>


  <?php 
    while($row = mysqli_fetch_assoc($result)) {?>



   <tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['interest']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td>
 
            </td></tr>
	
	<?php
    }
    }
else {
    echo "No results to display";
}
mysqli_close($conn);
?>

</table>
</body>
