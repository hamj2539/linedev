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
        h3 {
            font-family: "Times New Roman", Times, serif;
            font-size: 14px;
        }
        body {
            background-color: GhostWhite;
        }
    </style>
  <?php
include 'conn.php';
    $firstname = null;
    $lastname = null;
    $username = null;
    $password = null;
    $tel = null;
    $email = null;
    $user_type = null;
    if(isset($_GET['eid'])){
        $id = $_GET['eid'];

        $sqle = "SELECT * FROM user WHERE id = '".$id."'";
        $result = mysqli_query($conn,$sqle);
        $rse = mysqli_fetch_array($result);

        $firstname = $rse['firstname'];
        $lastname = $rse['lastname'];
        $username = $rse['username'];
        $password = $rse['password'];
        $tel = $rse['tel'];
        $email = $rse['email'];
        $user_type = $rse['user_type'];
        $userid = $rse['id'];

    }
    if(isset($_POST['u']['insert'])){
        $u = $_POST['u'];
        $sqli = "INSERT INTO user (firstname, lastname, username, password, tel, email, user_type) 
        VALUE ('".$u['firstname']."','".$u['lastname']."','".$u['username']."','".$u['password']."','".$u['tel']."','".$u['email']."','".$u['user_type']."')";
        $rs = mysqli_query($conn,$sqli);
    }

    if(isset($_POST['u']['edit'])) {
        $u = $_POST['u'];
        $sqlu = "UPDATE user SET 
                firstname='".$u['firstname']."',
                lastname='".$u['lastname']."',
                username='".$u['username']."',
                password='".$u['password']."',
                tel='".$u['tel']."',
                email='".$u['email']."',
                user_type='".$u['user_type']."'
                WHERE id = '".$u['id']."'";
                $rsu = mysqli_query($conn,$sqlu);
    }
?>
  <body>
  <div class="btn-group" style="margin-top:20px; margin-left:20px;width:150px;height:40px">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Edit User
    </button>
    <div class="dropdown-menu dropdown-menu-lg-left">
        <a class="dropdown-item" href="home.php">Home</a>
        <a class="dropdown-item" href="utable.php">Data User</a>
        <a class="dropdown-item" href="edit.php">Edit User</a>
    </div>
    </div>
    </div>
    <h3 style="margin-top:10px;margin-left:40px">เพิ่มข้อมูล</h3>
    <form method="post" action=" <?php echo $_SERVER['PHP_SELF'] ?>">
    <?php if(isset($_GET['eid'])) {?>
        <input type="hidden" name="u[edit]" value="1">
        <input type="hidden" name="u[id]" value="<?php echo $userid;?>">
    <?php }else{ ?>
        <input type="hidden" name="u[insert]" value="1">
    <?php } ?>
    <div class="input-group">
        <div class="input-group-prepend" style="margin-left:20px;">
            <span class="input-group-text" style="width:100px">Firstname</span>
        </div>
        <input type="text" name="u[firstname]" class="form-control" required autocomplete="off" placeholder="Firstname" aria-label="Firstname" style="margin-right:20px;" value = "<?php echo $firstname?>">
    </div>
    <div class="input-group">
        <div class="input-group-prepend" style="margin-left:20px;">
            <span class="input-group-text" style="width:100px">Lastname</span>
        </div>
        <input type="text" name="u[firstname]" class="form-control" required autocomplete="off" placeholder="Lastname" aria-label="Firstname" style="margin-right:20px;" value = "<?php echo $lastname?>">
    </div>
    <div class="input-group">
        <div class="input-group-prepend" style="margin-left:20px">
            <span class="input-group-text" style="width:100px">Username</span>
        </div>
        <input type="text" name="u[username]" class="form-control" required autocomplete="off" placeholder="Username" aria-label="Username" style="margin-right:20px" value = "<?php echo $username?>">
    </div>
    <div class="input-group">
        <div class="input-group-prepend" style="margin-left:20px">
            <span class="input-group-text" style="width:100px">Password</span>
        </div>
        <input type="text" name="u[password]" class="form-control" required autocomplete="off" placeholder="Password" aria-label="Password" style="margin-right:20px" value = "<?php echo $password?>">
    </div>
    <div class="input-group">
        <div class="input-group-prepend" style="margin-left:20px">
            <span class="input-group-text" style="width:100px">Tel</span>
        </div>
        <input type="text" name="u[tel]" class="form-control" required autocomplete="off" placeholder="XXX-XXX-XXXX" aria-label="XXX-XXX-XXXX" style="margin-right:20px" value = "<?php echo $tel?>">
    </div>
    <div class="input-group">
        <div class="input-group-prepend" style="margin-left:20px">
            <span class="input-group-text" style="width:100px">E-mail</span>
        </div>
        <input type="text" name="u[email]" class="form-control" required autocomplete="off" placeholder="example@example.com" aria-label="example@example.com" style="margin-right:20px" value = "<?php echo $email?>">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend" style="margin-left:20px">
            <label class="input-group-text" for="inputGroupSelect01" style="width:100px">กลุ่มผู้ใช้งาน</label>
        </div>
        <select class="custom-select"  name="u[user_type]" style="margin-right:20px">
            <option selected value = "<?php echo $user_type?>">Choose...</option>
            <option value="admin" <?php if($user_type == "admin") {?>selected="selected"<?php }?>>Admin</option>
            <option value="exe" <?php if($user_type == "exe") {?>selected="selected"<?php }?>>ผู้ใช้ทั่วไป</option>
        </select>
    </div>
        <div>
            <td><input class="btn btn-secondary" type = "submit" value = "บันทึก" style="margin-left:20px;"></td>
        </div>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>