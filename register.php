<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>WebApp</title>
  </head>
  <style>
    th{
        font-family: "Times New Roman", Times, serif;
        font-size: 14px;
    }
    tr.serif{
        font-family: "Times New Roman", Times, serif;
        font-size: 14px;
    }
    body {
        background-color: GhostWhite;
    }
    form {
        margin-top:15%;
        margin-left:30%;
        margin-right:30%;
    }
    @media only screen and (max-width: 800px) {
    form {
        margin-top:20%;
        margin-left:10%;
        margin-right:10%;
    }
    }
</style>
 <?php
include 'conn.php';
?>
  <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <form name="form1" method="post" action="save_register.php">
      <div class="input-group" style="margin-top:20px">
          <input type="text" name="username" id="username" class="form-control" required autocomplete="off" placeholder="Username" aria-label="Username" style="margin-right:20px;margin-left:20px;">
      </div>
      <div class="input-group" style="margin-top:20px">
          <input type="email" name="email" id="email" class="form-control" required autocomplete="off" placeholder="example@example.com" aria-label="example@example.com" style="margin-right:20px;margin-left:20px;">
      </div>
      <div class="form-row" style="margin-top:20px;margin-left:15px;margin-right:15px">
      <div class="col">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="off" >
      </div>
      <div class="col">
        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password" required autocomplete="off" >
      </div>
      <span id='message'></span>
      <script>
        $('#password, #cpassword').on('keyup', function(){
        if($('#password').val()==$('#cpassword').val()) {
          $('#message').html('Matching').css('color', 'green');
        } else
          $('#message').html('Not Macthing').css('color', 'red');
        });
      </script>
      </div>
      <div>
        <td><input class="btn btn-secondary btn-sm" type = "submit" value = "Register" style="margin-left:20px;margin-top:20px"></td>
        <td><a class="btn btn-secondary btn-sm" href="login.php" role="button" style="margin-left:20px;margin-top:20px">Login</a></td>
      </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>