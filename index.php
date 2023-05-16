<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                    المقالات
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="blog-section section-padding">
    <div class="container">

        <div class="row">

            <?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();?>
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
			the_posts_pagination( array(
                'mid_size' => 1,
                'prev_text' => __( '' ),
                'next_text' => __( '' ),
                'screen_reader_text' => __( 'Posts navigation' )
             ) );


		endif;
		?>

        </div>
    </div>
</div>

<?php
get_footer();