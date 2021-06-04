<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Bác Sĩ</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Bệnh nhân</h5>
				<div class="card-body">
				
				<a href="giangvien_them.php" class ="btn btn-primary mb-2">Thêm Mới</a>
					<table class="table table-bordered table-hover table-sm">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Mã nhân viên</th>
							  <th scope="col">Họ Tên</th>
							  <th scope="col">Mã Khoa</th>
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
		//var league = db.collection("BENHNHAN").doc('mabenhnhan').get().data().maphong.get().data();
		db.collection("NHANVIEN").get().then((querySnapshot) => {
			var stt = 1;
			var output = "";
			
			querySnapshot.forEach((doc) => {
				//chuyển đổi timestamp sang date
				var date = new Date(doc.data().ngaysinh*1000);
				var dt = formatDate(date) + ' ';
				output+='<tr>';
					output+='<th scope="row">'+stt+'</th>';
					output+='<td>'+doc.data().manhanvien+'</td>';
					output+='<td>'+doc.data().tennhanvien+'</td>';
					output+='<td>'+doc.data().makhoa+'</td>';
					output+='<td>'+doc.data().diachi+'</td>';
					output+='<td>'+dt+'</td>';
					output+='<td>'+doc.data().dienthoai+'</td>';
					output+='<td><a href="nhanvien_sua.php?id='+doc.id+'">Sửa</a></td>';
					output+='<td><a onclick="return confirm(\'Bạn có muốn xóa nhân viên '+doc.data().tenbenhnhan+' không ???\')" href="giangvien_xoa.php?id='+doc.id+'">Xóa</a></td>';
				output+='</tr>';
				stt++;
			});
			$('#HienThi').html(output);
		});
		function formatDate(date){
			var year = (date.getFullYear() - 1969).toString();
			var month = (date.getMonth() + 101).toString().substring(1);
			var day = (date.getDate() + 100).toString().substring(1);
			return day + '/' + month + '/' + year;
		}
		</script>
	</body>
</html>