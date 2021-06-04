<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div id="login-overlay" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Đóng</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Đăng ký thành viên</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-6">
						<div class="well">
							<form action="dangky.php" method="post">
								<div class="form-group">
									<label for="hoten">Họ tên</label>
									<input type="text" class="form-control" id="hoten" name="hoten" required />
									<span class="help-block"></span> 
								</div>
							   
								<div class="form-group">
									<label for="taikhoan" class="control-label">Tài khoản</label>
									<input class="form-control" id="taikhoan" name="taikhoan" type="text" required   >
									<span class="help-block"></span>
								</div>
								
								<div class="form-group">
									<label for="matkhau" class="control-label">Mật khẩu</label>
									<input class="form-control" id="matkhau" name="matkhau" type="password" required  >
									<span class="help-block"></span> 
								</div>
								
								<div class="form-group">
									<label for="XacNhanMatKhau">Xác nhận mật khẩu</label>
									<input type="password" class="form-control" id="XacNhanMatKhau" name="XacNhanMatKhau" required />
									<span class="help-block"></span> 
								</div>
								<div class="form-group">
									<label for="quyen">Quyền</label>
									<div class="radio">
										<label><input type="radio" name="quyen" id="quyen">Admin</label>
										<label><input type="radio" name="quyen" id="quyen">User</label>
									</div>
								</div>
								<button type="submit" class="btn btn-success btn-block"><i class="fad fa-sign-in-alt"></i>Đăng ký</button>
							</form>
						</div>
					</div>
					<div class="col-xs-6">
						<p class="lead" align="center"> TRANG WEB QUẢN LÝ BỆNH NHÂN </p>
						<ul class="list-unstyled" style="line-height: 2">
							<li><span class="fa fa-check text-success"></span> Bền vững – Tận tâm – Hiệu quả
							</li>
							<li><span class="fa fa-check text-success"></span> Sáng y đức – Vững chuyên môn – Luôn sẵn sàng
							</li>
							
							<li><span class="fa fa-check text-success"></span> Đỉnh cao chất lượng - Chuẩn mực yêu thương
							</li>
							<li><span class="fa fa-phone text-success"></span> Hotline: 0368672641
							</li>
							<li><span class="fa fa-envelope text-success"></span> Hộp thư điện tử: dtdm.dh19th1@gmail.com
							</li>
							
						</ul>
					</div>
			   </div>
			</div>
		</div>
	</div>
	<?php include "javascript.php"; ?>
		<?php
		if(isset ($_POST['taikhoan']))
		{
			?>
		<script>
			db.collection("TAIKHOAN").add({
				taikhoan: "<?php echo $_POST['taikhoan'];?>",
				matkhau: "<?php echo $_POST['matkhau'];?>",
				hoten: "<?php echo $_POST['hoten'];?>",
				quyen: "<?php echo $_POST['quyen'];?>",
			})
			.then((docRef) => {
				///console.log("Document written with ID: ", docRef.id);
				location.href="taikhoan.php";
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