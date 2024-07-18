<?php $__env->startSection('body'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>D2M Hotel</b></a>
  </div>
  <!-- /.login-logo -->
  <router-view></router-view>            

  <div class="login-box-body">
    <p class="login-box-msg">Forgot Password</p>
    
    <?php echo Form::open(['route'=>'admin.forgetPassword.post']); ?>

      <div class="form-group has-feedback">
      	<?php echo Form::email('email', '', ['class'=>'form-control', 'placeholder'=>'mail']); ?>

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
      </div>
      
      
       
        <!-- /.col -->
        <div class="clearfix">
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Send</button>
        </div>
        </div>
        <!-- /.col -->
      </div>
    <?php echo Form::close(); ?>


   
   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>