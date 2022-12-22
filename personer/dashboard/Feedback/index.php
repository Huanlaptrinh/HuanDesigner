<!Doctype HTML>
<html>
<head>
	<title>HunaHee DashBoard/FeedBack</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>


<body>

<?php
include '../../common/connect.php';
$sql = "select * from feedback";
$result = mysqli_query($connect,$sql);
 $tong_so_fb = mysqli_num_rows($result);
 $tong_so_fb_tren_1_trang = 2;
 $tong_so_trang = ceil($tong_so_fb / $tong_so_fb_tren_1_trang);
 $trang = 1;
 if (isset( $_GET['trang'])) {
  $trang = $_GET['trang'];
}
$sang_trang = ($trang -1)*$tong_so_fb_tren_1_trang;
$sql = "$sql
limit $tong_so_fb_tren_1_trang offset $sang_trang ";


?>
	
	<div id="mySidenav" class="sidenav">
   <p class="logo"><span>Huna</span>Hee.</p>
  <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="#"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="#"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Projects</a>
  <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="#FeedBack"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;FeedBack</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="../images/user.png" class="pro-img" />
		<p>Huanlailaptrinh <span>UI / UX DESIGNER</span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p>67<br/><span>Customers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>88<br/><span>Projects</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>99<br/><span>Orders</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $tong_so_fb ?><span>FeedBack</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>FeedBack <span>All Customers</span></p>
			<br/>
<table width="10%">
  <tr>
    <th>Họ Tên</th>
    <th>Email</th>
    <th>Ngôn Ngữ</th>
    <th>Xóa</th>
  </tr>
  <?php foreach ($result as $each): ?>
    <tr>
      <td>
        <?php echo $each['name']; ?>
      </td>
      <td>
        <?php echo $each['email']; ?>
      </td>
      <td>
        <?php echo $each['message'] ;  ?>
      </td>
      <td>
      <button> <a href="delete.php?ID=<?php echo $each['ID']  ?>
      " onclick="return confirm('ban muon xoa chu')" style="color: black">Xóa</a></button>
      </td>
  </tr>
  <?php endforeach ?>
  <p align="right">
   <?php for ($i=1; $i <= $tong_so_trang ; $i++) {?>
     <a href="?trang= <?php echo $i ?>" style="color: black">
      <button> <?php echo $i ?></button>
      </a>
    <?php } ?>
</p>
</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Total Sale <span>Sell All</span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>
<?php mysqli_close($connect) ?>
</body>


</html>
