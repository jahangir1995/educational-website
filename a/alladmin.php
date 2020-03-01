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
      <table class="table table-striped">

        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>email</th>
          <th>status</th>
          <th>Action</th>
        </tr>
        <tr>
					<?php
						$db=  New Database();
						$table= "tbl_admin";
						$orderby= array('order_by' => 'id DESC' );
						$data=$db->select($table, $orderby);

					 ?>
          <td>email</td>
          <td>ID</td>
          <td>Name</td>
          <td>status</td>
          <td>
            <a class="btn btn-info" href="edit.php?id=1"</a>Edit
              <a class="btn btn-danger" href="edit.php?id=1"</a>Delete
          </td>
        </tr>
        <tr>
          <td>email</td>
          <td>ID</td>
          <td>Name</td>
          <td>status</td>
          <td>
            <a class="btn btn-info" href="edit.php?id=1"</a>Edit
						<a class="btn btn-danger" href="edit.php?id=1"</a>Delete

          </td>
        </tr>

      </table>

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
