<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin')); ?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-cart-arrow-down"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo e(route('admin')); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Trang chính</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Tiêu đề
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Visit 'codeastro' for more projects -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('file-manager')); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quản lý hình ảnh</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Tiêu đề</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tùy chọn:</h6>
          <a class="collapse-item" href="<?php echo e(route('banner.index')); ?>">Danh sách</a>
          <a class="collapse-item" href="<?php echo e(route('banner.create')); ?>">Thêm</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Cửa hàng
        </div>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Danh mục</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tùy chọn:</h6>
            <a class="collapse-item" href="<?php echo e(route('category.index')); ?>">Danh sách</a>
            <a class="collapse-item" href="<?php echo e(route('category.create')); ?>">Thêm</a>
          </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
          <i class="fas fa-cubes"></i>
          <span>Sản phẩm</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tùy chọn:</h6>
            <a class="collapse-item" href="<?php echo e(route('product.index')); ?>">Danh sách</a>
            <a class="collapse-item" href="<?php echo e(route('product.create')); ?>">Thêm</a>
          </div>
        </div>
    </li>

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
          <i class="fas fa-table"></i>
          <span>Thương hiệu</span>
        </a>
        <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tùy chọn:</h6>
            <a class="collapse-item" href="<?php echo e(route('brand.index')); ?>">Danh sách</a>
            <a class="collapse-item" href="<?php echo e(route('brand.create')); ?>">Thêm</a>
          </div>
        </div>
    </li>

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
          <i class="fas fa-truck"></i>
          <span>Giao hàng</span>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tùy chọn:</h6>
            <a class="collapse-item" href="<?php echo e(route('shipping.index')); ?>">Danh sách</a>
            <a class="collapse-item" href="<?php echo e(route('shipping.create')); ?>">Thêm</a>
          </div>
        </div>
    </li>

    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('order.index')); ?>">
            <i class="fas fa-cart-plus"></i>
            <span>Đơn hàng</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('review.index')); ?>">
            <i class="fas fa-comments"></i>
            <span>Đánh giá</span></a>
    </li>
    

    <!-- Divider -->
    <!-- Visit 'codeastro' for more projects -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Bài viết
    </div>

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
        <i class="fas fa-fw fa-folder"></i>
        <span>Bài viết</span>
      </a>
      <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tùy chọn:</h6>
          <a class="collapse-item" href="<?php echo e(route('post.index')); ?>">Danh sách</a>
          <a class="collapse-item" href="<?php echo e(route('post.create')); ?>">Thêm</a>
        </div>
      </div>
    </li>

     <!-- Category -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
          <i class="fas fa-sitemap fa-folder"></i>
          <span>Danh mục</span>
        </a>
        <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tùy chọn:</h6>
            <a class="collapse-item" href="<?php echo e(route('post-category.index')); ?>">Danh sách</a>
            <a class="collapse-item" href="<?php echo e(route('post-category.create')); ?>">Thêm</a>
          </div>
        </div>
      </li>

      <!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse">
            <i class="fas fa-tags fa-folder"></i>
            <span>Tags</span>
        </a>
        <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tùy chọn:</h6>
            <a class="collapse-item" href="<?php echo e(route('post-tag.index')); ?>">Danh sách</a>
            <a class="collapse-item" href="<?php echo e(route('post-tag.create')); ?>">Thêm</a>
            </div>
        </div>
    </li>

      <!-- Comments -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('comment.index')); ?>">
            <i class="fas fa-comments fa-chart-area"></i>
            <span>Bình luận</span>
        </a>
      </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        Cài đặt chung
    </div>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('coupon.index')); ?>">
          <i class="fas fa-table"></i>
          <span>Mã giảm giá</span></a>
    </li>
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
            <i class="fas fa-users"></i>
            <span>Quản lý người dùng</span></a>
    </li>
     <!-- General settings -->
     <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('settings')); ?>">
            <i class="fas fa-cog"></i>
            <span>Cài đặt</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul><?php /**PATH C:\laragon\www\cacanhn5\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>