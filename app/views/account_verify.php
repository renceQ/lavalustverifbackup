<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gmail Account Verification</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    .container {
      margin-top: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
	  width: 1000px;
      height: 100vh;
    }
    .auth-form-light {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 15px;
      box-shadow: 0px 0px 10px #888888;
      padding: 20px;
      max-width: 400px; /* Adjusted width for the form */
    }
    .submit {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    /* Rest of your existing styles */
    .auth-form-light h2,
    .auth-form-light label,
    .auth-form-light input[type="text"],
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
    <source src="public/images/babae.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container">
    <div class="auth-form-light">
      <h2 class="mb-4 text-center">Email Verification</h2>
      <!-- Your PHP code here -->
      <?php $LAVA =& lava_instance(); ?>
      <?php echo $LAVA->form_validation->errors(); ?>    
      <?php if (isset($success_message)) { ?>
        <div class="alert alert-success"><?php echo $success_message; ?></div>
      <?php } ?>
      <?php if (isset($error_message)) { ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div>
      <?php } ?>
      <form action="<?= site_url('check'); ?>" method="post">
        <div class="form-group">
          <label for="to">Verification code</label>
          <input type="text" class="form-control" id="to" name="verify" placeholder="Enter verification code" required>
          <input type="hidden" name="email" value="<?= $email ?>">
        </div>
        <div class="mt-3 d-flex justify-content-center submit">
          <div><input type="submit" value="Submit" class="btn btn-primary" /></div>
        </div>
      </form>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
