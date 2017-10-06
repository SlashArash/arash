<?php get_header() ?>
		<main class="mv4">
			<?php if (have_posts() ) :
				while (have_posts() ) : the_post(); ?>
					<article class="pa4">
                        <h1 class="mh2 mb3 custom-gold">
							<?php the_title() ?>
                        </h1>
						<div class="meta mb3">asd
							<date><?php the_time('j F Y'); ?></date>
						</div>
                        <?php if ( has_post_thumbnail() ): ?>
                            <div class="thumb">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
						<div class="text lh-copy">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<h2><?php _e('Not Found', 'arash'); ?></h2>
			<?php endif ?>
		</main>
<?php get_footer() ?>