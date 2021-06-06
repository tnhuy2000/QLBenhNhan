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
					<input type="text" id="id" name="id" hidden />
						<div class="form-group">
							<label for="maphieu">Mã phiếu</label>
							<input type="text" class="form-control" id="maphieu" name="maphieu">
						</div>
						<div class="form-group">
							<label for="mabenhnhan">Bệnh nhân</label>
							<select class="custom-select" id="HienThiBenhNhan" name="mabenhnhan" required>
								
							</select>
						</div>
						<div class="form-group">
							<label for="manhanvien">Nhân Viên</label>
							<select class="custom-select" id="HienThiNhanVien" name="manhanvien" required>
								
							</select>
						</div>
						
						<div class="form-group">
							<label for="tenbenh">Tên bệnh</label>
							<input type="text" class="form-control" id="tenbenh" name="tenbenh">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="ngaykham">Ngày khám</label>
								<input type="text" class="form-control" id="ngaykham" name="ngaykham">
							</div>
							<div class="form-group col-md-6">
								<label for="tongtien">Tổng tiền</label>
								<input type="text" class="form-control" id="tongtien" name="tongtien">
							</div>
						</div>
					
						
						<button type="submit"  class="btn btn-success">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
		
		db.collection("BENHNHAN").orderBy("tenbenhnhan", "asc").get().then((querySnapshot)=> {
					var output = "";
				  querySnapshot.forEach((doc)=>{					 
					output+='<option value="'+doc.data().mabenhnhan+'">'+doc.data().tenbenhnhan+'</option>';
				});
				$('#HienThiBenhNhan').html(output);
			});
		
		</script>
		<script>
		
		db.collection("NHANVIEN").orderBy("tennhanvien", "asc").get().then((querySnapshot)=> {
					var output = "";
				  querySnapshot.forEach((doc)=>{					 
					output+='<option value="'+doc.data().manhanvien+'">'+doc.data().tennhanvien+'</option>';
				});
				$('#HienThiNhanVien').html(output);
			});
		
		</script>
		<?php
		if(isset ($_POST['maphieu']))
		{
			?>
		<script>
			db.collection("PHIEUKHAM").add({
				maphieu: "<?php echo $_POST['maphieu'];?>",
				//mabenhnhan: db.doc("BENHNHAN/<?php echo $_POST['mabenhnhan'];?>"),
				//manhanvien: db.doc("NHANVIEN/<?php echo $_POST['manhanvien'];?>"),
				mabenhnhan: "<?php echo $_POST['mabenhnhan'];?>",
				manhanvien: "<?php echo $_POST['manhanvien'];?>",
				tenbenh: "<?php echo $_POST['tenbenh'];?>",
				ngaykham: "<?php echo $_POST['ngaykham'];?>",
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