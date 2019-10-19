<?php /* Template Name: Front Page */ 

wp_enqueue_script('slick');


add_action('wp_footer', 'san_scripts', 21);

function san_scripts() {
        
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.slider-section').slick();
    });
  </script>


<?php } ?>
<?php get_header(); ?>
        
<div class="home-container">
    <div class="sectionbanner">
    	<div class="slider-section">
    <?php
    $args = array(
    'post_type' => 'sliders', 
    'posts_per_page' => '3',
    'order_by' => 'date', 
    'order' => 'ASC'
    );
    $new_query = new WP_Query ($args);
    if ($new_query->have_posts()) {
        while($new_query->have_posts()){
            $new_query->the_post();
            ?>
			<div class="single-item">
				<div><?php the_post_thumbnail('thumbnail'); ?></div>
				<div><?php the_content(); ?></div>
			</div>
            <?php
        }
    }
    wp_reset_postdata();
    ?> 
    </div>                    
    </div>
    <!-- SECTION TWO -->
    <div class="row section-two" >
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-6">
            <div class="section-two-title">
                <h3><?php the_field('section_two_title'); ?></h3>
            </div>
            <div class="section-two-description">
                <p><?php the_field('section_two_description'); ?></p>
            </div>
            <div class="secn-two-readmore">
                <button class="section-two-readmore">READ MORE</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="section-two-image">
                <img src="<?php the_field('section_two_image'); ?>" class="section-image"/>
            </div>
        </div>
    <?php endwhile;?>
    </div>
</div>






<?php //get_sidebar(); ?>
<?php get_footer(); ?>