<?php
/**
 * ACF Flexible Content usage example
 */

if ( have_rows( 'home_blocks' ) ):
	while ( have_rows( 'home_blocks' ) ) : the_row();
		$current_layout = get_row_layout();
		get_template_part( "template-parts/home/{$current_layout}" );
	endwhile;
endif;