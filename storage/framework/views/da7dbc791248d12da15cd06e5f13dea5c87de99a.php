<?php $__env->startSection('body'); ?>
  
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('<?php echo e(asset('img/about-us-breadcrumb.jpg')); ?>'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Contact Us</h2>
                         
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

       
        <!-- start contact mail area -->
        <section class="contact_mail_area margin-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="contact_mail">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="send_mail">
                                <div class="section_title margin-bottom-40">
                                    <h4>send us an email</h4>
                                </div>
                                <?php echo Form::open(['route'=>'front.contact.post']); ?>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" value="<?php echo e(old('first_name')); ?>" placeholder="First Name *" name="first_name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" value="<?php echo e(old('last_name')); ?>" placeholder="Last Name *" required name="last_name">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="text" value="<?php echo e(old('email')); ?>" placeholder="Your Email Id *" required name="email"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="text" <?php echo e(old('mobile')); ?> placeholder="Phone Number *" required name="mobile"/>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <textarea name="message" <?php echo e(old('message')); ?> placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <!-- <a href="#" class="btn btn-warning btn-md"></a> -->
                                            <input class="btn btn-warning btn-md" type="submit" name="submit" value="Submit Now" />
                                        </div>
                                    </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact_info margin-top-65">
                                <div class="section_title margin-bottom-45">
                                    <h4>Contact Info</h4>
                                </div>
                                <ul class="clearul">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        Sangum Complex,Near New Bus stand, <br>
                                        Delhi Road, Vikas Nagar, Rohtak, Haryana 124001.
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        8059 255 777
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        d2mhotel@gmail.com
                                    </li>
                                </ul>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact mail area -->

        <!-- start contact us area -->
        <section class="contact_us_area content-left">
            <div class="container">
                <div class="contact_us clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="call clearfix">
                            <h6>Call Us</h6>
                            <p>8059 255 777</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="email_us clearfix">
                            <h6>Email us</h6>
                            <p>d2mhotel@gmail.com</p>
                        </div>
                    </div>
                     
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="social_icons clearfix">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact us area -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<?php if(Session::has('message')): ?>
<script type="text/javascript">
    Command: toastr["<?php echo e(Session::get('class')); ?>"]("<?php echo e(Session::get('message')); ?>");
</script>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('front.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>