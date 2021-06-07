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
						<div class="form-group col-md-8">
							<label for="maphieu">Mã phiếu</label>
							<input type="text" class="form-control" id="maphieu" name="maphieu">
						</div>
						
						
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="mabenhnhan">Bệnh nhân</label>
								<select class="custom-select" id="HienThiBenhNhan" name="mabenhnhan" required>
									
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="manhanvien">Nhân Viên</label>
								<select class="custom-select" id="HienThiNhanVien" name="manhanvien"required>
									
								</select>
							</div>
						</div>
						<div class="form-group col-md-8">
							<label for="tenbenh">Tên bệnh</label>
							<input type="text" class="form-control" id="tenbenh" name="tenbenh">
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="mathuoc">Thuốc</label>
								<select class="custom-select" id="HienThiThuoc" name="mathuoc" required>
									
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="soluong">Số lượng</label>
								<input type="text" class="form-control" id="soluong" name="soluong">
							</div>
						</div>
						
						<button type="submit"  class="btn btn-success mb-2"><i class="fa fa-plus"></i><span> Xác nhận</span></button>
					
						
						<button type="submit"  class="btn btn-success float-right">Xuất hoá đơn</button>
					</form>
					<table class="table  table-bordered table-hover table-sm">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col" class="text-center">Mã thuốc</th>
							  <th scope="col" class="text-center">Tên thuốc</th>
							  <th scope="col" class="text-center">Số lượng</th>
							  <th scope="col" class="text-center">Thành tiền</th>
							  
							  <th scope="col" class="text-center">Xóa</th>
							</tr>
						  </thead>
						  <tbody id="HienThi">
						  </tbody>
					</table>
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
		
		db.collection("THUOC").orderBy("tenthuoc", "asc").get().then((querySnapshot)=> {
					var output = "";
				  querySnapshot.forEach((doc)=>{					 
					output+='<option value="'+doc.data().mathuoc+'">'+doc.data().tenthuoc+'</option>';
				});
				$('#HienThiThuoc').html(output);
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
		<!--
		<script>
			db.collection("CHITIETPHIEU").add({
				maphieu: "<?php echo $_POST['maphieu'];?>",
				
				tenbenh: "<?php echo $_POST['mathuoc'];?>",
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
		<script>
			db.collection("CHITIETPHIEU").get().then((querySnapshot)=> {
				var stt = 1;
				var output = "";
			  querySnapshot.forEach((doc)=>{
				
				output+='<tr>';
					output+='<th scope="row">'+stt+'</th>';
					output+='<td>'+doc.data().mathuoc+'</td>';
					output+='<td>'+doc.data().tenthuoc+'</td>';
					output+='<td>'+doc.data().soluong+'</td>';
					output+='<td>'+doc.data().thanhtien+'</td>';
					
					output+='<td class="text-center"><a onclick="return confirm(\'Bạn có muốn xóa phiếu '+doc.data().maphieu+' không ???\')" href="phieukham_xoa.php?id='+doc.id+'"><i class="fa fa-minus-square text-danger"></i></a></td>';
				output+='</tr>';
				stt++;
				});
				$('#HienThi').html(output);
			
			});
		
		
		</script>
		-->
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