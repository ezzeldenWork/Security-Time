<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Security_Time
 */

?>

<div class="overlay"></div>
</main>
</div><!-- #page -->












<!--           start footer-->
<div class="footer-container">
    <footer class="wrapper">

        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="logo-box">
                            <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                        <div class="footer-prag">
                            <p class="prag">
                                <?php the_field('footer_paragraph', 'option'); ?>
                            </p>
                        </div>
                        <div class="icon-box-side pb-4 mb-4">
                            <ul>
                                <?php if (have_rows('social_media', 'option')):
                                    // loop through the rows of data
                                    while (have_rows('social_media', 'option')):
                                        the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('social_media_link', 'option'); ?>">
                                        <?php the_sub_field('social_media_icon', 'option'); ?>
                                    </a>
                                </li>
                                <?php
                                    endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="footer-list">
                            <h3 class="footer-title">
                                <?php the_field('footer_title_1', 'option'); ?>
                            </h3>
                            <?php wp_nav_menu([
                                'theme_location' =>
                            'footer_menu_1', 'menu_id' => 'footer-menu', ]); ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="footer-list">
                            <h3 class="footer-title">
                                <?php the_field('footer_title_2', 'option'); ?>
                            </h3>
                            <?php wp_nav_menu([
                                'theme_location' =>
                            'footer_menu_2', 'menu_id' => 'footer-menu']); ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="footer-list">
                            <h3 class="footer-title">
                                <?php the_field('footer_title_3', 'option'); ?>
                            </h3>
                            <?php wp_nav_menu([
                                'theme_location' =>
                            'footer_menu_3', 'menu_id' => 'footer-menu', ]); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copy">
                            <p class="prag text-center">
                                حقوق النشر محفوظه الي

                                <?php if( have_rows('copy_right', 'option') ): ?>
                                <?php while( have_rows('copy_right', 'option') ): the_row(); 	
									?>
                                <a
                                    href="<?php echo get_sub_field('copy_right_link') ?>"><?php echo get_sub_field('copy_right_name') ?></a>

                                <?php endwhile; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--           end footer-->









<?php wp_footer(); ?>

</body>

</html>