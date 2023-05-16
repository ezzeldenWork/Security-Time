<?php /* Template Name: Home Page */ ?>
<?php 
get_header();
?>





<div class="intro-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="intro-content">
                    <h3 class="sub-title"><?php the_field("intro_sub_title"); ?></h3>
                    <h1 class="title"><?php the_field("title"); ?> <span><?php the_field("title_color"); ?></span></h1>
                    <p class="parg"><?php the_field("paragraph"); ?></p>
                    <div class="arrow-button-box mt-4">
                        <a href="<?php the_field("intro_button_link"); ?>">
                            <i class="fas fa-chevron-left"></i>
                            <span class="text"><?php the_field("intro_button_text"); ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="intro-img">
                    <img src="<?php the_field("intro_photo"); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="services-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">
                        <?php the_field("services_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' =>
            'services', 'posts_per_page' => 4, ]; $services_query = new WP_Query($args); while ($services_query->have_posts()): $services_query->the_post(); ?>
            <div class="col-md-4 mb-4">
                <div class="services-box">
                    <div class="services-icon">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid"
                            loading="lazy" />
                    </div>
                    <h4 class="title">
                        <?php the_title(); ?>
                    </h4>
                    <p class="prag">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <div class="button-box">
                        <a href="#"> <?php the_field("services_button_text") ?></a>
                    </div>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                        class="stretched-link"></a>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>









<div class="portfolio-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">
                        <?php the_field("portfolio_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-slider">
                    <?php
                        $args = [
                            'post_type' =>
                        'portfolio', 'posts_per_page' => 10, ]; $services_query = new WP_Query($args); while ($services_query->have_posts()): $services_query->the_post(); ?>
                    <div class="portfolio-slider-item after-box">
                        <div class="portfolio-item">
                            <a data-fancybox="gallery" href="<?php echo get_the_post_thumbnail_url(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="client-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">
                        <?php the_field("client_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="client-slider">
                    <?php
                        if( have_rows('client_section') ):
                            while( have_rows('client_section') ) : the_row();
                        ?>
                    <div class="client-slider-item">
                        <div class="client-slider-item-box">
                            <div class="img-box">
                                <img src="<?php the_sub_field('photo'); ?>" alt="<?php the_sub_field('photo'); ?>"
                                    class="img-fluid" />
                                <h3 class="name"><?php the_sub_field('name'); ?></h3>
                            </div>
                            <p class="prag">
                                <?php the_sub_field('paragraph', false , false); ?>
                            </p>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="pattern-section section-padding">
    <div class="logo-section mb-4 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <h3 class="title">
                            <?php the_field("logo_section_title"); ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-slider">
                        <?php
                        if( have_rows('clint_logo', "option") ):
                            while( have_rows('clint_logo', "option") ) : the_row();
                        ?>
                        <div class="logo-slider-item">
                            <img src="<?php the_sub_field('clint_logo_image'); ?>"
                                alt="<?php the_sub_field('clint_logo_image'); ?>" class="img-fluid">
                        </div>
                        <?php 
                        endwhile;
                        endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-section section-padding mt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <h3 class="title">
                            <?php the_field("blog_section_title"); ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
            $the_query = new WP_Query( 'posts_per_page=3' );
            
            if ( $the_query ->
            have_posts()): while ( $the_query -> have_posts()): $the_query -> the_post(); ?>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="blog-box">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_url(); ?>"
                            class="img-fluid">
                        <div class="blog-content">
                            <h2 class="blog-title">
                                <?php the_title(); ?>
                            </h2>

                            <p class="prag">
                                <?php the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                                class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="button-box text-center pt-4 mt-4">
                        <a href="#"> اقرأ المزيد</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>






<?php get_footer(); ?>