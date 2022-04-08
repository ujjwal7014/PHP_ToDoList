<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      div{
        text-align: center;
      }

      h1 {
        text-align: center;
      }
    </style>
</head>
<body>
  
    <!-- Form For Adding the Task -->
    <h1>Todo List</h1>
    <div>
        <form action="add_Task.php" method="post">
            <input type="text" name="work" id="work"> <br>
            <input type="submit" name="add" value = "Add Task">
        </form>
    </div>

    <!-- showing the SQL Table -->
    <div>
      <?php
          include 'database.php'; // Establishing Connection in Database

          $sql="SELECT * FROM todos";
          $result=mysqli_query($conn, $sql);

          if($result){
              while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $title=$row['Title'];

                  ?>
                  <tr>
                      <!-- <td><?php echo $id ?></td> -->
                      <td><?php echo $title  ?></td>
                      <td>
                      <!-- <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a> -->
                      <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Done</a> <br>
  
                      </td>
                        
                  </tr>
                  <?php    
              }
          }
      ?>
    </div> 
</body>
</html>