<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="<?= base_url("assets/img/logo.png") ?>" type="image/png">
    <meta charset="utf-8">
    <title>Enter Token</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        h2 {
            text-align: center;
        }
        .login-dark {
          height:100vh;
          background:#475d62 url(../../assets/img/star-sky.jpg);
          background-size:cover;
          position:relative;
        }

        .login-dark form {
          max-width:320px;
          width:90%;
          background-color:#1e2833;
          padding:40px;
          border-radius:4px;
          transform:translate(-50%, -50%);
          position:absolute;
          top:50%;
          left:50%;
          color:#fff;
          box-shadow:3px 3px 4px rgba(0,0,0,0.2);
        }

        .login-dark .illustration {
          text-align:center;
          padding:15px 0 20px;
          font-size:100px;
          color:#2980ef;
        }

        .login-dark form .form-control {
          background:none;
          border:none;
          border-bottom:1px solid #434a52;
          border-radius:0;
          box-shadow:none;
          outline:none;
          color:inherit;
        }

        .login-dark form .btn-primary {
          background:#214a80;
          border:none;
          border-radius:4px;
          padding:11px;
          box-shadow:none;
          margin-top:26px;
          text-shadow:none;
          outline:none;
        }

        .login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
          background:#214a80;
          outline:none;
        }

        .login-dark form .forgot {
          display:block;
          text-align:center;
          font-size:12px;
          color:#6f7a85;
          opacity:0.9;
          text-decoration:none;
        }

        .login-dark form .forgot:hover, .login-dark form .forgot:active {
          opacity:1;
          text-decoration:none;
        }

        .login-dark form .btn-primary:active {
          transform:translateY(1px);
        }
    </style>
</head>    
<body>
    <div class="login-dark">
        <?php echo form_open('verify_token'); ?>
            <div class="illustration">
                <i class="icon ion-ios-locked-outline"></i>
            </div>
            <h2>Enter Token</h2>
            <div>
                <input class="form-control" type="text" name="token" placeholder="Enter Token" required>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Verifikasi</button>
            <?php if ($this->session->flashdata('error')): ?>
                <p class="forgot"><?php echo $this->session->flashdata('error'); ?></p>
            <?php endif; ?>
        <?php echo form_close(); ?>
    </div>
</body>
</html>