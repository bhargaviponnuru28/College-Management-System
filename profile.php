<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>UCMO Student</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="student_index.php">University of Central Missouri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="university.php">University</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student.php">Course Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
          </ul>
        </div>
        <a class="navbar-brand"></a>
        <form method="post" action="login.php" class="form-inline">
            <button type="submit" name="log_out" class="btn btn-default btn-sm">

          <span class="glyphicon glyphicon-log-out"></span> Log out</button>
        </form>
      </nav>

      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="data:image/png;base64,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" alt="Card image cap">
        <div class="card-body">

            <?php  
            
            $cur_email = $_SESSION['email'];
            $query = "SELECT * FROM student WHERE email = '$cur_email'";

            $results = mysqli_query($db, $query);

            $student = mysqli_fetch_array($results); ?>

          
            <h5 class="card-title"><?php echo $student['name']; ?></h5>


        </div>
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Information
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $student['email']; ?></li>
                    <li class="list-group-item"><?php echo $student['birthdate']; ?></li>
                    <li class="list-group-item"><?php echo $student['department']; ?></li>
                    <li class="list-group-item"><?php echo $student['scholarship']; echo " | "; echo $student['degree'];?></li>
                    <li class="list-group-item"><?php echo $student['grade']; echo ".0 grade" ?></li>
                    <li class="list-group-item">
                    <?php
                      $cur_email = $_SESSION['email'];
                      $st_id = $student['student_id'];
                      $query = "SELECT * FROM student_past_courses WHERE student_id = '$st_id'";
                      $results = mysqli_query($db, $query);
                      $total_grade = 0;
                      $total_course = 0;
                      
                      while($row = mysqli_fetch_array($results))
                      {
                        $total_grade = $total_grade + $row['final_grade'];
                        $total_course = $total_course + 1;
                      }

                        $mean = $total_grade/$total_course;
                        echo "GPA: "; echo round($mean/25,3);
                      ?>
                        
                      </li>
                    <li class="list-group-item"><?php echo "Student id: "; echo $student['student_id']; ?></li>
                    <li class="list-group-item"><?php echo "Role: "; echo $student['emp_type']; ?></li>
                    <li class="list-group-item">Advisor:
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <?php echo $student['advisor_name'];  ?>
                        </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    My Library
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <?php 

                      $st_id = $student['student_id'];

                      $query = "SELECT * FROM student_book WHERE student_id = '$st_id' ";
                      $results = mysqli_query($db, $query);
                      while($row = mysqli_fetch_array($results))
                      { ?>
                    <li class="list-group-item"> 

                        <?php 
                          echo $row['book_name']; ?>
                         
                      </li>  <?php  }?>
                  </ul>  
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Memberships
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">

                    <?php 

                      $st_id = $student['student_id'];

                      $query = "SELECT * FROM student_club_participants WHERE participant_id = '$st_id' ";
                      $results = mysqli_query($db, $query);
                      while($row = mysqli_fetch_array($results))
                      {

                      $leader = $row['leader_id'];

                      $query = "SELECT * FROM student_club WHERE leader_id = '$leader' ";
                      $results2 = mysqli_query($db, $query);
                      $club = mysqli_fetch_array($results2);   
                       ?>
                    <li class="list-group-item"><?php echo $club['club_name'];?> </li> <?php   }?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Programs
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <?php 

                      $st_id = $student['student_id'];

                      $query = "SELECT * FROM program WHERE student_id = '$st_id' ";
                      $results = mysqli_query($db, $query);
                      while($row = mysqli_fetch_array($results))
                      { ?>

                       <?php echo $row['program_name']; echo " | "; echo $row['other_uni_name']; ?> 
                        

                        <?php } ?>
                    </ul>
                </div>
                </div>
              </div>
          </div>
      </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $student['advisor_name']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                Click to View Website
                </div>
                <div class="modal-footer">
                  <?php 
                $advisor = $student['advisor_name'];
                $query = "SELECT * FROM lecturer WHERE lecturer_name = '$advisor'";
                $results = mysqli_query($db, $query);
                $row = mysqli_fetch_array($results);

                $website = $row['website'];
                 ?>
                <a href= <?php echo $website;?> "" role="button" class="btn btn-primary" target="_blank">Web Site</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
        </div>
</body>
</html>