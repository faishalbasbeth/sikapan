
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BPBD JEMBER</title>

    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/css/signin.css" rel="stylesheet">
  </head>

  <body background="home/images/ARSIP1.jpg">

    <div class="container">
        <br>
        <br>
        <br>
        <br>

        <form class="form-signin" role="form" method="get">
        
         <br>
         <br>
         <br>
         <br>
         <br>

        <input type="hidden" name="controller" value="login">
        <input type="hidden" name="action" value="authentication">

        <input id="name" name="username" type="text" class="form-control" placeholder="Username" 
        value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" required>
        <br>
        <input id="password" name="password" type="password" class="form-control" placeholder="Password" 
        value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>" required>
        <div id="name" style="font-size: 18px; font-family: comic-sans; color:; text-align: center;">
            <b><?php echo $error ?></b>
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
      </form>

    </div> 
  </body>
</html>
