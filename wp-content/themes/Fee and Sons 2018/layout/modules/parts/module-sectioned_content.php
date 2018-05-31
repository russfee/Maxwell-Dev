<?php // MODULE - SECTIONED CONTENT ?>
			
			<div class="row" style="<?php the_sub_field('row_padding_top'); ?><?php the_sub_field('row_padding_bottom'); ?>">

<?php if(get_sub_field('sectioned_content_repeater')): ?>
				
				
					<?php while(has_sub_field('sectioned_content_repeater')): ?>
	<div class="sectioned-content-container">
		<div class="sectioned-image" style="background-image: url(<?php the_sub_field('sectioned_image'); ?>)"></div> <!--sectioned-image-->
		<h3 style="padding: 20px 0 0 40px;"><?php the_sub_field('sectioned_title'); ?></h3>
		<div style="margin: 40px;"><?php the_sub_field('sectioned_paragraph'); ?></div>
	</div> <!--news-story-container-->
					<?php endwhile; ?>
				<?php endif; ?>

			</div> <!--row-->
