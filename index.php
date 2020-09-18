<!DOCTYPE html>
<?php include 'db.php';
$sql="select * from task";
$rows=$db->query($sql);
 ?>
<html>

   <head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <title>CRUD</title>
   </head>
	
   <body>
   <div class="container">

   <center><h1>Todo List</h1></center>
   <div class="row" style ="margin-top:70px">
  
   
   <div class= col-md-10 col-md-offset-2">
   
   <button type ="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add task</button>

   <hr><br>

   <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">Add Task</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="add.php">
        <div class="form-group">
        <label>Task Name</label>
        <input type="text" required name="task" class="form-control">
      </div>
      <input type="submit" name="send" value="send" value="Add Task" class="btn btn-success">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div class="col-md-12 text-center">
			<p>Search</p>
			<form action="search.php" method="post" class="form-group">
				
				<input type="text" placeholder="Search"
				 name="search" class="form-control">
			</form>
		</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Task</th>
    </tr>
</thead>
<tbody>
    <tr>
    <?php while($row=$rows->fetch_assoc()): ?>
    
    
      <th><?php echo $row['id'] ?></th>
      <td class="col-md-10"><?php echo $row['name'] ?></td>
      <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn-btn-success">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn-btn-danger">Delete</a></td>
    </tr>
    <?php endwhile; ?>
  
  
  </tbody>
</table>


   </div>

   </div>
   </div>
   </body>
	
</html>