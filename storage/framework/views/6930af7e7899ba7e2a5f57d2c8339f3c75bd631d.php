<?php
$void = 'javascript:void(0)';
?>


<?php $__env->startSection('title',"Add Sender"); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header',['caption' => "Add Sender"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form method="post" action="<?php echo e(url('add-sender')); ?>">
    <?php echo csrf_field(); ?>


<div class="row">
<div class="col-md-12 mt-3 mb-5">
<div class="table-responsive">
            <table class="table table-striped table-sm data-table">
              <thead>
                <tr>
                 <th>Sender Name</th>
                  <th>Email</th>
                  <th>Current?</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                   foreach($senders as $s)
                   {
                   // $ru = url('remove-sender')."?xf=".$s['id'];
                   $ru = '#';
                  ?>
                <tr>
                  <td><?php echo e($s['sn']); ?></td>
                  <td><?php echo e($s['se']); ?></td>
                  <td><?php echo e($s['current']); ?></td>
                  <td><?php echo e($s['status']); ?></td>
                  <td><a class="btn btn-danger" href="<?php echo e($ru); ?>">Remove</a></td>
                </tr>
                <?php
                   }
                ?>
              </tbody>
            </table>
          </div>
</div>
</div>
<div class="row">
   <!--
    <div class="col-md-12 mt-3 mb-5">
         <div class="form-group">
            <p class="control-label">Test Results</p>
            <div id="test-result" class="form-control"></div>
         </div>
    </div>
-->
   <div class="col-md-6">
         <div class="form-group">
            <p class="control-label">Sender Name</p>
            <input type="text" name="sn" class="form-control" placeholder="Sender name"/>
         </div>
    </div>
    <div class="col-md-6">
         <div class="form-group">
            <p class="control-label">Sender Email</p>
            <input type="text" name="su" class="form-control" placeholder="Sender email"/>
         </div>
    </div>
    <div class="col-md-12 mt-3">
         <div class="form-group">
            <p class="control-label">Password</p>
            <input type="password" name="spp" class="form-control" placeholder="Password"/>
         </div>
    </div>
    <div class="col-md-12 mt-2 mb-5">
         <div class="form-group">
            <button id="add-sender-btn" class="btn btn-primary">Send</button>
         </div>
    </div>
    
</div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/gmail-sender-x1/resources/views/add-sender.blade.php ENDPATH**/ ?>