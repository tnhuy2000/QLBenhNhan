<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Khoa</title>
	</head>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Khoa</h5>
				<div class="card-body">
				
				<a href="khoa_them.php" style="float: right" class ="btn btn-outline-success mb-2"><i class="fa fa-plus-square"></i> Thêm Mới</a>
					<table class="table table-bordered table-hover table-sm">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Mã khoa</th>
							  <th scope="col">Tên khoa</th>
							  <th scope="col">Mã trưởng khoa</th>
							  
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
		
		db.collection("KHOA").get().then((querySnapshot) => {
			var stt = 1;
			var output = "";
			
			querySnapshot.forEach((doc) => {
				
				output+='<tr>';
					output+='<th scope="row">'+stt+'</th>';
					output+='<td>'+doc.data().makhoa+'</td>';
					output+='<td>'+doc.data().tenkhoa+'</td>';
					output+='<td>'+doc.data().matruongkhoa+'</td>';
					
					output+= '<td class="text-center"><a href="khoa_sua.php?id='+doc.id+'"><i class="fa fa-pencil"></i></a></td>';
					output+= '<td class="text-center"><a onclick="return confirm(\'Bạn có muốn xóa khoa '+doc.data().tenkhoa+' không ???\')" href="khoa_xoa.php?id='+doc.id+'"><i class="fa fa-minus-square text-danger"></i></a></td>';
				output+='</tr>';
				stt++;
			});
			$('#HienThi').html(output);
		});
		</script>
	</body>
</html>