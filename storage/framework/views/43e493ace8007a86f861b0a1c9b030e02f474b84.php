<?php $__env->startSection('body'); ?>
<!-- start breadcrumb -->

        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('<?php echo e(asset('img/meet-banner.jpg')); ?>'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Business meeting</h2>
                         
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <!-- start our room facilities -->
        <section class="our_room_facilities_area margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                                            
                             
                    
                    <h4>Business meeting</h4>
                     <p align="justify">  
                      A business meeting is an occasion at which the proceedings are reserved so cleave to subsequently useful business occasion at D2M Hotel. We put forward 5500 square feet of indoor and outdoor meeting spaces, and in addition staff who work in corporate gatherings. 
                      </p>
                                 
                       <div class="row">
                                
                            <div class="col-md-4" style="margin-top: 20px">
                                <a href='<?php echo e(asset('img/gallery/business/1.jpg')); ?>'
                                   class='fresco'
                                   data-fresco-group=' '
                                   data-fresco-caption=" ">
                                   <figure class="uk-overlay uk-overlay-hover">
                                  <img src='<?php echo e(asset('img/gallery/business/1.jpg')); ?>' alt=''/>
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                  </figure>
                                </a>
                            </div>
                            <div class="col-md-4" style="margin-top: 20px">
                                <a href='<?php echo e(asset('img/gallery/business/3.jpg')); ?>'
                                   class='fresco'
                                   data-fresco-group=' '
                                   data-fresco-caption=" ">
                                   <figure class="uk-overlay uk-overlay-hover">
                                  <img src='<?php echo e(asset('img/gallery/business/3.jpg')); ?>' alt=''/>
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                  </figure>
                                </a>
                            </div>
                            <div class="col-md-4" style="margin-top: 20px">
                                <a href='<?php echo e(asset('img/gallery/business/4.jpg')); ?>'
                                   class='fresco'
                                   data-fresco-group=' '
                                   data-fresco-caption=" ">
                                   <figure class="uk-overlay uk-overlay-hover">
                                  <img src='<?php echo e(asset('img/gallery/business/4.jpg')); ?>' alt=''/>
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                  </figure>
                                </a>
                            </div>

                         </div> 
                      </div>
                    <div class="col-md-3">
                        <?php echo $__env->make('front.include.quicklinks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                       
                    </div>

                 </div>
                
                    
                 
                </div>
            </div>
        </section>
        <!-- end our room facilities -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>