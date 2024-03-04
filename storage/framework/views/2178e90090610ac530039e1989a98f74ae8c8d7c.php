

<?php $__env->startSection('title','Cá cảnh N5 || BÀI VIẾT'); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>">Trang chủ<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Bài viết</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Blog Single -->
    <section class="blog-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            <div class="col-12">
                                <div class="image">
                                    <img src="<?php echo e($post->photo); ?>" alt="<?php echo e($post->photo); ?>">
                                </div>
                                <div class="blog-detail">
                                    <h2 class="blog-title"><?php echo e($post->title); ?></h2>
                                    <div class="blog-meta">
                                        <span class="author"><a href="javascript:void(0);"><i class="fa fa-user"></i>Bởi <?php echo e($post->author_info['name']); ?></a><a href="javascript:void(0);"><i class="fa fa-calendar"></i><?php echo e($post->created_at->format('M d, Y')); ?></a><a href="javascript:void(0);"><i class="fa fa-comments"></i>Bình luận (<?php echo e($post->allComments->count()); ?>)</a></span>
                                    </div>
                                    <div class="sharethis-inline-reaction-buttons"></div>
                                    <div class="content">
                                        <?php if($post->quote): ?>
                                        <blockquote> <i class="fa fa-quote-left"></i> <?php echo ($post->quote); ?></blockquote>
                                        <?php endif; ?>
                                        <p><?php echo ($post->description); ?></p>
                                    </div>
                                </div>
                                <div class="share-social">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="content-tags">
                                                <h4>Tags:</h4>
                                                <ul class="tag-inner">
                                                    <?php
                                                        $tags=explode(',',$post->tags);
                                                    ?>
                                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a href="javascript:void(0);"><?php echo e($tag); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if(auth()->guard()->check()): ?>
                            <div class="col-12 mt-4">
                                <div class="reply">
                                    <div class="reply-head comment-form" id="commentFormContainer">
                                        <h2 class="reply-title">Để lại bình luận của bạn</h2>
                                        <!-- Comment Form -->
                                        <form class="form comment_form" id="commentForm" action="<?php echo e(route('post-comment.store',$post->slug)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                
                                                <div class="col-12">
                                                    <div class="form-group  comment_form_body">
                                                        <label>Bình luận của bạn<span>*</span></label>
                                                        <textarea name="comment" id="comment" rows="10" placeholder=""></textarea>
                                                        <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>" />
                                                        <input type="hidden" name="parent_id" id="parent_id" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group button">
                                                        <button type="submit" class="btn"><span class="comment_btn comment">Đăng</span><span class="comment_btn reply" style="display: none;">Phản hồi</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Comment Form -->
                                    </div>
                                </div>
                            </div>

                            <?php else: ?>
                            <p class="text-center p-5">
                                Bạn cần phải <a href="<?php echo e(route('login.form')); ?>" style="color:rgb(54, 54, 204)">Đăng nhập</a> hoặc <a style="color:blue" href="<?php echo e(route('register.form')); ?>">Đăng kí</a> để được bình luận.

                            </p>


                            <!--/ End Form -->
                            <?php endif; ?>
                            <div class="col-12">
                                <div class="comments">
                                    <h3 class="comment-title">Bình luận (<?php echo e($post->allComments->count()); ?>)</h3>
                                    <!-- Single Comment -->
                                    <?php echo $__env->make('frontend.pages.comment', ['comments' => $post->comments, 'post_id' => $post->id, 'depth' => 3], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <!-- End Single Comment -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget search">
                            <form class="form" method="GET" action="<?php echo e(route('blog.search')); ?>">
                                <input type="text" placeholder="Tìm kiếm..." name="search">
                                <button class="button" type="sumbit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Danh mục bài viết</h3>
                            <ul class="categor-list">
                                
                                <?php $__currentLoopData = Helper::postCategoryList('posts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="#"><?php echo e($cat->title); ?> </a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Bài viết gần đây</h3>
                            <?php $__currentLoopData = $recent_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Single Post -->
                                <div class="single-post">
                                    <div class="image">
                                        <img src="<?php echo e($post->photo); ?>" alt="<?php echo e($post->photo); ?>">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#"><?php echo e($post->title); ?></a></h5>
                                        <ul class="comment">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo e($post->created_at->format('d M, y')); ?></li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i>
                                                <?php echo e($post->author_info->name ?? 'Anonymous'); ?>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget side-tags">
                            <h3 class="title">Tags</h3>
                            <ul class="tag">
                                <?php $__currentLoopData = Helper::postTagList('posts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href=""><?php echo e($tag->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget newsletter">
                            <h3 class="title">Bảng tin</h3>
                            <div class="letter-inner">
                                <h4>Đăng kí và nhận <br> những cập nhật mới nhất.</h4>
                                <form action="<?php echo e(route('subscribe')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-inner">
                                        <input type="email" name="email" placeholder="Email của bạn">
                                        <button type="submit" class="btn mt-2">Đăng kí</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blog Single -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
$(document).ready(function(){

    (function($) {
        "use strict";

        $('.btn-reply.reply').click(function(e){
            e.preventDefault();
            $('.btn-reply.reply').show();

            $('.comment_btn.comment').hide();
            $('.comment_btn.reply').show();

            $(this).hide();
            $('.btn-reply.cancel').hide();
            $(this).siblings('.btn-reply.cancel').show();

            var parent_id = $(this).data('id');
            var html = $('#commentForm');
            $( html).find('#parent_id').val(parent_id);
            $('#commentFormContainer').hide();
            $(this).parents('.comment-list').append(html).fadeIn('slow').addClass('appended');
          });

        $('.comment-list').on('click','.btn-reply.cancel',function(e){
            e.preventDefault();
            $(this).hide();
            $('.btn-reply.reply').show();

            $('.comment_btn.reply').hide();
            $('.comment_btn.comment').show();

            $('#commentFormContainer').show();
            var html = $('#commentForm');
            $( html).find('#parent_id').val('');

            $('#commentFormContainer').append(html);
        });

 })(jQuery)
})
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cacanhn5\resources\views/frontend/pages/blog-detail.blade.php ENDPATH**/ ?>