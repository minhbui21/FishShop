

<?php $__env->startSection('main-content'); ?>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            <?php echo $__env->make('backend.layouts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách đơn hàng</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <?php if(count($orders)>0): ?>
        <table class="table table-bordered table-hover" id="order-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Mã đơn hàng.</th>
              <th>Tên</th>
              <th>Email</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng.</th>
              <th>Phí vận chuyển</th>
              <th>Tổng</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <?php
                $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
            ?> 
                <tr>
                    <td><?php echo e($order->id); ?></td>
                    <td><?php echo e($order->order_number); ?></td>
                    <td><?php echo e($order->last_name); ?> <?php echo e($order->first_name); ?></td>
                    <td><?php echo e($order->email); ?></td>
                    <td>
                        <?php if($order->product): ?>
                        <?php echo e($order->product->title); ?>

                        <?php else: ?>
                        Không tìm thấy sản phẩm
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($order->quantity); ?></td>
                    <td><?php $__currentLoopData = $shipping_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e(number_format($data)); ?>đ <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                    <td><?php echo e(number_format($order->total_amount)); ?>đ</td>
                    <td>
                        <?php if($order->status=='new'): ?>
                          <span class="badge badge-primary">Mới</span>
                        <?php elseif($order->status=='process'): ?>
                          <span class="badge badge-warning">Đang xử lí</span>
                        <?php elseif($order->status=='delivered'): ?>
                          <span class="badge badge-success">Đã giao hàng</span>
                        <?php else: ?>
                          <span class="badge badge-danger">Hủy</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('order.show',$order->id)); ?>" class="btn btn-warning btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="Xem" data-placement="bottom"><i class="fas fa-eye"></i></a>
                        <a href="<?php echo e(route('order.edit',$order->id)); ?>" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="Sửa" data-placement="bottom"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="<?php echo e(route('order.destroy',[$order->id])); ?>">
                          <?php echo csrf_field(); ?> 
                          <?php echo method_field('delete'); ?>
                              <button class="btn btn-danger btn-sm dltBtn" data-id="<?php echo e($order->id); ?>" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <span style="float:right"><?php echo e($orders->links()); ?></span>
        <?php else: ?>
          <h6 class="text-center">Chưa có đơn hàng!!</h6>
        <?php endif; ?>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
  <link href="<?php echo e(asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>

  <!-- Page level plugins -->
  <script src="<?php echo e(asset('backend/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo e(asset('backend/js/demo/datatables-demo.js')); ?>"></script>
  <script>
      
      $('#order-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[8]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){
            
        }
  </script>
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Bạn chắc chắn chứ?",
                    text: "Dữ liệu sẽ không thể khôi phục khi bạn đã xóa!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Dữ liệu của bạn đã an toàn!");
                    }
                });
          })
      })
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cacanhn5\resources\views/backend/order/index.blade.php ENDPATH**/ ?>