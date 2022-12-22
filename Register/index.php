<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng Ký-Hunna Hee.</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v10">
	<?php
	include_once '../common/connect.php';
	$sql = "select * from phan_mem ";
	$sql_1 = "select * from quoc_gia ";
	$sql_2 = "select * from noi";
	$result = mysqli_query($connect,$sql);
	$result_1 = mysqli_query($connect,$sql_1);
	$result_2 = mysqli_query($connect,$sql_2); 
	?>
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="process.php" method="post" id="myform">
				<div class="form-left">
					<h2>Thông tin chung</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">
						<input type="date" name="datebirth" id="" placeholder="Birth Date" required>
					</span>
				</div>
					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="Tên Công Ty" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business" placeholder="Loại Hình Kinh Doanh" required>
						</div>
						<div class="form-row form-row-4">
							<select name="ma_phan_mem">
							<?php foreach ($result as $each): ?>
							<option value="<?php echo $each['ma_pm'] ?>">
								<?php echo $each['ten_pm'] ?>
						    </option>							
						<?php endforeach ?>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="form-right">
					<h2>Chi tiết liên hệ</h2>
					<div class="form-row">
						<input type="text" name="street" class="street" id="street" placeholder="Đường" required>
					</div>
					<div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Thêm Thông Tin" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" class="zip" id="zip" placeholder="Mã Bưu Chính" required>
						</div>
						<div class="form-row form-row-2">
							<select name="ma_noi">
							  <?php foreach ($result_2 as $each): ?>
							      <option value="<?php echo $each['ma_noi'] ?>">
							        	<?php echo $each['ten_noi'] ?>
					 	         </option>							
					        	<?php endforeach ?>   
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row">
						<select name="ma_quoc_gia">
						   <?php foreach ($result_1 as $each): ?>
							  <option value="<?php echo $each['ma_qg'] ?>">
							    	<?php echo $each['ten_qg'] ?>
						       </option>							
						   <?php endforeach ?>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="Code +" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Số Điện Thoại" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Hoàn Thành">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>