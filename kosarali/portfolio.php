<!doctype html>
<body>
  <?php include('header.php'); ?>

    <!-- Header Section -->
    <div class="container-fluid my-5">
      <div class="jumbotron">
        <div class="container-fluid text-light text-center py-5" style="background: url('assets/img/2.jpg') no-repeat center center; background-size: cover;">
          <h1 class="display-4 fw-bold">My Portfolio</h1>
          <p class="text-white">A showcase of my best projects and achievements</p>
        </div>
      </div>
    </div>

    <!-- Button Section -->
    <div class="container my-5">
      <div class="row mt-4 g-4 d-flex justify-content-center">
        <div class="col-md-4">
          <div class="btn text-center text-white">
            <a href="http://localhost/kosarali/portfolio.php" class="btn btn-bg-warning btn-outline-warning btn-sm active"><h4>Web Development Projects</h4></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="btn text-center">
            <a href="http://localhost/kosarali/mobile.php" class="btn btn-bg-warning btn-outline-warning btn-sm"><h4>Mobile Development Projects</h4></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="btn text-center">
            <a href="http://localhost/kosarali/software.php" class="btn btn-outline-warning btn-sm"><h4>Software Development Projects</h4></a>
          </div>
        </div>
      </div>

      <!-- Project Cards -->
      <div class="row mt-4 g-4">
        <!-- Project 1 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/1.jpg" class="card-img-top" alt="Project 1">
            <div class="card-body">
              <h5 class="card-title">Project 1</h5>
              <p class="card-text">An innovative web application with responsive design and backend integration.</p>
            </div>
            <div class="card text-center">
              <a href="#" class="btn btn-outline-warning btn-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/2.jpg" class="card-img-top" alt="Project 2">
            <div class="card-body">
              <h5 class="card-title">Project 2</h5>
              <p class="card-text">A powerful e-commerce platform designed for seamless user experience.</p>
            </div>
            <div class="card text-center">
              <a href="#" class="btn btn-outline-warning btn-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/3.jpg" class="card-img-top" alt="Project 3">
            <div class="card-body">
              <h5 class="card-title">Project 3</h5>
              <p class="card-text">A modern portfolio website featuring dynamic content and animations.</p>
            </div>
            <div class="card text-center">
              <a href="#" class="btn btn-outline-warning btn-sm">View Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Project Cards -->
      <div class="row mt-4 g-4">
        <!-- Project 4 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/2.jpg" class="card-img-top" alt="Project 4">
            <div class="card-body">
              <h5 class="card-title">Project 4</h5>
              <p class="card-text">An innovative web application with responsive design and backend integration.</p>
            </div>
            <div class="card text-center">
              <a href="#" class="btn btn-outline-warning btn-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Project 5 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/3.jpg" class="card-img-top" alt="Project 5">
            <div class="card-body">
              <h5 class="card-title">Project 5</h5>
              <p class="card-text">A powerful e-commerce platform designed for seamless user experience.</p>
            </div>
            <div class="card text-center">
              <a href="#" class="btn btn-outline-warning btn-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Project 6 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/1.jpg" class="card-img-top" alt="Project 6">
            <div class="card-body">
              <h5 class="card-title">Project 6</h5>
              <p class="card-text">A modern portfolio website featuring dynamic content and animations.</p>
            </div>
            <div class="card text-center">
              <a href="#" class="btn btn-outline-warning btn-sm">View Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- View All Projects Button -->
      <div class="text-center mt-5">
        <a href="web_more.php" class="btn btn-outline-secondary">View All Projects</a>
      </div>
    </div>

    <?php include('footer.php'); ?>

    
