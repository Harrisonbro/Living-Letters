<footer>
	&copy; <?php echo date("Y"); ?> Ablos Media. All rights reserved.
</footer>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<?php if($config->environment == 'production') : ?>
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-48612684-1', 'livingletters.co.uk');
	  ga('send', 'pageview');
	</script>
	<?php endif; ?>
        
	</body>
</html>