
<?php

include('function.php');

$objCrudapp = new crudApp();

if(isset($_POST['add_info'])){

    $return_msg = $objCrudapp ->add_data($_POST);
}
    $students = $objCrudapp ->display_data();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD App</title>
  </head>
  <body>
        <div class="container my-4 p-3 shadow">
            <h2><a style="text-decoration:none;" href="index.php">Student Database</a></h2>
            <form action="" method="POST" enctype="multipart/form-data" class="form">

            <?php if(isset( $return_msg)){echo  $return_msg;}?>
                <input class="form-control mb-3" type="text" name="std_name" placeholder="Enter Name">
                <input class="form-control mb-3" type="number" name="std_roll" placeholder="Enter Roll">
                <label for="img mb-3">Upload Your Image</label>
                <input class="form-control mb-3" type="file" name="upload_img">
                <input type="submit" name="add_info" value="Add Information" class="form-control bg-warning">
            </form>
        </div>
        <div class="container my-4 p-3 shadow">
        
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            <?php while ($radifa=mysqli_fetch_assoc($students)){?> 
                <tr>
                    <td><?php echo $radifa['ID']; ?></td>
                    <td><?php echo $radifa['Name']; ?></td>
                    <td><?php echo $radifa['Roll']; ?></td>
                    <td>
                        <img style="width:120px;height: 80px;" src="upload/<?php echo $radifa['img']; ?>" alt="">
                    </td>
                    <td>
                        <a class="btn btn-success" href="edit.php?status=edit&&id=<?php echo $radifa['ID']; ?>">Edit</a>
                        <a class="btn btn-warning" href="#">Delete</a>
                    </td>
                </tr>
               <?php  }?>
            </tbody>
        </table>

        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>               