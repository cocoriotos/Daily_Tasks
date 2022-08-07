<!--  Developed by julián González Bucheli, Dell SDS LATAM PMO 
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 
?>



<div class="container p-4">

	<div class="row">
		<div class="col-md-4">
		     <?php  if(isset($_SESSION['message'])) {?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>				
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
			 <?php  session_unset();}?>
		  
			<div class="card card-body">
				<form action="savetask.php" method="POST"> 
					<div class="form-group">
						<input type="text" name="task" class="form-control" placeholder="Task Title" autofocus></input><br>
					</div>
					<div class="form-group">
						<textarea name="description" rows="5" class="form-control" placeholder="Task Description"></textarea> <br>
					</div>
					<div class="form-group">
						<input type="text" name="project" class="form-control" placeholder="Project Name" ></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="region" class="form-control" placeholder="Region" ></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="subregion" class="form-control" placeholder="Subregion" ></input><br>
					</div>
					<!--<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Type your username" ></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="completed" class="form-control" placeholder="Completed=1 Incompleted=0" ></input><br>
					</div> -->
					<input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task"></input>
					<input type="submit" class="btn btn-success btn-block" name="logout" value="Logout" formaction="dailytaskstracker.php"></input>
				</form>
			</div>
		</div>
		
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
				   <tr>
				      <th>Task</th>
					  <th>Description</th>
					  <th>Project</th>
					  <th>Region</th>
					  <th>Subregion</th>
					  <th>Created At</th>
					  <th>Actions</th>
				   </tr>
			    </thead>
				<tbody>
					<?php 
					##$query = "select * from dailytask where completed = '0' and username = '$username1' order by id";
					$query = "select * from dailytask where completed = '0' order by id";
					$result_tasks = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($result_tasks)) { ?>
					  <tr>
						<td><?php echo $row['task'] ?></td>
						<td><?php echo $row['description'] ?></td>
						<td><?php echo $row['project'] ?></td>
						<td><?php echo $row['region'] ?></td>
						<td><?php echo $row['subregion'] ?></td>
						<td><?php echo $row['creationdate'] ?></td>
						<td><a href="edit.php?id=<?php echo $row['id']?>"class="btn btn-secondary"><i class="fas fa-marker"></i></a>
						    <a href="delete.php?id=<?php echo $row['id']?>"class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
						</td>
					  </tr>
					<?php }?>
				<tbody>
			</table>
		</div>
	</div>
</div>

<?php include ("footer.php")?>

 