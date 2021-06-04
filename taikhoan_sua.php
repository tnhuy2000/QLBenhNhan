<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Sửa tài khoản</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa tài khoản</h5>
				<div class="card-body">
					<form action="taikhoan_sua.php" method="post">
						<input type="text" id="id" name="id" hidden />
						
						<div class="form-group">
							<label for="hoten">Họ tên</label>
							<input type="text" class="form-control" id="hoten" name="hoten" required />
						</div>
						
						<div class="form-group">
							<label for="taikhoan">Tài khoản</label>
							<input type="text" class="form-control" id="taikhoan" name="taikhoan" required />
						</div>
						
						<div class="form-group">
							<label for="matkhau">Mật khẩu</label>
							<input type="text" class="form-control" id="matkhau" name="matkhau" required />
						</div>
						<div class="form-group">
							<label for="quyen">Quyền</label>
							<input type="text" class="form-control" id="quyen" name="quyen" required />
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
		var docRef = db.collection("TAIKHOAN").doc("<?php echo $_GET['id'];?>");

		docRef.get().then((doc) => {
			if (doc.exists) {
				//console.log("Document data:", doc.data());
				$('#id').val(doc.id);
				$('#hoten').val(doc.data().hoten);
				$('#taikhoan').val(doc.data().taikhoan);
				$('#matkhau').val(doc.data().matkhau);
				$('#quyen').val(doc.data().quyen);
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
		if(isset ($_POST['taikhoan']))
		{
			?>
		<script>
		var washingtonRef = db.collection("TAIKHOAN").doc("<?php echo $_POST['id'];?>");

		// Set the "capital" field of the city 'DC'
		washingtonRef.update({
				hoten: "<?php echo $_POST['hoten'];?>",
				taikhoan: "<?php echo $_POST['taikhoan'];?>",
				matkhau: "<?php echo $_POST['matkhau'];?>",
				quyen: "<?php echo $_POST['quyen'];?>"
		})
		.then(() => {
			//console.log("Document successfully updated!");
			location.href="taikhoan.php";
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