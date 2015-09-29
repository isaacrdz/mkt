<nav class="navbar navbar-white animated-dropdown ttb-dropdown" role="navigation">
                
                <div class="navbar-top clearfix">
                    
                </div><!-- End .navbar-top -->
                
                <div class="navbar-inner sticky-menu">
                    <div class="container">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle btn-circle pull-right collapsed" data-toggle="collapse" data-target="#main-navbar-container">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand text-uppercase" href="index.html" title="Boss - Multipurpose Premium Html5 Template">Monstey</a>

                            <button type="button" class="navbar-btn btn-icon btn-circle pull-right last visible-sm visible-xs" data-toggle="collapse" data-target="#header-search-form"><i class="fa fa-search"></i></button>

                            <div class="dropdown cart-dropdown visible-sm visible-xs pull-right">
                                <button type="button" class="navbar-btn btn-icon btn-circle dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i></button>
                                <div class="dropdown-menu cart-dropdown-menu" role="menu">
                                    <p class="cart-dropdown-desc"><i class="fa fa-cart-plus"></i>You have 2 product(s) in your cart:</p>
                                    <hr>
                                    <div class="product clearfix">
                                        <a href="#" class="remove-btn" title="Remove"><i class="fa fa-close"></i></a>
                                        <figure>
                                           <a href="product.html" title="Product Name"><img class="img-responsive" src="images/products/thumbs/product1.jpg" alt="Product image"></a>
                                        </figure>
                                        <div class="product-meta">
                                            <h4 class="product-name"><a href="product.html">Seamsun 3d Smart Tv</a></h4>
                                            <div class="product-quantity">x 2 piece(s)</div><!-- End .product-quantity -->
                                            <div class="product-price-container">
                                                <span class="product-price">$80.50</span>
                                                <span class="product-old-price">$120.50</span>
                                            </div><!-- End .product-price-container -->
                                        </div><!-- End .product-meta -->
                                    </div><!-- End .product -->
                                    <div class="product clearfix">
                                        <a href="#" class="remove-btn" title="Remove"><i class="fa fa-close"></i></a>
                                        <figure>
                                            <a href="product.html" title="Product Name"><img class="img-responsive" src="images/products/thumbs/product1.jpg" alt="Product image"></a>
                                        </figure>
                                        <div class="product-meta">
                                            <h4 class="product-name"><a href="product.html">Banana Smart Watch</a></h4>
                                            <div class="product-quantity">x 1 piece(s)</div><!-- End .product-quantity -->
                                            <div class="product-price-container">
                                                <span class="product-price">$120.99</span>
                                            </div><!-- End .product-price-container -->
                                        </div><!-- End .product-meta -->
                                    </div><!-- End .product -->
                                    <hr>
                                    <div class="cart-action">
                                        <div class="pull-left cart-action-total">
                                            <span>Total:</span> $281.99
                                        </div><!-- End .pull-left -->
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-custom ">Go to Cart</a>
                                        </div>
                                    </div><!-- End .cart-action -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->

                            
                        </div><!-- End .navbar-header -->

                        <div class="collapse navbar-collapse" id="main-navbar-container">
                            <ul class="nav navbar-nav">
                             <?php
                                wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse navbar-right ',
                                'container_id'      => 'mi-menu',
                                'menu_class'        => 'nav navbar-nav ',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                                
                            </ul>
                            
                            
                            
                            
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </div><!-- End .navbar-inner -->
            </nav>