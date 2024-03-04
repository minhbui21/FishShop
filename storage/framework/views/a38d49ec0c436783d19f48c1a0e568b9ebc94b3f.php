
<?php $__env->startSection('title','Sản phẩm yêu thích'); ?>
<?php $__env->startSection('main-content'); ?>
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?php echo e(('home')); ?>">Trang chủ<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Sản phẩm yêu thích</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>SẢN PHẨM</th>
								<th>TÊN</th>
								<th class="text-center">TỔNG</th> 
								<th class="text-center">THÊM VÀO GIỎ HÀNG</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php if(Helper::getAllProductFromWishlist()): ?>
								<?php $__currentLoopData = Helper::getAllProductFromWishlist(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$wishlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<?php 
											$photo=explode(',',$wishlist->product['photo']);
										?>
										<td class="image" data-title="No"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></td>
										<td class="product-des" data-title="Description">
											<p class="product-name"><a href="<?php echo e(route('product-detail',$wishlist->product['slug'])); ?>"><?php echo e($wishlist->product['title']); ?></a></p>
											<p class="product-des"><?php echo ($wishlist['summary']); ?></p>
										</td>
										<td class="total-amount" data-title="Total"><span><?php echo e($wishlist['amount']); ?>đ</span></td>
										<td><a href="<?php echo e(route('add-to-cart',$wishlist->product['slug'])); ?>" class='btn text-white'>Thêm vào giỏ hàng</a></td>
										<td class="action" data-title="Remove"><a href="<?php echo e(route('wishlist-delete',$wishlist->id)); ?>"><i class="ti-trash remove-icon"></i></a></td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?> 
								<tr>
									<td class="text-center">
										Chưa có sản phẩm yêu thích. <a href="<?php echo e(route('product-grids')); ?>" style="color:blue;">Tiếp tục mua hàng</a>

									</td>
								</tr>
							<?php endif; ?>


						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Miễn phí vận chuyển</h4>
						<p>Cho đơn hàng trên 100.000đ</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Hoàn trả</h4>
						<p>Trong vòng 7 ngày kể từ khi nhận hàng</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Thanh toán an toàn</h4>
						<p>Bảo mật thanh toán 100%</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Giá tốt nhất</h4>
						<p>Đảm bảo mức giá tốt nhất ở Hà Nội</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<?php echo $__env->make('frontend.layouts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	
	
	
	
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\cacanhn5\resources\views/frontend/pages/wishlist.blade.php ENDPATH**/ ?>