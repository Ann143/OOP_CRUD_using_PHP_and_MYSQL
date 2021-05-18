<!DOCTYPE html>
<html lang="en">
<head>
<?php include "crudoop.php"?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>OOP</title>

  <style>
  body{
      background-image: url("bg.png");
      background-repeat: no-repeat;
      background-size: cover;
      
  }
  </style>
</head>
<body>
<br>
<h3 style="margin-left:580px;">Retrieve Data From DB</h3>
    <?php
        $crud = new crudoop();

        if(isset($_POST['submit'])){
            $crud->insert($_POST['studName'],$_POST['studCourse']);
        }
    ?>

   <br><br>
<form action=""  method="post" style="margin-left:410px">
  <div class="form-row align-items-center">
  <label class="sr-only" for="inlineFormInputGroup">Name</label>
    <div class="col-auto">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user" style="font-size:24px;color:#e6176a;"></i></div>
        </div>
        <input type="text" class="form-control" name="studName" placeholder="Name">
      </div>
    </div>
    <label class="sr-only" for="inlineFormInputGroup">Course</label>
    <div class="col-auto">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text" style="color:#e6176a">@</div>
        </div>
        <input type="text" class="form-control" name="studCourse" placeholder="Course">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-outline-danger mb-2" name="submit">Submit</button>
    </div>
  </div>
</form>

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


    <br><br>
    <div class="container">
   <table class="table table-hover" style="text-align:center">
    <thead style="background:#e6176a;color:white">
        <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Action</th>
        </tr>
   </thead>
   <tbody>
        <?php

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
