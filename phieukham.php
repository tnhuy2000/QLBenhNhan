<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Danh sách phiếu khám</h5>
				<div class="card-body">
				
				<a href="phieukham_them.php" class ="btn btn-outline-success mb-2"><i class="fa fa-plus-square"></i> Thêm Mới</a>
					<table class="table  table-bordered table-hover table-sm">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col" class="text-center">Mã phiếu</th>
							  <th scope="col" class="text-center">Tên bệnh nhân</th>
							  <th scope="col" class="text-center">Tên nhân viên</th>
							  <th scope="col" class="text-center">Tên bệnh</th>
							  <th scope="col" class="text-center">Ngày khám</th>
							  <th scope="col" class="text-center">Tổng tiền</th>
							  
							  <th scope="col" class="text-center">Thêm chi tiết</th>
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
			
			
			db.collection("PHIEUKHAM").orderBy("maphieu", "asc").get().then((querySnapshot)=> {
				var stt = 1;
				var output = "";
			  querySnapshot.forEach((doc)=>{
				
				output+='<tr>';
					output+='<th scope="row">'+stt+'</th>';
					output+='<td>'+doc.data().maphieu+'</td>';
					output+='<td class="'+doc.data().mabenhnhan.id+'"></td>';
					output+='<td class="'+doc.data().manhanvien.id+'"></td>';
					output+='<td>'+doc.data().tenbenh+'</td>';
					output+='<td>'+doc.data().ngaykham+'</td>';
					output+='<td>'+doc.data().tongtien+'</td>';
					
					output+='<td class="text-center"><a href="chitiet_them.php?id='+doc.id+'"><i class="fa fa-plus-square"></i></a></td>';
					output+='<td class="text-center"><a onclick="return confirm(\'Bạn có muốn xóa phiếu '+doc.data().maphieu+' không ???\')" href="phieukham_xoa.php?id='+doc.id+'"><i class="fa fa-minus-square text-danger"></i></a></td>';
				output+='</tr>';
				stt++;
				});
				$('#HienThi').html(output);
			
			});
			db.collection("BENHNHAN").get().then((querySnapshot)=> {
				
			  querySnapshot.forEach((doc)=>{
				  try{
					  let x=document.getElementsByClassName(doc.id);
					  for(let i=0;i<x.length;i++)
					  {
						  x[i].innerText=doc.data().tenbenhnhan;
						  
					  }
				  }catch{}
			  });
			});
			
			db.collection("NHANVIEN").get().then((querySnapshot)=> {
				
			  querySnapshot.forEach((doc)=>{
				  try{
					  let x=document.getElementsByClassName(doc.id);
					  for(let i=0;i<x.length;i++)
					  {
						  x[i].innerText=doc.data().tennhanvien;
						  
					  }
				  }catch{}
			  });
			});
			
		
		</script>
	</body>
</html>