<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <?php
                                $settings=DB::table('settings')->get();
                                
                            ?>
                            <li><i class="ti-headphone-alt"></i><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                            <li><i class="ti-email"></i> <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            
                            <?php if(auth()->guard()->check()): ?> 
                                <?php if(Auth::user()->role=='admin'): ?>
                                <li><i class="fa fa-truck"></i> <a href="<?php echo e(route('order.track')); ?>">Theo dõi đơn hàng</a></li>

                                    <li><i class="ti-user"></i> <a href="<?php echo e(route('admin')); ?>"  target="_blank"><?php echo e(Auth()->user()->name); ?></a></li>
                                <?php else: ?> 
                                <li><i class="fa fa-truck"></i> <a href="<?php echo e(route('order.track')); ?>">Theo dõi đơn hàng</a></li>

                                    <li><i class="ti-user"></i> <a href="<?php echo e(route('user')); ?>"  target="_blank"><?php echo e(Auth()->user()->name); ?></a></li>
                                <?php endif; ?>
                                <li><i class="ti-power-off"></i> <a href="<?php echo e(route('user.logout')); ?>">Đăng xuất</a></li>

                            <?php else: ?>
                                <li><i class="fa fa-sign-in"></i><a href="<?php echo e(route('login.form')); ?>">Đăng nhập /</a> <a href="<?php echo e(route('register.form')); ?>">Đăng kí</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <?php
                            $settings=DB::table('settings')->get();
                        ?>                    
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->logo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Tìm kiếm..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option >Danh mục </option>
                                <?php $__currentLoopData = Helper::getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($cat->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <form method="POST" action="<?php echo e(route('product.search')); ?>">
                                <?php echo csrf_field(); ?>
                                <input name="search" placeholder="Tìm kiếm sản phẩm....." type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar shopping">
                            <?php 
                                $total_prod=0;
                                $total_amount=0;
                            ?>
                           <?php if(session('wishlist')): ?>
                                <?php $__currentLoopData = session('wishlist'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlist_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $total_prod+=$wishlist_items['quantity'];
                                        $total_amount+=$wishlist_items['amount'];
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                            <a href="<?php echo e(route('wishlist')); ?>" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count"><?php echo e(Helper::wishlistCount()); ?></span></a>
                            <!-- Shopping Item -->
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(Helper::getAllProductFromWishlist())); ?> Sản phẩm</span>
                                        <a href="<?php echo e(route('wishlist')); ?>">Xem </a>
                                    </div>
                                    <ul class="shopping-list">
                                        
                                            <?php $__currentLoopData = Helper::getAllProductFromWishlist(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $photo=explode(',',$data->product['photo']);
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo e(route('wishlist-delete',$data->id)); ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                        <h4><a href="<?php echo e(route('product-detail',$data->product['slug'])); ?>" target="_blank"><?php echo e($data->product['title']); ?></a></h4>
                                                        <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount"><?php echo e(number_format($data->price)); ?>đ</span></p>
                                                    </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Tổng</span>
                                            <span class="total-amount"><?php echo e(number_format(Helper::totalWishlistPrice())); ?>đ</span>
                                        </div>
                                        <a href="<?php echo e(route('cart')); ?>" class="btn animate">Giỏ hàng</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!--/ End Shopping Item -->
                        </div>
                        
                        <div class="sinlge-bar shopping">
                            <a href="<?php echo e(route('cart')); ?>" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php echo e(Helper::cartCount()); ?></span></a>
                            <!-- Shopping Item -->
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(Helper::getAllProductFromCart())); ?> Sản phẩm</span>
                                        <a href="<?php echo e(route('cart')); ?>">Xem giỏ hàng</a>
                                    </div>
                                    <ul class="shopping-list">
                                        
                                            <?php $__currentLoopData = Helper::getAllProductFromCart(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $photo=explode(',',$data->product['photo']);
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo e(route('cart-delete',$data->id)); ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                        <h4><a href="<?php echo e(route('product-detail',$data->product['slug'])); ?>" target="_blank"><?php echo e($data->product['title']); ?></a></h4>
                                                        <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount"><?php echo e(number_format($data->price)); ?>đ</span></p>
                                                    </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Tổng</span>
                                            <span class="total-amount"><?php echo e(number_format(Helper::totalCartPrice())); ?>đ</span>
                                        </div>
                                        <a href="<?php echo e(route('checkout')); ?>" class="btn animate">Thanh toán</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="<?php echo e(Request::path()=='home' ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                                            <li class="<?php echo e(Request::path()=='about-us' ? 'active' : ''); ?>"><a href="<?php echo e(route('about-us')); ?>">Thông tin</a></li>
                                            <li class="<?php if(Request::path()=='product-grids'||Request::path()=='product-lists'): ?>  active  <?php endif; ?>"><a href="<?php echo e(route('product-grids')); ?>">Sản phẩm</a><span class="new">Mới</span></li>												
                                                <?php echo e(Helper::getHeaderCategory()); ?>

                                            <li class="<?php echo e(Request::path()=='blog' ? 'active' : ''); ?>"><a href="<?php echo e(route('blog')); ?>">Bài viết</a></li>									
                                               
                                            <li class="<?php echo e(Request::path()=='contact' ? 'active' : ''); ?>"><a href="<?php echo e(route('contact')); ?>">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header><?php /**PATH D:\laragon\www\cacanhn5\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>