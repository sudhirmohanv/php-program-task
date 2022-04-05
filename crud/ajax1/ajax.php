<!DOCTYPE html>
<html lang="en">
   <head>
   </head>
   <body>
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include 'db.php';
                        $query="select * from users limit 150"; 
                        $result=mysqli_query($dbCon,$query);
                        ?>
                     <?php if ($result->num_rows > 0): ?>
                     <?php while($array=mysqli_fetch_row($result)): ?>
                     <tr>
                        <th scope="row"><?php echo $array[0];?></th>
                        <td><?php echo $array[1];?></td>
                        <td><?php echo $array[2];?></td>
                        <td><?php echo $array[3];?></td>
                        <td> 
                           <a href="javascript:void(0)" class="btn btn-primary edit" data-id="<?php echo $array[0];?>">Edit</a>
                           <a href="javascript:void(0)" class="btn btn-primary delete" data-id="<?php echo $array[0];?>">Delete</a>
                     </tr>
                     <?php endwhile; ?>
                     <?php else: ?>
                     <tr>
                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                     </tr>
                     <?php endif; ?>
                     <?php mysqli_free_result($result); ?>
                  </tbody>
               </table>
            
   </body>
</html>