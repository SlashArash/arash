		<footer class="bt b--black-20 pv4">
			<div class="tc f3">
				<?php
                $social_urls = get_option("sa_social_urls");
				foreach ($social_urls as $key => $val) {
                    if (!empty($val)) {
                        echo "<a href='$val' class=\"link black-80 hover-custom-gold mh2\"><i class=\"fontello icon-$key dib\"></i></a>";
                    }
				}
				?>
                <p class="f6 black-30 mt4"><?php echo get_option("sa_copyrights") ?></p>
            </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
</body>
</html> 