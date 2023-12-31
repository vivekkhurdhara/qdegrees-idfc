

<?php $__env->startSection('title', '| Add Role'); ?>

<?php $__env->startSection('content'); ?>

  <div class='card'>

    <div class="card-header"><strong>Add Role</strong>
    </div>
    <div class="card-body card-block ">
    <?php echo e(Form::open(array('url' => 'roles'))); ?>


    <div class="form-group">
      <?php echo e(Form::label('name', 'Name')); ?>

      <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
      <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e(Form::checkbox('permissions[]',  $permission->id )); ?>

        <?php echo e(Form::label($permission->name, ucfirst($permission->name))); ?><br>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php echo e(Form::submit('Add', array('class' => 'btn btn-primary'))); ?>


    <?php echo e(Form::close()); ?>


  </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/acl/role/create.blade.php ENDPATH**/ ?>