<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="images/s3.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				  <img src="images/slide3.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				  <img src="images/s1.jpg" class="d-block w-100" alt="...">
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			<div id="accordion">
			  <div class="card">
				<div class="card-header" id="headingOne">
				  <h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  Giới thiệu
					</button>
				  </h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				  <div class="card-body">
					<p>Trang web Quản lý bệnh nhân:</p>
					<p>- Tin học hoá các nghiệp vụ quản lý</p>
					<p>- Thực hiện bệnh án điện tử</p>
					<p>- Quản lý chặt chẽ thông tin bệnh nhân và thông tin bệnh án của bệnh nhân.</p>
					<p>- Tự động tổng hợp số liệu sử dụng cho bệnh nhân để lập phiếu thanh toán tiền đảm bảo số liệu chính xác, đầy đủ, chống thất thu.</p>

				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingTwo">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  Thành viên
					</button>
				  </h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				  <div class="card-body">
					<p>Bùi Nhật Trường Linh - DTH185460</p>
					<p>Trương Như Ý - DTH185437</p>
					<p>Nguyễn Ngọc Cẩm - DTH185245</p>
				  </div>
				</div>
			  </div>
			  
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
	</body>
</html>