<?php include '../include/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
        <?php
        $sql = "SELECT * FROM products order by id asc";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) { ?>


        <h3>Products List</h3>

        
        <tr>

            <th>ID</th>
            <th>Tag</th>
            <th>Caption</th>
            <th>Image Source</th>
            <th>Category Tag</th>


          
        </tr>


        <?php 
        while($row = mysqli_fetch_assoc($result)) {?>



        <tr>

         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['tag']; ?></td>
         <td><?php echo $row['caption']; ?></td>
         <td><?php echo $row['img_src']; ?></td>
         <td><?php echo $row['cat_tag']; ?></td>
         <td>

         <a  style="cursor:pointer;color:blue;" onclick="updatefetch('<?php echo $row['id'];?>')">Update</a>
           <a style="cursor:pointer;color:blue;" id="delete" onclick="deleterecord(<?php echo $row['id']; ?>)" >Delete</a>
           <a style="cursor:pointer;color:blue;" id="delete" href="view.php?id=<?php echo $row['id']; ?>" >View</a>

       </td>





   </tr>

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
<script >


</script>
