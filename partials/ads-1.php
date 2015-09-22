<div id="portfolio-item-container" class="max-col-4 no-margin popup-gallery" data-layoutmode="fitRows">
     <?php query_posts( 'cat=3' ); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="portfolio-item portfolio-meta-slideup push design">
        <figure>
            <a href="" class="zoom-item" title="Portfolio Item Description">
               
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive')); } ?>
            </a>
        </figure>
        <div class="portfolio-meta dark">
            <h2 class="portfolio-title"><a href="single-portfolio.html"><?php the_title(); ?></a></h2>
            <div class="portfolio-tags"><a href="#"><?php the_field('promo_name') ?> </a></div>
            
        </div><!-- End .portfolio-meta -->                            
    </div><!-- End .portfolio-item -->
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?> 
</div><!-- End #portfolio-item-container -->