<?php get_header(); ?>
<main>
<div class="container">
<?php 
	
	if( have_posts() ):
		
		while( have_posts() ):  ?>

<div class="col-sm-4">	
<?php

 the_post();

 get_template_part('content', get_post_format()); 


 ?>
</div>
		<?php endwhile;
		
	endif;
			
	?>






</div>
</main>

<?php get_footer(); ?>