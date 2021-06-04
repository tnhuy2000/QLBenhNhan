<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Thêm bệnh</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm bệnh</h5>
				<div class="card-body">
					<form action="benh_them.php" method="post">
					  <div class="form-group">
						<label for="mabenh">Mã bệnh</label>
						<input type="text" class="form-control" id="mabenh" name="mabenh">
					  </div>
					  
					  <div class="form-group">
						<label for="tenbenh">Tên bệnh</label>
						<input type="text" class="form-control" id="tenbenh" name="tenbenh">
					  </div>
					  
					  <div class="form-group">
						<label for="makhoa">Mã khoa</label>
						<input type="text" class="form-control" id="makhoa" name="makhoa">
					  </div>
					  
					  <button type="submit" class="btn btn-success">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<?php
		if(isset ($_POST['mabenh']))
		{
			?>
		<script>
			db.collection("BENH").add({
				mabenh: "<?php echo $_POST['mabenh'];?>",
				tenbenh: "<?php echo $_POST['tenbenh'];?>",
				makhoa: "<?php echo $_POST['makhoa'];?>"
			})
			.then((docRef) => {
				///console.log("Document written with ID: ", docRef.id);
				location.href="benh.php";
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