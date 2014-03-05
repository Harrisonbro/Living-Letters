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

			<a href="<?=SITE_IMAGES?>/letter-one.jpg" class="letter__previewer js-modal-toggle" data-modal="#letter-one-preview">
				<img class="letter__previewer__image" src="<?=SITE_IMAGES?>/letter-one.jpg" alt="Click to view original letter">
				<span class="letter__previewer__toggle / ss-zoomin"></span>
			</a><!-- letter__previewer -->

			<div class="letter__text">
				Letter text... Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, 
				<span id="annotation-1" data-callout="#annotation-callout-1" class="annotation annotation-type--language">
					consectetur
				</span>
				adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.
				<span id="annotation-2" data-callout="#annotation-callout-2" class="annotation annotation-type--character">
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
				</span>
				sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris 
				<span id="annotation-3" data-callout="#annotation-callout-3" class="annotation annotation-type--history">
					condimentum nibh
				</span>
				, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
			</div><!-- .letter__text -->

			<div class="letter__video">
				<h4>Hear from the expert:</h4>
				<div class="video-container">
					<!-- <iframe src="//player.vimeo.com/video/88231588?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
				</div>
				<p><a href="http://vimeo.com/88231588">View "Historical context" on Vimeo</a></p>
			</div><!-- .letter__video -->

			<div class="letter__audio">
				<h4>Listen to this letter:</h4>
				<audio controls>
				  <source src="audio/letter1.ogg" type="audio/ogg">
				  <source src="audio/letter1.mp3" type="audio/mpeg">
					Your browser does not support audio playback of this letter. <a href="audio/letter1.mp3">Click here to download an mp3 version.</a>
				</audio>
			</div><!-- letter__audio -->

		</div><!-- .letter -->

	</div><!-- .timeline -->

	<div class="letter__annotations">
		<div data-annotation="#annotation-1" id="annotation-callout-1" class="annotation-callout">
			<p>Text for annotation 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio minus maxime explicabo earum adipisci perspiciatis dicta repellat fugit est in?</p>
		</div>
		<div data-annotation="#annotation-2" id="annotation-callout-2" class="annotation-callout">
			<p>Text for annotation 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, animi, ipsum sapiente at a aut debitis provident vero corporis nam.</p>
		</div>
		<div data-annotation="#annotation-3" id="annotation-callout-3" class="annotation-callout">
			<p>Text for annotation 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, amet pariatur ducimus blanditiis provident totam saepe sequi reprehenderit dicta asperiores.</p>
		</div>
	</div><!-- .letter__annotations -->

</div><!-- .container -->

<div id="letter-one-preview" class="modal modal--image">
	<p><a href="<?=SITE_IMAGES?>/letter-one.jpg">View image fullsize</a></p>
	<img src="<?=SITE_IMAGES?>/letter-one.jpg">
	<p><a href="<?=SITE_IMAGES?>/letter-one.jpg">View image fullsize</a></p>
	<a class="close-modal" rel="modal:close"></a>
</div>

<?php require_once('footer.php'); ?>