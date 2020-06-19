<?php include '../include/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
        <?php
        $sql = "SELECT * FROM categories order by id asc";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) { ?>


        <h3>Catgories List</h3>

        
        <tr>

            <th>ID</th>
            <th>Category Name</th>
           
            <th>Image Source</th>
             <th>Caption</th>
            <th>Link</th>


          
        </tr>


        <?php 
        while($row = mysqli_fetch_assoc($result)) {?>



        <tr>

         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['category_name']; ?></td>
         <td><?php echo $row['image_source']; ?></td>
         <td><?php echo $row['caption']; ?></td>
         <td><?php echo $row['link']; ?></td>
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
