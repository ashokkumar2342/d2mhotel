<?php $__env->startComponent('mail::message'); ?>
# D2M Hotel Website Contact Us

  

 <div class="container">
 <div class="row">
 	<div class="col-md-6">
 	Name:
 		<?php echo e($contact->first_name); ?>

 			<?php echo e($contact->last_name); ?>

 	</div>
 	<div class="col-md-6">
 	Email:
 		<?php echo e($contact->email); ?>

 	</div>
 	<div class="col-md-6">
 	Mob:
 		<?php echo e($contact->mobile); ?>

 	</div>
 	<div class="col-md-4">
 	Message:
 		<?php echo e($contact->message); ?>

 	</div>
 	 

 </div>
 	
 </div>

Thanks,<br>
 D2M Hotel
<?php echo $__env->renderComponent(); ?>
