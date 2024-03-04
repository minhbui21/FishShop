
<?php $__env->startSection('title','Ecommerce Laravel || All Notifications'); ?>
<?php $__env->startSection('main-content'); ?>
<div class="card">
    <div class="row">
        <div class="col-md-12">
           <?php echo $__env->make('backend.layouts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
  <h5 class="card-header">Thông báo</h5>
  <div class="card-body">
    <?php if(count(Auth::user()->Notifications)>0): ?>
    <table class="table  table-hover admin-table" id="notification-dataTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Thời gian</th>
          <th scope="col">Tiêu đề</th>
          <th scope="col">Hành động</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = Auth::user()->Notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr class="<?php if($notification->unread()): ?> bg-light border-left-light <?php else: ?> border-left-success <?php endif; ?>">
          <td scope="row"><?php echo e($loop->index +1); ?></td>
          <td><?php echo e($notification->created_at->format('F d, Y h:i A')); ?></td>
          <td><?php echo e($notification->data['title']); ?></td>
          <td>
            <a href="<?php echo e(route('admin.notification', $notification->id)); ?>" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="Xem" data-placement="bottom"><i class="fas fa-eye"></i></a>
            <form method="POST" action="<?php echo e(route('notification.delete', $notification->id)); ?>">
              <?php echo csrf_field(); ?>
              <?php echo method_field('delete'); ?>
                  <button class="btn btn-danger btn-sm dltBtn" data-id=<?php echo e($notification->id); ?> style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Xóa"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <?php else: ?>
      <h2>Không có thông báo!</h2>
    <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
  <link href="<?php echo e(asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
  <script src="<?php echo e(asset('backend/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo e(asset('backend/js/demo/datatables-demo.js')); ?>"></script>
  <script>

      $('#notification-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[3]
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

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cacanhn5\resources\views/backend/notification/index.blade.php ENDPATH**/ ?>