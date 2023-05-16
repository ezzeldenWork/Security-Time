<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                    <?php the_field("services_title", "option")  ?>
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="portfolio-section section-padding">
    <div class="container">

        <div class="row">
            <?php
 while (have_posts()): the_post(); ?>
            <div class="col-md-4 mb-4">
                <div class="portfolio-slider-item after-box">
                    <div class="portfolio-item">
                        <a data-fancybox="gallery" href="<?php echo get_the_post_thumbnail_url(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            the_posts_pagination( array(
                'mid_size' => 1,
                'prev_text' => __( '' ),
                'next_text' => __( '' ),
                'screen_reader_text' => __( 'Posts navigation' )
             ) );
            
            ?>
        </div>
    </div>
</div>

<?php
get_footer();