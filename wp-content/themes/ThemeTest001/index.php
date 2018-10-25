<?php get_header(); ?>

	
	<?php

		//echo "start if...";

		if( have_posts() ):

			//echo "start while...";
			while( have_posts() ): the_post(); ?>



				<h3><?php the_title(); ?></h3> 

				<p><?php the_content(); ?></p> 

			<?php endwhile;
			
		endif;

	?>


<?php get_footer(); ?>