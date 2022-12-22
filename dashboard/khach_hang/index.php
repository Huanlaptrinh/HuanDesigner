<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
     include_once '../../common/connect.php';
     $sql ="select * from khach_hang";
     $result = mysqli_query($connect,$sql);
?>

<table border="1">
    <tr>
        <td>Khach Hang</td>
    </tr>
    <tr>
        <th>Tên</th>
        <th>Họ</th>
        <th>Ngày Sinh</th>
        <th>Tên Công Ty</th>
        <th>Kinh Doanh</th>
        <th>Loại Phần Mềm</th>
        <th>Tên Đường</th>
        <th>Thêm Thông Tin</th>
        <th>Mã bưu chính</th>
        <th>Nơi</th>
        <th>Quốc Gia</th>
        <th>Mã</th>
        <th>Số Điện Thoại</th>
        <th>Email</th>
        <th>Duyệt</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) : ?>
        <tr>
            <td>
                <?php echo $each['ten'] ;  ?>
            </td>
            <td>
                <?php echo $each['ho'] ;  ?>
            </td>
            <td>
                <?php echo $each['ngay_sinh'] ;  ?>
            </td>
            <td>
                <?php echo $each['ten_cty'] ;  ?>
            </td>
            <td>
                <?php echo $each['loai_hinh_kd'] ;  ?>
            </td>
            <td>
                <?php echo $each['ma_phan_mem'] ;  ?>
            </td>
            <td>
                <?php echo $each['duong'] ;  ?>
            </td>
            <td>
                <?php echo $each['them_thong_tin'] ;  ?>
            </td>
            <td>
                <?php echo $each['ma_buu_chinh'] ;  ?>
            </td>
            <td>
                <?php echo $each['ma_noi'] ;  ?>
            </td>
            <td>
                <?php echo $each['ma_quoc_gia'] ;  ?>
            </td>
            <td>
                <?php echo $each['ma'] ;  ?>
            </td>
            <td>
                <?php echo $each['sdt'] ;  ?>
            </td>
            <td>
                <?php echo $each['email'] ;  ?>
            </td>
            <td>
               <button>Duyet</button>
            </td>
            <td>
               <button>Xoa</button>
            </td>
        </tr>
    <?php endforeach ?>
</table> 

</body>
</html>