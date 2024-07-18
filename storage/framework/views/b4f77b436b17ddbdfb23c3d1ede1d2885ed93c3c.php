<?php $__env->startComponent('mail::message'); ?>
# D2M Hotel Website Booking Details 

  

 <div class="container">
 <div class="row">

 	<div class="col-md-4">
 	Check In:
 		<?php echo e($booking->check_in); ?>

 	</div>
 	<div class="col-md-4">
 	Check Out:
 		<?php echo e($booking->check_out); ?>

 	</div>
 	<div class="col-md-4">
 	Room:
 		<?php echo e($booking->room); ?>

 	</div>
 	<div class="col-md-4">
 	Adult:
 		<?php echo e($booking->adult); ?>

 	</div>
 
 	<div class="col-md-6">
 	Name:
 		<?php echo e($booking->first_name); ?>

 			<?php echo e($booking->last_name); ?>

 	</div>
 	<div class="col-md-6">
 	Email:
 		<?php echo e($booking->email); ?>

 	</div>
 	<div class="col-md-6">
 	Mob:
 		<?php echo e($booking->mobile); ?>

 	</div>
 	<div class="col-md-4">
 	Address:
 		<?php echo e($booking->address1); ?>

 		<?php echo e($booking->address2); ?>


 	</div>
 	
 	 

 </div>
 	
 </div>





 

Thanks,<br>
 D2M Hotel
<?php echo $__env->renderComponent(); ?>
