
	</div>
	<footer class="footer w-100 bg-dark pt-3 pb-3">
		<div class="container">
			<div class="row border-top-dark">

				<div class="col-8 offset-2 offset-md-4 col-md-4 logo mt-4 mb-4 pt-1 pb-1 px-5 my-auto">
	        <a href="<?php echo home_url(); ?>">
	          <img src="<?php echo get_template_directory_uri() . '/img/reverse_logo.png'; ?>" title="<?php bloginfo( 'name' ); ?>" />
	        </a>
	      </div>
				<div class="col-12 my-md-auto my-4">
					<?php mindblank_nav('footer-menu'); ?>
				</div>

				<div class="col-12 text-center mt-1 py-1 copyright">
					<p class="mb-0 text-white small muted">City of Santa Fe  <i class="fal fa-copyright"></i> <?php echo date('Y'); ?></p>
				</div>
			</div>

		</div>
	</footer>
	<div class="container mindshare-credit my-4">
		<div class="row text-center">
			<span><small class="faded tag-header">Website and Communication By</small></span>
			<div class="col-6 offset-0 offset-md-4 col-md-2 my-auto text-center">
				<a href="https://mind.sh/are" title="Mindshare Labs, Inc" class="">
					<img src="<?php echo get_template_directory_uri() . '/img/mindshare.svg'; ?>" title="Hand Crafted by Mindshare Labs, Inc" alt="Mindshare Labs, Inc">
				</a>
			</div>
			<div class="col-6 offset-0 col-md-2 my-auto text-center">
				<a href="https://pkpublicrelations.com/" title="PK Public Relations" class="">
					<img src="<?php echo get_template_directory_uri() . '/img/pkpr-logo.svg'; ?>" title="PK Public Relations" alt="PK Public Relations">
				</a>
			</div>



			</div>
		</div>



		<?php wp_footer(); ?>

	</body>
</html>
