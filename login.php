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
            margin-top:15%;
            margin-left:10%;
            margin-right:10%;
        }
        }
    </style>
    <body>
        <form name="form1" method="post" action="check_login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="InputUser" type="text" class="form-control" id="InputUser" aria-describedby="emailHelp" placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="InputPassword" type="password" class="form-control" id="InputPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-sm" style="margin-left:20px;margin-top:20px">Login</button>
            <a class="btn btn-primary btn-sm" href="register.php" role="button" style="margin-left:20px;margin-top:20px">Register</a>
        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 