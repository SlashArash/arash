<?php
/*
Template Name: Archives
*/
get_header(); ?>
<main class="mv4">
    <?php if (have_posts() ) :
		while (have_posts() ) : the_post(); ?>
			<article class="pv4">
				<h2 class="mh2 mb3">
					<a class="link underline custom-gold hover-black-60 no-underline-hover" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
						<?php the_title() ?>
					</a>
				</h2>
			</article>
		<?php endwhile; ?>
	<?php endif ?>
	<div class="bt b--black-20 flex-ns justify-around f4 lh-copy">
    	<div class="archive">
    		<h2 class="custom-gold">آرشیو بر اساس زمان:</h2>
    		<ul>
    			<?php wp_get_jarchives('type=monthly'); ?>
    		</ul>
    	</div>
    	<div class="archive">	
    		<h2 class="custom-gold">آرشیو بر اساس موضوع:</h2>
    		<ul>
    			 <?php wp_list_categories( array('title_li' => false) ); ?>
    		</ul>
    	</div>
	</div>

</main>

<?php get_footer(); ?>