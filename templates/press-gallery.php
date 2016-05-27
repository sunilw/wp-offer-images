<?php
$args = array(
    'post_type' => 'press-images',
    'posts_per_page' => 8
) ;
$my_query = new WP_Query($args) ;
 if ($my_query->have_posts()) : ?>
    <?php $count = 0 ;  ?>
    <section id="dra-gallery">
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	    <article class="preview-image-container"  data-count="<?php $count  ?>">
		<a href="<?php echo types_render_field( 'image', array( "alt" => "#", "output" => "raw") ) ;?>" class="block-link">		    
		    <?php echo types_render_field( 'image', array( "alt" => "#",  "size" => "han-preview-size" ) ) ;?>
		</a>		
	    </article>
	<?php endwhile; ?>
    </section> <!-- ENDS #...  -->
<?php endif; ?>
