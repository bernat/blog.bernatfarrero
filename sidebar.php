	<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Sidebar') ) : ?>
	
				<div id="search_form">
								<form method="get" id="searchform" action="http://blog.bernatfarrero.com">
										<p class="srch submit">
											<input type="text" class="srch-txt" value="Search" onclick='this.value = "";' name="s" id="s" size="30" />
											<input type="submit" class="SE5_btn" id="searchsubmit" style="visibility:hidden; padding: 5px;" value="Search" />
										</p>
				</form>
		</div>
		<div class="block">
			<img src="/wp-content/uploads/2009/11/jo3.png" alt="Myself" style="padding-bottom:2px"/>
			<p class="miniabout">"I’m a half-time student in the fifth year of Computer Engineering in the Facultat d’Informàtica de Barcelona (FIB) of the Universitat Politècnica de Catalunya (UPC), and part-time developer in Itnig..." <a href="/?page_id=2">(more)</a></p>
		</div>
<hr class="mini">
		<div class="block">
			<h3>Recent Posts</h3>
				<?php query_posts('showposts=5'); ?>
				<ul>
					<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
					<?php endwhile;?>
				</ul>
		</div>
		
		<div class="block">
			<h3>Archives</h3>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
		</div>
		
		<div class="block">
			<h3>Categories</h3>
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
		</div>
		
		<div class="block">
			<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&category_before=&category_after='); ?>
		</div>
		
		<div class="block">
			<br />
				<a title="Recommend me on WWRails" style="border:none;" href="http://www.workingwithrails.com/person/18530-bernat-farrero"><img alt="WWR Logo" src="http://share.bernatfarrero.com/wwrails.png" /></a>
				<a title="RSS Feed" style="border:none;" href="http://feeds.feedburner.com/bernatfarrero"><img alt="caganer rss" src="http://blog.bernatfarrero.com/images/rss.png" /></a>	

				<br />					<br />
				
				<form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=bernatfarrero', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Subscribe by email:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="bernatfarrero" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /><p style="font-size:7pt;"><a href="http://feedburner.google.com" target="_blank">by FeedBurner</a></p></form>	
				
		</div>	
	<?php endif; ?>
	<div class="block">
	  
		<br />
		<a title="Semantic Podcast" href="http://semantic.cat"><img src="http://semantic.cat/images/logosemantic.png" alt="semantic podcast logo" style="width: 225px;" / ></a>		
		<br />
		<h3>Photography</h3>
		<br />
			<!-- Start of Flickr Badge -->
			<table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="10" border="0"><tr><td><table cellpadding="0" cellspacing="10" border="0" id="flickr_badge_wrapper">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=v&source=user&user=41319594%40N00"></script>
			</table>
			</td></tr></table>
			<!-- End of Flickr Badge -->
			<a class="small" href="http://www.flickr.com/photos/dberni">See more on my Flickr</a>
	</div>
	</div>
