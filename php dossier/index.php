<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.html"></script>
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" action="service/connect.php" method="post">
        <h2 class="form-signin-heading text-center">Connexion</h2>
        <input type="text" class="input-block-level" placeholder=" exemple@gmail.com" name="email">
        <input type="password" class="input-block-level" placeholder="••••••••" name="password">
        <button class="btn btn-large btn-primary" type="submit" style="margin-left: 22%;">Se Connecter</button>
      </form>
    </div>
     <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>