<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Thêm thuốc</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm thuốc</h5>
				<div class="card-body">
					<form action="thuoc_them.php" method="post">
					  <div class="form-group">
						<label for="mathuoc">Mã thuốc</label>
						<input type="text" class="form-control" id="mathuoc" name="mathuoc">
					  </div>
					  
					  <div class="form-group">
						<label for="tenthuoc">Tên thuốc</label>
						<input type="text" class="form-control" id="tenthuoc" name="tenthuoc">
					  </div>
					  
					  <div class="form-group">
						<label for="dongia">Đơn giá</label>
						<input type="text" class="form-control" id="dongia" name="dongia">
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<?php
		if(isset ($_POST['mathuoc']))
		{
			?>
		<script>
			db.collection("THUOC").add({
				mathuoc: "<?php echo $_POST['mathuoc'];?>",
				tenthuoc: "<?php echo $_POST['tenthuoc'];?>",
				dongia: "<?php echo $_POST['dongia'];?>"
			})
			.then((docRef) => {
				///console.log("Document written with ID: ", docRef.id);
				location.href="thuoc.php";
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