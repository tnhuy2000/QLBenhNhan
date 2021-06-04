<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Thêm bệnh nhân</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm bệnh nhân</h5>
				<div class="card-body">
					<form action="benhnhan_them.php" method="post">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="mabenhnhan">Mã bệnh nhân</label>
								<input type="text" class="form-control" id="mabenhnhan" name="mabenhnhan">
							</div>
							<div class="form-group col-md-6">
								<label for="tenbenhnhan">Tên bệnh nhân</label>
								<input type="text" class="form-control" id="tenbenhnhan" name="tenbenhnhan">
							</div>
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="maphong">Mã phòng</label>
								<input type="text" class="form-control" id="maphong" name="maphong">
							</div>
							<div class="form-group col-md-4">
								<label for="mabenh">Mã bệnh</label>
								<input type="text" class="form-control" id="mabenh" name="mabenh">
							</div>
							<div class="form-group col-md-4">
								<label for="mabaohiem">Mã bảo hiểm</label>
								<input type="text" class="form-control" id="mabaohiem" name="mabaohiem">
							</div>
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="ngaysinh">Ngày sinh</label>
								<input type="text" class="form-control" id="ngaysinh" name="ngaysinh">
							</div>
							<div class="form-group col-md-6">
								<label for="dienthoai">Điện thoại</label>
								<input type="text" class="form-control" id="dienthoai" name="dienthoai">
							</div>
						</div>
						<div class="form-group">
							<label for="diachi">Địa chỉ</label>
							<input type="text" class="form-control" id="diachi" name="diachi">
						</div>
					  
						<button type="submit" class="btn btn-success">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<?php
		if(isset ($_POST['mabenhnhan']))
		{
			?>
		<script>
			db.collection("BENHNHAN").add({
				mabenhnhan: "<?php echo $_POST['mabenhnhan'];?>",
				tenbenhnhan: "<?php echo $_POST['tenbenhnhan'];?>",
				maphong: "<?php echo $_POST['maphong'];?>",
				mabenh: "<?php echo $_POST['mabenh'];?>",
				mabaohiem: "<?php echo $_POST['mabaohiem'];?>",
				diachi: "<?php echo $_POST['diachi'];?>",
				ngaysinh: "<?php echo $_POST['ngaysinh'];?>",
				dienthoai: "<?php echo $_POST['dienthoai'];?>"
			})
			.then((docRef) => {
				///console.log("Document written with ID: ", docRef.id);
				location.href="benhnhan.php";
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