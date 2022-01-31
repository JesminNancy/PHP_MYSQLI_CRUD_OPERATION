<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Registration(Update)</title>
  <?php include 'links.php' ;?>
  <?php include 'css/style.php' ;?>
</head>
<body>

    
<div class="container register">
    <div class="row">
    
      <div class="col-md-3 register-left">
        <img src="img/" alt="">  
        <h3>Welcome</h3>
        <p>Please fill all the details carefully.This form can change your life.</p>
        <a href="display.php">Check Form</a><br>
      </div>
      
      <div class="col-md-9">
        <div class="register-right">
          <div class="tab-content" id="mytabcontent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
            <h3 class="register-heading">Apply for web developer post</h3>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row register-form">
              
              
                 <?php
          
                    include 'connection.php';
                    
                    $ids = $_GET['id'];
                    
                    $showquery = " SELECT * FROM jobregistration WHERE id=$ids ";
                    $showdata = mysqli_query($conn, $showquery);
                    
                    $arrdata = mysqli_fetch_array($showdata);
                    
                    
                    if(isset($_POST['submit'])){
                    
                        $idupdate = $_GET['id'];
                        
                        $name = $_POST['username'];
                        $degree = $_POST['degree'];
                        $moblie = $_POST['moblie'];
                        $email = $_POST['email'];
                        $refer = $_POST['refer'];
                        $jobprofile = $_POST['post'];
                    
                     /*    $insertquery = " INSERT INTO  jobregistration(name,degree,mobile,email,refer,jobpost) VALUES ('$name','$degree','$moblie','$email','$refer','$jobprofile') "; */
                        
                        $queryupdate = " UPDATE jobregistration set id=$idupdate, name='$name', degree='$degree', mobile='$moblie', email='$email', refer='$refer',jobpost='$jobprofile' WHERE id= $idupdate ";
                    
                         $res  =  mysqli_query($conn, $queryupdate);
                    
                         if($res){
                             ?>
                                <script>
                                    alert("Data Updated properly");
                                </script>
                                 
                             <?php
                         }else{
                            ?>
                            <script>
                                alert("Data not Updated properly");
                            </script>
                    
                         <?php 
                         }
                    }
                    
                    ?>
                        
              
              
                <div class="col-md-6">
                <div class="form-group">
                   <input type="text" class="form-control" name="username" value="<?php echo $arrdata['name']; ?>" placeholder="Enter your name" required>
                </div>
                  
                <div class="form-group">
                   <input type="text" class="form-control" name="degree" value="<?php echo $arrdata['degree']; ?>" placeholder="Enter your qualification" required>
                </div>
                  
                <div class="form-group">
                   <input type="tel" class="form-control" name="moblie" value="<?php echo $arrdata['mobile']; ?>" placeholder="Enter your mobile number">
                </div>
                  
                </div>
                
                <div class="col-md-6">
                <div class="form-group">
                   <input type="email" class="form-control" name="email" value="<?php echo $arrdata['email']; ?>" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                   <input type="text" class="form-control" name="refer" value="<?php echo $arrdata['refer']; ?>" placeholder="Enter your reference" required>
                </div>
                <div class="form-group">
                   <input type="text" class="form-control" name="post" value="<?php echo $arrdata['jobpost']; ?>" placeholder="Enter your post" required>
                </div>
                <div class="form-group">
                   <input type="submit" class="btnregister" name="submit" value="Update">
                </div>
                
                </div>
                
              </div>
            </form>
          </div>  
          </div>
        </div>
      </div>
    </div>
  
</div>


</body>
</html>


