<?php /* Template Name: Custom Homepage */ ?>
<?php get_header(); ?>
<!-- Header Image -->
<div class="width-wrap img-bg clearfix" style="background-image:url('<?php 
    if( vp_metabox('page_option.page_header_image') != '' ){
    echo vp_metabox('page_option.page_header_image');
    }else{
    echo vp_option('default_header');
    }
    ?>');">
</div>
<!-- End Header Image -->
<?php while (have_posts()) : the_post();
the_content();
endwhile; ?>
   
<?php get_footer(); ?>