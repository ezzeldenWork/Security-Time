<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Security_Time
 */

get_header();
?>


<div class="inner-page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">
                    <?php the_title() ?>
                </h3>
            </div>
        </div>
    </div>
</div>




<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="title-box no-after text-start">
                    <h3 class="title">
                        <?php the_title() ?>
                    </h3>
                </div>
                <p class="parg">
                    <?php the_content() ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="title-box no-after text-start">
                    <h3 class="title">
                        <?php the_field("what_we_offer_you_title")?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">

            <?php  if( have_rows('what_we_offer_you_list') ):
				while( have_rows('what_we_offer_you_list') ) : the_row();  ?>
            <div class="col-md-3 mb-3">
                <div class="what-we-offer-list-box">
                    <div class="icon">
                        <img src="<?php the_sub_field("icon") ?>" alt="" class="img-fluid">
                    </div>
                    <h3 class="title">
                        <?php the_sub_field("title") ?>
                    </h3>
                    <p class="parg">
                        <?php the_sub_field("paragraph") ?>
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



<div class="portfolio-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box no-after text-start">
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



<?php
get_footer();