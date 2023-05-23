<?php /* Template Name: About Us Page */ ?>
<?php 
get_header();
?>

<div class="inner-page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">
                    <?php the_title();  ?>
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="about-intro-section">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6">
                <h3 class="intro-title">
                    <?php the_field("intro_section_title"); ?>
                    <span>
                        <?php the_field("intro_section_title_color"); ?>
                    </span>
                </h3>
                <p class="parg">
                    <?php the_field("intro_section_paragraph"); ?>
                </p>
                <div class="mission-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mission-box">
                                <div class="mission-icon-box">
                                    <img src="<?php the_field("mission_icon"); ?>" alt="img" class="img-fluid">
                                    <h4 class="title">
                                        <?php the_field("mission_title"); ?>
                                    </h4>
                                </div>
                                <p class="parg">
                                    <?php the_field("mission_paragraph"); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mission-box">
                                <div class="mission-icon-box">
                                    <img src="        <?php the_field("vision_icon"); ?>" alt="img" class="img-fluid">
                                    <h4 class="title">
                                        <?php the_field("vision_title"); ?>
                                    </h4>
                                </div>
                                <p class="parg">
                                    <?php the_field("vision_paragraph"); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 p-0 m-0">
                <div class="intro-img text-end">
                    <img src="<?php the_field("intro_image") ?>" alt="intro_image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>


<?php  if( have_rows('timeline_loop') ):  ?>
<div class="timeline-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <?php
                       
                            while( have_rows('timeline_loop') ) : the_row();
                        ?>
            <div class="col-md-3">
                <div class="timeline-box">
                    <h4 class="number-item"><?php the_sub_field("number") ?></h4>
                    <h5 class="name-item"><?php the_sub_field("name") ?></h5>
                </div>
            </div>
            <?php 
                        endwhile;
                 
                    ?>
        </div>
    </div>
</div>
<?php 
         
                        endif;
                    ?>


<div class="about-logo-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4">
                <div class="logo-box">
                    <img src=" <?php the_field("logo_section_image"); ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="logo-content">
                    <div class="title-box no-after text-start">
                        <h3 class="title">
                            <?php the_field("logo_section_title"); ?>
                        </h3>
                    </div>
                    <p class="parg">
                        <?php the_field("logo_section_paragraph"); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>