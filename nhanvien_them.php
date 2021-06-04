<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Thêm nhân viên</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm nhân viên</h5>
				<div class="card-body">
					<form action="nhanvien_them.php" method="post">
					  <div class="form-group">
						<label for="manhanvien">Mã nhân viên</label>
						<input type="text" class="form-control" id="manhanvien" name="manhanvien">
					  </div>
					  
					  <div class="form-group">
						<label for="tennhanvien">Tên nhân viên</label>
						<input type="text" class="form-control" id="tennhanvien" name="tennhanvien">
					  </div>
					  
					  <div class="form-group">
						<label for="diachi">Địa chỉ</label>
						<input type="text" class="form-control" id="diachi" name="diachi">
					  </div>
					  
					  <div class="form-group">
						<label for="ngaysinh">Ngày sinh</label>
						<input type="text" class="form-control" id="ngaysinh" name="ngaysinh">
					  </div>
					  
					  <div class="form-group">
						<label for="dienthoai">Điện thoại</label>
						<input type="text" class="form-control" id="dienthoai" name="dienthoai">
					  </div>
					  
					  <button type="submit" class="btn btn-success">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<?php
		if(isset ($_POST['manhanvien']))
		{
			?>
		<script>
			db.collection("NHANVIEN").add({
				manhanvien: "<?php echo $_POST['manhanvien'];?>",
				tennhanvien: "<?php echo $_POST['tennhanvien'];?>",
				diachi: "<?php echo $_POST['diachi'];?>",
				ngaysinh: "<?php echo $_POST['ngaysinh'];?>",
				dienthoai: "<?php echo $_POST['dienthoai'];?>"
			})
			.then((docRef) => {
				///console.log("Document written with ID: ", docRef.id);
				location.href="nhanvien.php";
			})
			.catch((error) => {
				console.error("Error adding document: ", error);
			});

		</script>
		<?php
		}
		?>
	</body>
</html>