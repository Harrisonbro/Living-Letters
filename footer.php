    <div class="container">
        <footer>
            &copy; <?php echo date("Y"); ?>. All rights reserved.
            Created by <a href="http://surupartners.com" target="_blank">Suru Partners</a>
        </footer>
    </div><!-- .container -->

    <script src="<?=SITE_JS?>/build/main.js"></script>

    <?php if ($config->environment == 'production') : ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-48612684-1', 'livingletters.co.uk');
            ga('send', 'pageview');
        </script>
    <?php else : ?>
        <!-- Environment: <?php echo $config->environment; ?> -->
    <?php endif; ?>

    </body>
</html>
