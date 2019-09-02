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
</style>

<?php 
    include 'conn.php';
    session_start();
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $sqle = $conn->prepare("SELECT * FROM [profile] WHERE id = :id");
        $sqle->bindParam(':id',$id);
        $sqle->execute();
        $rs = $sqle->fetch(PDO::FETCH_ASSOC);
       
        $firstname = $rs['firstname'];
        $lastname = $rs['lastname'];
        $height = $rs['height'];
        $weight = $rs['weight'];
        $tel = $rs['tel'];
        $email = $rs['email'];
        $birthday = $rs['birthday'];
        $age = $rs['age'];
        $picture = $rs['picture'];
?>
  
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Profile</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  <body>
  
    <div class="card" style="width: 80%;margin-top:3%;margin-left:10%">
        <div class="text-center" style="margin-top:4%">
            <img src="<?php echo $picture; ?>" class="rounded">
        </div>
            <div class="card-body" style="margin-left:4%">
                <div class="row">
                    <div class="col" style="margin-top:5px">
                        <h5 class="card-title">ข้อมูลส่วนตัว</h5>
                    </div>
                    <div class="col-left-left" style="margin-right:80px">
                        <a class="btn btn-primary btn-sm" href="edit_profile.php" role="button" >แก้ไข</a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left:10px">
                <div class="col-sm-5" style="margin-top:10px">
                    <div class="input-group" >
                        <div class="input-group-prepend" style="margin-left:7%;">
                            <span class="input-group-text" style="width:100px;">ชื่อ</span>
                        </div>
                        <a type="text" name="u[firstname]" class="form-control" style="margin-right:20px;"><?php echo $firstname?></a>
                     </div>
                </div>
                <div class="col-sm-5" style="margin-top:10px">
                     <div class="input-group">
                        <div class="input-group-prepend" style="margin-left:7%;">
                            <span class="input-group-text" style="width:100px">นามสกุล</span>
                        </div>
                        <a type="text" name="u[firstname]" class="form-control" style="margin-right:20px;"><?php echo $lastname?></a>
                     </div>
                </div>
            </div>
            <div class="row" style="margin-left:10px">
                <div class="col-sm-5" style="margin-top:10px">
                    <div class="input-group">
                        <div class="input-group-prepend" style="margin-left:7%;">
                            <span class="input-group-text" style="width:100px;">เกิดวันที่</span>
                        </div>
                        <a type="text" name="u[birthday]" class="form-control" style="margin-right:20px;"><?php echo $birthday?></a>
                     </div>
                </div>
                <div class="col-sm-5" style="margin-top:10px">
                     <div class="input-group">
                        <div class="input-group-prepend" style="margin-left:7%;">
                            <span class="input-group-text" style="width:100px">อายุ</span>
                        </div>
                        <a type="text" name="u[age]" class="form-control" style="margin-right:20px;"><?php echo $age?></a>
                     </div>
                </div>
            </div>
            <div class="row" style="margin-left:10px">
                <div class="col-sm-5" style="margin-top:10px">
                    <div class="input-group">
                        <div class="input-group-prepend" style="margin-left:7%;">
                            <span class="input-group-text" style="width:100px;">น้ำหนัก</span>
                        </div>
                        <a type="text" name="u[weight]" class="form-control" style="margin-right:20px;"><?php echo $weight?></a>
                     </div>
                </div>
                <div class="col-sm-5" style="margin-top:10px">
                     <div class="input-group">
                        <div class="input-group-prepend" style="margin-left:7%;">
                            <span class="input-group-text" style="width:100px">ส่วนสูง</span>
                        </div>
                        <a type="text" name="u[height]" class="form-control" style="margin-right:20px;"><?php echo $height?></a>
                     </div>
                </div>
            </div>
            <div class="row" style="margin-left:10px;margin-bottom:5%">
                <div class="col-sm-5" style="margin-top:10px;">
                    <div class="input-group">
                        <div class="input-group-prepend" style="margin-left:7%">
                            <span class="input-group-text" style="width:100px;">Tel</span>
                        </div>
                        <a type="text" name="u[tel]" class="form-control" style="margin-right:20px;"><?php echo $tel?></a>
                     </div>
                </div>
                <div class="col-sm-5" style="margin-top:10px;margin-bottom:5%">
                     <div class="input-group">
                        <div class="input-group-prepend" style="margin-left:7%;">
                            <span class="input-group-text" style="width:100px">E-mail</span>
                        </div>
                        <a type="text" name="u[email]" class="form-control" style="margin-right:20px;"><?php echo $email?></a>
                     </div>
                </div>
            </div>
    </div>
    <?php 
        } else {
            header('Location: login.php');
        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>