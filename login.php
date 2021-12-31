<?php
@ob_start();
session_start();
if (isset($_POST['proses'])) { // mengecek apakah form variabelnya ada isinya
  require 'koneksi.php';
  $username = strip_tags($_POST['username']); // isi varibel dengan mengambil data username pada form
  $password = strip_tags($_POST['password']); // isi variabel dengan mengambil data password pada form

  try {
    $sql = "SELECT username,password FROM login WHERE username = :username AND password = :password"; // buat queri select
    // $row = $config->prepare($sql);
    // $row->execute(array($username, $password));
    // $count = $row->rowCount(); // mengecek row
    $query = $config->prepare($sql);
    $query->bindParam(':username', $usernma, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $count = $query->fetchAll(PDO::FETCH_OBJ);

    if ($count > 0) { // jika rownya ada 
      $_SESSION['login'] = $username; // set sesion dengan variabel username
      header("Location: http://localhost/web-rizkon/admin/template"); // lempar variabel ke tampilan index.php
      return;
    } else {
      echo "Anda tidak dapat login";
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword">

  <title>Login To Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background:#004643;color:#fff;">

  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

  <div id="login-page" style="padding-top:3pc;">
    <div class="container">
      <form class="form-login" method="POST">
        <h2 class="form-login-heading">Login Admin</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
          <br>
          <input type="password" class="form-control" name="passweord" placeholder="Password">
          <br>
          <button class="btn btn-primary btn-block" name="proses" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        </div>
      </form>

    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>