<?php
include "where.php";
?>
<h2>Form<h2>
	<a href="add.php">Back to home</a><br/><br/>
<table border="1" cellspacing="0" cellpadding="5px">
              <tr>
                <th>Id</th>
                <th>First_name</th> 
                <th>Last_name</th>
                <th>Email</th>
                <th>Mobile_no</th>
                <th>Action</th>
              </tr>
              <?php
              $sql = "SELECT id,first_name,last_name,email,mobile_no from form";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0){
              	while ($row=mysqli_fetch_assoc($result)) {
              		# code...
                
              	?>
              
             <tr>
              <td><?=$row['id']?></td>
              <td><?=$row['first_name']?></td>
              <td><?=$row['last_name']?></td>
              <td><?=$row['email']?></td>
              <td><?=$row['mobile_no']?></td>
              <td>
                <a href="edit.php?id=<?=$row['id']?>">Edit</a>
                <a href="delete.php?id=<?=$row['id']?>">Delete</a>
              </td>
            </tr>
            <?php
         }
           }

            ?>
        </table>