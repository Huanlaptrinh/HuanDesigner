<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$datebirth = $_POST['datebirth'];
$company = $_POST['company'];
$business = $_POST['business'];
$ma_phan_mem = $_POST['ma_phan_mem'];
$street = $_POST['street'];
$additional = $_POST['additional'];
$zip = $_POST['zip'];
$ma_noi = $_POST['ma_noi'];
$ma_quoc_gia = $_POST['ma_quoc_gia'];
$code = $_POST['code'];
$phone = $_POST['phone'];
$your_email = $_POST['your_email'];
include_once "../common/connect.php";
$sql = "
  insert into khach_hang(ten,ho,ngay_sinh,ten_cty,loai_hinh_kd,ma_phan_mem,duong,them_thong_tin,ma_buu_chinh,ma_noi,ma_quoc_gia,ma,sdt,email)
  values
  ('$first_name','$last_name','$datebirth','$company','$business','$ma_phan_mem','$street','$additional','$zip','$ma_noi','$ma_quoc_gia','$code','$phone','$your_email')
";
// die ("$sql");
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:../index.php');
?>