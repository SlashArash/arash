<?php get_header() ?>
		<main class="mv4">
			<?php if (have_posts() ) :
				while (have_posts() ) : the_post(); ?>
					<article class="pa4">
						<h1 class="mh2 mb3">
							<a class="link underline custom-gold hover-black-50 no-underline-hover" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
								<?php the_title() ?>
							</a>
						</h1>
						<div class="meta mb3">
							<date><?php the_time('j F Y'); ?></date>
                                                        <span class="category"> - <?php the_category( '، ' ); ?></span>
						</div>

                    <?php if ( has_post_thumbnail() ): ?>
                        <div class="thumb">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

						<div class="text lh-copy">
							<?php the_content('<b>ادامه نوشته &#8668;</b>'); ?>
						</div>
					</article>
				<?php endwhile; ?>
                    <section class="paginate tc b mv4">
                        <?php posts_nav_link( ' &#215; ', __('Next Entries', 'arash'), __('Previous Entries', 'arash') ); ?>
                    </section>
			<?php else : ?>
				<h2><?php _e('Not Found', 'arash'); ?></h2>
			<?php endif ?>
		</main>
<?php get_footer() ?>