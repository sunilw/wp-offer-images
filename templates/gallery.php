<?php
$args = array(
    'posts_per_page' => 8
) ;
$my_query = new WP_Query($args) ;

?>
<?php if ($my_query->have_posts()) : ?>
    <section id="dra-media-gallery">
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	    <article class="gallery-preview">		
		<p><a href="<?php echo get_permalink()  ?>">we have a hit</a></p>
	    </article>
	<?php endwhile; ?>
    </section> <!-- ENDS #...  -->
<?php endif; ?>
