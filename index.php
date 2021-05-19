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
<br><br><br>

    <?php
        $crud = new crudoop();

        if(isset($_POST['submit'])){
            $crud->insert($_POST['studName'],$_POST['studCourse']);
        }
    ?>

   <br><br>

   <div class="card" style="width: 20rem;margin-left:540px; box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);">
  <img src="student.png" class="card-img-top" alt="...">
  <div class="card-body">
   
  <form action=""  method="post" >
  <div class="form-group">
  <label class="sr-only" for="inlineFormInputGroup">Name</label>
    <div class="col-auto">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user" style="font-size:24px;color:#e6176a;"></i></div>
        </div>
        <input type="text" class="form-control" name="studName" placeholder="Name">
      </div>
    </div>
  </div>
  <div class="form-group">
  <label class="sr-only" for="inlineFormInputGroup">Course</label>
    <div class="col-auto">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text" style="color:#e6176a">@</div>
        </div>
        <input type="text" class="form-control" name="studCourse" placeholder="Course">
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-danger mb-2" name="submit" style="width:100%">Submit</button>
</form>

  </div>
</div>


</body>
</html>
