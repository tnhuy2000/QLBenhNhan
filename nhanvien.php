<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header " >Nhân viên</h5>
				<div class="card-body">
				
				<a href="nhanvien_them.php" style="float: right" class ="btn btn-outline-success mb-2"><i class="fa fa-plus-square"></i> Thêm Mới</a>
					<table id="PhanTrang" class="table  table-bordered table-hover table-sm " style="width:100%">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Mã nhân viên</th>
							  <th scope="col">Tên nhân viên</th>
							  <th scope="col">Địa Chỉ</th>
							  <th scope="col">Ngày Sinh</th>
							  <th scope="col">Điện Thoại</th>
							  <th scope="col">Sửa</th>
							  <th scope="col">Xóa</th>
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
		
		db.collection("NHANVIEN").get().then((querySnapshot) => {
			var stt = 1;
			var output = "";
			
			querySnapshot.forEach((doc) => {
				
				
				output+='<tr>';
					output+='<th scope="row">'+stt+'</th>';
					output+='<td>'+doc.data().manhanvien+'</td>';
					output+='<td>'+doc.data().tennhanvien+'</td>';
					output+='<td>'+doc.data().diachi+'</td>';
					output+='<td>'+doc.data().ngaysinh+'</td>';
					output+='<td>'+doc.data().dienthoai+'</td>';
					output+='<td class="text-center"><a href="nhanvien_sua.php?id='+doc.id+'"><i class="fa fa-pencil"></i></a></td>';
					output+='<td class="text-center"><a onclick="return confirm(\'Bạn có muốn xóa nhân viên '+doc.data().tennhanvien+' không ???\')" href="nhanvien_xoa.php?id='+doc.id+'"><i class="fa fa-minus-square text-danger"></i></a></td>';
				output+='</tr>';
				stt++;
			});
			$('#HienThi').html(output);
		});
		
		</script>
	</body>
</html>