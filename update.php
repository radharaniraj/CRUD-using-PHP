<!DOCTYPE html>
<?php include 'db.php';
$id=$_GET['id'];
$sql="select * from task where id='$id'";
$rows=$db->query($sql);
$row=$rows->fetch_assoc();
if(isset($_POST['send'])){
    $task=$_POST['task'];
$sql2="update task set name='$task' where id= $id";
$db->query($sql2);
header('location:index.php');
}
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

   <center><h1>todo list</h1></center>
   <div class="row" style ="margin-top:70px">
  
   
   <div class= col-md-10 col-md-offset-2">
    <hr><br>

        <form method="post">
        <div class="form-group">
        <label>Task Name</label>
        <input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
      </div>
      <input type="submit" Name="send" value="Add Task" class="btn btn-success">
           </form>


   </div>

   </div>
   </div>
   </body>
	
</html>