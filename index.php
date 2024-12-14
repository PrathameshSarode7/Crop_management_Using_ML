<!DOCTYPE html>
<html>
<?php include ('header.php'); ?>

<body class="bg-white" id="top" style="background: url('assets/img/background.jpg') no-repeat center center fixed; background-size: cover; font-family: 'Poppins', sans-serif;">

<?php include ('nav.php'); ?>
<style>
  .card {
    height: 100%; /* Ensures all cards take up the same height */
  }
  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ensures proper spacing between title and text */
    height: 100%;
  }
  .card-img-top {
    height: 200px; /* Optional: Ensures all images are of consistent height */
    object-fit: cover; /* Prevents distortion */
  }
</style>

<div class="container mt-5">
  <div class="row align-items-center">
    <div class="col-lg-5 col-md-8 text-left mb-5">
      <ul class="list-unstyled">
        <li class="py-2"> 
          <div class="d-flex align-items-center">
            <div class="icon-wrapper bg-primary text-center text-white rounded-circle p-3 mr-3"> 
              <i class="ni ni-settings-gear-65 fa-2x"></i>
            </div>
            <div style="background: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 5px;">
              <h6 class="mb-0 text-dark">Crop Prediction and Recommendation</h6>
            </div>
          </div>
        </li>
        <li class="py-2"> 
          <div class="d-flex align-items-center">
            <div class="icon-wrapper bg-success text-center text-white rounded-circle p-3 mr-3"> 
              <i class="ni ni-html5 fa-2x"></i>
            </div>
            <div style="background: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 5px;">
              <h6 class="mb-0 text-dark">Fertilizer Recommendation</h6>
            </div>
          </div>
        </li>
        <li class="py-2"> 
          <div class="d-flex align-items-center">
            <div class="icon-wrapper bg-info text-center text-white rounded-circle p-3 mr-3"> 
              <i class="ni ni-settings-gear-65 fa-2x"></i>
            </div>
            <div style="background: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 5px;">
              <h6 class="mb-0 text-dark">Yield Prediction</h6>
            </div>
          </div>
        </li>
        <li class="py-2"> 
          <div class="d-flex align-items-center">
            <div class="icon-wrapper bg-warning text-center text-white rounded-circle p-3 mr-3"> 
              <i class="ni ni-satisfied fa-2x"></i>
            </div>
            <div style="background: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 5px;">
              <h6 class="mb-0 text-dark">Rainfall Prediction</h6>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="col-lg-7 col-md-12 text-center">
      <img class="img-fluid shadow-lg rounded" src="assets/img/features.png" alt="Features Illustration">
    </div>
  </div>
</div>


<div class="container mt-5" id="cards-section">
  <h2 class="text-center text-white mb-5">Our Key Features</h2>
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-lg">
        <img src="assets/img/rainfall.jpg" class="card-img-top" alt="Rainfall Prediction">
        <div class="card-body text-center">
          <h5 class="card-title">Rainfall Prediction</h5>
          <p class="card-text">Accurate rainfall forecasts to plan farming activities effectively.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-lg">
        <img src="assets/img/crop1.jpg" class="card-img-top" alt="Crop Prediction">
        <div class="card-body text-center">
          <h5 class="card-title">Crop Prediction</h5>
          <p class="card-text">Get the best crop suggestions based on soil and weather data.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-lg">
        <img src="assets/img/yield.jpg" class="card-img-top" alt="Yield Prediction">
        <div class="card-body text-center">
          <h5 class="card-title">Yield Prediction</h5>
          <p class="card-text">Estimate the potential yield to make informed decisions.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-lg">
        <img src="assets/img/fertilizer.jpg" class="card-img-top" alt="Fertilizer Recommendation">
        <div class="card-body text-center">
          <h5 class="card-title">Fertilizer Recommendation</h5>
          <p class="card-text">Suggestions for optimal fertilizer use for better yields.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-lg">
        <img src="assets/img/crop.avif" class="card-img-top" alt="Crop Recommendation">
        <div class="card-body text-center">
          <h5 class="card-title">Crop Recommendation</h5>
          <p class="card-text">Choose the right crops based on advanced analytics.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require("footer.php"); ?>

</body>

</html>
