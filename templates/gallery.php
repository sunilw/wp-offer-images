<?php
$args = array(
    'post_type'  => 'post',
    'posts_per_page' => 8
) ;

$my_query = new WP_Query($args) ;

if ($my_query->have_posts()) : ?>
    <section id="dra-gallery">
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article class="gallery-preview">
                <p><?php the_content()  ?></p>
            </article>
        <?php endwhile; ?>
    </section> <!-- ENDS #...  -->
<?php endif;
wp_reset_postdata();
return ;
?>
