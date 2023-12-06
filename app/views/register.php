<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Additional custom styles for glass design -->
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-weight:bold; /* Increased font size for better readability */
      margin: 0; /* Reset margin to ensure full-page coverage */
    }

    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1; /* Placing the video behind the form */
    }
    .container {
      margin-top: 80px;
    }

    .auth-form-light {
      background: rgba(255, 255, 255, 0.8); /* Adjusted opacity for better contrast */
      border-radius: 15px; /* Adding border-radius for rounded corners */
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5); /* Increased shadow for depth */
      position: relative; /* Ensuring the form remains in place */
      z-index: 1; /* Placing the form above the background */
      padding: 30px; /* Increased padding for better spacing */
    }

    /* Rest of your existing styles */
    .auth-form-light h4,
    .auth-form-light h6,
    .auth-form-light input[type="text"],
    .auth-form-light input[type="email"],
    .auth-form-light input[type="password"],
    .auth-form-light input[type="submit"],
    .auth-form-light .text-center {
      font-family: Arial, sans-serif;
      font-size: 16px; 
      /* Increased font size for headers */
      color: #222; /* Slightly darker text color for better contrast */
    }
  </style>
</head>
<body>
  <!-- Video background -->
  <video class="video-background" autoplay muted loop>
    <source src="public/images/babae.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
          <h4 class="text-center" style="font-weight:bold;">Register Account</h4>
          <br>
          <!-- Your PHP code here -->
          <form action="<?= site_url('validate_reg'); ?>" method="post">
            <!-- Form inputs -->
            <div class="form-group">
              <input type="text" class="form-control form-control-lg" name="name" placeholder="Username" value="">
            </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" value="">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-lg" name="confpassword" placeholder="Confirm Password" value="">
            </div>
            <div class="mt-3 d-flex justify-content-center">
              <div><input type="submit" value="Sign Up" class="btn btn-primary" /></div>
            </div>
            <div class="text-center mt-4 font-weight-light" >
              Already have an account? <a href="login" class="text-primary" >Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
