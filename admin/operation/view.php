<?php 
include '../include/connection.php';?>
<!DOCTYPE html>
<html>
<head>
</head>
 <table>
        <?php
        $id=$_POST['id'];
        $sql = "SELECT * FROM products WHERE id=$id ";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) { ?>
          <h3>Products Database</h3>
 <tr>

            <th>Tag</th>
            <th>Caption</th>
            <th>Image Source</th>
           <th>Category Tag</th>

        </tr>
          <?php 
        while($row = mysqli_fetch_assoc($result)) {?>

        <tr>

         <td><?php echo $row['tag']; ?></td>
         <td><?php echo $row['caption']; ?></td>
         <td><?php echo "<img src=../category-1/images/" .$row['img_src'] .">"; ?></td>
        <td><?php echo $row['cat_tag']; ?></td>

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

  <body>

</body>
</html>