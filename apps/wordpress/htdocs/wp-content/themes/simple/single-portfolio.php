<?php get_header(); ?>
   
   <div class="page-title">
     <div class="container clearfix">
       
       <div class="sixteen columns"> 
         <h1><?php the_title(); ?></h1>
       </div>
       
     </div><!-- End Container -->
   </div><!-- End Page title -->
   
   <!-- Start main content -->
   <div class="container main-content clearfix">
    
    <!-- Project Image -->
     <div class="twelve columns top-1 bottom-3">
       
     <?php 
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail();
      } 
      ?>
      <?php the_content(); ?>
     </div>

   <!-- End column -->
   
   <!-- Start Project Details -->
   <div class="four columns top-1 bottom-3">
   
     <h3 class="title">Project Details</h3>
     
     <div class="about-project bottom-2">
       <p><?php echo vp_metabox('portfolio_option.portfolio_desc'); ?></p>
     </div>
     
     <div class="clearfix"></div>
      
   <?php if(vp_metabox('portfolio_option.portfolio_link') != '' && vp_metabox('portfolio_option.portfolio_link') != 'http://' ){ ?>
      <a href="<?php echo vp_metabox('portfolio_option.portfolio_link'); ?>" class="button medium color bottom-3" target="_blank">
      Launch Project
      </a>
   <?php } ?>
      
      <div class="clearfix"></div>
      
      <h3 class="title bottom-1">Share</h3>
      
      <div class="share-social">
	  <?php if( vp_metabox('portfolio_option.portfolio_twitter') != "http://" && vp_metabox('portfolio_option.portfolio_twitter') != '' ){ ?>
      <a href="<?php echo vp_metabox('portfolio_option.portfolio_twitter'); ?>" target="_blank">
      <i class="social_icon-twitter s-17 white"></i>
      </a>
      <?php } ?>
      
      <?php if( vp_metabox('portfolio_option.portfolio_facebook') != "http://" && vp_metabox('portfolio_option.portfolio_facebook') != ''){ ?>
      <a href="<?php echo vp_metabox('portfolio_option.portfolio_facebook'); ?>" target="_blank">
      <i class="social_icon-facebook s-18 white"></i>
      </a>
      <?php } ?>
      
      <?php if( vp_metabox('portfolio_option.portfolio_googleplus') != "http://" && vp_metabox('portfolio_option.portfolio_googleplus') != ''){ ?>
      <a href="<?php echo vp_metabox('portfolio_option.portfolio_googleplus'); ?>" target="_blank">
      <i class="social_icon-gplus s-18 white"></i>
      </a>
      <?php } ?>
      
      <?php if( vp_metabox('portfolio_option.portfolio_pinterest') != "http://" && vp_metabox('portfolio_option.portfolio_pinterest') != ''){ ?>
      <a href="<?php echo vp_metabox('portfolio_option.portfolio_pinterest'); ?>" target="_blank">
      <i class="social_icon-pinterest s-18 white"></i>
      </a>
      <?php } ?>
      </div>
   
   </div>
   <!-- End Project Details -->
   
   
   
   
   
   
   <div class="sixteen columns clearfix"><hr class="line bottom-3"></div><!-- End line -->
   
   <div class="sixteen columns bottom-2">
   <h3 class="title">Other Projects</h3>
   </div>
   
   <div class="clearfix"></div>
   
   <div class="recent-work bottom-3">
   
   		 <?php 
   		 $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'post_type' => 'portfolio', 'exclude' => get_the_ID() );
		 $postslist = get_posts( $args );
		 foreach ($postslist as $post) :  setup_postdata($post);
		 
		$terms = get_the_terms( $post->ID, 'portfolio' );					
		if ( $terms && ! is_wp_error( $terms ) ) : 
			$term_links = array();
		foreach ( $terms as $term ) {
			$term_links[] = $term->name;
				}					
			$the_term = join( " ", $term_links );
			$the_term_separated = join( ", ", $term_links );
		 ?>
   		 
         <?php if( has_post_thumbnail() ){ ?>
         <!-- Start item -->
          <div class="one-third column item Photography Animation" data-categories="Web Photography">
            <a href="<?php echo get_permalink(); ?>">
              <?php the_post_thumbnail('portfolio-thumb', array( 'class'=>'pic' ) ); ?>
              <div class="img-caption">
              <div class="desc"><h3><?php the_title(); ?></h3><p><?php echo $the_term_separated; ?></p><span>+</span></div>
              </div><!-- hover effect -->
              </a>
          </div>
          <!-- End Item -->
          <?php } ?>
   
   		<?php endif; ?> 
   		<?php wp_reset_query(); endforeach; ?>
   
   </div><!-- End related projects -->
   
   
   
    
   </div><!-- <<< End Container >>> -->
   
<?php get_footer(); ?>