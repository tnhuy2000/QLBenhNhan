<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Sửa thuốc</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa thuốc</h5>
				<div class="card-body">
					<form action="thuoc_sua.php" method="post">
						<input type="text" id="id" name="id" hidden />
						
						<div class="form-group">
							<label for="mathuoc">Mã thuốc</label>
							<input type="text" class="form-control" id="mathuoc" name="mathuoc" required />
						</div>
						
						<div class="form-group">
							<label for="tenthuoc">Tên thuốc</label>
							<input type="text" class="form-control" id="tenthuoc" name="tenthuoc" required />
						</div>
						
						<div class="form-group">
							<label for="dongia">Đơn giá</label>
							<input type="text" class="form-control" id="dongia" name="dongia" required />
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
		var docRef = db.collection("THUOC").doc("<?php echo $_GET['id'];?>");

		docRef.get().then((doc) => {
			if (doc.exists) {
				//console.log("Document data:", doc.data());
				$('#id').val(doc.id);
				$('#mathuoc').val(doc.data().mathuoc);
				$('#tenthuoc').val(doc.data().tenthuoc);
				$('#dongia').val(doc.data().dongia);
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
		if(isset ($_POST['mathuoc']))
		{
			?>
		<script>
		var washingtonRef = db.collection("THUOC").doc("<?php echo $_POST['id'];?>");

		// Set the "capital" field of the city 'DC'
		washingtonRef.update({
				mathuoc: "<?php echo $_POST['mathuoc'];?>",
				tenthuoc: "<?php echo $_POST['tenthuoc'];?>",
				dongia: "<?php echo $_POST['dongia'];?>"
		})
		.then(() => {
			//console.log("Document successfully updated!");
			location.href="thuoc.php";
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