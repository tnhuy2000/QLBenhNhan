<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Thuốc</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thuốc</h5>
				<div class="card-body">
				
				<a href="thuoc_them.php" class ="btn btn-primary mb-2">Thêm Mới</a>
					<table class="table table-bordered table-hover table-sm">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Mã thuốc</th>
							  <th scope="col">Tên thuốc</th>
							  <th scope="col">Đơn giá</th>
							  
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
		
		db.collection("THUOC").get().then((querySnapshot) => {
			var stt = 1;
			var output = "";
			
			querySnapshot.forEach((doc) => {
				
				output+='<tr>';
					output+='<th scope="row">'+stt+'</th>';
					output+='<td>'+doc.data().mathuoc+'</td>';
					output+='<td>'+doc.data().tenthuoc+'</td>';
					output+='<td>'+doc.data().dongia+'</td>';
					
					output += '<td class="text-center"><a href="thuoc_sua.php?id='+doc.id+'">Sửa</a></td>';
					output+='<td><a onclick="return confirm(\'Bạn có muốn xóa thuốc '+doc.data().tenthuoc+' không ???\')" href="thuoc_xoa.php?id='+doc.id+'">Xóa</a></td>';
				output+='</tr>';
				stt++;
			});
			$('#HienThi').html(output);
		});
		</script>
	</body>
</html>