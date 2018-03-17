<?php
/**
 * ACF Repeater usage example
 */

if ( have_rows( 'blocks' ) ):
	while ( have_rows( 'blocks' ) ): the_row(); ?>
        <img src="<?php the_sub_field( 'image' ) ?>">
        <h3><?php the_sub_field( 'text' ) ?></h3>
	<?php
	endwhile;
endif;