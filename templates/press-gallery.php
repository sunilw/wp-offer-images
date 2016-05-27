<?php
$args = array(
    'post_type' => 'press-images',
    'posts_per_page' => 8
) ;
$my_query = new WP_Query($args) ;
if ($my_query->have_posts()) :
            $count = 0 ;
$post_count = $my_query->post_count ;
$remaining = $post_count ;
?>
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

            <div class="image-row clearfix">

                <div class="preview-image-container <?php echo $oddeven  ?>"
                     data-remaining-posts="<?php echo $remaining  ?>"
                     data-total-posts="<?php echo $post_count  ?>"
                >
                    <div class="inner">
                        <a href="<?php echo types_render_field( 'image', array( "alt" => "#", "output" => "raw") ) ;?>" class="block-link"  target="_blank">
                            <?php echo types_render_field( 'image', array( "alt" => "#",  "size" => "han-preview-size" ) ) ;?>
                        </a>
                        <div class="caption-wrap">
                            <p style="color: #000 ;"><?php  echo types_render_field('caption')  ?></p>
                        </div>
                    </div>
                </div> <!-- ENDS .preview-image-container -->
                <?php $remaining--  ?>
                <?php
                if ( $oddeven == "even"  || $remaining = "0" ) { ?>

            </div>  <!-- ENDS .image-row -->
	    
                <?php  } ?>
		
        <?php endwhile; ?>
    </section> <!-- ENDS #...  -->
<?php endif; ?>
