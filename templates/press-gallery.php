<?php
$args = array(
    'post_type' => 'press-images',
    'posts_per_page' => 8
) ;
$my_query = new WP_Query($args) ;
 if ($my_query->have_posts()) : ?>
    <?php $count = 0 ;  ?>
    <section id="dra-press-gallery" class="clearfix">
	<?php while ($my_query->have_posts()) : $my_query->the_post(); 
	$count++ ;	
	$oddeven = '' ;
	if ($count % 2 == 0) {
	    $oddeven = "even" ;	    
	} else {
	    $oddeven = "odd";
	}
	?>
	    
	    <div class="preview-image-container <?php echo $oddeven  ?>">
		<div class="inner">
		<a href="<?php echo types_render_field( 'image', array( "alt" => "#", "output" => "raw") ) ;?>" class="block-link"  target="_blank">
		    <?php echo types_render_field( 'image', array( "alt" => "#",  "size" => "han-preview-size" ) ) ;?>
		</a>
		<div class="caption-wrap">
		    <p style="color: #000 ;">in caption wrap</p>
		</div>
		</div>
	    </div>
	<?php endwhile; ?>
    </section> <!-- ENDS #...  -->
<?php endif; ?>
