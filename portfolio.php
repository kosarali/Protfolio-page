<!doctype html>


<body>
  <?php include('header.php'); ?>

  <!-- Header Section -->
   <div class="container-fluid p-0">
     <div class="jumbotron p-0">
       <div class="align-items-center banner-main container-fluid d-flex justify-content-center text-center text-light">
           <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3);"></div>
           <div class="content">
             <h1 class="display-4 fw-bold">My Portfolio</h1>
             <p class="text-white">A showcase of my best projects and achievements</p>
           </div>
        </div>
      </div>
    </div>
   


  <!-- Tabs Section -->
  <div class="container my-5">
    <ul class="nav nav-tabs" id="portfolioTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="web-tab" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="true">Web Development Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab" aria-controls="mobile" aria-selected="false">Mobile Development Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="software-tab" data-toggle="tab" href="#software" role="tab" aria-controls="software" aria-selected="false">Software Development Projects</a>
      </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="portfolioTabsContent">
      <!-- Web Development Tab -->
      <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="web-tab">
        <div class="row mt-4 g-4">
          <!-- Project 1 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/1.jpg" class="card-img-top w-100" alt="Project 1">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 1</h5>
                <p class="card-text">An innovative web application with responsive design and backend integration.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/2.jpg" class="card-img-top w-100" alt="Project 2">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 2</h5>
                <p class="card-text">A powerful e-commerce platform designed for seamless user experience.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>

          <!-- Project 3 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/3.jpg" class="card-img-top w-100" alt="Project 3">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 3</h5>
                <p class="card-text">A modern portfolio website featuring dynamic content and animations.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Development Tab -->
      <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
        <div class="row mt-4 g-4">
          <!-- Project 4 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/2.jpg" class="card-img-top w-100" alt="Project 4">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 4</h5>
                <p class="card-text">An innovative mobile app with a user-friendly interface and seamless performance.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>

          <!-- Project 5 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/3.jpg" class="card-img-top w-100" alt="Project 5">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 5</h5>
                <p class="card-text">A scalable mobile app designed for modern business needs.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>

          <!-- Project 6 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/1.jpg" class="card-img-top w-100" alt="Project 6">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 6</h5>
                <p class="card-text">A mobile application showcasing advanced features and technologies.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Software Development Tab -->
      <div class="tab-pane fade" id="software" role="tabpanel" aria-labelledby="software-tab">
        <div class="row mt-4 g-4">
          <!-- Project 7 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/3.jpg" class="card-img-top w-100" alt="Project 7">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 7</h5>
                <p class="card-text">An enterprise-level software for streamlining operations and management.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>

          <!-- Project 8 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/1.jpg" class="card-img-top w-100" alt="Project 8">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 8</h5>
                <p class="card-text">A desktop application for efficient resource management.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>

          <!-- Project 9 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-lg bg-image hover-overlay hover-zoom hover-shadow ripple">
              <img src="assets/img/2.jpg" class="card-img-top w-100" alt="Project 9">
              <a href="#">
                <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2);"></div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Project 9</h5>
                <p class="card-text">A cutting-edge software tool for task automation and optimization.</p>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-warning btn-sm">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
