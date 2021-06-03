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
    <div class="col-xs-10">
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
       <div class="form-group">
          <label for="password" class="control-label">Nhập lại mật khẩu</label>
          <input class="form-control" id="password" name="password" type="password" required  >
          <span class="help-block"></span> 
       </div>
       
       <button type="submit" class="btn btn-success btn-block"><i class="fad fa-sign-in-alt"></i>Đăng ký</button><a href="" class="btn btn-default btn-block">Quên mật khẩu?</a>
      </form>
     </div>
    </div>
    
   </div>
  </div>
 </div>
</div>
</body>
</html>