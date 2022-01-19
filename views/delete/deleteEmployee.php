<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width
  " initial=scale=1.0">
  <title>Delete Employees</title>
</head>

  <body>
    <div>
      <h4>Are you sure you want to delete</h4>
      <a class='btn btn-danger' href='?controller=employee&action=deleteEmployee&id=<?php echo $_GET["id"]; ?>&confirm=TRUE'>Delete</a>
    </div>

  </body>
  </html>