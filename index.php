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
				<h2 class="alpha">Letter</h2>
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
				<p class="letter__previewer__linktext">View the original letter</p>
			</a><!-- letter__previewer -->

			<div class="letter__text">
				&nbsp;&nbsp;&nbsp;Please it your 
				<span id="annotation-1" data-callout="#annotation-callout-1" class="annotation annotation-type--language">
					good mastership
				</span>
				my duty remember this to
				advertise you that I have taken the bodies of the abbot
				of Norton, Robert Jannyns, and the stranger a cunning 
				[Black]smith, [and] two of the said abbott’s servants. Also Randle Brereton,
				baron of the king’s exchequer of Chester, and John Hale
				of Chester, merchant, and have them in my custody and
				keeping / And the rest I intend to have as speedily as
				I can and to be with you with them
				<span id="annotation-2" data-callout="#annotation-callout-2" class="annotation annotation-type--character">
					(god willing)
				</span>
				in all
				convenient speed as I possibly may. Moreover I have
				caused dan Rondul [of] Wilmslow, the monk of the Vale
				Royal to come up to you / for whom I spoke unto your good
				mastership, which is a good religious man, discrete and 
				well-grounded in learning and hath many good qualities,
				most apt to be a master of a religious house than any
				other monk of that house. Wherefore it may please your good
				mastership to be his good master towards his preferment, [and] that
				he may be admitted master of the same
				<span id="annotation-3" data-callout="#annotation-callout-3" class="annotation annotation-type--history">
					And that [matter which] I
					did promise your mastership this said Moncke will accomplish
					accordingly.
				</span>
				Wherefore I beseech your mastership that this
				bearer and the said monk may report unto you
				from time to time to know your pleasure therein.
				Ensuring you what ye do for me or my friend all
				is your own, as knoweth our lord god who mercifully
				preserve you. [Written] At Dutton the 3rd day of August
				<br/>
				By yours, assured
				<br/>
				&nbsp;&nbsp;&nbsp;Perus.
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dutton K.

			</div><!-- .letter__text -->

			<div class="letter__video">
				<h4>Hear from the expert:</h4>
				<div class="video-container">
					<iframe src="//player.vimeo.com/video/88231588?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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

		<div class="timeline__connector"></div>

		<div class="timeline__item timeline__item--narrow">
			<h2 class="delta">Some narrow text</h2>
			<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
		</div><!-- .timeline__item -->

		<div class="timeline__connector timeline__connector--dashed timeline__connector--taller"></div>

		<div class="timeline__item">
			<h2 class="delta">2014...</h2>
			<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
		</div><!-- .timeline__item -->

	</div><!-- .timeline -->

	<div class="letter__annotations">
		<div data-annotation="#annotation-1" id="annotation-callout-1" class="annotation-callout">
			<p>Text for annotation 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio minus maxime explicabo earum adipisci perspiciatis dicta repellat fugit est in? <a href="#" data-modal="#example-annotation-modal" class="js-modal-toggle">Read more</a></p>
		</div>
		<div data-annotation="#annotation-2" id="annotation-callout-2" class="annotation-callout">
			<p>Text for annotation 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, animi, ipsum sapiente at a aut debitis provident vero corporis nam.</p>
		</div>
		<div data-annotation="#annotation-3" id="annotation-callout-3" class="annotation-callout">
			<p>Text for annotation 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, amet pariatur ducimus blanditiis provident totam saepe sequi reprehenderit dicta asperiores.</p>
		</div>
	</div><!-- .letter__annotations -->

</div><!-- .container -->

<div class="type-selector">
	Show annotations only about:
	<ul class="type-selector__options">
		<li><button class="type-selector__option js-type-toggle" data-toggle="annotation-type--language">Language</button></li>
		<li><button class="type-selector__option js-type-toggle" data-toggle="annotation-type--history">History</button></li>
		<li><button class="type-selector__option js-type-toggle" data-toggle="annotation-type--character">Characters</button></li>
	</ul>
</div><!-- #annotation-type-selector -->

<div id="letter-one-preview" class="modal modal--image">
	<p><a href="<?=SITE_IMAGES?>/letter-one.jpg">View image fullsize</a></p>
	<img src="<?=SITE_IMAGES?>/letter-one.jpg">
	<p><a href="<?=SITE_IMAGES?>/letter-one.jpg">View image fullsize</a></p>
	<a class="close-modal" rel="modal:close"></a>
</div>

<div id="example-annotation-modal" class="modal">
	<div class="left">
		<h4>Hear from the expert:</h4>
		<div class="video-container">
			<iframe src="//player.vimeo.com/video/88231588?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>
	<div class="right">
		<p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	</div>
	<a class="close-modal" rel="modal:close"></a>
</div>

<?php require_once('footer.php'); ?>