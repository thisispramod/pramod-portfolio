<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pramod Kumar - Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/todospecial.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="icon" type="image/png" sizes="48x48" href="images/ficonpk.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="todo-top">
  <div class="todo-bar todo-black todo-card">
    <a class="todo-bar-item todo-button todo-padding-large todo-hide-medium todo-hide-large todo-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="todo-bar-item todo-button todo-padding-large">HOME</a>
    <a href="#skills" class="todo-bar-item todo-button todo-padding-large todo-hide-small">SKILLS</a>
    <a href="#project" class="todo-bar-item todo-button todo-padding-large todo-hide-small">PROJECT</a>
    <a href="#about-us" class="todo-bar-item todo-button todo-padding-large todo-hide-small">ABOUT US </a>
    <a href="#contact" class="todo-bar-item todo-button todo-padding-large todo-hide-small">CONTACT</a>
    <div class="todo-dropdown-hover todo-hide-small">
      <button class="todo-padding-large todo-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="todo-dropdown-content todo-bar-block todo-card-4">
        <a href="#" class="todo-bar-item todo-button">Upcoming </a>
        <a href="#" class="todo-bar-item todo-button">Running</a>
        <a href="login.php" class="todo-bar-item todo-button">Login</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="todo-padding-large todo-hover-red todo-hide-small todo-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="todo-bar-block todo-black todo-hide todo-hide-large todo-hide-medium todo-top" style="margin-top:46px">
  <a href="#skills" class="todo-bar-item todo-button todo-padding-large" onclick="myFunction()">SKILLs</a>
  <a href="#about-us" class="todo-bar-item todo-button todo-padding-large" onclick="myFunction()">ABOUT US</a>
  <a href="#project" class="todo-bar-item todo-button todo-padding-large" onclick="myFunction()">PROJECT</a>
  <a href="#contact" class="todo-bar-item todo-button todo-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="todo-bar-item todo-button todo-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="todo-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides todo-display-container todo-center">
    <img src="images/todo1.jpg" style="width:100%">
    <div class="todo-display-bottommiddle todo-container todo-text-white todo-padding-32 todo-hide-small">
      <h3>Web Development</h3>
      <p><b>Web development is a technology where you can keep yourself on internet</b></p>   
    </div>
  </div>
  <div class="mySlides todo-display-container todo-center">
    <img src="images/todo2.jpg" style="width:100%">
    <div class="todo-display-bottommiddle todo-container todo-text-white todo-padding-32 todo-hide-small">
      <h3>PHP Developer</h3>
      <p><b>A backend developer is a backbone of a dynamic website</b></p>    
    </div>
  </div>
  <div class="mySlides todo-display-container todo-center">
    <img src="images/todo3.jpg" style="width:100%">
    <div class="todo-display-bottommiddle todo-container todo-text-white todo-padding-32 todo-hide-small">
      <h3>Front-end Development</h3>
      <p><b>Front-end developer is a programmer that code for front end that visibe for user in the website. </b></p>    
    </div>
  </div>


  <div class="todo-container todo-content todo-padding-64" id="skills">
    <h2 class="todo-wide todo-center">Skills</h2>
      <div class="todo-row todo-padding-32">
        <div class="todo-col m6">
              <div class="skill-bars">
                <div class="bar">
                  <div class="info">
                    <span>HTML</span>
                  </div>
                  <div class="progress-line html">
                    <span></span>
                  </div>
                </div>
                <div class="bar">
                  <div class="info">
                    <span>CSS</span>
                  </div>
                  <div class="progress-line css">
                    <span></span>
                  </div>
                </div>
                <div class="bar">
                  <div class="info">
                    <span>BOOTSTRAP</span>
                  </div>
                  <div class="progress-line bootstrap">
                    <span></span>
                  </div>
                </div>
                <div class="bar">
                  <div class="info">
                    <span>JAVASCRIPT</span>
                  </div>
                  <div class="progress-line javascript">
                    <span></span>
                  </div>
                </div>
                <div class="bar">
                  <div class="info">
                    <span>PHP</span>
                  </div>
                  <div class="progress-line php">
                    <span></span>
                  </div>
                </div>
                <div class="bar">
                  <div class="info">
                    <span>MySQL</span>
                  </div>
                  <div class="progress-line mysql">
                    <span></span>
                  </div>
                </div>
              </div>
          </div>
          <br>
        <div class="todo-col m6 todo-large skill-bars todo-margin-bottom">
        <h3 style="color: red";><i class="fa fa-download" style="width:30px"></i> Download CV</h3><br>
        <a href="resume/pramod'-resume-2022.pdf" target="_blank" >
        <img src="images/th.jpg" alt="pramod'resume "></a>
      </div>
  </div>

  <!-- The about us Section -->
  <div class="todo-container todo-content todo-center todo-padding-64" style="max-width:800px" id="about-us">
    <h2 class="todo-wide">ABOUT US</h2>
    <p class="todo-opacity"><i>I love to coding & learning</i></p>
    <div class="todo-col m6">
      <p class="todo-justify">Hey! I am PRAMOD KUMAR and i completed my BCA from Babu Banarashi Das University Lucknow in 2020. After that I connected SSAK Software solution pvt.ltd for internship as a PHP Developer where i worked three months after that i worked in lcmhcf pvt.ltd as a PHP Developer where i worked almost 7 months.In the company i developed many project for company and for client. for more information check Project Section .</p>
    </div>
    <div class="todo-col m6">
        <img src="images/pramod.jpeg" class="todo-round skill-bars todo-margin-bottom" alt="Pramod kumar" style="width:60%">
    </div>
  </div>
 
  <!-- The article Section -->
  <div class="todo-black" id="project">
    <div class="todo-container todo-content todo-padding-64" style="max-width:800px">
      <h2 class="todo-wide todo-center">PROJECT</h2>
      <p class="todo-opacity todo-center"><i>All Project that I completed</i></p><br>
      <div class="todo-row-padding todo-padding-32" style="margin:0 -16px">
      
      <?php 
      include 'db.php';
      $show = "SELECT * FROM project";
      $query = mysqli_query($conn,$show);
      while($result = mysqli_fetch_array($query)){
      ?>
        <div class="todo-third todo-margin-bottom">
          <img src="<?= $result['image']; ?>" alt="Pramod_project-<? $result['id'] ?>" style="width:100%" class="todo-hover-opacity">
          <div class="todo-container todo-white">
            <p class="todo-opacity"><?= date("d/m/Y", strtotime($result['starting_date'])); ?> TO <?= date("d/m/Y", strtotime($result['ending_date'])); ?></p>
            <b><? $result['technology']; ?></b>
            <p><?= $result['descriptions']; ?></p>
            <button class="todo-button todo-black todo-margin-bottom"><a href="<?= $result['project_url']; ?>">Website</a></button>
          </div>
        </div>
        <?php
      }
      ?>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="todo-container todo-content todo-padding-64" style="max-width:800px" id="contact">
    <h2 class="todo-wide todo-center">CONTACT</h2>
    <p class="todo-opacity todo-center"><i>Fan? Drop a note!</i></p>
    <div class="todo-row todo-padding-32">

          <?php if (isset($_SESSION['message'])): ?>
          <!-- Success Alert -->
        <div class="alert alert-success alert-dismissible fade show">
          <strong>
          <?php
              echo $_SESSION['message']; 
              unset($_SESSION['message']);
          ?>
          </strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
      <?php endif ?>

      <div class="todo-col m6 todo-large todo-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>(Current):Mukherjee Nagar Delhi NCR<br>
        <i class="fa fa-map-marker" style="width:30px"></i> Uttar Pradesh, India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9793820174<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: itspramod19@gmail.com<br>
      </div>
      <div class="todo-col m6">
        <form action="contact-insert.php" method="post">
          <div class="todo-row-padding" style="margin:0 -16px 8px -16px">
            <div class="todo-half">
              <input class="todo-input todo-border" type="text" placeholder="Name" required name="name">
            </div>
            <div class="todo-half">
              <input class="todo-input todo-border" type="email" placeholder="Email" required name="email">
            </div>
          </div>
          <input class="todo-input todo-border" type="text" placeholder="Message" required name="message">
          <button class="todo-button todo-black todo-section todo-right" type="submit" name = "contact_submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<!-- <img src="images/map.jpg" class="todo-image todo-greyscale-min" style="width:100%"> -->

<!-- Footer -->

<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.youtube.com/c/todospecial"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-youtube"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.1);">
    © 2022 Copyright:
    <a class="text-dark" href="https://pramod.epizy.com/">pramod.epizy.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("todo-show") == -1) {
    x.className += " todo-show";
  } else { 
    x.className = x.className.replace(" todo-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


