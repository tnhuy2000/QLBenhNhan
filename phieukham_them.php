<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm phiếu khám</h5>
				<div class="card-body">
					<form action="phieukham_them.php" method="post">
						<div class="form-group">
							<label for="maphieu">Mã phiếu</label>
							<input type="text" class="form-control" id="maphieu" name="maphieu">
						</div>
						<div class="form-group">
							<label for="mabenhnhan">Bệnh nhân</label>
							<select class="custom-select" id="mabenhnhan" name="mabenhnhan" required>
								<option value="">-- Chọn --</option>
								<option value="DeUwoGhK0NmsKWyyWEog">Bùi Trường Linh</option>
								<option value="y51MvsAce09XxsB4li1r">Bùi Trường</option>
								
							</select>
						</div>
					  
						<div class="form-group">
							<label for="manhanvien">Mã nhân viên</label>
							<input type="text" class="form-control" id="manhanvien" name="manhanvien">
						</div>
						<div class="form-group">
							<label for="tenbenh">Tên bệnh</label>
							<input type="text" class="form-control" id="tenbenh" name="tenbenh">
						</div>
					  
						<div class="form-group">
							<label for="tongtien">Tổng tiền</label>
							<input type="text" class="form-control" id="tongtien" name="tongtien">
						</div>
						
						<button type="submit"  class="btn btn-success">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<?php
		if(isset ($_POST['maphieu']))
		{
			?>
		<script>
			db.collection("PHIEUKHAM").add({
				maphieu: "<?php echo $_POST['maphieu'];?>",
				mabenhnhan: db.doc("BENHNHAN/<?php echo $_POST['mabenhnhan'];?>"),
				manhanvien: db.doc("NHANVIEN/<?php echo $_POST['manhanvien'];?>"),
				tenbenh: "<?php echo $_POST['tenbenh'];?>",
				tongtien: "<?php echo $_POST['tongtien'];?>"
				
			})
			.then((docRef) => {
				///console.log("Document written with ID: ", docRef.id);
				location.href="phieukham.php";
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