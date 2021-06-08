<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xóa phiếu khám</h5>
				<div class="card-body">
				
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			db.collection("PHIEUKHAM").doc("<?php echo $_GET['id'];?>").delete().then(() => {
				///console.log("Document successfully deleted!");
				location.href="phieukham.php";
			}).catch((error) => {
				console.error("Error removing document: ", error);
			});
		</script>
	</body>
</html>