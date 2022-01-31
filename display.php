<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update/Delete</title>
  <?php include 'css/style.php' ;?>
  <?php include 'links.php' ;?>
</head>
<body>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-11 col-11">
        <h1>List of candidates for web developer</h1>
        <div class="table-responsive">
        <table class="table table-striped text-center table-bordered">
          <thead class="bg-dark text-white">
            <tr>
              <th class="py-3 text-white">id</th>
              <th class="py-3 text-white">name</th>
              <th class="py-3 text-white">degree</th>
              <th class="py-3 text-white">moblie</th>
              <th class="py-3 text-white">email</th>
              <th class="py-3 text-white">refer</th>
              <th class="py-3 text-white">jobpost</th>
              <th class="py-3 text-white" colspan="2">operation</th>
            </tr>
          </thead>
          <tbody>
          
          <?php
                
                include 'connection.php';
                
                $selectquery = " SELECT * from jobregistration ";
                
                $query = mysqli_query($conn,$selectquery);
                
                $nums = mysqli_num_rows($query);
                $res = mysqli_fetch_array($query);
                
                while($res = mysqli_fetch_array($query)){
                
                        ?>
                
                    <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['degree']; ?></td>
                    <td><?php echo $res['mobile']; ?></td>
                    <td><span class="email-style"><?php echo $res['email']; ?></span></td>
                     <td><?php echo $res['refer']; ?></td>
                     <td><?php echo $res['jobpost']; ?></td>
                    <td> <a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                
                <?php
                
                }
                
                ?>
            
          </tbody>
        </table>
      </div>
      </div>   
    </div>
  </div>
  
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
  
</body>
</html>
