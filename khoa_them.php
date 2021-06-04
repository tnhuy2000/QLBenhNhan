<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Thêm khoa</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm khoa</h5>
				<div class="card-body">
					<form action="thuoc_them.php" method="post">
					  <div class="form-group">
						<label for="makhoa">Mã khoa</label>
						<input type="text" class="form-control" id="makhoa" name="makhoa">
					  </div>
					  
					  <div class="form-group">
						<label for="tenkhoa">Tên khoa</label>
						<input type="text" class="form-control" id="tenkhoa" name="tenkhoa">
					  </div>
					  
					  <div class="form-group">
						<label for="matruongkhoa">Mã trưởng khoa</label>
						<input type="text" class="form-control" id="matruongkhoa" name="matruongkhoa">
					  </div>
					  
					  <button type="submit" class="btn btn-success">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<?php
		if(isset ($_POST['makhoa']))
		{
			?>
		<script>
			db.collection("KHOA").add({
				makhoa: "<?php echo $_POST['makhoa'];?>",
				tenkhoa: "<?php echo $_POST['tenkhoa'];?>",
				matruongkhoa: "<?php echo $_POST['matruongkhoa'];?>"
			})
			.then((docRef) => {
				///console.log("Document written with ID: ", docRef.id);
				location.href="khoa.php";
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