<!DOCTYPE html>
<html lang="en">
<head>
<?php include "crudoop.php"?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>Retrieve from DB</title>
    <style>
  body{
      background-image: url("imgs/retrieveBg.png");
      background-repeat: no-repeat;
      background-size: cover;
      
  }
  </style>
</head>
<body>
    <br><br>

    <div class="container" style="width:50%;">
        <?php
           if (isset($_GET['msg1']) == "insert") {
            echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    Your Registration Added Successfully!
                  </div>";
            } 
        ?>
</div>
<div class="container">
<a href="index.php" class="btn btn-outline-success" style="width:5%;margin-left:1050px"> <i class="fa fa-user-plus" style="font-size:24px;color:#e6176a;"></i></a>
</div>
<div class="container">
   <table class="table table-hover" style="text-align:center;box-shadow: 0 8px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);">
    <thead style="background:#e6176a;color:white">
        <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Action</th>
        </tr>
   </thead>
   <tbody style="background:#fae8f0">
        <?php
            $crud = new crudoop();

            $persons = $crud->displayData();
            foreach ($persons as $person) {
            ?> 
            <tr>
            <td><?php echo $person['name'] ?></td>
            <td><?php echo $person['course'] ?></td>
            <td>
            <a href="edit.php?editId=<?php echo $person['personId'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="index.php?deleteId=<?php echo $person['personId'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </td>
            </tr>
            <?php } ?>
         </tbody>
    </table>
</div>
</body>
</html>