<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UCMO CAMPUS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="student_index.php">University Of Central Missouri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="university.php">University</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student.php">Student</a>
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
      
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Library || Availability Checker
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                Search for a book:
      
                <form method="post" action="university.php" > 
                    <div class="form-group row">
                      <label for="inlineFormInputName1" class="col-sm-2 col-form-label">Book Name</label>
                      <div class="col-sm-10">
                        <input name="book_name" type="text" class="form-control" id="inlineFormInputName1" placeholder="Ex: 'Landing Motion Control of Articulated Legged Robot'">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Author</label>
                      <div class="col-sm-10">
                        <input name="book_author" type="text" class="form-control" id="inlineFormInputName2" placeholder="Ex: 'Sanghak Sung'">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button name="search_book" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </div>
                    </div>


                  </form>

                  <?php

                  if(isset($_POST['search_book']))
                  {
                    $name=$_POST['book_name'];
                    $author=$_POST['book_author'];

                    $query = "SELECT * FROM book WHERE book_name = '$name' AND author = '$author'";
                    $results = mysqli_query($db, $query);

                    $row = mysqli_fetch_array($results);
                  

                   ?>

                   <table class="table table-striped" style="margin: auto;">
                     <th>Book</th>
                     <th>Author</th>
                     <th>Campus</th>
                     <th>Status</th>

                     <tr>
                       <td><?php echo $row['book_name']; ?></td>
                       <td><?php echo $row['author']; ?></td>
                       <td><?php echo $row['library_name']; ?></td>
                       <td><?php echo $row['book_status']; ?></td>
                     </tr>
                   </table>

                   <?php }  ?>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Student Clubs
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                  <div class="card-group">
                    <div class="card">
                      <img class="card-img-top" src="https://marvel-b1-cdn.bc0a.com/f00000000155119/www.ucmo.edu/current-students/student-experience/office-of-student-activities/outdoor-education/trektourclimb.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Trekking Club @UCM</h5>
                        <form method="post" action="university.php">
                          <button type="submit" class="btn btn-primary" name="participate_kizilay">Participate</button>
                        </form>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="https://marvel-b1-cdn.bc0a.com/f00000000155119/www.ucmo.edu/current-students/student-experience/office-of-student-activities/intramural/sports-clubs/rugby.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Intramurals Sports Club @UCM</h5>
                        <form method="post" action="university.php">
                          <button type="submit" class="btn btn-primary" name="participate_ieee">Participate</button>
                        </form>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="https://marvel-b1-cdn.bc0a.com/f00000000155119/www.ucmo.edu/images/horizontal-images/buildings/studentreccenter01.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Student Recreational Club @UCM</h5>
                        <form method="post" action="university.php">
                          <button type="submit" class="btn btn-primary" name="participate_girisimcilik">Participate</button>
                        </form>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="https://marvel-b1-cdn.bc0a.com/f00000000155119/www.ucmo.edu/images/hero-images/mammology/mammalogy05-hero.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Student Volunteers Club @UCM</h5>
                        <form method="post" action="university.php">
                          <button type="submit" class="btn btn-primary" name="participate_mec">Participate</button>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Programs at UCMO
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <div class="jumbotron">
                    <h1 class="display-4">Graduate Academic Programs</h1>
                    <p class="lead">Programs that Empower</p>
                    <hr class="my-4">
                    <p>Whether you are looking to go straight into graduate school after completing your bachelor's or you have taken a break between degrees, 
                      UCM has the best graduate school options to fit your schedule. UCM provides courses online, on campus in Warrensburg and in Lees Summit or a 
                      combination of all three to create a smooth tranisition into your lifestyle. Our dedicated expert faculty, paired with a focus on learning by doing, 
                      assures you will get the most out of your graduate studies at UCM. You won't need to worry about cost -  the University of Central Missouri is high-quality 
                      graduate programs are some of the most affordable in the nation.</p>
                    <p class="lead">
                      <a class="btn btn-primary btn-lg" href="https://www.ucmo.edu/academics/graduate-studies/index.php" role="button">Learn more</a>
                    </p>
                  </div>
              </div>
              <div class="jumbotron">
                <h1 class="display-4">Under-graduate Academic Programs</h1>
                <p class="lead">Our innovative academic programs follow industry trends and are taught by experienced faculty members, giving you the skills you need to graduate prepared for your career.</p>
                <hr class="my-4">
                <p>Your undergraduate education at the University of Central Missouri is focused on one thing: your success.

                  At UCM, you'll ...

                experience a learner-centered environment that will prepare you to excel in our fast-paced world.
                benefit from student support programs and initiatives that ensure you are successful throughout your college career and beyond.
                receive a truly global education by learning with students from nearly 50 countries and by seeing the world through our extensive study abroad program.
                quickly see why 95 percent of UCM graduates say they were satisfied with their education and prepared to join the workforce.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="https://www.ucmo.edu/academics/programs/" role="button">Learn more</a>
                </p>
              </div>
              <div class="jumbotron">
                <h1 class="display-4">Additional Programs</h1>
                <p class="lead">WANT TO APPLY FOR A PROGRAM AT UCM, Not sure which Applications is right for you?</p>
                <hr class="my-4">
                <p>Are you ready to become a part of an elite legacy of students? UCM Mules and Jennies are strong, determined and intelligent, and we can't wait to see you join us on campus! 
                  Get started on your application today, and see where a degree from UCM will take you.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="https://admissions.ucmo.edu/register/?id=13f56444-165c-42f7-adc5-d10937988b86" role="button">Learn more</a>
                </p>
              </div>
            </div>
        </div>
      </div>
</body>
</html>