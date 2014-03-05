<?php require_once('header.php'); ?>

<div class="container">

	<div class="timeline">
		
		<div class="timeline__item">
			<h2 class="delta">Some intro text</h2>
			<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
		</div><!-- .timeline__item -->

		<div class="timeline__connector"></div>

		<div class="timeline__item timeline__item--narrow">
			<h2 class="delta">Some narrow text</h2>
			<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
		</div><!-- .timeline__item -->

		<div class="timeline__connector"></div>

		<div class="timeline__item letter">
			
			<div class="letter__intro">
				<div class="letter__meta">
					<p>
						<strong>From:</strong> Dutton
						<img class="letter__avatar" alt="Dutton" src="<?=SITE_IMAGES?>/avatar-dutton.jpg" />
					</p>
					<p>
						<strong>To: </strong> Cromwell
						<img class="letter__avatar" alt="Cromwell" src="<?=SITE_IMAGES?>/avatar-dutton.jpg" />
					</p>
					<p>
						<strong>Date: </strong> 14 November 1834
					</p>
				</div><!-- letter__meta -->
				<p>Intro text. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			</div><!-- letter__intro -->

			<div class="letter__previewer">
				<img class="letter__previewer__image" src="<?=SITE_IMAGES?>/letter-one.jpg" alt="Click to view original letter">
				<span class="letter__previewer__toggle js-letter__previewer__toggle / ss-zoomin"></span>
			</div><!-- .letter__image -->

			<div class="letter__text">
				Letter text... Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
			</div><!-- .letter__text -->

			<div class="letter__audio">
				<h4>Listen to this letter:</h4>
				<audio controls>
				  <source src="audio/letter1.ogg" type="audio/ogg">
				  <source src="audio/letter1.mp3" type="audio/mpeg">
					Your browser does not support audio playback of this letter. <a href="audio/letter1.mp3">Click here to download an mp3 version.</a>
				</audio>
			</div><!-- letter__audio -->

			<div class="letter__video">
				<h4>Hear from the expert:</h4>
				<div class="video-container">
					<iframe src="//player.vimeo.com/video/88231588?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<p><a href="http://vimeo.com/88231588">View "Historical context" on Vimeo</a></p>
			</div><!-- .letter__video -->

		</div><!-- .letter -->

	</div><!-- .timeline -->

</div><!-- .container -->

<?php require_once('footer.php'); ?>