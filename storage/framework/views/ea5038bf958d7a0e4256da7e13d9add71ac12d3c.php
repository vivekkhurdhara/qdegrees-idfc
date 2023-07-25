

<?php $__env->startSection('sh-title'); ?>
Audit Alert Box
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sh-detail'); ?>
Create New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card" id="kt_repeater_1">
    <div class="card-header">
        <strong>Beat Plan</strong>
    </div>
    <div class="card-body card-block">
      
        <?php echo Form::open(
                  array(
                    'route' => 'beat_plan.store', 
                    'class' => 'kt-form',
                    'role'=>'form',
                    'data-toggle'=>"validator")
                  ); ?>

      <!--begin::Form-->
        

        <div class="row">
          <div class="col-md-3 form-group">
            <label>Name*</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Beat plan name" >
          </div>
           
          </div> 
          <div id="kt_repeater_1">
            <div class="form-group  row" id="kt_repeater_1">
              <div data-repeater-list="subs" class="col-lg-12">
                <div data-repeater-item class="form-group align-items-center">
                  <div class="row">
                  
                    <div class="col-md-3 form-group">
                      <label>Date*</label>
                      <input type="text" id="date" name="date" class="form-control datepicker" placeholder="Choose dates" >
                  </div>
                <div class="col-md-3 form-group">
                    <label>Branch*</label>
                    <select name="branch_id" id="branchName" data-placeholder="Choose a Branch..." class="standardSelect form-control" tabindex="2">
                      <option value="" label="Branch Name"></option>
                      <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
      
                <div class="col-md-3 form-group">
                  <label>Description</label>
                    <textarea class="form-control"  id="" name="description"></textarea>
                </div>
                <div class="col-md-3">
                  <div data-repeater-delete="" class="btn-sm btn btn-danger btn-pill">
                    <span>
                      <i class="la la-trash-o"></i>
                      <span>Delete</span>
                    </span>
                  </div>
                </div>
                  </div>

                  
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-4">
                <div data-repeater-create="" class="btn btn-primary btn-sm">
                  <span>
                    <i class="fa fa-plus"></i>
                    <span>Add</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

</div>



        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-sm">
              <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-sm">
              <i class="fa fa-ban"></i> Reset
          </button>
      </div>
      </form>

      <!--end::Form-->
    </div>

    <!--end::Portlet-->
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

<script>
  jQuery(document).ready(function() {
    jQuery('.datepicker').datepicker({
      format: "dd-mm-yyyy",
      minDate: new Date()
    });
  });
  jQuery('.datepicker').on('focus',function() {
    jQuery('.datepicker').datepicker({
      format: "dd-mm-yyyy",
      minDate: new Date()
    });
  });
      
  </script>
    <?php echo $__env->make('shared.form_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/audit/resources/views/beat_plan/create.blade.php ENDPATH**/ ?>