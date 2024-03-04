
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Bản tin</h4>
                        <p> Đăng kí bản tin của chúng tôi và nhận voucher giảm <span>10%</span> cho đơn hàng của bạn.</p>
                        <form action="<?php echo e(route('subscribe')); ?>" method="post" class="newsletter-inner">
                            <?php echo csrf_field(); ?>
                            <input name="email" placeholder="Your email address" required="" type="email">
                            <button class="btn" type="submit">Đăng kí</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter --><?php /**PATH D:\laragon\www\cacanhn5\resources\views/frontend/layouts/newsletter.blade.php ENDPATH**/ ?>