<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Sửa nhân viên</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa nhân viên</h5>
				<div class="card-body">
					<form action="nhanvien_sua.php" method="post">
						<input type="text" id="id" name="id" hidden />
						
						<div class="form-group">
							<label for="manhanvien">Mã nhân viên</label>
							<input type="text" class="form-control" id="manhanvien" name="manhanvien">
						</div>
					  
						<div class="form-group">
							<label for="tennhanvien">Tên nhân viên</label>
							<input type="text" class="form-control" id="tennhanvien" name="tennhanvien">
						</div>
						  
						<div class="form-group">
							<label for="makhoa">Mã Khoa</label>
							<input type="text" class="form-control" id="makhoa" name="makhoa">
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
						
						<button type="submit" class="btn btn-info">Cập nhật</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<?php
		if(isset ($_GET['id']))
		{
			?>
		<script>
		var docRef = db.collection("NHANVIEN").doc("<?php echo $_GET['id'];?>");

		docRef.get().then((doc) => {
			if (doc.exists) {
				//console.log("Document data:", doc.data());
				$('#id').val(doc.id);
				$('#manhanvien').val(doc.data().manhanvien);
				$('#tennhanvien').val(doc.data().tennhanvien);
				$('#makhoa').val(doc.data().makhoa);
				$('#diachi').val(doc.data().diachi);
				$('#ngaysinh').val(doc.data().ngaysinh);
				$('#dienthoai').val(doc.data().dienthoai);
			} else {
				// doc.data() will be undefined in this case
				console.log("No such document!");
			}
		}).catch((error) => {
			console.log("Error getting document:", error);
		});
		</script>
		<?php
		}
		?>
		<?php
		if(isset ($_POST['manhanvien']))
		{
			?>
		<script>
		var washingtonRef = db.collection("NHANVIEN").doc("<?php echo $_POST['id'];?>");

		// Set the "capital" field of the city 'DC'
		washingtonRef.update({
				manhanvien: "<?php echo $_POST['manhanvien'];?>",
				tennhanvien: "<?php echo $_POST['tennhanvien'];?>",
				makhoa: "<?php echo $_POST['makhoa'];?>",
				diachi: "<?php echo $_POST['diachi'];?>",
				ngaysinh: "<?php echo $_POST['ngaysinh'];?>",
				dienthoai: "<?php echo $_POST['dienthoai'];?>"
		})
		.then(() => {
			//console.log("Document successfully updated!");
			location.href="nhanvien.php";
		})
		.catch((error) => {
			// The document probably doesn't exist.
			console.error("Error updating document: ", error);
		});
		</script>
		<?php
		}
		?>
	</body>
</html>