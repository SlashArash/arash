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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53881969-2', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html> 