<?php if($customFields): ?>
<h5 class="col-12 pb-4"><?php echo trans('lang.main_fields'); ?></h5>
<?php endif; ?>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Delivery Fee Field -->
<div class="form-group row ">
  <?php echo Form::label('delivery_fee', trans("lang.driver_delivery_fee"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('delivery_fee', null,  ['class' => 'form-control','placeholder'=>  trans("lang.driver_delivery_fee_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.driver_delivery_fee_help")); ?>

    </div>
  </div>
</div>
</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- 'Boolean Available Field' -->
<div class="form-group row ">
  <?php echo Form::label('available', trans("lang.driver_available"),['class' => 'col-3 control-label text-right']); ?>

  <div class="checkbox icheck">
    <label class="col-9 ml-2 form-check-inline">
      <?php echo Form::hidden('available', 0); ?>

      <?php echo Form::checkbox('available', 1, null); ?>

    </label>
  </div>
</div>

</div>
<?php if($customFields): ?>
<div class="clearfix"></div>
<div class="col-12 custom-field-container">
  <h5 class="col-12 pb-4"><?php echo trans('lang.custom_field_plural'); ?></h5>
  <?php echo $customFields; ?>

</div>
<?php endif; ?>
<!-- Submit Field -->
<div class="form-group col-12 text-right">
  <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>" ><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.driver')); ?></button>
  <a href="<?php echo route('drivers.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
</div>
<?php /**PATH C:\xampp\htdocs\eas_fast\resources\views/drivers/fields.blade.php ENDPATH**/ ?>