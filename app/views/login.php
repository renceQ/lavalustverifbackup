<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles -->
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-weight: bold;
      margin: 0;
      background: url('path_to_your_video_or_image.mp4') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .container-fluid {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .auth-form-light {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 15px;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
      padding: 30px;
      max-width: 400px; /* Adjusted width for the form */
    }

    /* Rest of your existing styles */
    .auth-form-light h4,
    .auth-form-light h6,
    .auth-form-light input[type="email"],
    .auth-form-light input[type="password"],
    .auth-form-light input[type="submit"],
    .auth-form-light .text-center {
      font-family: Arial, sans-serif;
      font-size: 16px;
      color: #222;
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
  </style>
</head>

<body>
<video class="video-background" autoplay muted loop>
    Your browser does not support HTML5 video.
  </video>

  <div class="container-fluid">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <h4 class="text-center" style="font-weight: bold;">Hello! Let's get started</h4>
      <h6 class="font-weight-light text-center">Sign in to continue.</h6>
      <!-- Your PHP code here -->
      <form action="<?= site_url('validate_login'); ?>" method="post">
        <!-- Form inputs -->
        <div class="form-group">
          <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
        </div>
        <div class="mt-3 d-flex justify-content-center">
          <div><input type="submit" value="Login" class="btn btn-primary" /></div>
        </div>
        <div class="text-center mt-4 font-weight-light">
          Don't have an account? <a href="register" class="text-primary">Create</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
