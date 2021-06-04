<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Sửa bệnh</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa bệnh</h5>
				<div class="card-body">
					<form action="benh_sua.php" method="post">
						<input type="text" id="id" name="id" hidden />
						
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
		var docRef = db.collection("BENH").doc("<?php echo $_GET['id'];?>");

		docRef.get().then((doc) => {
			if (doc.exists) {
				//console.log("Document data:", doc.data());
				$('#id').val(doc.id);
				$('#mabenh').val(doc.data().mabenh);
				$('#tenbenh').val(doc.data().tenbenh);
				$('#makhoa').val(doc.data().makhoa);
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
		if(isset ($_POST['mabenh']))
		{
			?>
		<script>
		var washingtonRef = db.collection("BENH").doc("<?php echo $_POST['id'];?>");

		// Set the "capital" field of the city 'DC'
		washingtonRef.update({
				mabenh: "<?php echo $_POST['mabenh'];?>",
				tenbenh: "<?php echo $_POST['tenbenh'];?>",
				makhoa: "<?php echo $_POST['makhoa'];?>"
		})
		.then(() => {
			//console.log("Document successfully updated!");
			location.href="benh.php";
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