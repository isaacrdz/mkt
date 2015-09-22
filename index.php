<?php get_header(); ?>
<?php include( TEMPLATEPATH . "/partials/slider.php") ?>
    
        <div id="content" role="main">
            

            <div class="mb40"></div><!-- space -->

            <div class="container-fluid">
                <div class="max-col-4" id="blog-item-container">
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="entry entry-box">

                        <div class="entry-media">
                            <figure>
                                <a href="single.html">
                                    <img src="<?php bloginfo('template_url'); ?>/images/blog/post1.jpg" alt="Entry Title">
                                </a>
                            </figure>
                        </div><!-- End .entry-media -->

                        <div class="entry-content-wrapper">
                            <span class="entry-date">24<span>Feb</span></span>
                            <span class="entry-format"><i class="fa fa-file-image-o"></i></span>

                            <h2 class="entry-title"><a href="#"><?php the_title(); ?></a></h2>
                        

                            <div class="entry-content">
                                <p><?php the_excerpt(); ?></p>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-content-wrapper -->

                       

                    </article>

                    <?php endwhile; ?>
                    <!-- post navigation -->
                    <?php else: ?>
                    <!-- no posts found -->
                    <?php endif; ?> 
                    

                </div><!-- End .blog-item-container -->
            </div><!-- End .container-fluid -->

            <div class="mb20"></div><!-- space -->

            <div class="container">
                <nav class="pagination-container text-right">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                            </a>
                        </li>
                        <li  class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->

            <div class="mb10"></div><!-- space -->

        </div><!-- End #content -->

        
<?php get_footer(); ?>