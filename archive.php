<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Security_Time
 */

get_header(); ?>

<div class="inner-page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">
                    <?php the_field("services_title", "option"); ?>
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="services-section section-padding">
    <div class="container">

        <div class="row">
            <?php
            while (have_posts()):
                the_post(); ?>
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
                        <a href="#"> <?php the_field("services_button_text"); ?></a>
                    </div>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                        class="stretched-link"></a>
                </div>
            </div>
            <?php
            endwhile;
            the_posts_pagination([
                'mid_size' => 1,
                'prev_text' => __(''),
                'next_text' => __(''),
                'screen_reader_text' => __('Posts navigation'),
            ]);
            ?>
        </div>
    </div>
</div>

<?php get_footer();