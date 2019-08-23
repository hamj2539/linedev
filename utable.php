<html>

<head>
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

if(isset($_GET['did'])){
  $sqld = "DELETE FROM [user] WHERE id = '".$_GET['did']."'";
  $rsd = $conn->query($sqld);
}

$sql = "SELECT * FROM [user]";
$result = $conn->query($sql);

?>
<body>
<div class="btn-group" style="margin-top:20px; margin-left:20px;width:160px;height:50px">
<button class="btn btn-secondary btn-lg" type="button">
  Data User
  </button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu dropdown-menu-lg-left">
        <a class="dropdown-item" href="home.php">Home</a>
        <a class="dropdown-item" href="utable.php">Data User</a>
        <a class="dropdown-item" href="edit.php">Edit User</a>
    </div>
    </div>
<!-- <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top:20px">Add new User</button> -->
<div>
<a type="button" class="btn btn-secondary btn-sm" style="margin-top:10px; margin-right:40%;margin-left:45px;font-size:12;height:30px" href = "edit.php">Add new User</a>
</div>
<div class="table-responsive" style="margin-top:10px;margin-left:25px;margin-right:25px">
  <table class="table">
  <tr>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>น้ำหนัก</th>
        <th>ส่วนสูง</th>
        <th>Email</th>
        <th>เบอร์โทร</th>
        <th>กลุ่มผู้ใช้</th>
        <th>เพิ่มเติม</th>
    </tr>
    <?php  while($rs = $result->fetch(PDO::FETCH_ASSOC)) {  ?>
    <tr class = "serif">
    
        <td><?php echo $rs['firstname']?></td>
        <td><?php echo $rs['lastname']?></td>
        <td><?php echo $rs['username']?></td>
        <td><?php echo $rs['password']?></td>
        <td><?php echo $rs['email']?></td>
        <td><?php echo $rs['tel']?></td>
        <td><?php echo $rs['user_type']?></td>
        <td >
        <a class="btn btn-link" href = "edit.php?eid=<?php echo $rs['id'];?>">แก้ไข</a> 
        <a class="btn btn-link" href = "<?php echo $_SERVER['PHP_SELF'];?>?did=<?php echo $rs['id'];?>" onclick = "return confirm('ต้องการลบใช่หรือไม่');">ลบ</a> 
        </td>
    </tr>
    <?php } ?>
  </table>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>