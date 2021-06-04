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
   <h4 class="modal-title" id="myModalLabel">Thành viên đăng nhập</h4>
  </div>
  <div class="modal-body">
   <div class="row">
    <div class="col-xs-6">
     <div class="well">
      <form action="index.php?action=dangnhap_xuly" method="post">
       <div class="form-group">
          <label for="username" class="control-label">Tài khoản</label>
          <input class="form-control" id="username" name="username" type="text" required   >
          <span class="help-block"></span>
       </div>
       <div class="form-group">
          <label for="password" class="control-label">Mật khẩu</label>
          <input class="form-control" id="password" name="password" type="password" required  >
          <span class="help-block"></span> 
       </div>
       <div id="loginErrorMsg" class="alert alert-error hide">Sai tên tài khoản hay mật khẩu</div>
       <div class="checkbox">
			<label>
                 <input name="remember" id="remember" type="checkbox">
                 Nhớ thông tin 
			</label>
        
       </div>
       <button type="submit" class="btn btn-success btn-block"><i class="fad fa-sign-in-alt"></i>Đăng nhập</button><a href="" class="btn btn-default btn-block">Quên mật khẩu?</a>
      </form>
     </div>
    </div>
    <div class="col-xs-6">
     <p class="lead" align="center">TRANG WEB QUẢN LÝ BỆNH NHÂN </p>
     <ul class="list-unstyled" style="line-height: 2">
        <li><span class="fa fa-check text-success"></span> Bền vững – Tận tâm – Hiệu quả
        </li>
        <li><span class="fa fa-check text-success"></span> Sáng y đức – Vững chuyên môn – Luôn sẵn sàng
        </li>
        
        <li><span class="fa fa-check text-success"></span> Đỉnh cao chất lượng - Chuẩn mực yêu thương
        </li>
     </ul>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>