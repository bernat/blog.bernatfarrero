<?php get_header(); ?>
<div class="row">
<div class="column grid_9" id="content">
  <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		  <div class="post">
			<?php if ( $user_ID ) : ?>
				<span style="float:right;"><?php edit_post_link(); ?> </span>
			<?php endif; ?>

			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

			<div class="post_header">
				<b>Posted on &nbsp;</b> <?php the_time('F jS, Y') ?> 
					<ul>
					 <li class="tagcategory"><?php the_category('</li><li class="tagcategory">') ?></li>
					</ul>	
				</div>

			<?php the_content('Read the rest of this entry &raquo;'); ?>

			<p><?php the_tags("<b>Tags:</b> <span class='tagpost'>", "</span><span class='tagpost'>", "</span>"); ?></p>

			 <span style="font-weight:600;"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>

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
	<div class="column grid_3">
<?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
</div>