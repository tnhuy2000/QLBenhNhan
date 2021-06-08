<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm thuốc</h5>
				<div class="card-body">
					<form action="thuoc_them_xuly.php" method="post">
					  <div class="form-group">
						<label for="mathuoc">Mã thuốc</label>
						<input type="text" class="form-control" id="mathuoc" name="mathuoc">
					  </div>
					  
					  <div class="form-group">
						<label for="tenthuoc">Tên thuốc</label>
						<input type="text" class="form-control" id="tenthuoc" name="tenthuoc">
					  </div>
					  
					  <div class="form-group">
						<label for="dongia">Đơn giá</label>
						<input type="text" class="form-control" id="dongia" name="dongia">
					  </div>
					  
					  <button type="submit" class="btn btn-success">Thêm Mới</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		
	</body>
</html>