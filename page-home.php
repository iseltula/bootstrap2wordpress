<?php
/*
    Template Name: Home Page
 */
get_header(); ?>

    <?php get_template_part('content','hero');?>

    <?php get_template_part('content','optin');?>

    <?php get_template_part('content','income');?>

    <?php get_template_part('content','benefit');?>

    <?php get_template_part('content','course');?>

    <?php get_template_part('content', 'pfeatures');?>
    
    <?php get_template_part('content', 'featurette');?>
                        
    <?php get_template_part('content', 'instructor');?>

    <?php get_template_part('content','testimonials');?>

<?php get_footer();