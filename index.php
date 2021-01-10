<?php 
    if(isset($_POST['pass'])) {
        $p = md5($_POST['pass']);

        echo "<script>alert('Password is $p')</script>";
    }

?>
<!DOCTYPE html>
  <head>
    <title>index</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
    <form action="" method="POST">
        <input type="text" name="pass" id="pass" onchange="this.form.submit();">
    </form>
  </body>
</html>