            <div class="mega-menu shop">
                <div class="col-wrap">
                    <div class="column half talignleft table-maker">
                        <div class="table-cell">
                            <h4><i>Categories</i></h4>
                            <?php wp_nav_menu(array('theme_location' => 'Shop_Categories_Nav',)); ?>
                            <h4><i>Collections</i></h4>
                            <?php wp_nav_menu(array('theme_location' => 'Shop_Collections_Nav',)); ?>
                        </div>
                        <div class="arrow-divide table-cell"></div>
                    </div>
                    <div class="column half taligncenter table-maker">
                        <?php query_posts(array('post_type' => 'megamenu')); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if (autoc_get_postdata('shop-megamenu')) { ?>
                        <?php if (get_the_title() === 'Shop') {
                            echo '<h5><i>Sangie Loves</i></h5>';
                            query_posts(array('posts_per_page' => 2, 'post_type' => 'product', 'orderby' => 'menu_order', 'product_cat' => 'sangie-loves',));
                            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } ?>
                            </a>
                            <?php endwhile; else: endif;
                        } 
                        else { ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <?php
                    }
                } 
                ?>
            <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
</div>
<div class="mega-menu accounts">
    <div class="col-wrap">
        <div class="column half">
            <?php wp_nav_menu(array('theme_location' => 'Accounts_Nav',)); ?>
        </div>
        <div class="column half taligncenter">
            <?php wp_login_form(array('redirect' => site_url( $_SERVER['REQUEST_URI'] ).'/my-account')); ?>
            <p style="font-size:12px;"><a href="<?php echo get_site_url(); ?>/my-account">Not a user? Click here to register!</a></p>
        </div>
    </div>
</div>