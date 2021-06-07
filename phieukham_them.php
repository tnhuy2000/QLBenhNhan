<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm phiếu khám</h5>
				<div class="card-body">
					<form action="#" method="post">
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
						
						<input type="submit" id="submit" class="form-control" name="submit">
					
						
						
					</form>
					<table id="table-data" class="table  table-bordered table-hover table-sm " style="border-collapse: collapse;">
						<tr>
						  <th>Mã thuốc</th>
						  <th>Số lượng</th>
						  
						  
						</tr>
					</table>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		
		<script>
		var tempData = []; // Tất cả dữ liệu tạm được lưu vào object này.

			$(document).ready(function() {
			  $("#submit").on("click", function() {
				var dataBlock = $("#table-data");
				var perInform = {
				  maphieu : $("#HienThiThuoc").find(":selected").val(),
				  soluong : $("#soluong").val()
				  
				  
				};
				
				dataBlock.append("<tr><td>"+perInform.maphieu+"</td><td>"+perInform.soluong+"</td></tr>");
				tempData.push(perInform); // Khi add thêm 1 record mới, record đó sẽ được lưu lại vào tempData
			  });
			});

			// Trên chỉ là ví dụ về add record vào, việc chỉnh sửa hay xóa record cũng tương tự.

			// Sau đó bạn có thể dùng ajax để đưa dữ liệu tempData sang trang PHP để xử lý để lưu vào database.
			db.collection("BENHNHAN").orderBy("tenbenhnhan", "asc").get().then((querySnapshot)=> {
					var output = "";
				  querySnapshot.forEach((doc)=>{					 
					output+='<option value="'+doc.data().mabenhnhan+'">'+doc.data().tenbenhnhan+'</option>';

				});
				$('#HienThiBenhNhan').html(output);
			});
		
		
		
		
		
		db.collection("THUOC").orderBy("tenthuoc", "asc").get().then((querySnapshot)=> {
					var output = "";
				  querySnapshot.forEach((doc)=>{					 
					output+='<option value="'+doc.data().mathuoc+'">'+doc.data().tenthuoc+'</option>';
					
				});
				$('#HienThiThuoc').html(output);
				
			});
		
		
		
		db.collection("NHANVIEN").orderBy("tennhanvien", "asc").get().then((querySnapshot)=> {
					var output = "";
				  querySnapshot.forEach((doc)=>{					 
					output+='<option value="'+doc.data().manhanvien+'">'+doc.data().tennhanvien+'</option>';
				});
				$('#HienThiNhanVien').html(output);
			});
		
		
		</script>
		
		
		
		
		
	</body>
</html>