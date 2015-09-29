<div id="content" role="main" class="no-padding">
        
            <div id="revslider-container">
                <div id="revslider">
                    <ul>    
                    <?php query_posts( 'cat=3' ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="800" data-title="Boss of All Templates" data-thumb="<?php the_field('promo_banner') ?>;" alt="">">
                            <!-- background image -->
                            <img src="images/revslider/dummy.png"  alt="slidebg1" data-lazyload="<?php the_field('promo_banner') ?>;" alt="">" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            
                            <div class="tp-caption rev-subtitle lfb ltt"
                                data-x="center"
                                data-y="155"
                                data-speed="1000"
                                data-start="900"
                                data-easing="Power3.easeInOut"
                                data-endspeed="400"
                                style="z-index: 10">This is the template you need
                            </div>

                            <div class="tp-caption rev-title lfb ltt"
                                data-x="center"
                                data-y="210"
                                data-speed="1000"
                                data-start="1000"
                                data-easing="Power3.easeInOut"
                                data-endspeed="600"
                                style="z-index: 6">Boss of All Templates
                            </div>


                            <div class="tp-caption rev-text lfb ltt"
                                data-x="center"
                                data-y="290"
                                data-speed ="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-endspeed="700"
                                style="z-index: 12">Qui laborum saepe vel facilis unde quis odit maiores corrupti, expedita est repellendus auses.
                            </div>

                            <div class="tp-caption rev-btn lfb ltt"
                                data-x="center"
                                data-y="360"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-endspeed="800"
                                style="z-index: 14">
                                    <a href="#" class="btn btn-white btn-border radius-lger min-width"><strong>See Features!</strong></a>
                                    <a href="#" class="btn btn-white radius-lger min-width"><strong>Purchase Now!</strong></a>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <!-- post navigation -->
                        <?php else: ?>
                        <!-- no posts found -->
                        <?php endif; ?> 
                        
                    </ul>
                </div><!-- End #revslider -->
                <a href="#id-to-scroll" class="scroll-btn light" data-offset="-55" data-0="opacity:1" data-top-bottom="opacity:0;" title="Go Down"><span></span></a>
            </div><!-- End #revslider-container -->