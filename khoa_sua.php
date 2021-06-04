<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Sửa khoa</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa khoa</h5>
				<div class="card-body">
					<form action="khoa_sua.php" method="post">
						<input type="text" id="id" name="id" hidden />
						
						<div class="form-group">
							<label for="makhoa">Mã khoa</label>
							<input type="text" class="form-control" id="makhoa" name="makhoa" required />
						</div>
						
						<div class="form-group">
							<label for="tenkhoa">Tên khoa</label>
							<input type="text" class="form-control" id="tenkhoa" name="tenkhoa" required />
						</div>
						
						<div class="form-group">
							<label for="matruongkhoa">Mã trưởng khoa</label>
							<input type="text" class="form-control" id="matruongkhoa" name="matruongkhoa" required />
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
		var docRef = db.collection("KHOA").doc("<?php echo $_GET['id'];?>");

		docRef.get().then((doc) => {
			if (doc.exists) {
				//console.log("Document data:", doc.data());
				$('#id').val(doc.id);
				$('#makhoa').val(doc.data().makhoa);
				$('#tenkhoa').val(doc.data().tenkhoa);
				$('#matruongkhoa').val(doc.data().matruongkhoa);
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
		if(isset ($_POST['makhoa']))
		{
			?>
		<script>
		var washingtonRef = db.collection("KHOA").doc("<?php echo $_POST['id'];?>");

		// Set the "capital" field of the city 'DC'
		washingtonRef.update({
				makhoa: "<?php echo $_POST['makhoa'];?>",
				tenkhoa: "<?php echo $_POST['tenkhoa'];?>",
				matruongkhoa: "<?php echo $_POST['matruongkhoa'];?>"
		})
		.then(() => {
			//console.log("Document successfully updated!");
			location.href="khoa.php";
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