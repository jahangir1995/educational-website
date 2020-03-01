<?php
	include 'Database.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerse</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<div class="container">
    <div class="well text-center">
      <h2> Admin add</h2>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">

      <h2> Add New Admin<a class="pull-right" href="add.php">Add New</a> </h2>
			<div class="panel-body">
		  <form action="" method="post">
				<div class="form-group">
					<label for="name" >Admin name</label>
					<input type="text" class="form-control" name="name" id="name" required="1"/>
				</div>

				<div class="form-group">
					<label for="email" >Admin Email</label>
					<input type="text" class="form-control" name="email" id="email" required="1"/>
				</div>

				<div class="form-group">
					<label for="status" >Admin Status</label>
					<input type="text" class="form-control" name="status" id="status" required="1"/>
				</div>
				<div class="form-group">

					<input type="hidden" class="form-control" name="action" value="add"/>
					<input type="submit" class="btn btn-primary" name="submit" value="add admin"/>
				</div>


      </form>
    </div>
    </div>
     </div>

    <div class="well ">
      <h2> jahnagir@gmiall.com</h2>
      <span class="pull-right"> like us</span>
    </div>


	</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
