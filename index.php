<?php get_header(); ?>

	<div id="content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<div class="post">
			<?php if ( $user_ID ) : ?>
				<span style="float:right;"><?php edit_post_link(); ?> </span>
			<?php endif; ?>
			
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div id="post_header">
				<b>Posted on &nbsp;</b> <?php the_time('F jS, Y') ?> 
					<ul>
					 <li><?php the_category('</li><li>') ?></li>
					</ul>	
				</div>

			<?php the_content('Read the rest of this entry &raquo;'); ?>
				
			<p><?php the_tags("<b>Tags:</b> <span class='tag'>", "</span><span class='tag'>", "</span>"); ?></p>
			
	
			 <spam style="font-weight:600;"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
			
			 <hr/>
		</div>
		
		<?php comments_template(); ?>
		
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>