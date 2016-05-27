<?php
$args = array(
    'post_type' => 'press-images',
    'posts_per_page' => 8
) ;
$my_query = new WP_Query($args) ;

?>
<?php if ($my_query->have_posts()) : ?>
    <section id="dra-gallery">
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	    <article class="preview-image-container">
		<a href="<?php echo types_render_field( 'image', array( "alt" => "#", "output" => "raw") ) ;?>" class="block-link">
		    
		    <?php echo types_render_field( 'image', array( "alt" => "#",  "size" => "large" ) ) ;?>
		</a>		
	    </article>
	<?php endwhile; ?>
    </section> <!-- ENDS #...  -->
<?php endif; ?>
