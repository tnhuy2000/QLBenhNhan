<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Danh sách tài khoản</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Danh sách tài khoản</h5>
				<div class="card-body">
				
				<a href="dangky.php" style="float: right" class ="btn btn-outline-success mb-2"><i class="fa fa-plus-square"></i> Thêm Mới</a>
					<table class="table table-bordered table-hover table-sm">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Họ tên</th>
							  <th scope="col">Tài khoản</th>
							  <th scope="col">Mật khẩu</th>
							  <th scope="col">Quyền</th>
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
		
		db.collection("TAIKHOAN").get().then((querySnapshot) => {
			var stt = 1;
			var output = "";
			
			querySnapshot.forEach((doc) => {
				
				output+='<tr>';
					output+='<th scope="row">'+stt+'</th>';
					output+='<td>'+doc.data().hoten+'</td>';
					output+='<td>'+doc.data().taikhoan+'</td>';
					output+='<td>'+doc.data().matkhau+'</td>';
					output+='<td>'+doc.data().quyen+'</td>';
					output+= '<td class="text-center"><a href="taikhoan_sua.php?id='+doc.id+'"><i class="fa fa-pencil"></i></a></td>';
					output+= '<td class="text-center"><a onclick="return confirm(\'Bạn có muốn xóa tài khoản '+doc.data().hoten+' không ???\')" href="taikhoan_xoa.php?id='+doc.id+'"><i class="fa fa-minus-square text-danger"></i></a></td>';
				output+='</tr>';
				stt++;
			});
			$('#HienThi').html(output);
		});
		</script>
	</body>
</html>